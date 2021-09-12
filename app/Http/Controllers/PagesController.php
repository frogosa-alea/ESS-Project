<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function home(){
        return view('layouts.student-home');
    }

    public function behavior(){
        return view('layouts.student-behavior');
    }

    public function grade(){
        return view('layouts.student-grade');
    }

    public function schedule(){
        return view('layouts.student-schedule');
    }
    
}
