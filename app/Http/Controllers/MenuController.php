<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Menu;
use DB;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $username_session = Session::get('username');
        $level_session = Session::get('level');

        Session::put('username', $username_session);
        Session::put('level', $level_session);

        $no = 1;
        $menu = DB::table('tb_menus')->orderBy('jenis_menu', 'DESC')->get();
        return view("admin.menu", compact('menu', 'no', 'level_session', 'username_session'));
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
        if ($request->has('img_menu')) {
            $file = $request->file('img_menu');
            $extension = $file->getClientOriginalName();
            $filename = $extension;

            $path = 'css/data_image/';
            $file->move($path, $filename);
            $locationfile = $path . $filename;
        } else {
            $locationfile = null;
        }

        $data = [
            'nama_menu' => $request->nama_menu,
            'jenis_menu' => $request->jenis_menu,
            'quantity' => $request->quantity,
            'harga' => $request->harga,
            'img_menu' => $locationfile,
        ];

        Menu::create($data);
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
    public function update(Request $request, string $id_menu)
    {
        if ($request->has('img_menu')) {
            $file = $request->file('img_menu');
            $extension = $file->getClientOriginalName();
            $filename = $extension;

            $path = 'css/data_image/';
            $file->move($path, $filename);
            $locationfile = $path . $filename;
        } else {
            $locationfile = null;
        }
        $data = [
            'nama_menu' => $request->nama_menu,
            'jenis_menu' => $request->jenis_menu,
            'quantity' => $request->quantity,
            'harga' => $request->harga,
            'img_menu' => $locationfile,
        ];

        $query = Menu::find($id_menu);
        $query->update($data);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_menu)
    {
        $query = Menu::find($id_menu);
        $query->delete();
        return redirect()->back();
    }


}