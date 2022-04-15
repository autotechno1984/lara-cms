<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Maxgame88 - Situs Judol Teraman dan Terpercaya 2022</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1d1410dd1c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @livewireStyles
</head>
<body style="background: radial-gradient(circle, rgba(28,58,147,1) 0%, rgba(42,183,228,1) 48%, rgba(0,212,255,1) 100%)">
<div class="container-fluid mx-auto text-center py-3" style="background:whitesmoke;">
    <img src="" alt="">
</div>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 text-center">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="#">HOME</a>
                </li>
                <li class="nav-item dropdown" style="font-family: 'Roboto', sans-serif;">
                    <a href="#" class="nav-link text-white">SLOT</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">
                        CASINO
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">
                        SPORTSBOOK
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">
                        FISH HUNTER
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">
                        TOGEL
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-white dropdown-toggle" href="#" id="navbarDropdownBlog" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        BLOG                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownBlog">
                        <li class="dropdown-item">Slot</li>
                        <li class="dropdown-item">Casino</li>
                        <li class="dropdown-item">Sepakbola</li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</nav>
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        @foreach($banner as $key => $value)
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}" aria-current="true" aria-label="Slide 1"></button>
        @endforeach
    </div>
    <div class="carousel-inner">
        @foreach($banner as $key => $value)
        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
            <img src="{{ Storage::url($value->file) }}" class="d-block w-100" alt="...">
        </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<div class="container mt-1">
    <div class="row justify-content-center">
        <div class="col-6 col-md-6 col-sm-6 ">
            <a class="btn bg-danger text-white form-control" style="font-size:1.5rem;" href="{{ $links->daftar }}" target="_blank">D A F T A R</a>
        </div>
        <div class="col-6 col-md-6 col-sm-6">
            <a class="btn form-control" style="font-size:1.5rem; background:black; color:gold; font-weight: bold;" href="{{ $links->login }}" target="_blank">M A S U K</a>
        </div>
    </div>
    @yield('front')
</div>

@livewireScripts

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>
