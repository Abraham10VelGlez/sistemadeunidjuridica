@extends('layouts.app')
@section('title','JUGADORES CREATE')
@section('content')

  <div class="row">
                <div class="col-md-12 center-block">
                    <div class="jumbotron">   
              @foreach ($ooff as $of)         
                    <div class="col-md-6 text-center">
                    <a href="/editar_of/{{ $of->id }}">EDITAR OFICIO</a>
                    </div>
                 
                    <div class="col-md-6 text-center">
                    <a href="/ruta_docx/{{ $of->id }}">DESCARGAR OFICIO EN WORD</a>
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
			{{ $of->asunto }}
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


<p>Anexo copia del auto de <?php echo date('d', strtotime($of->fechanex))." de ".$meses[date('n', strtotime($of->fechanex))-1]. " del ".date('Y', strtotime($of->fechanex));?>, emitido por el {{ $of->emitidopor }}, por el cual se solicita a la Dirección General del Instituto de Información e Investigación Geográfica, Estadística y Catastral del Estado de México, lo siguiente:</p>

<ul>
	<li>
		{{ $of->motivossol }}
	</li>
</ul>

<p>Lo anterior, se hace de su conocimiento por ser un asunto de su competencia de conformidad con el artículo 16 fracción I del Reglamento Interior del Instituto de Información e Investigación Geográfica, Estadística y Catastral del Estado de México y numerales {{ $of->numerales }} del Manual General de Organización del Instituto; por lo que, se solicita gire sus apreciables órdenes a quien corresponda, para que se proporcione a la brevedad posible por escrito a esta Unidad Jurídica, la información solicitada, a fin de cumplimentar el requerimiento formulado a la Dirección General del Instituto de Información e Investigación Geográfica, Estadística y Catastral del Estado de México.</p>

<p>No se omite manifestar, que el término para proporcionar la información solicitada por el Juzgado referido, fenece de manera fatal el <?php echo date('d', strtotime($of->fechalimit))." de ".$meses[date('n', strtotime($of->fechalimit))-1]. " del ".date('Y', strtotime($of->fechalimit));?>; en caso contrario, se impondrá una multa a la autoridad requerida -Director General-.</p>

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