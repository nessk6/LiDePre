<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InscriptionController extends Controller
{
    public function create(){
        $titre = "Inscription";
        return view('auth/inscription')->with('title',$titre);
    }
}
