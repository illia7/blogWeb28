@extends('Layout')


@section('title', 'О нас')

@section('content')
    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <h1>Мы на карте</h1>
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1122.13274173775!2d30.727608242595096!3d46.486310527642594!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c631965dfc29b9%3A0xcb38625fe2099a1e!2z0JrQvtC80L_RjNGO0YLQtdGA0L3QsNGPINCQ0LrQsNC00LXQvNC40Y8g0KjQkNCT!5e0!3m2!1sru!2sua!4v1590541341455!5m2!1sru!2sua" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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