@extends('layouts.app')
@section('title','JUICIOS DOC')
@section('content')

  <div class="row">
                <div class="col-md-12 center-block">
                    <div class="jumbotron">   
              @foreach ($ooff as $of)         
                    <div class="col-md-6 text-center">
                    
                    </div>
                 
                    <div class="col-md-6 text-center">
                    <a href="/ruta_docxjo/{{ $of->id }}">DESCARGAR OFICIO EN WORD</a>
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
			Expediente:
		</td>
		<td>
		&nbsp;
		</td>
		<td>
			{{ $of->expediente }}
		</td>
	</tr>
	<tr>
		
		<td>
			No.Juicio: 
		</td>
		<td>
		&nbsp;
		</td>
		<td>
			{{ $of->nojuicio }}
		</td>
	</tr>
	<tr>
		
		<td>
			Quejoso:
		</td>
		<td>
			&nbsp;
		</td>
		<td>
			{{ $of->quejoso }}
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
	{{ $of->asunto }}	
	</li>
</ul>

<p>Lo anterior, se hace de su conocimiento para que gire sus apreciables órdenes a quien corresponda se</p>

<p>No se omite manifestar, que el término para cumplimentar lo solicitado por el Juzgado referido, fenece de manera fatal el <?php echo date('d', strtotime($of->fechalimit))." de ".$meses[date('n', strtotime($of->fechalimit))-1]. " del ".date('Y', strtotime($of->fechalimit));?>; en caso contrario, se impondrá una multa a la autoridad requerida - Director General-.</p>

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