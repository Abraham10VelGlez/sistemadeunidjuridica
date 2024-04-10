<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
    
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
               
        {!!Html::script('js/jquery.js') !!}
        {!!Html::script('js/app.js')!!}
        {!!Html::script('js/bootstrap.min.js')!!}
        {!!Html::script('js/jquery.min.js')!!}
        
        <link href='img/favicon.ico' rel='shortcut icon'  /> 
        <link rel="stylesheet" 	href="css/app.css">
       
        
        
        <title>Capturadetalle</title>
    </head>
    <body>                     
        <div class="container" >
        {!! Form::open(['url' => '/captr']) !!}
            <div class="row">
                <div class="col-md-12 center-block">
                    <div class="jumbotron">
                        <h2 class="text-center text-second " style="font-variant: small-caps;">Directorio <div id="munm"></div></h2>                        


<!--*****************************************************************************-->
@if(count($errors)>0)
@foreach($errors->all() as $erro)
 <div class="alert alert-danger"><p> {!! $erro !!}</p></div>
@endforeach
@endif

<div class="row">
<h3>Presidente</h3>
<div class="col-md-12">
<div class="col-md-2">&nbsp;</div>
<div class="col-md-2 text-left">Nombre:</div>
<div class="col-md-6"><input name="pnm" id="pnm"  class="form-control" type="text" @if(isset($pd))value="{{$pd->nombrep}}"@else value="" @endif  autofocus>

</div>
<div class="col-md-2">&nbsp;</div>        
</div>

<div class="col-md-12">&nbsp;</div>

<div class="col-md-12">
<div class="col-md-2">&nbsp;</div>
<div class="col-md-2 text-left">Cargo:</div>
<div class="col-md-6"><input name="pcg" id="pcg"  class="form-control" type="text" @if(isset($pd))value="{{$pd->cargop}}"@else value="" @endif></div>
<div class="col-md-2">&nbsp;</div>        
</div>

<div class="col-md-12">&nbsp;</div>

<div class="col-md-12">
<div class="col-md-2">&nbsp;</div>
<div class="col-md-2 text-left">Grado académico:</div>
<div class="col-md-6"><input name="pga" id="pga"  class="form-control" type="text" @if(isset($pd))value="{{$pd->gradoacdp}}"@else value="" @endif></div>
<div class="col-md-2">&nbsp;</div>        
</div>

<div class="col-md-12">&nbsp;</div>

<div class="col-md-12">
<div class="col-md-2">&nbsp;</div>
<div class="col-md-2 text-left">Domicilio:</div>
<div class="col-md-6"><input name="pd" id="pd"  class="form-control" type="text" @if(isset($pd))value="{{$pd->domiciliop}}"@else value="" @endif></div>
<div class="col-md-2">&nbsp;</div>        
</div>

<div class="col-md-12">&nbsp;</div>

<div class="col-md-12">
<div class="col-md-2">&nbsp;</div>
<div class="col-md-2 text-left">Teléfono:</div>
<div class="col-md-6"><input name="pt" id="pt"  class="form-control" type="text" @if(isset($pd))value="{{$pd->telefonop}}"@else value="" @endif></div>
<div class="col-md-2">&nbsp;</div>        
</div>

<div class="col-md-12">&nbsp;</div>

<div class="col-md-12">
<div class="col-md-2">&nbsp;</div>
<div class="col-md-2 text-left">Correo electrónico:</div>
<div class="col-md-6"><input name="pce" id="pce"  class="form-control" type="email" @if(isset($pd))value="{{$pd->emailp}}"@else value="" @endif></div>
<div class="col-md-2">&nbsp;</div>        
</div>


</div>
<div class="row">
<h3>Secretario(a)</h3>
<div class="col-md-12">
<div class="col-md-2">&nbsp;</div>
<div class="col-md-2 text-left">Nombre:</div>
<div class="col-md-6"><input name="snm" id="snm"  class="form-control" type="text" @if(isset($sect))value="{{$sect->nombres}}"@else value="" @endif></div>
<div class="col-md-2">&nbsp;</div>        
</div>

<div class="col-md-12">&nbsp;</div>

<div class="col-md-12">
<div class="col-md-2">&nbsp;</div>
<div class="col-md-2 text-left">Cargo:</div>
<div class="col-md-6"><input name="scg" id="scg"  class="form-control" type="text" @if(isset($sect))value="{{$sect->cargos}}"@else value="" @endif></div>
<div class="col-md-2">&nbsp;</div>        
</div>

<div class="col-md-12">&nbsp;</div>

<div class="col-md-12">
<div class="col-md-2">&nbsp;</div>
<div class="col-md-2 text-left">Grado académico:</div>
<div class="col-md-6"><input name="sga" id="sga"  class="form-control" type="text" @if(isset($sect))value="{{$sect->gradoacds}}"@else value="" @endif></div>
<div class="col-md-2">&nbsp;</div>        
</div>

