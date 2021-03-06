<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ICE Instituto Cruceño de Estadistica</title>
 
    {{ Html::style('css/bootstrap.min.css') }}
    
    {{ Html::style('css/app.css') }}

    {{ Html::style('css/animate.css') }}
    
    @yield('style')
</head>
<body id="app-layout" style="background:url('/img/fondo2.jpg'); background-size=cover;">
    <div class="container" style="background-color: #FFF; border-radius: 0 0 1em 1em;">
        <div class="row">
            <div class="col-md-2 hidden-xs hidden-sm">
                <a href="{{ url('/') }}">
                    <img src="/img/logoice.png" class="img-responsive" alt="">
                </a>
            </div>
            <div class="col-md-8 col-sm-12 col-xs-12">
                <h3 class="text-center" style="color:#1B5E20; font-weight:700; padding-top:.4em;">Instituto Cruceño de Estadistica</h3>
            </div>
            <div class="col-md-2 hidden-xs hidden-sm">
                <img src="/img/logogobernacion.png" class="img-responsive" alt="">
            </div>

        </div>    
        <div class="row">
            <div class="col-md-12" style="padding: 0; margin: 0;">
                 <nav class="navbar" style="padding-bottom: 0; margin-bottom: 0;">
                    <div class="container-fluid container-fondo">
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
                                <li><a href="{{ url('/') }}">Inicio</a></li>
                                <li><a href="{{ url('/history') }}">Marco Legal</a></li>
                                <li><a href="{{ url('/aboutus') }}">Quienes Somos?</a></li>
                                <li><a href="{{ url('/visualizador') }}">Visualizador</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    
    <br>
    
    @yield('content')    
    
    <br>
    
    <div class="container" style="background-color: #FFF;position:relative; background-color: #FFF;">
        
        <div class="row" style="position: absolute; width: 100%; background-color: #FFF; padding-bottom:.5em;">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="separaciones">
                            <h4>Acerca de nosotros</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="padding-left">
                                    <a href="{{ url('/') }}">Inicio</a><br>
                                    <a href="{{ url('history') }}">Marco Legal</a><br>
                                    <a href="{{ url('aboutus') }}">Quienes Somos?</a><br>
                                    <a href="{{ url('/visualizador') }}">Visualizador</a>
                                </div>
                            </div>
                            <div class="col-md-6 text-right margin-top">
                                2016 © Instituto Cruceño de Estadistica Todos los Derechos Reservados
                            </div>
                        </div>                   
                    </div>
                </div>                           
            </div>
        </div>    
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.6/Chart.bundle.min.js"></script>

    {{ Html::script('js/jquery.min.js') }}
    {{ Html::script('js/bootstrap.min.js') }}
    {{ Html::script('js/app.js') }}
    @yield('script')
</body>
</html>
