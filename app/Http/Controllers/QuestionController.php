<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function create(){
        $titre = "Question";
        return \view('question')->with('title',$titre);
    }
}
