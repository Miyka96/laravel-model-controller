<?php

namespace App\Http\Controllers;
use app\models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(){
        $movies= Movie::all();
        return view('welcome', compact('movies'));
    }
}
