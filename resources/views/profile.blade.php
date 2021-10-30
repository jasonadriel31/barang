<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>My Portofolio</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/jumbotron/">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('asset/bootstrap-5.0.1-dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <script type="text/javascript" src="{{asset('asset/bootstrap-5.0.1-dist/js/bootstrap.bundle.js')}}"></script>
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="{{asset('asset/PapaParse-5.0.2/papaparse.js')}}"></script>
    
  </head>
  <body>
    
<main>
  
  <div class="container py-4">
    <header class="pb-3 mb-4 border-bottom">
        <span class="fs-4">A Short Story of My Life</span>
        <nav class="navbar navbar-expand navbar-light bg-light" aria-label="Second navbar example">
          <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarsExample02">
              <ul class="navbar-nav me-auto">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="{{ route('profile') }}" style="color: blue;">Profile</a>
                </li>
                                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="{{ route('portofolio') }}">My Project</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
    </header>

    <div class="p-5 mb-4 rounded-3 main_content bg-light">
      <div class="container-fluid py-5 row">
        <div class="col">
          <img src="{{asset('asset/img/profile.jpg')}}" class="rounded" alt="profile" width="400px">
        </div>
        <div class="col align-self-center">
          <h1>Jason Adriel Santoso, S.Kom.</h1>
          <h4>Universitas Surabaya - Teknik Informatika 2017</h4>
          <p>Surabaya, 31 Oktober 1999</p>
        </div>
      </div>
    </div>
    <footer class="pt-3 mt-4 text-muted border-top">
      Jason Adriel Santoso, S.Kom.<p style="float: right;">&copy; 2021 </p>
    </footer>
  </div>
</main>


    
  </body>
</html>
