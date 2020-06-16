<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about(){
    	return view('about');
    }
    public function contacts(){
    	return view('contacts');
    }
    public function services(){
    	return view('services');
    }
}

