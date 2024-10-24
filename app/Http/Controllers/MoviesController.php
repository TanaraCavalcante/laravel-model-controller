<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    //metodos para gestir a route
    public function index(){

        $movies = Movie::all();
        dd($movies);
        return view("movies.index");
    }

}