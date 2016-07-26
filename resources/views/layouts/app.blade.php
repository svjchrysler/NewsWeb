<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ICE Instituto Cruceño de Estadistica</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{ Html::style('css/app.css') }}

    {{ Html::style('css/animate.css') }}
    
    @yield('style')
</head>
<body id="app-layout" style="background-color: #EDEBE2;">
    <div class="container" style="background-color: #FFF;">
        <div class="row">
            <div class="col-md-2 hidden-xs">
                <a href="{{ url('/') }}">
                    <img src="/img/logoice.png" class="img-responsive" alt="">
                </a>
            </div>
            <div class="col-md-8 col-xs-12" style="padding:0;">
                <h3 class="text-center" style="color:#1B5E20; font-weight:700;">Instituto Cruceño de Estadistica</h3>
                <nav class="navbar">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                                <span class="sr-only">Toggle Navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse" id="app-navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li><a href="{{ url('/history') }}">Historia</a></li>
                                <li><a href="{{ url('/aboutus') }}">Quienes Somos?</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-md-2 hidden-xs">
                <img src="/img/logogobernacion.png" class="img-responsive" alt="">
            </div>

        </div>    
    </div>
    
    <br>
    
    @yield('content')    
    
    <br>
    
    <div class="container" style="background-color: #FFF;position:relative; background-color: #FFF;">
        <div class="row" style="position: absolute; width: 100%; background-color: #FFF;">
            <div class="col-md-2 hidden-xs">
                <a href="{{ url('/') }}">
                    <img src="/img/logoice.png" class="img-responsive" alt="">
                </a>
            </div>
            <div class="col-md-8 col-xs-12" style="padding:0;">
                <br>
                <nav class="navbar">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                                <span class="sr-only">Toggle Navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse" id="app-navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li><a href="{{ url('/history') }}">Historia</a></li>
                                <li><a href="{{ url('/aboutus') }}">Quienes Somos?</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-md-2 hidden-xs">
                <img src="/img/logogobernacion.png" class="img-responsive" alt="">
            </div>

        </div>    
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    @yield('script')
</body>
</html>
