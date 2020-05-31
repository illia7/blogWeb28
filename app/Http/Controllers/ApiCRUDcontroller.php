<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiCRUDcontroller extends Controller
{
    public function create(Request $request){
    	$news = new \App\News();
		$news -> author_id = $request->post('author_id');
		$news -> title = $request->post('title');
		$news -> body = $request->post('body');
		$news -> img = $request->post('img');
		$news -> save();
		return response() -> json($news, 201);
    }

    public function update(Request $request, $id){
    	$news = \App\News::find($id);
		$news -> author_id = $request->post('author_id');
		$news -> title = $request->post('title');
		$news -> body = $request->post('body');
		$news -> img = $request->post('img');
		$news -> save();
		return response() -> json($news, 200);
    }

    public function readNews(){
    	return response() -> json(\App\News::paginate(20), 200);
    }

    public function singleNews($id){
    	try{
		$news = \App\News::findOrFail($id);
		}catch(Exception $exception){
			return response() -> json(['Msg' => 'Такой новости не существует'], 404);
		}
		return response() -> json($news, 200);
	}

	public function deleteNews(){
    	$news = \App\News::find($id);
		$news -> delete();
		return response() -> json(['msg' => 'Новость успешно удалена'], 200);
    }

    public function start(){
    	return response() -> json(['User' => ['Name' => 'Ivan', 'Email' => 'example@mail.ua']], 200);
    }
}
