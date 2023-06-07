<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index() {
        $movies = Movie::orderBy('vote', 'desc')->get();
        return view('home', compact('movies'));
    }

    public function contacts() {
        return view('contacts');
    }

    public function movie($id) {
        $movie = Movie::where('id', $id)->first();
        return view('movie', compact('movie'));
    }
}
