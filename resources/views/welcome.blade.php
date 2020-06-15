<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>gestion des employés</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css')}}">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg fixed-top text-uppercase bg-dark" id="mainNav" >
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" style="color: #fff">gestion des employés</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            @if (Route::has('login'))
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
               
                @auth
                        <a  style=" color: #fff " href="{{ url('/home') }}">Home</a>
                    @else
            </li>
            <li class="nav-item mx-0 mx-lg-1">
             <a  style="color: #fff " href="{{ route('login') }}">Connecter</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a  style="color: #fff " href="{{ route('register') }}"> inscrire</a>
            </li>
            @endauth
          </ul>
          @endif
        </div>
      </div>
    </nav>
<br><br>

<section class="text-center my-5">

<div class="container"style="background-image:url(https://mdbootstrap.com/img/Photos/Others/img%20%2832%29.jpg);font-size: 100%;padding-bottom: 10%;background-repeat: no-repeat;">
  <div class="row" >
    <div class="col-sm-5">
    <h1 style="color: #fff;margin-top: 30%;text-align: center">systéme de gestion des employés</h1>
 </div>
     <div class="col-sm-7">
    <h1 style="color: #fff"></h1>
    @if (Route::has('login'))
<p style="margin: auto; color: #fff;font-size: 50px">vous ete connecte</p>
    @auth
    @else
             <a class="btn btn-secondary btn-lg active" role="button" aria-pressed="true" style="color: #fff " href="{{ route('login') }}">Connecter</a>
<br><br>
              <a class="btn btn-secondary btn-lg active" role="button" aria-pressed="true" style="color: #fff;width:125px" href="{{ route('register') }}"> inscrire</a>
              @endauth
              @endif
         
 </div>
  </div>
  </div>
<br><br>
<div class="container">
  <div class="row">
    <div class="col-sm-6">
          <h2 class="h1-responsive font-weight-bold my-5">Gestion Des Employés</h2>
  <p class="grey-text w-responsive mx-auto mb-5">est une démarche visant à organiser de bout en bout le bon déroulement d’un projet, objet d'un contrat. Ce contrat peut être interne à l'entreprise dans le cas d'un développement lié à l'innovation, ou bien commercial sur la base d'un cahier des charges</p></div>
  <div class="col-sm-6">
     <img src="https://mdbootstrap.com/img/Photos/Others/project8.jpg" class="img-fluid" alt="Sample project image">
    
    </div>
  </div>
  </div>
  <br><br>

      <div class="container">
  <div class="row">
    <div class="col-sm-6">
     <img src="https://mdbootstrap.com/img/Photos/Others/project4.jpg" class="img-fluid" alt="Sample project image">
    </div>
    <div class="col-sm-6">
          <h4 class="font-weight-bold my-3">Workinc</h4>
        <p class="grey-text">L'agence web Workinc vous guide dans la réalisation de vos objectifs tout en respectant vos contraintes budgétaires, vos délais et vos critères en matière de qualité
        </p>
      </div>
      </div>
  </div>
<br><br>
      <div class="container">
  <div class="row">
    <div class="col-sm-6">
          <h2 class="h1-responsive font-weight-bold my-5">le projet est realise par</h2>
  <p class="grey-text w-responsive mx-auto mb-5">................</p></div>
  <div class="col-sm-6">
     <img src="https://mdbootstrap.com/img/Photos/Others/project1.jpg" class="img-fluid" alt="Sample project image">
    
    </div>
  </div>

      </div>
</section>


        <footer class="page-footer font-small bg-dark pt-4">
    <div class="footer-copyright text-center py-3" style="color: #fff">© 2018 Copyright:
      <a > @R_A_workinc</a>
    </div>
  </footer>
    </body>
    <script src={{asset('asset/js/bootstrap.min.js')}}></script>
</html>




