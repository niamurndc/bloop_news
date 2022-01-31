<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>
  <link rel="stylesheet" href="/css/app.css">
  <link rel="stylesheet" href="/css/style.css">
  @yield('title')
</head>
<body>
  <div class="top-header pt-1">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-center text-md-left">
          <h1>Bloop News</h1>
        </div>
        <div class="col-md-6 text-center text-md-right social-icon pt-1">

          <i class="fa fa-facebook-square"></i>
          <i class="fa fa-twitter-square"></i>
          <i class="fa fa-instagram"></i>
        </div>
      </div>
    </div>
  </div> 
  <!-- top header end -->
  <div class="container second-nav">
    <ul class="nav justify-content-center">
      <li class="nav-item">
        <a class="nav-link active" href="/">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">International</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Economy</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Business</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Politics</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Sports </a>
      </li>
    </ul>
  </div>
  <!-- second navbar end -->


    @yield('content')

  
  <footer class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-center text-md-left">
          <h1>Bloop News</h1>
          <div class="social-icon">
            <i class="fa fa-facebook-square"></i>
            <i class="fa fa-twitter-square"></i>
            <i class="fa fa-instagram"></i>
          </div>
        </div>
        <div class="col-md-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact us</a>
            </li>
          </ul>
        </div>
        <div class="col-md-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" href="#">Popular News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Trending News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Most Read</a>
            </li>
          </ul>
        </div>
        <div class="col-md-12">
          
        </div>
      </div>
    </div>
  </footer>
  <script src="/js/app.js"></script>
</body>
</html>