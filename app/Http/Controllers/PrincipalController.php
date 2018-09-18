<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\appNavbar;
use App\Http\Requests;

class PrincipalController extends Controller
{
    public function index()
    {
        $appNavs       = DB::table('app_navbars')->first();


        return view('principal.index',[
            'appNavs'      => $appNavs
        ]);
    }
}
