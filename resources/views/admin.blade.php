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
            <div class="col-md-2">
                <br>
                <h3>Add Data</h3>
                <br>
                @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                @if(\Session::has('succes'))
                <div class="alert alert-succes">
                    <p>{{ \Session::get('succes') }}</p>
                </div>
                @endif
                <form method="post" action="{{url('project')}}">
                    {{csrf_field()}}
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Project naam">
                        <input type="text" name="description" class="form-control" placeholder="Beschrijving">
                        <input type="date" name="date">
                        <input type="text" name="link" class="form-control" placeholder="URL">
                        <input type="text" name="image" class="form-control" placeholder="Image path">
                        <input type="submit" class="btn btn-primary">
                    </div>
                </form>
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