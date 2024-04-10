<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
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
        <link rel="stylesheet"  href="css/app.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <title>Inicio</title>

         <style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.input-container {
    display: -ms-flexbox; /* IE10 */
    display: flex;
    width: 100%;
    margin-bottom: 15px;
}

.icon {
    padding: 10px;
    background: #802D25;
    color: white;
    min-width: 50px;
    text-align: center;
}

.input-field {
    width: 100%;
    padding: 10px;
    outline: none;
}

.input-field:focus {
    border: 2px solid #802D25;
}

/* Set a style for the submit button */
.btn {
    background-color: #802D25;
    color: white;
    padding: 15px 20px;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

.btn:hover {
    opacity: 1;
}
</style>
    </head>
    <body style="font-family: Arial;">
        <!--***********************************Encabezado******************************************-->
           <div class="container">
            <img src="img/banner2.png" alt="Chania" class="img-responsive" width="100%">
            @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
            @if (session('message-error'))
                        <div class="alert alert-danger">
                            {{ session('message-error') }}
                        </div>
                    @endif
            
@if(count($errors)>0)
@foreach($errors->all() as $erro)
 <div class="alert alert-danger"><p> {!! $erro !!}</p></div>
@endforeach
@endif
        </div>
        <div class="container" >
{!! Form::open(['route'=>'log.store', 'method' =>'POST']) !!}
            <div class="row">
                <div class="col-md-12 center-block" >
                    <div class="jumbotron" style="background-color: #ffffff;">
 <div style="color:black; font-size: 30px; text-align: center;"> Sistema de Gesti&oacuten de Documentos Jur&iacutedicos del IGECEM</div>
 <div class="col-md-12">&nbsp;</div>
                                                
<!--***********************************login******************************************-->
<div class="row">

<div class="col-sm-6">
    <div class="col-md-4">
    </div>
     <img src="img/docu-juridico.jpg" alt="Chania" class="img-responsive" width="50%" align="center">
</div>
<div class="col-sm-6">
<div class="col-md-12">&nbsp;</div>
<div class="col-md-12">
<div class="col-md-3">&nbsp;</div>
<div class="col-md-2 " style="text-align: center;">
</div>
<div class="col-md-12">
<div class="col-md-8">
    <div class="input-container">
    <i class="fa fa-user icon fa-2x"></i>
    <input name="name"  class="input-field" type="text" placeholder="Ingresa Nombre de Usuario" >
</div>
<!--******************Se modifico*************************
<div class="col-md-12">&nbsp;</div>
<div class="col-md-12">&nbsp;</div>
<div class="col-md-12">
<div class="col-md-3">&nbsp;</div>
<div class="col-md-2 " style="text-align: center;">{!! Form::label('name',' Usuario:')!!}</div>
<div class="col-md-3">{!! Form::text('name',null,['class' =>'form-control','placeholder' =>'Ingresa nombre de Usuario' ])!!}
-->
<div><mensajesavag id="rorre" class="msggav"></mensajesavag></div>
</div>
</div>    
</div>
<div class="col-md-12">
<div class="col-md-3">&nbsp;</div>
<div class="col-md-2 " style="text-align: center;">
</div>
<div class="col-md-12">
<div class="col-md-8">
    <div class="input-container">
     <i class="fa fa-key icon fa-2x"></i>
    <input name="password" id="password" class="input-field" type="password" placeholder="Ingresa Contraseña" >
</div>
<!--*****************Se modifico*************************
</div>
<div class="col-md-3">&nbsp;</div>        
</div>
<div class="col-md-12">&nbsp;</div>
<div class="col-md-12">
<div class="col-md-3">&nbsp;</div>
<div class="col-md-2 " style="text-align: center;">{!! Form::label('password','Contraseña:')!!}</div>
<div class="col-md-3"><input name="password" id="password"  class="form-control" type="password" placeholder="Ingresa Contraseña" >
-->
<div><mensajesavag2 id="rorre2" class="msggav"></mensajesavag2></div>
</div>
</div>      
</div>
<div class="col-md-12">
<div class="col-md-5">&nbsp;</div>
<div class="col-md-3" style="text-align: center;">&nbsp;
<button type="submit" class="btn">Iniciar</button>
<div class="col-md-12">&nbsp;</div>  
</div>
<!--********Se modifico*************
</div>
<div class="col-md-3">&nbsp;</div>        
</div>
<div class="col-md-12">&nbsp;</div>
<div class="col-md-12">&nbsp;</div>
<div class="col-md-12">
<div class="col-md-4">&nbsp;</div>
<div class="col-md-4" style="text-align: center;">
{!!Form::submit('Iniciar') !!}
</div>
<div class="col-md-4">&nbsp;</div>        
</div>
-->
</div>
</div>
<div class="col-md-4">&nbsp;</div>        
</div>
</div>
</div>
</div>

<!--*****************************************************************************-->
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        <div class="container" >
            <div class="row">
                <div class="col-md-12 center-block">
                    <div class="jumbotron" style="background-color: #ffffff; font-size: 10px;">                    
                      <center>
                            <img src="img/banner_PieDePagina2.png" alt="Chania" class="img-responsive" width="100%" >
                        </center>  
                     <!-- <CENTER>
<label>IGECEM Secretaría de Finanzas</label>
<label>Lerdo Poniente Número 101, primer piso, puerta 303 Centro Toluca</label><br>
<label>(722) 2133021, 2159481</label>
<label><a href="igecem@edomex.gob.mx">igecem@edomex.gob.mx</a></label>
                        </CENTER>
                    -->
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>