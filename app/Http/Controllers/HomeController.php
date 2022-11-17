<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        return view('welcome');
    }

    public function welcome()
    {
        return view('layout.welcome');
    }

    public function about()
    {
        return view('layout.about');
    }

    public function contacts(){
        return view('layout.contacts');
    }







}
