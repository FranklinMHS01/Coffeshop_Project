<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showLogin()
    {
        return view('login');
    }
    public function logout()
    {
        session()->flush();
        return redirect()->route('login');
    }
    public function login(Request $request)
    {
        // Validate the request input
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Fetch users from the database
        $select = DB::select("SELECT * FROM tb_users");

        foreach ($select as $item) {
            try {
                // Decrypt the password
                $decryptedPassword = Crypt::decrypt($item->password);

                // Check if decrypted password and username match the request input
                if ($decryptedPassword == $request->password && $item->username == $request->username) {
                    // Store user-related data in the session
                    Session::put('username', $item->username);
                    Session::put('level', $item->level);

                    // Redirect to the desired route
                    if ($item->level == '1') {
                        return redirect()->route('user.index');
                    } else {
                        return redirect()->route('menu.index');
                    }
                }
            } catch (\Exception $e) {
                // Handle decryption error, if any
                return redirect()->back()->withErrors(['login' => 'There was an error decrypting the password.']);
            }
        }

        // If login fails, redirect back with an error message
        return redirect()->back()->withErrors(['login' => 'Invalid credentials.']);
    }

    public function index()
    {

        $username_session = Session::get('username');
        $level_session = Session::get('level');

        Session::put('username', $username_session);
        Session::put('level', $level_session);

        $no = 1;
        $levels = DB::table('tb_level')->orderBy('nama_level', 'ASC')->get();
        $user = DB::table('tb_users')
            ->join('tb_level', 'tb_users.level', '=', 'tb_level.id_level')
            ->orderBy('tb_users.username', 'ASC')
            ->select('tb_users.*', 'tb_level.nama_level')
            ->get();
        return view("admin.user", compact('user', 'no', 'username_session', 'level_session', 'levels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'username' => $request->username,
            'password' => Crypt::encrypt($request->password),
            'level' => $request->level,
        ];
        User::create($data);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_user)
    {
        $data = [
            'username' => $request->username,
            'password' => Crypt::encrypt($request->password),
            'level' => $request->level,
        ];

        $query = User::find($id_user);
        $query->update($data);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_user)
    {
        $query = User::find($id_user);
        $query->delete();
        return redirect()->back();
    }
}