<?php

namespace App\Http\Controllers;

use App\Receipe;
use Illuminate\Http\Request;

class ReceipeController extends Controller
{
    public function index(){
        $data = Receipe::all();
        return view('home',compact('data')); 
    }
    
}
