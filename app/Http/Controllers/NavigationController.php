<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class NavigationController extends Controller
{
    public function home()
    {
        return view('customer.home');
    }

    public function allmenu()
    {
        $no = 1;
        $menu = DB::table('tb_menus')->orderBy('jenis_menu', 'DESC')->get();
        return view("customer.allmenu", compact('menu', 'no'));
    }

    public function about()
    {
        return view("customer.about");
    }

    public function contact()
    {
        return view("customer.about");
    }
}
