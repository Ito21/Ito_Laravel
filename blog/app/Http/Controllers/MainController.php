<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Requests\PostRequest;

class MainController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function data()
    {
        return view('data');
    }
    
    public function welcome()
    {
        return view('welcome');
    }
}
