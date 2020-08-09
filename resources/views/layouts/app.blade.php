<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Mini Blog System with posts, categories and comments systems. Developed with Laravel 7.0">
  <meta name="author" content="Hamdi Gaied">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Blogger</title>
  
  <!-- Bootstrap core CSS -->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  
  <!-- Custom styles for this template -->
  <link href="{{ asset('css/blog-post.css') }}" rel="stylesheet">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
        <a class="navbar-brand" href="{{ route('root') }}">Blogger</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item {{ Request::is('categories') ? '' : 'active' }}">
                <a class="nav-link" href="{{ route('root') }}">Home</a>
            </li>
            <li class="nav-item {{ Request::is('categories') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('categories.index') }}">Categories</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li>
            </ul>
        </div>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <footer class="py-5 bg-dark">
        <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Blogger 2020</p>
        </div>
        <!-- /.container -->
    </footer>
  
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>