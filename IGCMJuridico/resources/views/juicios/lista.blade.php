@extends('layouts.app')
@section('title','MOSTRAR BUSQUEDAS')
@section('content')
   

<!-- 
<div class="row">
<div class="col-md-12 center-block">
<div class="jumbotron">
<div class="row">
<div class="col-md-12">

</div>
</div>
</div>
</div>
</div>-->         

                    @if (session('statuserror'))
                        <div class="alert alert-danger">
                            {{ session('statuserror') }}
                        </div>
                    @endif 
                     @if (session('statusucess'))
                        <div class="alert alert-success">
                            {{ session('statusucess') }}
                        </div>
                    @endif 
                    


<div class="row">
<div class="col-md-12 center-block">
<div class="jumbotron">
<div class="row">
<div class="col-md-12">
<input type="hidden" name="_token" value=" {{csrf_token()}}" id="token">
<strong>BUSCAR:</strong> <input type="text" id="filtrar" name="filtrar">
<div class="col-md-12"> &nbsp;</div>
<div id="alldata">
<table border="2" style="text-align: center">
<tr>
<td><strong>No. EXPEDIENTE</strong></td>
<td><strong>No. JUICIO</strong></td>
<td><strong>ASUNTO</strong></td>
<td><strong>FECHA DE INGRESO</strong></td>
<td><strong>FECHA LÍMITE</strong></td>
<td><strong>JUZGADO DE PROCEDENCIA</strong></td>
<td><strong>DOCUMENTO</strong></td>
<td><strong>SCANEO</strong></td>
<td><strong>ESTATUS</strong></td>
<td><strong>CUMPLIMENTACIÓN</strong></td>
</tr>


  
@if(isset($todos)) @foreach($todos as $munx)
<tr>
<td>
<strong>{{$munx->expediente}} </strong>
</td>
<td>
<strong>{{$munx->nojuicio}} </strong>
</td>
<td>
<strong>{{$munx->asunto}} </strong>
</td>
<td>
<strong>
{{ date("d-m-Y", strtotime($munx->fechanex))}}
 </strong>
</td>
<td>
<strong>
@if(date("d-m-Y", strtotime($munx->fechanex))==date("d-m-Y", strtotime($munx->fechalimit)))
No tiene fecha limite
@else
{{date("d-m-Y", strtotime($munx->fechalimit))}}
@endif
 </strong>
</td>
<td>
<strong>
{{$munx->emitidopor}}
</strong>
</td>
<td>              

<a   href="/ruta_docxjo/{{ $munx->id }}">
<strong>
Descargar
</strong>
</a>
               
</td>
<td> <a href="/juicios/{{$munx->scan}}">{{$munx->scan}} </a> </td>


@if($munx->status=='A')
<td style="background-color: #ead4ff;" >
Ingreso Hoy<br>
</td>
@elseif($munx->status=='T')
<td style="background-color: #d9ffda;" >
En Trámite 
</td>
@elseif($munx->status=='V')
<td style="background-color: #f29f9f;" >
Vencida
</td>
@else
<td>

</td>
@endif
<td>
<li class="listoficessz" data-dato="{{$munx->id}}" data-datos="{{$munx->expediente}}" style="display: -webkit-inline-box;" >
<a   href="#" data-toggle="modal" data-target="#miModalc">
<strong>
Cumplimentación
</strong>
</a>
</li>
</td>
</tr>
@endforeach
@else
 ---- 
@endif
</table>
</div>
</div>
</div>
</div>
</div>
</div>
	
	
	
	




<div class="modal fade" id="miModalc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<!--  <h4 class="modal-title" id="myModalLabel">Esto es un modal</h4>-->
				
<center>
	“CUMPLIMENTACION”
</center>
<br>
<center>

</center>
<br>


<center>
	
CARGAR DOCUMENTOS ESCANEADOS<br>
{!! Form::open(array('url' => '/savecomplementsjx', 'method' => 'post', 'files' => true)) !!}
<input type="hidden" name="_tokenx" value=" {{csrf_token()}}" id="tokenx"> 
<input id="upfiles" name="upfiles" type="file"  /><!-- required="required" autofocus="autofocus" -->
<div id="d"></div>
</center>

<br><br>
<center>
	
<!--  <button  class="btn btn-success">Subir</button>-->
<input id="btnup" name="btnup" type="submit"  class="btn btn-success" value="Subir">
 {!! Form::close() !!}
</center>

			</div>
			<div id="x" class="modal-body">
				
			</div>
		</div>
	</div>
</div>
 
     
@endsection
