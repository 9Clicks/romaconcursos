<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\appConfig;
use App\appNavbar;
use App\appCurso;
use App\appDetalhe;
use App\Http\Requests;

class PrincipalController extends Controller
{
    public function index()
    {
        $appConfigs      = DB::table('app_configs')->first();
        $appNavs         = DB::table('app_navbars')->first();
        $appDetalhes     = DB::table('app_detalhes')->first();

        $appCursos       = appCurso::orderBy('tbl_categoria', 'asc')->get();

        return view('principal.index',[
            'appConfigs'     => $appConfigs,
            'appNavs'        => $appNavs,
            'appDetalhes'    => $appDetalhes

        ], compact('appCursos'));
    }
}
