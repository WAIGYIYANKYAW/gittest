<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $name = 'Home page';
        return view('home',compact('name'));
    }

    public function js(){
        $data = [
            'lesson1'=>'This is lesson 1.',
            'lesson2'=>'This is lesson 2.',
            'lesson3'=>'This is lesson 3.'
        ];
        return view('js',compact('data'));
    }
}
