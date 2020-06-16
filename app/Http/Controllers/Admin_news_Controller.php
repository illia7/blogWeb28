<?php

namespace App\Http\Controllers;

use App\Author;
use App\News;
use App\Category;
use Illuminate\Http\Request;

class Admin_news_Controller extends Controller
{
    public function add(Request $request){
    	$authors = Author::all();
        $categories = Category::all();
    	return view('admin.add_news', ['authors' => $authors, 'categories' => $categories]);
    }

    public function save(Request $request){
        if(\Auth::check()){
        	if($request->method() == 'POST'){
        		$this->validate($request, [
        			'author_id'	=> 'required | numeric',
        			'title' => 'required | max:100 | min:5',
        			'body' => 'required | min:20 |',
        			'image' => 'image'
        		]);
        		$news = new News();
        		$news->author_id = $request->input('author_id');
        		$news->title = $request->input('title');
        		$news->body = $request->input('body');
        		$image = $request->image;
        		if($image){
        			$imageName = $image->getClientOriginalName();
        			$image->move('images', $imageName);
        			$news->img = 'http://blog/images/' . $imageName;
        		}
        		$news->save();
                $news->category()->sync($request->input('category_id'), false);
                $news->category()->getRelated();
                return redirect()->route('single_news', $news->id);
        	}
        }else{
            return redirect()->route('index');
        }
    	
    }

    public function delete(Request $request){
    	if($request->method() == 'DELETE'){
    		$news = News::find($request->input('id'));
    		$news->delete();
    		return back();
    	}else{
    		return view('admin.delete_news', ['news' => News::all()]);
    	}
    }

    public function edit($id){
        if(\Auth::check()){
	    	$news = News::where('id', '=', $id)->first();
	    	$authors = Author::all();
	    	return view ('admin.edit_news', ['news' => $news, 'authors' => $authors]);
        }else{
            return redirect('404');
        }
    }

    public function edit_save(Request $request){
    	if($request->method() == 'POST'){
    		$this->validate($request, [
    			'author_id'	=> 'required | numeric',
    			'title' => 'required | max:100 | min:5',
    			'body' => 'required | min:20 |',
    			'image' => 'image'
    		]);
    		$news = News::where('id', '=', $request->input('id'))->first();
    		$news->author_id = $request->input('author_id');
    		$news->title = $request->input('title');
    		$news->body = $request->input('body');
    		$image = $request->image;
    		if($image){
    			$imageName = $image->getClientOriginalName();
    			$image->move('images', $imageName);
    			$news->img = 'http://blog/images/' . $imageName;
    		}
    		$news->save();
    	}
    	return redirect('/news/'.$news->id);
    }
}
