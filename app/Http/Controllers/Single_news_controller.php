<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class Single_news_controller extends Controller
{
    public function __invoke($id){
    	$news = News::where('id', '=', $id)->first();
    	return view('single_news', ['news'=>$news]);
    }
}
