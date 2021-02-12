<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class BetterMovieController extends Controller
{
    public function index ()
    {
       
        // $results = DB::table('movies')->get();
        
        $minIndex = 998;
        $results = DB::table('movies')->where('id', '>', $minIndex)->get();
        return $results;
    }

    public function show ()
    {
        $id = $_GET['id'];

        // $movie = DB::table('movies')->where('id', '=', $id)->get();
        // return $movie[0]->name;

        // $movie = DB::table('movies')->where('id', '=', $id)->first();
        // return $movie->name;

        // $movie = DB::table('movies')->where('id', $id)->first();
        // return $movie->name;

        $movie = DB::table('movies')->find($id);  //// ONLY works by primary key
        return $movie->name;

        
    }

}
