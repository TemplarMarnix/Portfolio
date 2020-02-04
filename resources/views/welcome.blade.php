<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <script src="https://kit.fontawesome.com/37e2a8fe9a.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:400,500,600|Roboto&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/buttons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/title.css') }}" rel="stylesheet">
    <link href="{{ asset('css/load.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Content -->
    <div class="load-wrapper">
        <svg viewbox="0 0 100 20">
            <defs>
                <linearGradient id="gradient" x1="0" x2="0" y1="0" y2="1">
                    <stop offset="5%" stop-color="#a972cb" />
                    <stop offset="95%" stop-color="black" />
                </linearGradient>
                <pattern id="wave" x="0" y="0" width="120" height="20" patternUnits="userSpaceOnUse">
                    <path id="wavePath" d="M-40 9 Q-30 7 -20 9 T0 9 T20 9 T40 9 T60 9 T80 9 T100 9 T120 9 V20 H-40z" mask="url(#mask)" fill="url(#gradient)">
                        <animateTransform attributeName="transform" begin="0s" dur="1.5s" type="translate" from="0,0" to="40,0" repeatCount="indefinite" />
                    </path>
                </pattern>
            </defs>
            <text text-anchor="middle" x="50" y="15" font-size="17" fill="url(#wave)" fill-opacity="0.6">LOADING</text>
            <text text-anchor="middle" x="50" y="15" font-size="17" fill="url(#gradient)" fill-opacity="0.1">LOADING</text>
        </svg>
    </div>
    <canvas id="c">
    </canvas>
    <div class="container-fluid content">
        <div class="row">
            <div class="col-lg-1 col-md-1 languages">
                <i class="fas fa-chevron-down language-option"></i>
                <button id="nl" class="translate language active-language dutch">
                    <img src="images/netherlands.png" alt="NL">
                    <button id="en" class="translate language inactive-language language-option english">
                        <img src="images/united-kingdom.png" alt="EN">
                        <button id="de" class="translate language inactive-language language-option german">
                            <img src="images/germany.png" alt="DE">
                            <button id="ru" class="translate language inactive-language language-option russian">
                                <img src="images/russia.png" alt="RU">
                            </button>
            </div>
            <div class="col-lg-4 col-md-4 d-flex title">
                <h1 class="title-animation first-title lang" key="portfolio">Portfolio</h1>
                <div class="title-animation second-title">
                    <h1 class="actual-title lang" key="door">van Marnix Elling</h1>
                </div>
            </div>
            <div class="col-lg-7 col-md-7 d-flex nav">
                <ul class="d-flex">
                    <li><button class="raise purple"><span class="lang" key="login">Login</span> &nbsp; <i class="fas fa-sign-in-alt"></i></button></li>
                    <li><button class="raise pink"><span class="lang" key="registreer">Registreren</span> &nbsp; <i class="fas fa-user-plus"></i></button></li>
                    <li><button class="raise yellow">Front-end &nbsp; <i class="far fa-object-ungroup"></i></button></li>
                    <li><button class="raise green">Back-end &nbsp; <i class="fas fa-file-code"></i></button></li>
                    <li><button class="raise cyan"><span class="lang" key="projecten">Projecten</span> &nbsp; <i class="fas fa-copy"></i></button></li>
                </ul>
            </div>
        </div>
        <div class="projects d-flex justify-content-space-evenly align-items-flex-start">
            <div class="project">
                <div class="project-date">
                    22-05-2000
                </div>
                <div class="project-title">
                    Project Title
                </div>
                <div class="project-thumbnail">
                    <img class="vignette" src="images/vignette.png" alt="vignette">
                    <img class="thumbnail" src="images/thumbnail.png" alt="thumbnail">
                    <i class="fas fa-arrow-alt-circle-right thumbnail-link"></i>
                </div>
                <div class="project-content">
                    <span>Project Title</span>
                    <p>They call me a nigger because my dick is bigger</p>
                    <a href="">Zie meer</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/1.0.0/anime.min.js"></script>
    <script src="{{ asset('js/background.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/translate.js') }}"></script>
    <script src="{{ asset('js/lang.js') }}"></script>
</body>

</html>