<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompraModelController extends Controller
{
    public function compra($id)
    {
        $prospect = \App\Models\Prospect::findOrFail($id);

        return view('compra',compact('prospect'));
    }
}
