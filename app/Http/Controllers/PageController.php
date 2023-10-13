<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{ public function index()
    {
        // Recupera tutti i film dal database
        $movies = Movie::all();

        // Passa i film alla view
        return view('movies', ['movies' => $movies]);
    }
}
