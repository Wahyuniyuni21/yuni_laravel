<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
    	return view('home');
    }
    public function yuni(){
    	return view('about');
    }
    public function saya(){
    	return view('contact');
    }
    
    public function homeyuni(){
    	return 'wahyunimakmur';
    }
}
