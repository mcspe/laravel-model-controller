<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return view('home');
    }

    public function contacts() {
        return view('contacts');
    }

    public function movie() {
        return view('movie');
    }
}
