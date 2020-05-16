@extends('Layout')


@section('title', 'О нас')

@section('content')
    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <h1>Это страница о нас!!!</h1>

        </div>
      

@endsection
        



@section('search')
        <!-- Search Widget -->
          <div class="card my-4">
            <h5 class="card-header">Контакты</h5>
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