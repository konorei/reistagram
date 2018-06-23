<?php
$image = array ('image1.jpg');
$rand = mt_rand(0,0);
?>
 
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <link rel="stylesheet" href="css/welcome.css" type="text/css" />

  <title>Reistagram</title>
  <style type="text/css">
    body{
      background: linear-gradient(-45deg, rgba(0, 0, 0, .3), rgba(0, 0, 0, .3)), url(images/{{$image[$rand]}});
      background-position: top center;
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
      color: white;
      margin-bottom: 0;
      height:100vh;
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark navbar-extend ml-5 position-relative">
    <a class="navbar-brand" href="#"><span class="display-4">Reistagram</span></a>
            @if (Route::has('login'))
            <ul class="navbar-nav position-absolute">
                @auth 
                    <li class="nav-item"><a class="nav-link" href="{{ route('index') }}">Home</a></li>
                @else
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                    {{--<li class="nav-item active"><a class="nav-link" href="{{ route('register') }}">Register</a></li>--}}
                @endauth
            </ul>
            @endif
  </nav>

  <div class="container-fluid text-center">
    <div class="jumbotron jumbotron-extend">
      <div id="logo">
        <h1 class="display-1 font-weight-bold text-left">Hello<br>Let's join us.</h1>
        <p class="lead text-left mt-3">Not Instagram :)</p>
        
        <!--p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p-->
      </div>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>

</html>