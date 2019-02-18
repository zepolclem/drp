<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MotorisationController extends Controller
{
    public function index()
    {
        $motorisations=\App\Motorisation::all();
        return view('home',compact('motorisations'));
    }
}
