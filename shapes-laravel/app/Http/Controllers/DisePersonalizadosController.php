<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisePersonalizadosController extends Controller
{
    public function index()
    {
        return view('personalizados');
    }
}
