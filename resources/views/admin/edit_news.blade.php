@extends('Layout')


@section('title', 'Блог - главная')

@section('content')
    <div class="container">
      <div class="row">
          @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
        <form action="add_news" method="post" enctype="multipart/form-data">
          @csrf
          <h1>Добавить новость</h1><br>
          <select name="author_id">
            @foreach($authors as $author)
              <option @if($author->id == $news->author_id) selected @endif value="{{$author->id}}">{{$author->name}}</option>
            @endforeach
          </select><br>
          <input type="hidden" name="id" value="{{$news->id}}">
          <input type="text" name="title" placeholder="News Title" value="{{$news->title}}"><br>
          <textarea name="body" placeholder="News Body">{{$news->body}}</textarea><br>
          <input type="file" name="image"><br>
          <input type="submit" value="Save">
        </form>
      </div>
    </div>
@endsection