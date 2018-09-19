<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\appNavbar;
use App\appCurso;
use App\Http\Requests;

class PrincipalController extends Controller
{
    public function index()
    {
        $appNavs       = DB::table('app_navbars')->first();

        $appCursos       = appCurso::orderBy('tbl_categoria', 'asc')->get();

        return view('principal.index',[
            'appNavs'      => $appNavs
        ], compact('appCursos'));
    }
}
