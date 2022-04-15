@extends('layouts.app')

@section('home')
<div class="container">
        <div class="row my-3">
            <div class="col-2" style="background:#0093AB; height: 850px;">
                <nav class="navbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-white dropdown-toggle" href="#" id="navbarDropdownGames" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Games
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownGames">
                                <li> <a class="dropdown-item" href="{{ route('add-games') }}">Games</a></li>
                                <li><a href="{{ route('list-games') }}" class="dropdown-item">List Games</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Data</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link text-white dropdown-toggle" href="#" id="navbarDropdownWeb" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Web Setting
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownWeb">
                                <li><a class="dropdown-item" href="{{ route('web-setting') }}">Color</a></li>
                                <li><a class="dropdown-item" href="{{ route('banner') }}">Banner</a></li>
                                <li><a class="dropdown-item" href="{{ route('logolink') }}">Logo & Link</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-10">
                @yield('games')
                @yield('color')
                @yield('listgames')
                @yield('datagames')
                @yield('editlistgame')
                @yield('banner')
                @yield('logolink')
            </div>
        </div>
</div>
@endsection
