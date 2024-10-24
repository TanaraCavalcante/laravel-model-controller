<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoviesController extends Controller
{
    //metodos para gestir a route
    public function index(){
        return view("movies.index");
    }


}