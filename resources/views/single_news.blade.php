@extends('Layout')


@section('title', 'Блог - главная')

@section('content')
    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <h1 class="my-4">Page Heading
            <small>Secondary Text</small>
          </h1>


          <!-- Blog Post -->
          <div class="card mb-4">
            <img class="card-img-top" src="{{$news->img}}" alt="Card image cap">
            <div class="card-body">
              <h2 class="card-title">{{$news->title}}</h2>
              <p class="card-text">{{$news->body}}</p>
              
            </div>
            <div class="card-footer text-muted">
              Posted on {{$news->created_at}}
              <a href="{{route('news_by_authors', $news->author->key)}}">{{$news->author->name}}</a>
            </div>
          </div>


          <!-- Pagination -->
          <ul class="pagination justify-content-center mb-4">
            <li class="page-item">
              <a class="page-link" href="#">&larr; Older</a>
            </li>
            <li class="page-item disabled">
              <a class="page-link" href="#">Newer &rarr;</a>
            </li>
          </ul>

        </div>
@endsection
        



@section('search')
        <!-- Search Widget -->
          <div class="card my-4">
            <h5 class="card-header">Search</h5>
            <div class="card-body">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button">Go!</button>
                </span>
              </div>
            </div>
          </div>
@endsection