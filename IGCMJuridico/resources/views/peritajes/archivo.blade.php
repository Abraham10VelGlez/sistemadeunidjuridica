@extends('layouts.app')
@section('title','PERITAJES ARCHIVOS')
@section('content')
   

<!-- 
<div class="row">
<div class="col-md-12 center-block">
<div class="jumbotron">
<div class="row">
<div class="col-md-12">
http://127.0.0.1:8000/editar_of/202B08003
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
<!--<strong>BUSCAR:</strong> <input type="text" id="filtrar" name="filtrar">
<div class="col-md-12"> &nbsp;</div>-->
<div id="alldata">
<table border="2" style="text-align: center">
<tr>
<td><strong>No. OFICIO</strong></td>
<td><strong>TIPO</strong></td>
<td><strong>ASUNTO</strong></td>
<td><strong>FECHA DE INGRESO</strong></td>
<td><strong>FECHA LIMITE</strong></td>
<td><strong>JUZGADO DE PROCEDENCIA</strong></td>
<td><strong>EXPEDIENTE</strong></td>
<td><strong>AGREGAR</strong></td>
</tr>
@if(isset($almacenarchivos)) @foreach($almacenarchivos as $munx)
<tr>
<td>
<strong>{{$munx->oficio}} </strong>
/
<strong>{{$munx->oficiopartdos}} </strong>
</td>
<td>
<strong>{{$munx->tipodocumento}} </strong>
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
{{ date("d-m-Y", strtotime($munx->fechalimit))}}
 </strong>
</td>
<td>
<strong>
{{$munx->emitidopor}}
</strong>
</td>
<td>              
 
<!-- data-toggle="modal" data-target="#miModal" -->
<a   href="/expediente_peritaje/{{ $munx->xhorto }}" >
<strong>
Detalles
</strong>
</a>
               
</td>


<td>
<li class="listoficessz" data-dato="{{$munx->id}}" data-datos="{{$munx->oficio}}" style="display: -webkit-inline-box;" >
<a   href="#" data-toggle="modal" data-target="#miModalc">
<strong>
Más 
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
	“AGREGA MAS ARCHIVOS”
</center>
<br>
<center>

</center>
<br>


<center>
	
CARGAR DOCUMENTOS ESCANEADOS<br>
{!! Form::open(array('url' => '/savecomplementsp', 'method' => 'post', 'files' => true)) !!}
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
