<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PrincipalController extends Controller
{
    public function index()
    {
        return view('principal.index');
    }
}