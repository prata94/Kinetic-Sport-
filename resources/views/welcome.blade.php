<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kinetic Sport</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body>
    <div id="progressbar"></div>
    <div id="scrollPath"></div>
<section>
    <!-- Navigation -->
<nav id="navcontrol" class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand font text-warning"><i class="bi bi-award"></i>Kinetic Sport</a>

            <button 
            class="navbar-toggler" 
            type="button" 
            data-bs-toggle="collapse" 
            data-bs-target="#navmenu">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="{{ Route('navigation.about')}}" class="nav-link text-light">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ Route('navigation.services')}}" class="nav-link text-light">Services</a>
                    </li>      
                    @if (Route::has('login'))
                        @auth
                        <li class="nav-item">
                        <a href="{{ route('appointments.index') }}" class="nav-link text-light">Appointments</a>
                        </li> 
                        @else
                        <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link text-light">Log in</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                        <a href="{{ route('register') }}" class="nav-link text-light">Register</a>
                        </li>
                    @endif
                    
                @endauth   
                @endif  
                </ul>
            </div>
        </div>
    </nav>

    <!-- Presentation Section -->

    <div class="bg-dark text-light p-5 text-center text-sm-start">
    <!-- <section class="bg-dark text-light p-5 text-center text-sm-start"> -->
        <div class="container">
            <div class="d-sm-flex align-items-center justify-content-between">
                <div>
                    <h1>We are <span class="font text-warning">Kinetic Sport</span></h1>
                    <p class="lead my-4">“There may be people that have more talent than you, but there’s no excuse for anyone to work harder than you do.” – Derek Jeter</p>
                    
                @if (Route::has('login'))
                    @auth
                    <a href="{{ Route('appointments.book') }}" class="btn btn-warning bg-gradient">Book now! </a>
                    @else 
                    <a href="{{ route('login') }}" class="btn btn-warning">Book now! </a>
                @endauth
                @endif
                </div>
                    <img class="img-fluid w-50 d-none d-sm-block" src="images/—Pngtree—people running fast_1138048.png" alt="yoga girl">     
            </div>
        </div>
    </div>
    <!-- </section> -->

    <!-- Cards Section -->

    <div class="text-dark p-5 container-fluid" style="background-image:url({{url('images/jordan1.jpg')}})">
        <div class="p-5 min-vh-100">
            <div class="d-flex justify-content-end align-items-center">
                <div class=" col col-lg-5 text-light my-4"><h4><em>"More than 10 years experience in helping Pro athletes make history!"</em></h4></div>
            </div>

                <!-- <div class="d-sm-flex justify-content-around row row-cols-1 mt-5" id="cards">
                    <div class="card border border-light" style="width: 18rem;">
                        <div class="d-flex my-4" style="height:100%">
                        <img src="images/basketball.png" class="card-img-top" alt="basketball" >
                        </div>
                        <div class="card-body">
                          <h5 class="card-title">Basketball</h5>
                          <p class="card-text"></p>
                          <a href="#" class="btn btn-warning">Go somewhere</a>
                        </div> 
                      </div>
                      <div class="card border border-light" style="width: 18rem;">
                        <div class="d-flex" style="height:100%">
                        <img src="images/voleyball.jpg" class="card-img-top" alt="volleyball" >
                        </div>
                        <div class="card-body">
                          <h5 class="card-title">Volleyball</h5>
                          <p class="card-text"></p>
                          <a href="#" class="btn btn-warning">Go somewhere</a>
                        </div>
                      </div> 
                      <div class="card m-2 border border-light" style="width: 18rem;">
                        <img src="images/football.png" class="card-img-top" alt="football">
                        <div class="card-body">
                          <h5 class="card-title">Football</h5>
                          <p class="card-text"></p>
                          <a href="#" class="btn btn-warning">Go somewhere</a>
                        </div>
                      </div>
                </div>  -->
        </div>
    </div>
    <div class="container text-center mt-3">
            @if (Route::has('login'))
                    @auth
                    <a href="{{ Route('appointments.book') }}" class="btn btn-warning bg-gradient w-75">Book now! </a>
                    @else    
                    <a href="{{ route('login') }}" class="btn btn-warning bg-gradient w-100">Book now! </a>
                @endauth
                @endif
            </div>
    <div class=" container text-center mt-5">
        <h2><em>"Persistence can change failure into extraordinary achievement." - Marv Levy</em></h2>
    </div>

    <div class="mt-auto">
      @include('layouts.inc.welcomefooter')
    </div>

</section>




    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>