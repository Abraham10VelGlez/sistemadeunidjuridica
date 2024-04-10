<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
<meta charset="utf-8">   
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="cache-control" content="max-age=0" />
<meta http-equiv="cache-control" content="no-cache" />
<meta http-equiv="cache-control" content="no-store" />
<meta http-equiv="cache-control" content="must-revalidate" />
<meta http-equiv="expires" content="0" />
<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
               
        {!!Html::script('js/jquery.js') !!}
        {!!Html::script('js/app.js')!!}
        {!!Html::script('js/bootstrap.min.js')!!}
        {!!Html::script('js/jquery.min.js')!!}
        
        <link href='img/favicon.ico' rel='shortcut icon'  /> 
        <link rel="stylesheet" 	href="css/app.css">
        

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="font-family: Arial;">

        <div class="container">
            <img src="/img/banner2.png" alt="Chania" class="img-responsive" width="100%">
            <div class="col-md-12">&nbsp;</div>
<div style="color:black; font-size: 30px; text-align: center;"> Sistema de Gesti&oacuten de Documentos J&uacuteridicos del IGECEM</div>
 <div class="col-md-12">&nbsp;</div>
            <nav class="navbar navbar-inverse" role="navigation" style="background-color: #e6e6e6;border-color: #e6e6e6;">
               
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Desplegar navegación</span> <span
                            class="icon-bar"></span> <span class="icon-bar"></span> <span
                            class="icon-bar"></span>
                    </button>
                    <a style="color: black;" class="navbar-brand" href="/inicio">Usuario: {!! Auth::user()->name !!}  </a>                    
                </div>
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <li  class="#"><a href="/inicio">Nueva Búsqueda</a></li>
                        <li class="#"><a href="/mostrar">Búsquedas</a></li>                                            
                        <li class="#"><a data-toggle="dropdown" href="">Archivos</a>                        
                        <ul class="dropdown-menu">
                        <li><a href="/archivo">Búsquedas</a></li>
                        <li><a href="/achivop">Peritajes</a></li>
                        <li><a href="/achivoj">Juicios</a></li>
                        </ul>
                        </li>
                        <li  class="#"><a href="/peritaje">Nuevo Peritaje</a></li>
                        <li  class="#"><a href="/mostrarper">Peritajes</a></li>
                        <li  class="#"><a href="/juiciost">Juicio en Tr&aacute;mite</a></li>
                        <li  class="#"><a href="/mostrarjux">Listado de Juicios</a></li>
                    </ul>
 
 
                    <ul class="nav navbar-nav navbar-right">
                         <li><a  style="color: black;" href="logout">Cerrar Sesión</a></li>
                    </ul>
                        
    
                    
                </div>
            </nav>
        </div>
        <div class="container">
            @yield('content')
        </div>
        
        
        
        
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
