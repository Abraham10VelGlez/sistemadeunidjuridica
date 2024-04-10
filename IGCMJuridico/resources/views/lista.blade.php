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
<td><strong>No. OFICIO</strong></td>
<td><strong>TIPO</strong></td>
<td><strong>ASUNTO</strong></td>
<td><strong>FECHA DE INGRESO</strong></td>
<td><strong>FECHA LÍMITE</strong></td>
<td><strong>JUZGADO DE PROCEDENCIA</strong></td>
<td><strong>VISTA PREVIA</strong></td>
<td><strong>SCANEO</strong></td>
<td><strong>ESTATUS</strong></td>
<td><strong>CUMPLIMENTACIÓN</strong></td>
</tr>
@if(isset($todos)) @foreach($todos as $munx)
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
<input type="hidden" name="_tokenc" value=" {{csrf_token()}}" id="tokenc"> 
<li class="listoficess" data-dato="{{$munx->id}}" data-datos="{{$munx->oficio}}" style="display: -webkit-inline-box;" >
<a   href="#" data-toggle="modal" data-target="#miModal">
<strong>
oficio
</strong>
</a>
</li>               
</td>
<td> <a href="/oficios/{{$munx->scanoffice}}">{{$munx->scanoffice}} </a> </td>


@if($munx->status=='I')
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
<li class="listoficessz" data-dato="{{$munx->id}}" data-datos="{{$munx->oficio}}" style="display: -webkit-inline-box;" >
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
	
	
	
	
	
	
	
	
	
	
	
	
	
<div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<!--  <h4 class="modal-title" id="myModalLabel">Esto es un modal</h4>-->
				
<center>
	“2018. AÑO DEL BICENTENARIO DEL NATALICIO DE IGNACIO RAMÍREZ CALZADA, EL NIGROMANTE”
</center>
<br>
<center>
<table >
	<tr>
		
		<td>
			Oficio:
		</td>
		<td>
		&nbsp;
		</td>
		<td>
			<p id="part1"></p>
		</td>
	</tr>
	<tr>
		
		<td>
			 
			 <p id="part2"></p>
		</td>
		<td>
			&nbsp;
		</td>
		<td>
			
			<p id="part3"></p>
		</td>
	</tr>
	<tr>
		
		<td>
			Asunto:
		</td>
		<td>
			&nbsp;
		</td>
		<td>
		 
		 <p id="part4"></p>
		</td>
	</tr>
</table>
</center>
<br>
<p id="part5" style="text-align: right;"></p>

<p id="part6">
 
</p>


<p id="part7"></p>
<br>
<p id="part8"></p>
<br> 
	

<p id="part9"></p>

<p id="part10"></p>

<p>Sin más por el momento, aprovecho la ocasión para enviarle un cordial saludo.</p>



<center>
	
ATENTAMENTE<br>
EL TITULAR DE LA UNIDAD JURÍDICA

</center>

<br><br>
<center>
	
MARIO GARCÍA PASCACIO 

</center>


<p>
C.c.p. M. en D. Marcelo Martínez Martínez, Director General.<br>
          Archivo. 
</p>

<p>MGP*adm</p>


<div  class="modal-body">
			<div  class="col-md-12">
				<div id="mapa" class="col-md-12">
				</div>
				</div>
			</div>


			</div>
			<script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js"  ></script>
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBYxwUow1AGY1ZampFU-u6KbSMiVTr1V3s&callback=initMap"></script>
            <style>
             #mapa {
             height: 400px;
             }     
            </style>
			<script type="text/javascript">
			


	        
			</script>
			
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
{!! Form::open(array('url' => '/savecomplements', 'method' => 'post', 'files' => true)) !!}
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
