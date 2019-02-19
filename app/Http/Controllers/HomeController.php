<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
        $modeles=\App\Modele::all();
        $motorisations=\App\Motorisation::all();
        $constructeurs=\App\Constructeur::all();
        return view('home',compact('motorisations', 'modeles', 'constructeurs'));
    }
}
