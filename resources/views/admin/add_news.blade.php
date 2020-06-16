@extends('Layout')


@section('title', 'Блог - главная')

@section('content')
    <!-- Page Content -->
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
          <h1>Залогиньтесь</h1><br>
           @if(\Auth::check())
        <form action="add_news" method="post" enctype="multipart/form-data">
          @csrf
          
          <h1>Добавить новость</h1>
          <i style="color:red"><h2>При выборе нескольких категорий зажмите Ctrl</h2></i>
          <select name="category_id[]" multiple="multiple" size="6">
            @foreach($categories as $category)
              
              <option value="{{$category->id}}">{{$category->category}}</option>
            @endforeach
          </select><br>

          <select name="author_id">
            @foreach($authors as $author)
              <option value="{{$author->id}}">{{$author->name}}</option>
            @endforeach
          </select><br>
          <input type="text" name="title" placeholder="News Title"><br>
          <textarea name="body" placeholder="News Body"></textarea><br>
          <input type="file" name="image"><br>
          <input type="submit" value="Save">
        </form>
          @endif
      </div>
    </div>
@endsection