<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function create(){
        $titre = "Index";
        return \view('auth/index')->with('title',$titre);
    }
}
