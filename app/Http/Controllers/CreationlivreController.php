<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreationlivreController extends Controller
{
    public function create(){
        $titre = "Creation livre";
        return \view('creationlivre')->with('title',$titre);
    }
}
