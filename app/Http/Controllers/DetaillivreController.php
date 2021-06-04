<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetaillivreController extends Controller
{
    public function create(){
        $titre = "Detail livre";
        return \view('detaillivre')->with('title',$titre);
    }
}
