<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccueilController extends Controller
{
    public function create(){
        $titre = "Accueil";
        return \view('accueil')->with('title',$titre);
    }
}