<div class="col-md-12">&nbsp;</div>

<div class="col-md-12">
<div class="col-md-2">&nbsp;</div>
<div class="col-md-2 text-left">Domicilio:</div>
<div class="col-md-6"><input name="sd" id="sd"  class="form-control" type="text" @if(isset($sect))value="{{$sect->domicilios}}"@else value="" @endif></div>
<div class="col-md-2">&nbsp;</div>        
</div>

<div class="col-md-12">&nbsp;</div>

<div class="col-md-12">
<div class="col-md-2">&nbsp;</div>
<div class="col-md-2 text-left">Teléfono:</div>
<div class="col-md-6"><input name="st" id="st"  class="form-control" type="text" @if(isset($sect))value="{{$sect->telefonos}}"@else value="" @endif></div>
<div class="col-md-2">&nbsp;</div>        
</div>


<div class="col-md-12">&nbsp;</div>

<div class="col-md-12">
<div class="col-md-2">&nbsp;</div>
<div class="col-md-2 text-left">Correo electrónico:</div>
<div class="col-md-6"><input name="sce" id="sce"  class="form-control" type="email" @if(isset($sect))value="{{$sect->emails}}"@else value="" @endif></div>
<div class="col-md-2">&nbsp;</div>        
</div>


</div>
<div class="row">
<h3>Tesorero</h3>
<div class="col-md-12">
<div class="col-md-2">&nbsp;</div>
<div class="col-md-2 text-left">Nombre:</div>
<div class="col-md-6"><input name="tnm" id="tnm"  class="form-control" type="text" @if(isset($tesor))value="{{$tesor->nombret}}"@else value="" @endif></div>
<div class="col-md-2">&nbsp;</div>        
</div>

<div class="col-md-12">&nbsp;</div>

<div class="col-md-12">
<div class="col-md-2">&nbsp;</div>
<div class="col-md-2 text-left">Cargo:</div>
<div class="col-md-6"><input name="tcg" id="tcg"  class="form-control" type="text" @if(isset($tesor))value="{{$tesor->cargot}}"@else value="" @endif></div>
<div class="col-md-2">&nbsp;</div>        
</div>

<div class="col-md-12">&nbsp;</div>

<div class="col-md-12">
<div class="col-md-2">&nbsp;</div>
<div class="col-md-2 text-left">Grado académico:</div>
<div class="col-md-6"><input name="tga" id="tga"  class="form-control" type="text" @if(isset($tesor))value="{{$tesor->gradoacdt}}"@else value="" @endif></div>
<div class="col-md-2">&nbsp;</div>        
</div>

<div class="col-md-12">&nbsp;</div>

<div class="col-md-12">
<div class="col-md-2">&nbsp;</div>
<div class="col-md-2 text-left">Domicilio:</div>
<div class="col-md-6"><input name="td" id="td"  class="form-control" type="text" @if(isset($tesor))value="{{$tesor->domiciliot}}"@else value="" @endif></div>
<div class="col-md-2">&nbsp;</div>        
</div>

<div class="col-md-12">&nbsp;</div>

<div class="col-md-12">
<div class="col-md-2">&nbsp;</div>
<div class="col-md-2 text-left">Teléfono:</div>
<div class="col-md-6"><input name="tt" id="tt"  class="form-control" type="text" @if(isset($tesor))value="{{$tesor->telefonot}}"@else value="" @endif></div>
<div class="col-md-2">&nbsp;</div>        
</div>

<div class="col-md-12">&nbsp;</div>

<div class="col-md-12">
<div class="col-md-2">&nbsp;</div>
<div class="col-md-2 text-left">Correo electrónico:</div>
<div class="col-md-6"><input name="tce" id="tce"  class="form-control" type="email" @if(isset($tesor))value="{{$tesor->emailt}}"@else value="" @endif></div>
<div class="col-md-2">&nbsp;</div>        
</div>


</div>
<div class="row">
<h3>Catastro</h3>
<div class="col-md-12">
<div class="col-md-2">&nbsp;</div>
<div class="col-md-2 text-left">Nombre:</div>
<div class="col-md-6"><input name="cnm" id="cnm"  class="form-control" type="text" @if(isset($catt))value="{{$catt->nombrec}}"@else value="" @endif></div>
<div class="col-md-2">&nbsp;</div>        
</div>

<div class="col-md-12">&nbsp;</div>

<div class="col-md-12">
<div class="col-md-2">&nbsp;</div>
<div class="col-md-2 text-left">Cargo:</div>
<div class="col-md-6"><input name="ccg" id="ccg"  class="form-control" type="text" @if(isset($catt))value="{{$catt->cargoc}}"@else value="" @endif></div>
<div class="col-md-2">&nbsp;</div>        
</div>

<div class="col-md-12">&nbsp;</div>

