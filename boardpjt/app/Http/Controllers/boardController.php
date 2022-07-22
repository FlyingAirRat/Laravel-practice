<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class boardController extends Controller
{
    public function index() {
        return view('board/index');
    }
}
