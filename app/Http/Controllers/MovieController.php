<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;



class MovieController extends Controller
{
    public function index ()
    {
        $results = DB::select('SELECT * FROM `movies`');
        // var_dump($results);

        return $results;
    }

    public function show ()
    {
        $id = $_GET['id'];
        $results = DB::select("SELECT * FROM `movies` WHERE `id`= ? ", [$id]);
        return $results[0]->name;
    }

    public function store () {

        DB::insert('INSERT into `movies` (`name`, `year`, `poster_url`, `rating`) 
            VALUES ("Mikes movie", 2021, "xyz", 95)');

    }
}