<div class="col-md-12">
<div class="col-md-2">&nbsp;</div>
<div class="col-md-2 text-left">Grado académico:</div>
<div class="col-md-6"><input name="cga" id="cga"  class="form-control" type="text" @if(isset($catt))value="{{$catt->gradoacdc}}"@else value="" @endif></div>
<div class="col-md-2">&nbsp;</div>        
</div>

<div class="col-md-12">&nbsp;</div>

<div class="col-md-12">
<div class="col-md-2">&nbsp;</div>
<div class="col-md-2 text-left">Domicilio:</div>
<div class="col-md-6"><input name="cd" id="cd"  class="form-control" type="text" @if(isset($catt))value="{{$catt->domicilioc}}"@else value="" @endif></div>
<div class="col-md-2">&nbsp;</div>        
</div>

<div class="col-md-12">&nbsp;</div>

<div class="col-md-12">
<div class="col-md-2">&nbsp;</div>
<div class="col-md-2 text-left">Teléfono:</div>
<div class="col-md-6"><input name="ct" id="ct"  class="form-control" type="text" @if(isset($catt))value="{{$catt->telefonoc}}"@else value="" @endif></div>
<div class="col-md-2">&nbsp;</div>        
</div>

<div class="col-md-12">&nbsp;</div>

<div class="col-md-12">
<div class="col-md-2">&nbsp;</div>
<div class="col-md-2 text-left">Correo electrónico:</div>
<div class="col-md-6"><input name="cce" id="cce"  class="form-control" type="email" @if(isset($catt))value="{{$catt->emailc}}"@else value="" @endif></div>
<div class="col-md-2">&nbsp;</div>        
</div>


</div>
<div class="row">
<h3>Titular de la Unidad de Información, Planeación, Programación y Evaluación (UIPPE) o Equivalente.</h3>
<div class="col-md-12">
<div class="col-md-2">&nbsp;</div>
<div class="col-md-2 text-left">Nombre:</div>
<div class="col-md-6"><input name="uinm" id="uinm"  class="form-control" type="text" @if(isset($uip))value="{{$uip->nombreu}}"@else value="" @endif></div>
<div class="col-md-2">&nbsp;</div>        
</div>

<div class="col-md-12">&nbsp;</div>

<div class="col-md-12">
<div class="col-md-2">&nbsp;</div>
<div class="col-md-2 text-left">Cargo:</div>
<div class="col-md-6"><input name="uicg" id="uicg"  class="form-control" type="text" @if(isset($uip))value="{{$uip->cargou}}"@else value="" @endif></div>
<div class="col-md-2">&nbsp;</div>        
</div>

<div class="col-md-12">&nbsp;</div>

<div class="col-md-12">
<div class="col-md-2">&nbsp;</div>
<div class="col-md-2 text-left">Grado académico:</div>
<div class="col-md-6"><input name="uiga" id="uiga"  class="form-control" type="text" @if(isset($uip))value="{{$uip->gradoacdu}}"@else value="" @endif></div>
<div class="col-md-2">&nbsp;</div>        
</div>

<div class="col-md-12">&nbsp;</div>

<div class="col-md-12">
<div class="col-md-2">&nbsp;</div>
<div class="col-md-2 text-left">Domicilio:</div>
<div class="col-md-6"><input name="uid" id="uid"  class="form-control" type="text" @if(isset($uip))value="{{$uip->domiciliou}}"@else value="" @endif></div>
<div class="col-md-2">&nbsp;</div>        
</div>

<div class="col-md-12">&nbsp;</div>

<div class="col-md-12">
<div class="col-md-2">&nbsp;</div>
<div class="col-md-2 text-left">Teléfono:</div>
<div class="col-md-6"><input name="uit" id="uit"  class="form-control" type="text" @if(isset($uip))value="{{$uip->telefonou}}"@else value="" @endif></div>
<div class="col-md-2">&nbsp;</div>        
</div>

<div class="col-md-12">&nbsp;</div>

<div class="col-md-12">
<div class="col-md-2">&nbsp;</div>
<div class="col-md-2 text-left">Correo electrónico:
<!--{!!Form::text('email', 'example@gmail.com')!!}-->
</div>
<div class="col-md-6"><input name="uice" id="uice"  class="form-control" type="email" @if(isset($uip))value="{{$uip->emailu}}"@else value="" @endif></div>
<div class="col-md-2">&nbsp;</div>        
</div>

<div class="col-md-12">&nbsp;</div>
<div class="col-md-12">&nbsp;</div>


<div class="col-md-12">
<div class="col-md-5">&nbsp;</div>
<div class="col-md-2">
{!!Form::submit('Guardar Datos') !!}
</div>
<div class="col-md-5">&nbsp;</div>        
</div>

</div>





</div>

</div>

<!--*****************************************************************************-->

<div id=hiddenigcm></div>
                    </div>
                    {!! Form::close() !!}
                </div>    
    </body>
    <a href="/avg">Ing. Abraham</a>
</html>
