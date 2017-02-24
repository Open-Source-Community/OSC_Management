<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>OSC Trello</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link href="http://getbootstrap.com/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <script src="http://getbootstrap.com/assets/js/ie-emulation-modes-warning.js"></script>

    <link href="http://getbootstrap.com/examples/carousel/carousel.css" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
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
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @if (Auth::check())
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ url('/login') }}">Login</a>
                <a href="{{ url('/register') }}">Register</a>
            @endif
        </div>
    @endif

    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h3>IT</h3>
                <p>Open source refers to any program whose source code is made available for use or modification as
                    users or other developers see fit.</p>
            </div>
            <div class="col-sm-4">
                <h3>Projects</h3>
                <p>Open source refers to any program whose source code is made available for use or modification as
                    users or other developers see fit.</p>
            </div>
            <div class="col-sm-4">
                <h3>Laravel</h3>
                <p>Open source refers to any program whose source code is made available for use or modification as
                    users or other developers see fit.</p>
            </div>
            <div class="col-sm-4">
                <h3>HR</h3>
                <p>Open source refers to any program whose source code is made available for use or modification as
                    users or other developers see fit.</p>
            </div>
            <div class="col-sm-4">
                <h3>PR</h3>
                <p>Open source refers to any program whose source code is made available for use or modification as
                    users or other developers see fit.</p>
            </div>
            <div class="col-sm-4">
                <h3>FR</h3>
                <p>Open source refers to any program whose source code is made available for use or modification as
                    users or other developers see fit.</p>
            </div>
            <div class="col-sm-4">
                <h3>LR</h3>
                <p>Open source refers to any program whose source code is made available for use or modification as
                    users or other developers see fit.</p>
            </div>
            <div class="col-sm-4">
                <h3>Linux</h3>
                <p>Open source refers to any program whose source code is made available for use or modification as
                    users or other developers see fit.</p>
            </div>
            <div class="col-sm-4">
                <h3>English Heros</h3>
                <p>Open source refers to any program whose source code is made available for use or modification as
                    users or other developers see fit.</p>
            </div>
            <div class="col-sm-4">
                <h3>Blender</h3>
                <p>Open source refers to any program whose source code is made available for use or modification as
                    users or other developers see fit.</p>
            </div>
            <div class="col-sm-4">
                <h3>CCC</h3>
                <p>Open source refers to any program whose source code is made available for use or modification as
                    users or other developers see fit.</p>
            </div>
            <div class="col-sm-4">
                <h3>Art</h3>
                <p>Open source refers to any program whose source code is made available for use or modification as
                    users or other developers see fit.</p>
            </div>
        </div>
    </div>

</div>
</body>
</html>
