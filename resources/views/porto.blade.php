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
                  <a class="nav-link active" aria-current="page" href="{{ route('profile') }}">Profile</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="{{ route('portofolio') }}" style="color: blue;">My Project</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
    </header>

    <div class="p-5 mb-4 rounded-3 main_content bg-light">
      <div class="container-fluid py-5 row">
        <div class="col">
          <div>
            <h1 style="text-align: left;">1. Automatic Question Generator Alkitab</h1>
            <p style="font-size: 20px;"><br>Aplikasi Automatic Question Generator Alkitab adalah aplikasi yang ditujukan untuk membantu Guru Sekolah Minggu dalam membuat pertanyaan untuk mengevaluasi hasil pembelajaran murid Sekolah Minggu.<br><br> Aplikasi sangatlah mudah digunakan dan hasil pertanyaan yang dihasilkan oleh aplikasi ini adalah pertanyaan 5W + 1H. Diharapkan dengan adanya aplikasi ini Guru Sekolah Minggu dapat menghemat waktu mereka dalam pembuatan pertanyaan evaluasi.</p><br>
            <img src="{{asset('asset/img/guide1.1.jpg')}}" style="border: 10px solid #999966; width: 560px;"> <img src="{{asset('asset/img/guide2.2.jpg')}}" style="border: 10px solid #999966; width: 560px;">
            <br><br>
          </div>
          <div style="margin-top: 50px;">
            <h1 style="text-align: left;">2. Aplikasi Pencatatan Transaksi</h1>
            <p style="font-size: 20px;"><br>Aplikasi Pencatatan Transaksi ditujukan untuk mencatat transaksi pda sebuah perusahaan EMKL.<br><br> Aplikasi dibangun menggunakan framework laravel, dengan fitur-fitur seperti authentication, CRUD, dan Print Nota</p><br>
            <img src="{{asset('asset/img/nota1.png')}}" style="border: 10px solid #999966; width: 560px;"> <img src="{{asset('asset/img/nota2.png')}}" style="border: 10px solid #999966; width: 560px;"> <br><br><img src="{{asset('asset/img/nota3.png')}}" style="border: 10px solid #999966; width: 560px;">
          </div>
        </div>
      </div>
    </div>
    <footer class="pt-3 mt-4 text-muted border-top">
      Jason Adriel Santoso - 160417020 <p style="float: right;">&copy; 2021 </p>
    </footer>
  </div>
</main>


    
  </body>
</html>
