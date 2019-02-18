<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModeleController extends Controller
{
    public function index()
    {
        $modeles=\App\Modele::all();
        return view('home',compact('modeles'));
    }
}
