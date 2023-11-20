<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{asset('bootstrap.min.css')}}" type="text/css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <style>
        html, body {
            font-family: 'Poppins', sans-serif;
        }

    </style>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('main')}}">
                <img src="{{asset('images/logo_dyplom_cropped.jpg')}}" alt="Logo" width="37" height="24" class="d-inline-block align-text-top">
                RentaTool
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('rent.categories')}}">Wynajem</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Uslugi</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Firma
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('about')}}">O nas</a></li>
                            <li><a class="dropdown-item" href="{{route('contact')}}">Kontakt</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{{route('career')}}">Kariera</a></li>
                        </ul>
                    </li>
                </ul>
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
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{route('profile', $user)}}">
                                    {{ __('Mój profil') }}
                                </a>

                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Wyloguj') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <div class="container" style="margin-top: 70px">
        <div>
            <h4>
                <a href="{{route('rent.categories')}}" style="text-decoration: none; font-family: 'Segoe UI Symbol'; color: #E79F29"> ↩ </a> Mój profil
            </h4>
        </div>
        <div class="main-body">
            <!-- Breadcrumb -->
{{--                        <nav aria-label="breadcrumb" class="main-breadcrumb">--}}
{{--                            <ol class="breadcrumb">--}}
{{--                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>--}}
{{--                                <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>--}}
{{--                                <li class="breadcrumb-item active" aria-current="page">User Profile</li>--}}
{{--                            </ol>--}}
{{--                        </nav>--}}
            <!-- /Breadcrumb -->
        <form action="{{route('profile.update', $user->id)}}" method="post">
            @csrf
            @method('PATCH')
            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                Zdjęcie profilu
                                <img src="{{$user->image}}" alt="" class="rounded-circle" width="150">
                                <div class="mt-3">
                                    Zmień zdjęcie profilu
                                </div>
                                <div class="mt-3">
                                    <input type="text" name="image" id="image" value="{{$user->image}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Nazwa użytkownika:</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" name="name" id="name" value="{{$user->name}}">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">E-mail</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" name="email" id="email" value="{{$user->email}}">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Telefon</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    (+48) <input type="text" name="contact_number" id="contact_number" value="{{$user->contact_number}}">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Adres</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" name="address" id="address" value="{{$user->address}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12" align="center">
                    <button class="btn btn-lg btn-success" type="submit" style="border-width: 0px">Zapisz</button>
                </div>
            </div>
        </form>
        </div>
    </div>
</body>
</html>
