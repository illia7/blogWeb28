<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/blog-home.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="{{route('home')}}">Football News</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            
            <li class="nav-item">
              <a class="nav-link" href="{{route('about')}}">О нас</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('services')}}">Сервис</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('contacts')}}">Контакты</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

@yield('content')

    <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

    <!-- Search Widget -->
          @yield('search')

          <!-- Categories Widget -->
          <div class="card my-4">
            <h5 class="card-header">Категории</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    @inject('categories', '\App\Category')
                    @foreach($categories->show_categories() as $category)
                    <li>
                      <a href="{{route('news_by_category',$category->key)}}">{{$category->category}}</a>
                      
                    </li>
                    @endforeach
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">Мы в социальных сетях</h5>
            <div class="card-body">
              <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    @inject('social_network', '\App\SocialNetwork')
                    @foreach($social_network->show_social_network() as $sn)
                    <li>
                      <a href="{{$sn->url}}">{{$sn->name}}</a>
                      
                    </li>
                    @endforeach
                  </ul>
                </div>
            </div>
          </div>

        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; DemSoft 2020</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
