<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kinetic Sport</title>
    <!-- icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    
    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- css links -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body>
<body>
    <div class="">
            <!-- Navigation -->
    <nav id="navcontrol" class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a href="{{ url('/') }}" class="navbar-brand font text-warning"><i class="bi bi-award"></i>Kinetic Sport</a>
            

            <button 
            class="navbar-toggler" 
            type="button" 
            data-bs-toggle="collapse" 
            data-bs-target="#navmenu">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                                <div class="dropdown">
                                <a class="btn btn-warning dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name }}
                                </a>

                                <ul class="dropdown-menu bg-warning" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                </li>
                                <li>
                                <a href="{{ Route('appointments.book') }}" class="dropdown-item">
                                    Book now
                                </a>
                                </li>
                                <li>
                                <a href="{{ Route('appointments.index')}}" class="dropdown-item">
                                    Appointments
                                </a>
                                </li>
                                <a href="{{ Route('navigation.services')}}" class="dropdown-item">
                                    Services
                                </a>
                                </li>
                                <a href="{{ Route('navigation.about')}}" class="dropdown-item">
                                    About Us
                                </a>
                                </li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                                @endguest  
                                </ul>
                                </div>
                </ul>
            </div>
        </div>
    </nav>
    
        <main class="">
            @yield('content')
        </main>

        <div class="mt-auto">
        @include('layouts.inc.welcomefooter')
        </div>
        
    </div>

<!-- Scripts -->
<script type="text/javascript" src="{{asset('js/custom.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>