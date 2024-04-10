@extends('layouts.app')
@section('title','JUGADORES CREATE')
@section('content')


 @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif 
                    @if (session('statuserror'))
                        <div class="alert alert-danger">
                            {{ session('statuserror') }}
                        </div>
                    @endif 



  <div class="row">
                <div class="col-md-12 center-block">
                    <div class="jumbotron">   
              @foreach ($ooff as $of)         
                    <div class="col-md-6 text-center">
                    <a href="/expediente_peritaje/{{ $of->id }}">EXPEDIENTE</a>
                    </div>
                 
                    <div class="col-md-6 text-center">
                    <a href="/ruta_docpx/{{ $of->id }}">DESCARGAR PERITAJE EN WORD</a>
                    </div>                                  
                       
 <div class="col-md-12">&nbsp;</div><div class="col-md-12">&nbsp;</div>

  
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
			{{ $of->oficio }}/{{ $of->oficiopartdos }}
		</td>
	</tr>
	<tr>
		
		<td>
			{{ $of->tipodocumento }}:
		</td>
		<td>
			&nbsp;
		</td>
		<td>
			{{ $of->xhorto }}/{{ $of->xhortopartdos }}
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
			Se solicita designación de perito en materia de {{ $of->asunto }}
		</td>
	</tr>
</table>
</center>
<br>
<p style="text-align: right;">Toluca de Lerdo, México, <?php echo date('d', strtotime($of->fechanex))." de ".$meses[date('n', strtotime($of->fechanex))-1]. " del ".date('Y', strtotime($of->fechanex));?>.</p>

<p>
{{ $of->paradigido }}<br>
{{ $of->cargo }}<br>
P  R  E  S  E  N  T E<br>
</p>


<p>Anexo copia del auto de <?php echo date('d', strtotime($of->fechanex))." de ".$meses[date('n', strtotime($of->fechanex))-1]. " del ".date('Y', strtotime($of->fechanex));?>, emitido por el {{ $of->emitidopor }}, mediante el cual se requiere al Instituto de Información e Investigación Geográfica, Estadística y Catastral del Estado de México, a efecto de que:</p>

<ul>
	<li>
		{{ $of->motivossol }}
	</li>
</ul>

<p>Lo anterior, se hace de su conocimiento para que gire sus apreciables órdenes a quien corresponda, a efecto de que se remita por escrito a la brevedad posible a esta Unidad Jurídica, el nombre del perito designado en materia de </p>

<p>No se omite manifestar, que el término para cumplimentar el requirimiento formulado al Instituto de Información e Investigación Geográfica, Estadística y Catastral del Estado de México, fenece de manera fatal el <?php echo date('d', strtotime($of->fechalimit))." de ".$meses[date('n', strtotime($of->fechalimit))-1]. " del ".date('Y', strtotime($of->fechalimit));?>; en caso contrario, se impondrá una multa al Titular del mismo.</p>

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
@endforeach

                    </div>
                </div>
            </div>


@endsection