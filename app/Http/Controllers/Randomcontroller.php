<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Randomcontroller extends Controller
{
    public function index(){

    	return view('random');
    }
}
