<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Akurat Terpercaya</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/card.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/berita.css') }}">
</head>
<body>
    {{-- <header class="topnav">
        <img src="{{ asset('images/Berita.png') }}" alt="Berita">
        <div class="container1" id="myDIV">
            <a class="btn" href="{{ route('article') }}">Article</a>
            <a class="btn" href="{{ route('comment') }}">Comment</a>
            <a class="btn" href="{{ route('author') }}">Author</a>
        </div>
        <a class="profil" href="{{ route('profil') }}">Adil Nashrulhaq</a>
    </header> --}}
    <div class="container" style="margin-top: 1%">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg bg-light"
                    style="background: linear-gradient(180deg, #F2EAD3 0%, #DFD7BF 100%); border-radius: 20px;">
                    <div class="justify-content-start" style="width: 23%">
                        <img src="{{ asset('images/Berita.png') }}" alt="Berita" style="width: 64px; height: 20px;">
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"><img src="data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%280, 0, 0, 0.55%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e" alt=""></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item" style="margin-left: 40px;margin-right: 120px">
                                <a class="nav-link {{ Request::path() === 'article' ? 'active' : '' }}" href="{{ route('article') }}">
                                    <span class="title">Article</span>
                                </a>
                            </li>
                            <li class="nav-item" style="margin-right: 120px">
                                <a class="nav-link {{ Request::path() === 'comment' ? 'active' : '' }}" href="{{ route('comment') }}">
                                    <span class="title">Comment</span>
                                </a>
                            </li>
                            <li class="nav-item" style="margin-right: 120px">
                                <a class="nav-link {{ Request::path() === 'author' ? 'active' : '' }}" href="{{ route('author') }}">
                                    <span class="title">Author</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('profil') }}">Adil Nashrulhaq</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>

