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
<body id="app-layout" style="background-color: #DFF0D8;">
    <div class="container" style="background-color: #FFF;">
        <div class="row">
            <div class="col-md-2 hidden-xs">
                <a href="{{ url('/') }}">
                    <img src="/img/logoice.png" class="img-responsive" alt="">
                </a>
            </div>
            <div class="col-md-8 col-xs-12">
                <h3 class="text-center" style="color:#1B5E20; font-weight:700; padding-top:.4em;">Instituto Cruceño de Estadistica</h3>
            </div>
            <div class="col-md-2 hidden-xs">
                <img src="/img/logogobernacion.png" class="img-responsive" alt="">
            </div>

        </div>    
        <div class="row">
            <div class="col-md-12">
                 <nav class="navbar">
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
                                <li><a href="{{ url('/history') }}">Historia</a></li>
                                <li><a href="{{ url('/aboutus') }}">Quienes Somos?</a></li>
                                <li><a href="http://100.192.1.196/" target="_blank" >Visualizador</a></li>
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
                                    <a href="{{ url('history') }}">Historia</a><br>
                                    <a href="{{ url('aboutus') }}">Quienes Somos?</a><br>
                                    <a href="http://100.192.1.196/" target="_blank" >Visualizador</a>
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
    @yield('script')
</body>
</html>
