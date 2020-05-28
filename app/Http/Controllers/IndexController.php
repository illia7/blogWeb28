<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(){
    	$news = News::paginate(20);
    	return view('index', ['news'=> $news]);
    }
}
