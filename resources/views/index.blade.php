@extends('Layout')


@section('title', 'Блог - главная')

@section('content')
    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <h1 class="my-4">Новости
            <small>Главная</small>
          </h1>

@foreach($news as $new)
          <!-- Blog Post -->
          <div class="card mb-4">
            <img class="card-img-top" src="{{$new->img}}" alt="Card image cap">
            <div class="card-body">
              <h2 class="card-title">{{$new->title}}</h2>
              <p class="card-text">{{mb_substr($new->body, 0, 200)}} ...</p>
              <a href="{{route('single_news', $new->id)}}" class="btn btn-primary">Read More</a>
            </div>
            <div class="card-footer text-muted">
              Posted on {{$new->created_at}} by
              <a href="{{route('news_by_authors', $new->author->key)}}">{{$new->author->name}}</a>
            </div>
            <div class="card-footer text-muted">
              Категории:
              @foreach($new->category as $categor)
               <a style='background-color: yellow; color:red' href="{{route('news_by_category',$categor->key)}}">{{$categor->category}}</a>
              @endforeach
            </div>
          </div>
@endforeach

          <!-- Pagination -->
          <ul class="pagination justify-content-center mb-4">
            @if($news->currentPage() != 1)
              <li class="page-item"><a class="page-link" href="?page=1">Начало</a></li>
              <li class="page-item"><a class="page-link" href="{{$news->previousPageUrl()}}"> <- </a></li>
            @endif

            @if($news->count() > 1)
              @for($count=1; $count <= $news->lastPage(); $count++)
                @if($count > $news->currentPage()-3 and $count < $news->currentPage()+3)
                <li class="page-item @if($count == $news->currentPage()) active @endif">  <a class="page-link" href="?page={{$count}}"> {{$count}} </a></li>
                @endif
              @endfor
            @endif

            @if($news->currentPage() != $news->lastPage())
              <li class="page-item"><a class="page-link" href="{{$news->nextPageUrl()}}"> -> </a></li>
              <li class="page-item"><a class="page-link" href="?page={{$news->lastPage()}}">Конец</a></li>
            @endif
          </ul>
          

        </div>
@endsection
        



@section('search')
        <!-- Search Widget -->
          <div class="card my-4">
            <h5 class="card-header">Курсы валют</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    @inject('currencies', '\App\Get_currency')
                    {{$currencies->show_currency()}}
                  </ul>
                </div>
              </div>
            </div>
          </div>
@endsection