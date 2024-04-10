<?php

namespace App\Http\Controllers;
/*
use App\Catastro;
use App\Presidente;
use App\Secretario;
use App\Tesorero;
use App\Uippe;*/
use App\Oficio;
use App\Http\Requests\ValidadorRequest;
use Illuminate\Contracts\Session\Session;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Direccion;
use App\Complement;
use App\Peritaje;
use App\Complemetp;
use App\Juicio;
use App\Complementj;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    //constructor
    public function __construct(){
        //USO DE MIDDLEWARE EL DEFAULT Y EL CREADO...
        $this->middleware('auth',['only' => 'iniciov']);
        $this->middleware('inicio',['only' => 'iniciov']);        
        //$this->middleware('inicio',['only' => 'capturardatos']);
        //$this->middleware('doc',['only' => 'capturardatos']);  
    }    
    
    public function iniciov(){        
         
        //autentificamos usuaario
        $id_usu =  Auth::user()->id;   
        //invocamos el filtro de municipios...
        //$listamun = DB::table('municipios')->where('iddelegacion' ,$id_usu)->orderBy('nommun', 'desc')->get();
        
        //die();
        /*
        $pd= Presidente::find($id_usu);
        $sect=Secretario::find($id_usu);
        $tesor = Tesorero::find($id_usu);
        $catt = Catastro::find($id_usu);
        $uip= Uippe::find($id_usu);
        */      
        //return view('inicio',['pd' => $pd, 'sect' => $sect, 'tesor' =>$tesor, 'catt' => $catt, 'uip' => $uip,'listamun' => $listamun]);
        $ubica= Direccion::all();
        return view('inicio',['ubica'=>$ubica]);
        
    }
    /*
    public function capturaformulario(ValidadorRequest $request){
          
        $id_usu =  Auth::user()->id;
        $clvmun= $request->input('hiddenigcmavg');
        $presidenteupdate= DB::table('presidentes')->where('idelegmun' ,$clvmun)->get();
        $sectario=DB::table('secretarios')->where('idelegmun' ,$clvmun)->get();
        $tesorero = DB::table('tesoreros')->where('idelegmun' ,$clvmun)->get();
        $catatro = DB::table('catastros')->where('idelegmun' ,$clvmun)->get();
        $uipe= DB::table('uippes')->where('idelegmun' ,$clvmun)->get();
        //echo count($presidenteupdate);
        if(count($presidenteupdate) !=0){
            // si es 1 != 0 solo se actualiza            
            DB::table('presidentes')
            ->where('idelegmun', $clvmun)
            ->update(['nombrep' => $request->input('pnm'),'cargop' => $request->input('pcg'), 'gradoacdp' => $request->input('pga') ,'domiciliop' => $request->input('pd') ,'telefonop' => $request->input('pt'),'emailp' => $request->input('pce')]);
        }else{
            //si es 0 = 0 nuevo registro
            Presidente::create(['nombrep' => $request->input('pnm'), 'cargop' => $request->input('pcg'), 'gradoacdp' => $request->input('pga') ,'domiciliop' => $request->input('pd') ,'telefonop' => $request->input('pt'),'emailp' => $request->input('pce'),'idepmun' => $id_usu,'idelegmun' => $request->input('hiddenigcmavg')]);
        }      
        if(count($sectario) !=0){
            //si es 1 != 0 solo se actualiza
            DB::table('secretarios')
            ->where('idelegmun', $clvmun)
            ->update(['nombres' => $request->input('snm'), 'cargos' => $request->input('scg'), 'gradoacds' => $request->input('sga'),'domicilios' => $request->input('sd'),'telefonos' => $request->input('st'),'emails' => $request->input('sce')]);
        }else{
            //si es 0 = 0 nuevo registro
            Secretario::create(['nombres' => $request->input('snm'), 'cargos' => $request->input('scg'), 'gradoacds' => $request->input('sga'),'domicilios' => $request->input('sd'),'telefonos' => $request->input('st'),'emails' => $request->input('sce'),'idepmun' => $id_usu,'idelegmun' => $request->input('hiddenigcmavg')]);
        }
        if(count($tesorero) !=0){
            //si es 1 != 0 solo se actualiza
            DB::table('tesoreros')
            ->where('idelegmun', $clvmun)
            ->update(['nombret' => $request->input('tnm') , 'cargot' => $request->input('tcg'), 'gradoacdt' => $request->input('tga'),'domiciliot' => $request->input('td'),'telefonot' => $request->input('tt'),'emailt' => $request->input('tce')]);
        }else {
            //si es 0 = 0 nuevo registro
            Tesorero::create(['nombret' => $request->input('tnm') , 'cargot' => $request->input('tcg'), 'gradoacdt' => $request->input('tga'),'domiciliot' => $request->input('td'),'telefonot' => $request->input('tt'),'emailt' => $request->input('tce'),'idepmun' => $id_usu,'idelegmun' => $request->input('hiddenigcmavg')]);            
        }
        if(count($catatro) !=0){
            //si es 1 != 0 solo se actualiza
            DB::table('catastros')
            ->where('idelegmun', $clvmun)
            ->update(['nombrec' => $request->input('cnm'), 'cargoc' => $request->input('ccg'), 'gradoacdc' => $request->input('cga'),'domicilioc' => $request->input('cd'),'telefonoc' => $request->input('ct'),'emailc' => $request->input('cce')]);            
        }else{
            //si es 0 = 0 nuevo registro
            Catastro::create(['nombrec' => $request->input('cnm'), 'cargoc' => $request->input('ccg'), 'gradoacdc' => $request->input('cga'),'domicilioc' => $request->input('cd'),'telefonoc' => $request->input('ct'),'emailc' => $request->input('cce'),'idepmun' => $id_usu,'idelegmun' => $request->input('hiddenigcmavg')]);
        }
        if(count($uipe) !=0){//si es 1 != 0 solo se actualiza
            DB::table('uippes')
            ->where('idelegmun', $clvmun)
            ->update(['nombreu' => $request->input('uinm'), 'cargou' => $request->input('uicg'), 'gradoacdu' => $request->input('uiga'),'domiciliou' => $request->input('uid'),'telefonou' => $request->input('uit'),'emailu' => $request->input('uice')]);
        }else{
            //si es 0 = 0 nuevo registro
            Uippe::create(['nombreu' => $request->input('uinm'), 'cargou' => $request->input('uicg'), 'gradoacdu' => $request->input('uiga'),'domiciliou' => $request->input('uid'),'telefonou' => $request->input('uit'),'emailu' => $request->input('uice'),'idepmun' => $id_usu,'idelegmun' => $request->input('hiddenigcmavg')]);
        }
                
        return Redirect('inicio');
    }*/
    
    public function creacionmunicipios(){
        $nn="AdminAVG";
       // $ee="toluca@gmail.com";
        $t="A7l4KoMLc0"; 
        
        
        /*
         * 
         * ATLACOMULCO	A7l4KoMLc0	$2y$10$oji5HpmVMsfQTt1YBrVEMuAGi8SgCmu3U/xixE6/Lh6ZVtPkl37FO
ECATEPEC	3K4te9eC	$2y$10$HNf2pvPFnKtsiCn9KZ.WhuahOCpPNTS.GzcAIPbujSPMmGdoWnuWG
NAUCALPAN	N4UkL9aN	$2y$10$VEg3aYth6pIWaJhEAGzcjOE1YaENbDgVWDTyhB4AnTzpOnZHWryfe
NEZAHUALCOYOTL	n3Z4HaLKoY0	$2y$10$mOFMnaCvilAe9JSR.eyLKOZ5Ln2DCl5dRApbTQUao9NApXG7ZET1y
TEXCOCO	teX0c0c	$2y$10$K.l6dc73M5POktfkP0jobuNyVU6U0b.uyZUtsM8PFrcSFLwXWWUHS
TENANGO	TEzaXnG0	$2y$10$AuPGcRw/5qTNZ0aN6Vedye2myhnpRCmC37Rq6otjSn7fVZ0rEx0Om
TOLUCA	t0L2Ka	$2y$10$lQTvjx3OZVab63vmKq/VCOKtPyVt9cV1NR/qJtCUkXkkMqpdLvu4y
VALLE DE BRAVO	8rAV0vall3	$2y$10$j7Oaywj.R25VGohWZCRuz.byevvrYqQMH9Yup/ZEmjwoE85FiT3JW
ATIZAPAN DE ZARAGOZA	ZaR209anT	$2y$10$N0fmXkQqpDs4R2HF10blve2gkc0JkfHsFZ0rJKTcRL5TY6uriXijC

         * 
         * */
        
        
        //$nn="TOLUCA";
        // $ee="toluca@gmail.com";
        //$t="TOLUCA"; 
//echo         bcrypt($t);
//die();
        //User::create(['name' => $nn,'password' => bcrypt($t)]);
       // return "guardado";        
        //actualizar USUARIOS..................... O CUALQUIER TABLA..............       
        /*
        echo  $users = DB::table('users')->where('id', 9)->value('name');
        $t="ATIZAPAN DE ZARAGOZA"; 
        $eef=bcrypt($t);
        DB::table('users')->where('id', 9)->update(['password' => $eef]);
        
        
        //$users = User::table('users')->where('id', 1);
        
        die();*/
        
    }

    public function render(Request $request){
        $id_usu =  Auth::user()->id;   
        //recuperacion de clavemunicipal
        $cl=$request['xx'];
        $pd= DB::table('presidentes')->where('idelegmun' ,$cl)->get();
                
        return $pd;       
    } 
    public function render2(Request $request) {
        $id_usu =  Auth::user()->id;   
        //recuperacion de clavemunicipal
        $cl=$request['xx'];                        
        $sect=DB::table('secretarios')->where('idelegmun' ,$cl)->get();        
        return $sect;
    }
    public function render3(Request $request) {
        $id_usu =  Auth::user()->id;   
        $cl=$request['xx'];           
        $tesor = DB::table('tesoreros')->where('idelegmun' ,$cl)->get();
        return $tesor;
        
    }
    public function render4(Request $request) {
        $id_usu =  Auth::user()->id;   
        $cl=$request['xx'];
        $catt = DB::table('catastros')->where('idelegmun' ,$cl)->get();
        return $catt;
    }
    public function render5(Request $request) {
        $id_usu =  Auth::user()->id;   
        $cl=$request['xx'];
        $uip= DB::table('uippes')->where('idelegmun' ,$cl)->get();
        return $uip;
    }
    
    
    public function ListarMuncpos(){               
      
        $list2 =DB::table('users')
        
        ->whereBetween('id', [1, 9])
        ->orderBy('name', 'asc')// desc
        ->get();
       
       return view('lista',['list2' => $list2 ]);
    }

    
    public function filtermethod(Request $request){
        
        $list1 =DB::table('municipios')
        ->where('iddelegacion',$request['credencialclv'])
        ->orderBy('nommun', 'asc')// desc
        ->get();
        
        return $list1;
    }
    
    public function methoddetails(Request $request){
        //credencialclvm     
        $nombredelmun = DB::table('municipios')
        ->where('clv' ,$request['xxx'])
        ->get();                
        return $nombredelmun;
    }
    
    
    public function renderfree(Request $request){
        //$id_usu =  Auth::user()->id;
        //recuperacion de clavemunicipal
        $cl=$request['xx'];
        
        $pd= DB::table('presidentes')->select('nombrep', 'cargop', 'gradoacdp','domiciliop','telefonop','emailp')->where('idelegmun' ,$cl)->get();
        
        return $pd;       
    }
    public function render2free(Request $request) {
        //$id_usu =  Auth::user()->id;
        //recuperacion de clavemunicipal
        $cl=$request['xx'];
        $sect=DB::table('secretarios')->select('nombres', 'cargos', 'gradoacds','domicilios','telefonos','emails')->where('idelegmun' ,$cl)->get();
        return $sect;
    }
    public function render3free(Request $request) {
        //$id_usu =  Auth::user()->id;
        $cl=$request['xx'];
        $tesor = DB::table('tesoreros')->select('nombret', 'cargot', 'gradoacdt','domiciliot','telefonot','emailt')->where('idelegmun' ,$cl)->get();
        return $tesor;
        
    }
    public function render4free(Request $request) {
        //$id_usu =  Auth::user()->id;
        $cl=$request['xx'];
        $catt = DB::table('catastros')->select('nombrec', 'cargoc', 'gradoacdc','domicilioc','telefonoc','emailc')->where('idelegmun' ,$cl)->get();
        return $catt;
    }
    public function render5free(Request $request) {
        //$id_usu =  Auth::user()->id;
        $cl=$request['xx'];
        $uip= DB::table('uippes')->select('nombreu', 'cargou', 'gradoacdu','domiciliou','telefonou','emailu')->where('idelegmun' ,$cl)->get();
        return $uip;
    }
    
    
    public function word($var){
        
//echo $xhorto;
$ooff= DB::table('oficios')->where('id',$var)->get();        
          /*     
        $wordTest = new \PhpOffice\PhpWord\PhpWord();
        
        $newSection = $wordTest->addSection();
              
        $desc1 = "The Portfolio details is a very useful feature of the web page. You can establish your archived details and the works to the entire web community. It was outlined to bring in extra clients, get you selected based on this details.";            
        $desc2 = "The Portfolio details is a very useful feature of the web page. You can establish your archived details and the works to the entire web community. It was outlined to bring in extra clients, get you selected based on this details.";            

        $newSection->addText($desc1, array('name' => 'Tahoma', 'size' => 15, 'color' => 'black'));
        
        $newSection->addText($desc2, array('name' => 'Arial', 'size' => 15, 'color' => 'black', 'left' => 720));
                        
        $objectWriter = \PhpOffice\PhpWord\IOFactory::createWriter($wordTest, 'Word2007');
        try {
            $objectWriter->save(storage_path('TestWordFile.docx'));
        } catch (Exception $e) {
        }
        
        return response()->download(storage_path('TestWordFile.docx'));
        */

        /*
        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        $section = $phpWord->addSection();
        $text = $section->addText("aa");
        $text = $section->addText("bb");
        $text = $section->addText("cc",array('name'=>'Arial','size' => 20,'bold' => true));
        //$section->addImage("./images/Krunal.jpg");
        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        $objWriter->save('Appdividend.docx');
        return response()->download(public_path('Appdividend.docx'));

        */
        
        
       
        $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
        foreach ($ooff as $of) {
            
        echo '<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<meta charset="utf-8">   
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<center style="font-family: Arial;font-size:13px;">
	<strong><i>"2018. AÑO DEL BICENTENARIO DEL NATALICIO DE IGNACIO RAMÍREZ CALZADA, EL NIGROMANTE"</i></strong>
</center>
<br>
<center>
<table style=" font-family: Arial; font-size:13px;" >
	<tr>
		<td>
			<strong>Oficio:</strong>
		</td>
<td>
&nbsp;
</td>
		<td>
			'.utf8_encode($of->oficio).'/'.utf8_decode($of->oficiopartdos).'
		</td>
	</tr>
	<tr>
		<td>
			<strong>'.utf8_decode($of->tipodocumento).':'.'</strong>
		</td>
<td>
&nbsp;
</td>
		<td>
			'.utf8_decode($of->xhorto).'/'.utf8_decode($of->xhortopartdos).'
		</td>
	</tr>
	<tr>
		
		<td>
			<strong>Asunto:</strong>
		</td>
<td>
&nbsp;
</td>
		<td>
			'.utf8_decode($of->asunto).'
		</td>
	</tr>
</table>
</center>
<br>
<p style="font-family: Arial;text-align: right; font-size:13px;">Toluca de Lerdo, México, '.date("d", strtotime($of->fechanex)).' de '.$meses[date("n", strtotime($of->fechanex))-1]. ' del '.date("Y", strtotime($of->fechanex)).'.</p>

<p style="font-family: Arial;font-size:13px;"><strong>
'.utf8_decode($of->paradigido).'<br>
'.utf8_decode($of->cargo).' <br>
</strong>
<strong>P  R  E  S  E  N  T E</strong><br>
</p>


<p style="font-family: Arial;font-size:13px;">Anexo copia del auto de '.date("d", strtotime($of->fechanex)).' de '.$meses[date("n", strtotime($of->fechanex))-1]. ' del '.date("Y", strtotime($of->fechanex)).', emitido por el '.utf8_decode($of->emitidopor).', por el cual se solicita a la Dirección General del Instituto de Información e Investigación Geográfica, Estadística y Catastral del Estado de México, lo siguiente:</p>

<ul style="font-family: Arial;font-size:13px;">
	<li>
		'.utf8_decode($of->motivossol).'
	</li>
</ul>

<p style="font-family: Arial;font-size:13px;">Lo anterior, se hace de su conocimiento por ser un asunto de su competencia de conformidad con el artículo 16 fracción I del Reglamento Interior del Instituto de Información e Investigación Geográfica, Estadística y Catastral del Estado de México y numerales '.utf8_decode($of->numerales).' del Manual General de Organización del Instituto; por lo que, se solicita gire sus apreciables órdenes a quien corresponda, para que se proporcione a la brevedad posible por escrito a esta Unidad Jurídica, la información solicitada, a fin de cumplimentar el requerimiento formulado a la Dirección General del Instituto de Información e Investigación Geográfica, Estadística y Catastral del Estado de México.</p>

<p style="font-family: Arial;font-size:13px;">No se omite manifestar, que el término para proporcionar la información solicitada por el Juzgado referido, fenece de manera fatal el '.date("d", strtotime($of->fechalimit)).' de '.$meses[date("n", strtotime($of->fechalimit))-1]. ' del '.date("Y", strtotime($of->fechalimit)).'; en caso contrario, se impondrá una multa a la autoridad requerida -Director General-.</p>

<p style="font-family: Arial;font-size:13px;">Sin más por el momento, aprovecho la ocasión para enviarle un cordial saludo.</p>



<center style=" font-family: Arial; font-size:13px;">
<strong>		
ATENTAMENTE<br>
EL TITULAR DE LA UNIDAD JURÍDICA
</strong>	
</center>

<br><br>
<center style="font-family: Arial; font-size:13px;">
<strong>	
MARIO GARCÍA PASCACIO 
</strong>
</center>


<p style=" font-family: Arial; font-size:10px;">
C.c.p. M. en D. Marcelo Martínez Martínez, Director General.<br>
          Archivo. 
</p>

<p style="font-family: Arial; font-size:10px;">MGP*adm</p>
</body>
</html>';
        $valor=$of->oficio;
        }
        
        header('Content-type: application/vnd.ms-word');
        header("Content-type: charset=utf8");
        header("Content-Disposition: attachment; filename=oficio_".$valor.".doc");
        header("Pragma: no-cache");
        header("Expires: 0");
        
      //  die();
     /*   $documento = new PhpWord();
        $documento = new \PhpOffice\PhpWord\PhpWord();
        $templateWord = new TemplateProcessor('/Appdividend.docx');
        
        // --- Variables
        
        $nombre = "Sandra S.L.";
        $direccion = "Mi dirección";
        $municipio = "Mrd";
        $provincia = "Bdj";
        $cp = "02541";
        $telefono = "24536784";
        
        // --- Asignamos valores
        $templateWord->setValue('a', $nombre);
        $templateWord->setValue('b', $direccion);
        
        // --- Guardamos el documento
        $templateWord->saveAs('Documento12.docx');
        DIE();
        */
       //*METODO PARA DESCARGAR EN EL ARCHIVO EN EL NAVEGADOR...*/
     /*   header("Content-Disposition: attachment; filename=Documento1.docx; charset=iso-8859-1");
        echo file_get_contents('Documento1.docx');
        
        die();
        $documento = new PhpWord();
        
       // o
        
        $documento = new \PhpOffice\PhpWord\PhpWord();
        
        
       //Ahora ya podemos añadir elementos a nuestro documento. Tenemos que crear una sección, que luego se añadirá al documento.
        
        
        $seccion = $documento->addSection();
        
        
      //  - Texto:
        
        // Texto sin formato
        $seccion->addText(
            htmlspecialchars(
                'Primer texto - Texto sin formato'
                )
            );
        
        // Texto con formato
        $seccion->addText(
            htmlspecialchars(
                'Segundo texto con formato'
                ),
            array('name' => 'Arial', 'size' => '12', 'bold' => 'true')
            );
        
        
        // Texto con fuente personalizada
        $fuente_propia = 'mifuente';
        $documento->addFontStyle($fuente_propia,
            array('name' => 'Arial', 'size' => '14', 'bold' => 'true', 'color' => '5882FA')
            );
        
        $seccion->addText(
            htmlspecialchars(
                'Tercer texto con formato'
                ),
            $fuente_propia
            );
        
        // Texto con objetos
        $fuente = new Font();
        $fuente->setBold(true);
        $fuente->setName('Tahoma');
        $fuente->setSize(16);
        $fuente->setColor('9F81F7');
        $texto = $seccion->addText(htmlspecialchars(
            'Cuarto texto con formato'
            ));
        $texto->setFontStyle($fuente);
        
        
     //   -Tabla:
        
        // Tabla personalizada
        $estilo_tabla = array(
            'borderColor' => 'F2F2F2',
            'borderSize' => '5',
            'cellMargin' => '20',
            'bgColor' => '088A68',
        );
        
        $primera_fila = array('bgColor' => 'F2F2F2');
        $documento->addTableStyle('mitabla',$estilo_tabla, $primera_fila);
        $tabla = $seccion->addTable('mitabla');
        
        for ($row = 1; $row <= 8; $row++) {
            $tabla->addRow();
            for ($cell = 1; $cell <= 3; $cell++) {
                if($row ==1)
                    $tabla->addCell(200)->addText(htmlspecialchars('primera'));
                    else
                        $tabla->addCell(200)->addText(htmlspecialchars('celda'));
            }
        }
        
      //  -Salto:
        
        $seccion->addTextBreak(1);
        */
      ///  -Imagenes:
        /*
        $seccion->addImage(
            'imagen.jpg',
            array(
                'width' => 600,
                'height' => 400,
                'wrappingStyle' => 'behind'
            )
            );
        */
        
        /*
        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($documento, 'Word2007');
        $objWriter->save('Documento1.docx');
        
        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($documento, 'ODText');
        $objWriter->save('Documento1.odt');
        
        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($documento, 'HTML');
        $objWriter->save('Documento1.html');
        */
    }
    
    public function capturardatos(ValidadorRequest $request){
        
        
       
        
//        $pd=DB::table('oficios')->where('xhorto', 654);   
//        $sus = DB::table('oficios')->where('xhorto',654);

        /*DEVOLVER TODOS LOS REGISTROS...*/
       // $users = DB::table('oficios')->get();
        /*DEVOLVER TODOS LOS REGISTROS...*/
        
      // $pd= DB::table('oficios')->where('xhorto',$request->input('xhorto'))->get();
       
       
    //  print_r($users);
     // echo "<br><br><br>";
     // print_r($pd);
     // echo "<br><br><br>";
    // foreach ($pd as $uxser) {
         // echo $uxser->oficio;
         // echo "<br>";
       //   echo $uxser->xhorto;
     //     echo "<br>";
   //       echo $uxser->feche;
 //         echo "<br>";
 //         echo $uxser->paradigido;
 //         echo "<br>";
  //        echo $uxser->fechanex;          
 //         echo "<br>";
//      }
   //    die();
        
        $id_usu =  Auth::user()->id; 
        $ooff= DB::table('oficios')->where('oficio',$request->input('oficio'))->get();
        
        /*if(count($ooff) !=0){
            echo "ya existe un registro igual";
        }else{
            echo "no existe un registro igual";
        }die();*/
        if(count($ooff) !=0){

            $datee = DB::table('oficios')->where('oficio', $request->input('oficio'))->first();
            //print_r($datee->xhorto);
            if($datee->oficio==$request->input('oficio')){
                //aqui los datos.... si son igualezs verifica tu no. oficio.......
                //echo "ya existe un registro igual de los datos verificar";
                return Redirect('/inicio')->with('statuserror', 'ya existe un registro igual de los datos verificar');
                
            }else{                
                //echo "tiene algo";
                if($request->hasFile('scan')){
                    // recuperar el archivo
                    $file = $request->file('scan');
                    // agregar la fecha +  nombre del archivo del cliente
                    $nombredelarchivo = date('d-m-Y').'-'.$file->getClientOriginalName();
                    //ahora el archivo recuperado mover a la carpeta de(se crea una carpeta en la carpeta public y se crea una subcarpeta de images + el nombre del archivo con la fechaynombredel archivo cliente )
                    $file->move(public_path().'/oficios/',$nombredelarchivo);
                    //retornamos el nombre...
                    //return $nombredelarchivo;
                    
                }else
                {
                    $nombredelarchivo="error/";
                }
                DB::table('oficios')
                ->where('xhorto', $request->input('xhorto'))
                ->update([
                    'oficio' => $request->input('oficio'),
                    'oficiopartdos' => $request->input('oficiopartdos'),
                    'xhorto' => $request->input('xhorto'),
                    'xhortopartdos' => $request->input('xhortopartdos'),
                    'tipodocumento' => $request->input('tipodocumento'),
                    'asunto' => $request->input('asunto'),
                    'paradigido' => $request->input('paradigido'),
                    'cargo' => $request->input('cargo'),
                    'fechanex' => $request->input('fechanex'),
                    'emitidopor' => $request->input('emitidopor'),
                    'motivossol' => $request->input('motivossol'),
                    'numerales'=> $request->input('numerales'),
                    'fechalimit' => $request->input('fechalimit'),
                    'scanoffice' => $nombredelarchivo
                ]);
                return Redirect('inicio');
            }
            
            
        }else{
            //echo "nuevo";
            if($request->hasFile('scan')){
                // recuperar el archivo
                $file = $request->file('scan');
                // agregar la fecha +  nombre del archivo del cliente
                $nombredelarchivo = date('d-m-Y').'-'.$file->getClientOriginalName();
                //ahora el archivo recuperado mover a la carpeta de(se crea una carpeta en la carpeta public y se crea una subcarpeta de images + el nombre del archivo con la fechaynombredel archivo cliente )
                $file->move(public_path().'/oficios/',$nombredelarchivo);
                //retornamos el nombre...
                //return $nombredelarchivo;
                
            }else
            {
                $nombredelarchivo="error/";
            }
            $estado='I';
            //$nombredelarchivo="hola";
            //hacemos instancia al moodelo oficio
            $oficcen= new Oficio();
            $oficcen->oficio = $request->input('oficio');
            $oficcen->oficiopartdos = $request->input('oficiopartdos');
            $oficcen->xhorto = $request->input('xhorto');
            $oficcen->xhortopartdos = $request->input('xhortopartdos');
            $oficcen->tipodocumento = $request->input('tipodocumento');
            $oficcen->asunto = $request->input('asunto');            
            $oficcen->paradigido = $request->input('paradigido');
            $oficcen->cargo = $request->input('cargo');
            $oficcen->fechanex = $request->input('fechanex');
            $oficcen->emitidopor = $request->input('emitidopor');
            $oficcen->motivossol = $request->input('motivossol');
            $oficcen->numerales = $request->input('numerales');
            $oficcen->fechalimit = $request->input('fechalimit');
            $oficcen->scanoffice = $nombredelarchivo;
            $oficcen->status = $estado;
            $oficcen->idusers = $id_usu;
            $oficcen->save();
            
            //$pd= User::find($id_usu);
            //        return 'Saved';
            //return Redirect('doc');
            
            $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
            $ooff= DB::table('oficios')->where('xhorto',$request->input('xhorto'))->get();
            
            /*
             print_r($ooff);
             $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
             foreach ($ooff as $uxser) {
             echo $uxser->oficio;
             echo "<br>";
             echo $uxser->xhorto;
             echo "<br>";
             //echo date("d/m/Y", strtotime($uxser->feche));
             echo date('d', strtotime($uxser->feche))." de ".$meses[date('n', strtotime($uxser->feche))-1]. " del ".date('Y', strtotime($uxser->feche));
             // echo $uxser->feche;
             echo "<br>";
             // echo $uxser->fechanex;
             echo date('d', strtotime($uxser->fechanex))." de ".$meses[date('n', strtotime($uxser->fechanex))-1]. " del ".date('Y', strtotime($uxser->fechanex));
             echo "<br>";
             echo date('d', strtotime($uxser->fechalimit))." de ".$meses[date('n', strtotime($uxser->fechalimit))-1]. " del ".date('Y', strtotime($uxser->fechalimit));
             // echo $uxser->fechalimit;
             echo "<br>";
             }
             die();
             */
            //        return view('doc',compact('ooff'));
            return view('doc',['ooff' => $ooff, 'meses' => $meses]);
            //        return view('monedas.index')->with('monedas', $monedas);
            //return view('/doc');
            
            
        }
        //die();

                
        
        
    }
    
    
    public function edit($value){
        $oficce= DB::table('oficios')->where('id',$value)->get();
        $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
       // print_r($oficce);
       // echo "hola consulta".$value;
       // die();
        $ubica= Direccion::all();
        return view('inicio',['oficce' => $oficce,'meses' => $meses,'ubica' => $ubica]);
        
    }
    
    
    public function listado1(){        
        $todos = Oficio::all();
 
        
        /*************************ALGORITMO PARA DETERMINAR LA FECHA DE VENCIMIENTO DE UN OFICIO***********************/
        //print_r($todos);
        $hoy = date('d-m-Y');
       foreach ($todos as $aa){
           //echo $aa['feche'];
           //echo "<br>";
           $no_oficio=$aa['oficio'];
           $oficiospartd=$aa['oficiopartdos'];
           $no_xhort=$aa['xhorto'];
           $fe=$aa['feche'];
           $ft=$aa['fechanex'];
  //         echo $fecha_tramite= date("d", strtotime($ft));
          // echo "<br>";
           $fl=$aa['fechalimit'];
           $estado=$aa['status'];

 
              $fecha_inicio= date("d-m-Y", strtotime($ft));
              
              $fecha_limite= date("d", strtotime($fl));
              
              $fecha_tramite= date("d", strtotime($ft));
              
              $resultado=$fecha_limite-$fecha_tramite;


               $valor1= date("d", strtotime($fl))-1;
               
               $fechza = date('d-m-Y', strtotime($fl));
               
               $date = strtotime(date('d-m-Y', strtotime($fl)));
               
               $datetr = date('d-m-Y', strtotime($ft));
               
               $valoresul= $valor1.'-'.date('m', $date).'-'.date('Y', $date);
               
               if($estado=="C"){
                   //echo"Complemento amarrillo";
                   
               }else{
                   if($hoy==$fecha_inicio){
                       // echo"morado INGRESO";
                       
                   }else if($hoy>=$fechza){
                       // echo"rojo VENCIDO";
                       
                       $valorred="V";
                       DB::table('oficios')
                       ->where('xhorto', $no_xhort)
                       ->update([
                           'status' => $valorred
                       ]);
                       //echo"se vencio o con finalizacion";
                       $data = array(
                           'name' => "EL No. Oficio: ".$no_oficio."/".$oficiospartd." esta en vencido",
                       );
                       Mail::send('emails.information', $data, function($message)
                       {
                           $message->from('informaticaigecem@gmail.com', 'UNIDAD JURIDICA - IGECEM');
                           //matatanquiles@gmail.com
                           //arletee_14@hotmail.com
                           $message->to('arletee_14@hotmail.com')->subject('Notificacion del Sistema');
                       });
                       
                   }else if($datetr < $valoresul){
                       // echo"verde TRAMITE";
                       
                       $valor_verde="T";
                       DB::table('oficios')
                       ->where('xhorto', $no_xhort)
                       ->update([
                           'status' => $valor_verde
                       ]);
                       //echo"Notificacion de oficio 1";
                       $data = array(
                           'name' => "EL No. Oficio: ".$no_oficio."/".$oficiospartd." esta en trámite",
                       );
                       Mail::send('emails.information', $data, function($message)
                       {
                           $message->from('informaticaigecem@gmail.com', 'UNIDAD JURIDICA - IGECEM');
                           //matatanquiles@gmail.com
                           //arletee_14@hotmail.com
                           $message->to('arletee_14@hotmail.com')->subject('Notificacion del Sistema');
                       });
                       
                   }else{
                       //echo "Error";
                   }
                   }
               
       }
       
       //die();
       //$todos_update = Oficio::all();
       //$users = App\User::paginate(15);
       $todos_update= DB::table('oficios')->whereIn('status', ["I","T","V"])->orderBy('status', 'asc')->paginate(10);
       return view('lista',['todos' => $todos_update]);
        /*************************ALGORITMO PARA DETERMINAR LA FECHA DE VENCIMIENTO DE UN OFICIO***********************/
        
        
        
        
    }


    public function dataofficefilter(Request $request){
        //Request $request
        /*
        BookingDates::where('email', Input::get('email'))
        ->orWhere('name', 'like', '%' . Input::get('name') . '%')->get();
        */
//        $request['filter']
//$dat="3";
        $datasoffice = DB::table('oficios')
        ->where('oficio',$request['filter'])
        ->orWhere('oficio', 'like', '%'.$request['filter'].'%')
        //->orderBy('oficio', 'asc')// desc
        ->get();
             
        return $datasoffice;
    }

    public function correspondence(){
        /*
        $to="arletee_14@hotmail.com";
        $v="prueba";
        $receivers="usbrifa@gmail.com";
        $message="Welcome to mysite!";
        Mail::send('emails.information',$v, function($message){
            $message->from('usbrifa@gmail.com');
            $message->subject('prueba');
            $message->to($to);
        });*/
        /*
        $data = []; // Empty array
        
        Mail::send('emails.information', $data, function($message)
        {
            $message->to('email@example.com', 'Jon Doe')->subject('Welcome!');
        });
        
        return "mensaje enviado correctamente...";
        */
        //CORREO DE PRUEBA PARA EL DESARROLLO DEL SISTEMA....
        
        $data = array(
            'name' => "UNDIDAD JURIDICA",
        );
        Mail::send('emails.information', $data, function($message)
        {
            $message->from('usbrifa@gmail.com', 'PRUEBA');
            //matatanquiles@gmail.com
            //arletee_14@hotmail.com
            $message->to('matatanquiles@gmail.com')->subject('TEST U.JURIDICA');
        });
        
        return "mensaje enviado correctamente...";

        
        
        
        
        
        
    }

    
    public function detailsOffice(Request $request){

        //$request['clvof']
        //$request->input('clvof');
        //$request->input('numof');
        $datasoffice_detail = DB::table('oficios')
        ->join('direccions', 'oficios.id', '=', 'direccions.id')
        ->select('oficios.*', 'direccions.*')
        ->where('oficios.id',$request['clvof'])
        ->get();
        return $datasoffice_detail;
    }

    public function savedataeditados(Request $request){
        
       
        $id_usu =  Auth::user()->id;
        $ooff= DB::table('oficios')->where('xhorto',$request->input('xhorto'))->get();
        
        
        if(count($ooff) !=0){
            //echo "tiene algo";
            if($request->hasFile('scan')){
                // recuperar el archivo
                $file = $request->file('scan');
                // agregar la fecha +  nombre del archivo del cliente
                $nombredelarchivo = date('d-m-Y').'-'.$file->getClientOriginalName();
                //ahora el archivo recuperado mover a la carpeta de(se crea una carpeta en la carpeta public y se crea una subcarpeta de images + el nombre del archivo con la fechaynombredel archivo cliente )
                $file->move(public_path().'/oficios/',$nombredelarchivo);
                //retornamos el nombre...
                //return $nombredelarchivo;
                
            }else
            {
                $nombredelarchivo=$request->input('scan');
            }
            DB::table('oficios')
            ->where('xhorto', $request->input('xhorto'))
            ->update([
                'oficio' => $request->input('oficio'),
                'oficiopartdos' => $request->input('oficiopartdos'),
                'xhorto' => $request->input('xhorto'),
                'xhortopartdos' => $request->input('xhortopartdos'),
                'tipodocumento' => $request->input('tipodocumento'),
                'asunto' => $request->input('asunto'),
                //'feche' => $request->input('feche'),
                'paradigido' => $request->input('paradigido'),
                'cargo' => $request->input('cargo'),
                'fechanex' => $request->input('fechanex'),
                'emitidopor' => $request->input('emitidopor'),
                'motivossol' => $request->input('motivossol'),
                'numerales'=> $request->input('numerales'),
                'fechalimit' => $request->input('fechalimit'),
                'scanoffice' => $nombredelarchivo
            ]);
            return Redirect('inicio');
            
        }else{
            //echo "nuevo";
            if($request->hasFile('scan')){
                // recuperar el archivo
                $file = $request->file('scan');
                // agregar la fecha +  nombre del archivo del cliente
                $nombredelarchivo = date('d-m-Y').'-'.$file->getClientOriginalName();
                //ahora el archivo recuperado mover a la carpeta de(se crea una carpeta en la carpeta public y se crea una subcarpeta de images + el nombre del archivo con la fechaynombredel archivo cliente )
                $file->move(public_path().'/oficios/',$nombredelarchivo);
                //retornamos el nombre...
                //return $nombredelarchivo;
                
            }else
            {
                $nombredelarchivo=$request->input('scan');
            }
            $estado ="I";
            //$nombredelarchivo="hola";
            //hacemos instancia al moodelo oficio
            $oficcen= new Oficio();
            $oficcen->oficio = $request->input('oficio');
            $oficcen->oficiopartdos = $request->input('oficiopartdos');
            $oficcen->xhorto = $request->input('xhorto');
            $oficcen->xhortopartdos = $request->input('xhortopartdos');
            $oficcen->tipodocumento = $request->input('tipodocumento');
            $oficcen->asunto = $request->input('asunto');
            //$oficcen->feche = $request->input('feche');
            $oficcen->paradigido = $request->input('paradigido');
            $oficcen->cargo = $request->input('cargo');
            $oficcen->fechanex = $request->input('fechanex');
            $oficcen->emitidopor = $request->input('emitidopor');
            $oficcen->motivossol = $request->input('motivossol');
            $oficcen->numerales = $request->input('numerales');
            $oficcen->fechalimit = $request->input('fechalimit');
            $oficcen->scanoffice = $nombredelarchivo;
            $oficcen->status = $estado;
            $oficcen->idusers = $id_usu;
            $oficcen->save();

            
            $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
            $ooff= DB::table('oficios')->where('xhorto',$request->input('xhorto'))->get();
            
            //Session::flash('status','Datos Guardados');
            return Redirect('/inicio');
            //        return view('monedas.index')->with('monedas', $monedas);
            //return view('/doc');
            
            
        }
        
    }


    public function savesofficecomplement(Request $request){
        $id_usu =  Auth::user()->id;
        $idoficio=$request->input('val');
        $no_oficio=$request->input('val2');
        $datee = DB::table('complements')->where('idtbloficios',$idoficio)->get();
        //return $request->all();
        //print_r($request->all());
        //print_r($datee);
        if(count($datee) !=0){
            return Redirect('/mostrar')->with('statuserror', 'Este folio ya cuenta con archivos Complemento');
        }else{
            if($request->hasFile('upfiles')){
                // recuperar el archivo
                $file = $request->file('upfiles');
                // agregar la fecha +  nombre del archivo del cliente
                $nombredelarchivo = date('d-m-Y').'-'.$file->getClientOriginalName();
                //ahora el archivo recuperado mover a la carpeta de(se crea una carpeta en la carpeta public y se crea una subcarpeta de images + el nombre del archivo con la fechaynombredel archivo cliente )
                $file->move(public_path().'/complemento_oficios/',$nombredelarchivo);
                
            }else
            {
                $nombredelarchivo="error/";
                return Redirect('/mostrar')->with('statuserror', 'ocurrio algun problema con los archivos, verificar formato');
            }
            
            if($request->input('val')!=0){
                
                $estatusfinal="C";
                DB::table('oficios')
                ->where('id', $idoficio)
                ->update(['status' => $estatusfinal]);
                $fechaNow = date('d-m-Y');
                $complemento_docs= new Complement();
                $complemento_docs->idtbloficios = $idoficio;
                $complemento_docs->idoficio = $no_oficio;
                $complemento_docs->route = $nombredelarchivo;
                $complemento_docs->fecha = $fechaNow;
                $complemento_docs->idusers = $id_usu;
                $complemento_docs->save();
                
                
                //echo "actualizo";
                //die();
                return Redirect('/mostrar')->with('statusucess', 'Complemento Guardado');
                
            }else{
                return Redirect('/mostrar')->with('statuserror', 'ocurrio un problema con el destino del oficio');
            }
        }
        
        
        
        
        
        
    }

    public function filesview(){
        
        $almacenarchivos = DB::table('oficios')
        ->join('complements', 'oficios.id', '=', 'complements.idtbloficios')        
        ->select('oficios.*', 'complements.idtbloficios', 'complements.route')->whereIn('oficios.status', ["C"])->orderBy('oficios.oficio', 'asc')->paginate(10);
        
        //$almacenarchivos= DB::table('oficios')->whereIn('status', ["C"])->orderBy('oficio', 'asc')->paginate(10);
        return view('archivo',['almacenarchivos' => $almacenarchivos]);
    }

    public function peritajes(){
        $ubica= Direccion::all();
        $datas= DB::table('peritajes')->select('xhorto')->distinct()->get();
        return view('peritajes.inicio',['ubica'=>$ubica,'datas'=>$datas]);
            
    }
    
    
    public function capturardatosper(Request $request){
        //return $request->all();
        $id_usu =  Auth::user()->id;
        $ooff= DB::table('peritajes')->where('oficio',$request->input('oficio'))->get();
        if(count($ooff) !=0){
            
            $datee = DB::table('peritajes')->where('oficio', $request->input('oficio'))->first();
          
            if($datee->oficio==$request->input('oficio')){
                
                //return Redirect('/peritaje')->with('statuserror', 'ya existe un registro igual de los datos verificar');
                if($request->hasFile('scan')){
                    // recuperar el archivo
                    $file = $request->file('scan');
                    // agregar la fecha +  nombre del archivo del cliente
                    $nombredelarchivo = date('d-m-Y').'-'.$file->getClientOriginalName();
                    //ahora el archivo recuperado mover a la carpeta de(se crea una carpeta en la carpeta public y se crea una subcarpeta de images + el nombre del archivo con la fechaynombredel archivo cliente )
                    $file->move(public_path().'/peritajes/',$nombredelarchivo);
                    //retornamos el nombre...
                    //return $nombredelarchivo;
                    
                }else
                {
                    $nombredelarchivo="error/";
                }
                $estado='AM';
                
                if($request->input('numerales')==null){
                    $numls="N/A";
                }else{
                    $numls=$request->input('numerales');
                }
                //AM SIGNIFICA QUE ESTE PERITAJE ESTA ACTIVO Y MORE(AUMENTO)
                $oficcen= new Peritaje();
                $oficcen->oficio = $request->input('oficio');
                $oficcen->oficiopartdos = $request->input('oficiopartdos');
                $oficcen->xhorto = $request->input('xhorto');
                $oficcen->xhortopartdos = $request->input('xhortopartdos');
                $oficcen->tipodocumento = $request->input('tipodocumento');
                $oficcen->asunto = $request->input('asunto');
                $oficcen->paradigido = $request->input('paradigido');
                $oficcen->cargo = $request->input('cargo');
                $oficcen->fechanex = $request->input('fechanex');
                $oficcen->emitidopor = $request->input('emitidopor');
                $oficcen->motivossol = $request->input('motivossol');
                $oficcen->numerales = $numls;
                $oficcen->fechalimit = $request->input('fechalimit');
                $oficcen->scanoffice = $nombredelarchivo;
                $oficcen->status = $estado;
                $oficcen->idusers = $id_usu;
                $oficcen->save();
                $s=count($ooff)+1;
                  
                
                return Redirect('/peritaje')->with('status', 'El Peritaje No. '.$request->input('xhorto').'/'.$request->input('xhortopartdos').' , Parte '.$s);
            }else{              
                return Redirect('/peritaje')->with('statuserror', 'Existe un error verificar datos ');;
            }
            
           
        }else{
            //echo "nuevo";
            if($request->hasFile('scan')){
                // recuperar el archivo
                $file = $request->file('scan');
                // agregar la fecha +  nombre del archivo del cliente
                $nombredelarchivo = date('d-m-Y').'-'.$file->getClientOriginalName();
                //ahora el archivo recuperado mover a la carpeta de(se crea una carpeta en la carpeta public y se crea una subcarpeta de images + el nombre del archivo con la fechaynombredel archivo cliente )
                $file->move(public_path().'/peritajes/',$nombredelarchivo);
                //retornamos el nombre...
                //return $nombredelarchivo;
                
            }else
            {
                $nombredelarchivo="error/";
            }
            $estado='A';
            if($request->input('numerales')==null){
                $numls="N/A";
            }else{
                $numls=$request->input('numerales');
            }
            //$nombredelarchivo="hola";
            //hacemos instancia al moodelo oficio
            $oficcen= new Peritaje();
            $oficcen->oficio = $request->input('oficio');
            $oficcen->oficiopartdos = $request->input('oficiopartdos');
            $oficcen->xhorto = $request->input('xhorto');
            $oficcen->xhortopartdos = $request->input('xhortopartdos');
            $oficcen->tipodocumento = $request->input('tipodocumento');
            $oficcen->asunto = $request->input('asunto');
            $oficcen->paradigido = $request->input('paradigido');
            $oficcen->cargo = $request->input('cargo');
            $oficcen->fechanex = $request->input('fechanex');
            $oficcen->emitidopor = $request->input('emitidopor');
            $oficcen->motivossol = $request->input('motivossol');
            $oficcen->numerales = $numls;
            $oficcen->fechalimit = $request->input('fechalimit');
            $oficcen->scanoffice = $nombredelarchivo;
            $oficcen->status = $estado;
            $oficcen->idusers = $id_usu;
            $oficcen->save();
            
            
            $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
            $ooff= DB::table('peritajes')->where('xhorto',$request->input('xhorto'))->get();
            
            return view('peritajes.doc',['ooff' => $ooff, 'meses' => $meses]);
            
            
            
        }
    }

    
    public function savedataeditadosper(Request $request){
        
        return $request->all();
    }
    
    public function listado2(){
        //$todos_update= DB::table('peritajes')->whereIn('status', ["I","T","V"])->orderBy('status', 'asc')->paginate(10);
        $todos_update=DB::table('peritajes')->where('status', ["A"])->paginate(10);
       /* echo$todos_aupdate = DB::table('peritajes')
        ->select(DB::raw('count(*) as user_count, xhorto'))
        ->where('status', '=', "A")
        ->groupBy('xhorto')
        ->get();*/
        
       
        
       /* $todos_update=DB::table('peritajes')->select('id','oficio','oficiopartdos',
            'xhortopartdos','tipodocumento' ,'asunto','paradigido',
            'cargo','fechanex','emitidopor','motivossol','numerales',
            'fechalimit','scanoffice','idusers','status')->distinct()->get();*/
        return view('peritajes.lista',['todos' => $todos_update]);
    }
    
    
    public function deleteper(Request $request){
       
        //DB::table('peritajes')->where('id', '=', $request->input('selectd'))->delete();
        DB::table('peritajes')->where('id', $request->input('selectd'))->update(['status' => 'I']);
        return Redirect('/mostrarper')->with('statusucess', 'Peritaje Eliminado');
       // return $request->all();
    }
    
    public function Validateperitajex(Request $request){
        $registro=DB::table('peritajes')->where('xhorto', $request->input('clv'))->get();
        //echo $registro=DB::table('peritajes')->where('xhorto', 281)->get();
       // echo$users = DB::table('peritajes')->where('xhorto', 281)->count();
        return $registro;
    }
       
    public  function wordper($var){
        
        $ooff= DB::table('peritajes')->where('id',$var)->get();
        
        $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
        foreach ($ooff as $of) {
            
            echo '<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
                
<center style="font-family: Arial;font-size:13px;">
	<strong><i>"2018. AÑO DEL BICENTENARIO DEL NATALICIO DE IGNACIO RAMÍREZ CALZADA, EL NIGROMANTE"</i></strong>
</center>
<br>
<center>
<table style=" font-family: Arial; font-size:13px;" >
	<tr>
		<td>
			<strong>Oficio:</strong>
		</td>
<td>
&nbsp;
</td>
		<td>
			'.utf8_encode($of->oficio).'/'.utf8_decode($of->oficiopartdos).'
		</td>
	</tr>
	<tr>
		<td>
			<strong>'.utf8_decode($of->tipodocumento).':'.'</strong>
		</td>
<td>
&nbsp;
</td>
		<td>
			'.utf8_decode($of->xhorto).'/'.utf8_decode($of->xhortopartdos).'
		</td>
	</tr>
	<tr>
			    
		<td>
			<strong>Asunto:</strong>
		</td>
<td>
&nbsp;
</td>
		<td>
			Se solicita designación de perito en materia de '.utf8_decode($of->asunto).'
		</td>
	</tr>
</table>
</center>
<br>
<p style="font-family: Arial;text-align: right; font-size:13px;">Toluca de Lerdo, México, '.date("d", strtotime($of->fechanex)).' de '.$meses[date("n", strtotime($of->fechanex))-1]. ' del '.date("Y", strtotime($of->fechanex)).'.</p>
    
<p style="font-family: Arial;font-size:13px;"><strong>
'.utf8_decode($of->paradigido).'<br>
'.utf8_decode($of->cargo).' <br>
</strong>
<strong>P  R  E  S  E  N  T E</strong><br>
</p>
    
    
<p style="font-family: Arial;font-size:13px;">Anexo copia del auto de '.date("d", strtotime($of->fechanex)).' de '.$meses[date("n", strtotime($of->fechanex))-1]. ' del '.date("Y", strtotime($of->fechanex)).', emitido por el '.utf8_decode($of->emitidopor).', mediante el cual se requiere al Instituto de Información e Investigación Geográfica, Estadística y Catastral del Estado de México, a efecto de que:</p>
    
<ul style="font-family: Arial;font-size:13px;">
	<li>
		'.utf8_decode($of->motivossol).'
	</li>
</ul>
		    
<p style="font-family: Arial;font-size:13px;">Lo anterior, se hace de su conocimiento para que gire sus apreciables órdenes a quien corresponda, a efecto de que se remita por escrito a la brevedad posible a esta Unidad Jurídica, el nombre del perito designado en materia de</p>
    
<p style="font-family: Arial;font-size:13px;">No se omite manifestar, que el término para cumplimentar el requirimiento formulado al Instituto de Información e Investigación Geográfica, Estadística y Catastral del Estado de México, fenece de manera fatal el '.date("d", strtotime($of->fechalimit)).' de '.$meses[date("n", strtotime($of->fechalimit))-1]. ' del '.date("Y", strtotime($of->fechalimit)).'; en caso contrario, se impondrá una multa al Titular del mismo.</p>
    
<p style="font-family: Arial;font-size:13px;">Sin más por el momento, aprovecho la ocasión para enviarle un cordial saludo.</p>
    
    
    
<center style=" font-family: Arial; font-size:13px;">
<strong>
ATENTAMENTE<br>
EL TITULAR DE LA UNIDAD JURÍDICA
</strong>
</center>
    
<br><br>
<center style="font-family: Arial; font-size:13px;">
<strong>
MARIO GARCÍA PASCACIO
</strong>
</center>
    
    
<p style=" font-family: Arial; font-size:10px;">
C.c.p. M. en D. Marcelo Martínez Martínez, Director General.<br>
          Archivo.
</p>
    
<p style="font-family: Arial; font-size:10px;">MGP*adm</p>
</body>
</html>';
            $valor=$of->oficio;
        }
        
        header('Content-type: application/vnd.ms-word');
        header("Content-type: charset=utf8");
        header("Content-Disposition: attachment; filename=oficio_".$valor.".doc");
        header("Pragma: no-cache");
        header("Expires: 0");
    }
    
    
    public function ExpedientExt($value){
        //$oficce= DB::table('peritajes')->where('id',$value)->get();
        $oficce = DB::table('peritajes')
        ->where('xhorto', '=', $value)        
        //->orWhere('status', 'AM')
        ->get();
        
        
        if(count($oficce)<0){
            return view('peritajes.doc')->with('statuserror', 'No cuenta con mas información por el momento');
        }else {
            $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
            // print_r($oficce);
            // echo "hola consulta".$value;
            // die();
            //$ubica= Direccion::all();
            return view('peritajes.expediente',['oficce' => $oficce,'meses' => $meses]);
        }
        
    }
    

    public function savespertijcomplement(Request $request){
        
        
        $id_usu =  Auth::user()->id;
        $idoficio=$request->input('val');
        $no_oficio=$request->input('val2');
        $datee = DB::table('complemetps')->where('idtbloficios',$idoficio)->get();
        //return $request->all();
        //print_r($request->all());
        //print_r($datee);
        if(count($datee) !=0){
            return Redirect('/mostrarper')->with('statuserror', 'Este folio ya cuenta con archivos Complemento');
        }else{
            if($request->hasFile('upfiles')){
                // recuperar el archivo
                $file = $request->file('upfiles');
                // agregar la fecha +  nombre del archivo del cliente
                $nombredelarchivo = date('d-m-Y').'-'.$file->getClientOriginalName();
                //ahora el archivo recuperado mover a la carpeta de(se crea una carpeta en la carpeta public y se crea una subcarpeta de images + el nombre del archivo con la fechaynombredel archivo cliente )
                $file->move(public_path().'/complemento_peritajes/',$nombredelarchivo);
                
            }else
            {
                $nombredelarchivo="error/";
                return Redirect('/mostrarper')->with('statuserror', 'ocurrio algun problema con los archivos, verificar formato');
            }
            
            if($request->input('val')!=0){
                
                $estatusfinal="C";
                DB::table('peritajes')
                ->where('id', $idoficio)
                ->update(['status' => $estatusfinal]);
                $fechaNow = date('d-m-Y');
                $complemento_docs= new Complemetp();
                $complemento_docs->idtbloficios = $idoficio;
                $complemento_docs->idoficio = $no_oficio;
                $complemento_docs->route = $nombredelarchivo;
                $complemento_docs->fecha = $fechaNow;
                $complemento_docs->idusers = $id_usu;
                $complemento_docs->save();
                
                
                //echo "actualizo";
                //die();
                return Redirect('/mostrarper')->with('statusucess', 'Complemento Guardado');
                
            }else{
                return Redirect('/mostrarper')->with('statuserror', 'ocurrio un problema con el destino del oficio');
            }
        }
      
        
        
        
        
        
        
        
    }
    
    public function filesviewper(){
        $almacenarchivos = DB::table('peritajes')
        ->join('complemetps', 'peritajes.id', '=', 'complemetps.idtbloficios')
        ->select('peritajes.*', 'complemetps.idtbloficios', 'complemetps.route')->whereIn('peritajes.status', ["C"])->orderBy('peritajes.oficio', 'asc')->paginate(10);
        
        //$almacenarchivos= DB::table('oficios')->whereIn('status', ["C"])->orderBy('oficio', 'asc')->paginate(10);
        return view('peritajes.archivo',['almacenarchivos' => $almacenarchivos]);
    }
    
    
    
    
    
    
    
    
    
    public function juiciostramite(){
        $ubica= Direccion::all();
        $datas= DB::table('juicios')->select('expediente')->distinct()->get();
        return view('juicios.inicio',['ubica'=>$ubica,'datas'=>$datas]);
    }
    
    
    
    public function capturardatosjuit(Request $request){
        //return $request->all();
       // die();
            
        $id_usu =  Auth::user()->id;
        $ooff= DB::table('juicios')->where('expediente',$request->input('expediente'))->get();
        if(count($ooff) !=0){
            
            $datee = DB::table('juicios')->where('expediente', $request->input('expediente'))->first();
            
            if($datee->expediente==$request->input('expediente')){
                
                if($request->input('fechalimit')==null){
                    $fecha_limite= $hoy = date('d-m-Y');
                }else{
                    $fecha_limite= $request->input('fechalimit');
                }
                //return Redirect('/peritaje')->with('statuserror', 'ya existe un registro igual de los datos verificar');
                if($request->hasFile('scan')){
                    // recuperar el archivo
                    $file = $request->file('scan');
                    // agregar la fecha +  nombre del archivo del cliente
                    $nombredelarchivo = date('d-m-Y').'-'.$file->getClientOriginalName();
                    //ahora el archivo recuperado mover a la carpeta de(se crea una carpeta en la carpeta public y se crea una subcarpeta de images + el nombre del archivo con la fechaynombredel archivo cliente )
                    $file->move(public_path().'/juicios/',$nombredelarchivo);
                    //retornamos el nombre...
                    //return $nombredelarchivo;
                    
                }else
                {
                    $nombredelarchivo="error/";
                }
                $estado='AM';
                //AM SIGNIFICA QUE ESTE PERITAJE ESTA ACTIVO Y MORE(AUMENTO)
                $oficcen= new Juicio();
                $oficcen->expediente = $request->input('expediente');
                $oficcen->quejoso = $request->input('quejoso');
                $oficcen->nojuicio = $request->input('nojuicio');
                $oficcen->asunto = $request->input('asunto');
                $oficcen->paradigido = $request->input('paradigido');
                $oficcen->cargo = $request->input('cargo');
                $oficcen->fechanex = $request->input('fechanex');
                $oficcen->fechalimit = $fecha_limite;
                $oficcen->emitidopor = $request->input('emitidopor');
                $oficcen->scan = $nombredelarchivo;                
                $oficcen->status = $estado;
                $oficcen->idusers = $id_usu;
                $oficcen->save();
                $s=count($ooff)+1;
                
                
                return Redirect('/juiciost')->with('status', 'El Expediente No. '.$request->input('expediente').' y No.Juicio '.$request->input('quejoso').' , Parte '.$s);
            }else{
                return Redirect('/juiciost')->with('statuserror', 'Existe un error verificar datos ');;
            }
            
            
        }else{
            
            if($request->input('fechalimit')==null){
                $fecha_limite= $hoy = date('d-m-Y');
            }else{
                $fecha_limite= $request->input('fechalimit');
            }
            
            
            //echo "nuevo";
            if($request->hasFile('scan')){
                // recuperar el archivo
                $file = $request->file('scan');
                // agregar la fecha +  nombre del archivo del cliente
                $nombredelarchivo = date('d-m-Y').'-'.$file->getClientOriginalName();
                //ahora el archivo recuperado mover a la carpeta de(se crea una carpeta en la carpeta public y se crea una subcarpeta de images + el nombre del archivo con la fechaynombredel archivo cliente )
                $file->move(public_path().'/juicios/',$nombredelarchivo);
                //retornamos el nombre...
                //return $nombredelarchivo;
                
            }else
            {
                $nombredelarchivo="error/";
            }
            $estado='A';
            
            $oficcen= new Juicio();
            $oficcen->expediente = $request->input('expediente');
            $oficcen->quejoso = $request->input('quejoso');
            $oficcen->nojuicio = $request->input('nojuicio');
            $oficcen->asunto = $request->input('asunto');
            $oficcen->paradigido = $request->input('paradigido');
            $oficcen->cargo = $request->input('cargo');
            $oficcen->fechanex = $request->input('fechanex');
            $oficcen->fechalimit =$fecha_limite;
            $oficcen->emitidopor = $request->input('emitidopor');
            $oficcen->scan = $nombredelarchivo;
            $oficcen->status = $estado;
            $oficcen->idusers = $id_usu;            
            $oficcen->save();
            
            
            $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
            $ooff= DB::table('juicios')->where('expediente',$request->input('expediente'))->get();
            
            return view('juicios.doc',['ooff' => $ooff, 'meses' => $meses]);
            
            
            
        }
        
        
    }

    
    public function wordjui($var){
        $ooff= DB::table('juicios')->where('id',$var)->get();
        
        $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
        foreach ($ooff as $of) {
            
            echo '<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
                
<center style="font-family: Arial;font-size:13px;">
	<strong><i>"2018. AÑO DEL BICENTENARIO DEL NATALICIO DE IGNACIO RAMÍREZ CALZADA, EL NIGROMANTE"</i></strong>
</center>
<br>
<center>
<table style=" font-family: Arial; font-size:13px;" >
<tr>
		
		<td>
			Expediente:
		</td>
		<td>
		&nbsp;
		</td>
		<td>
			'.utf8_encode($of->expediente).'
		</td>
	</tr>
	<tr>
		<td>
			<strong>No. Juicio:</strong>
		</td>
<td>
&nbsp;
</td>
		<td>
			'.utf8_encode($of->nojuicio).'
		</td>
	</tr>
	<tr>
		<td>
			<strong>Quejoso:</strong>
		</td>
<td>
&nbsp;
</td>
		<td>
			'.utf8_decode($of->quejoso).'
		</td>
	</tr>
	<tr>
			    
		<td>
			<strong>Asunto:</strong>
		</td>
<td>
&nbsp;
</td>
		<td>
			'.utf8_decode($of->asunto).'
		</td>
	</tr>
</table>
</center>
<br>
<p style="font-family: Arial;text-align: right; font-size:13px;">Toluca de Lerdo, México, '.date("d", strtotime($of->fechanex)).' de '.$meses[date("n", strtotime($of->fechanex))-1]. ' del '.date("Y", strtotime($of->fechanex)).'.</p>
    
<p style="font-family: Arial;font-size:13px;"><strong>
'.utf8_decode($of->paradigido).'<br>
'.utf8_decode($of->cargo).' <br>
</strong>
<strong>P  R  E  S  E  N  T E</strong><br>
</p>
    
    
<p style="font-family: Arial;font-size:13px;">Anexo copia del auto de '.date("d", strtotime($of->fechanex)).' de '.$meses[date("n", strtotime($of->fechanex))-1]. ' del '.date("Y", strtotime($of->fechanex)).', emitido por el '.utf8_decode($of->emitidopor).', por el cual se solicita a la Dirección General del Instituto de Información e Investigación Geográfica, Estadística y Catastral del Estado de México, lo siguiente:</p>
    
<ul style="font-family: Arial;font-size:13px;">
	<li>
		'.utf8_decode($of->asunto).'
	</li>
</ul>

<p>Lo anterior, se hace de su conocimiento para que gire sus apreciables órdenes a quien corresponda se</p>

<p>No se omite manifestar, que el término para cumplimentar lo solicitado por el Juzgado referido, fenece de manera fatal el '.date("d", strtotime($of->fechalimit)).' de '.$meses[date("n", strtotime($of->fechalimit))-1]. ' del '.date("Y", strtotime($of->fechalimit)).'; en caso contrario, se impondrá una multa a la autoridad requerida - Director General-.</p>

<p>Sin más por el momento, aprovecho la ocasión para enviarle un cordial saludo.</p>
    
<center style=" font-family: Arial; font-size:13px;">
<strong>
ATENTAMENTE<br>
EL TITULAR DE LA UNIDAD JURÍDICA
</strong>
</center>
    
<br><br>
<center style="font-family: Arial; font-size:13px;">
<strong>
MARIO GARCÍA PASCACIO
</strong>
</center>
    
    
<p style=" font-family: Arial; font-size:10px;">
C.c.p. M. en D. Marcelo Martínez Martínez, Director General.<br>
          Archivo.
</p>
    
<p style="font-family: Arial; font-size:10px;">MGP*adm</p>
</body>
</html>';
            $valor=$of->expediente;
        }
        
        header('Content-type: application/vnd.ms-word');
        header("Content-type: charset=utf8");
        header("Content-Disposition: attachment; filename=oficio_".$valor.".doc");
        header("Pragma: no-cache");
        header("Expires: 0");
    }

        
    public function Validatejuixio(Request $request){
        $registro=DB::table('juicios')->where('expediente', $request->input('clv'))->get();        
        return $registro;
    }
    
    public function listado3(){
     //   $todos_update=DB::table('juicios')->where('status', ["A"])->paginate(10);     
       // return view('juicios.lista',['todos' => $todos_update]);
        
        $todos = Juicio::all();
        
        
        /*************************ALGORITMO PARA DETERMINAR LA FECHA DE VENCIMIENTO DE UN OFICIO***********************/
        //print_r($todos);
        $hoy = date('d-m-Y');
        foreach ($todos as $aa){
            //echo $aa['feche'];
            //echo "<br>";
            $no_oficio=$aa['expediente'];
            $oficiospartd=$aa['quejoso'];
            $no_xhort=$aa['nojuicio'];
            $fe=$aa['fechanex'];
            $ft=$aa['fechanex'];
            //         echo $fecha_tramite= date("d", strtotime($ft));
            // echo "<br>";
            $fl=$aa['fechalimit'];
            $estado=$aa['status'];
            
            
            $fecha_inicio= date("d-m-Y", strtotime($ft));
            
            $fecha_limite= date("d", strtotime($fl));
            
            $fecha_tramite= date("d", strtotime($ft));
            
            $resultado=$fecha_limite-$fecha_tramite;
            
            
            $valor1= date("d", strtotime($fl))-1;
            
            $fechza = date('d-m-Y', strtotime($fl));
            
            $date = strtotime(date('d-m-Y', strtotime($fl)));
            
            $datetr = date('d-m-Y', strtotime($ft));
            
            $valoresul= $valor1.'-'.date('m', $date).'-'.date('Y', $date);
            
            if($estado=="C"){
                //echo"Complemento amarrillo";
                
            }else{
                if($hoy==$fecha_inicio){
                    // echo"morado INGRESO";
                    
                }else if($hoy>=$fechza){
                    // echo"rojo VENCIDO";
                    
                    $valorred="V";
                    DB::table('juicios')
                    ->where('nojuicio', $no_xhort)
                    ->update([
                        'status' => $valorred
                    ]);
                    //echo"se vencio o con finalizacion";
                    $data = array(
                        'name' => "EL No. Oficio: ".$no_oficio."/".$oficiospartd." esta en vencido",
                    );
                    Mail::send('emails.information', $data, function($message)
                    {
                        $message->from('informaticaigecem@gmail.com', 'UNIDAD JURIDICA - IGECEM');
                        //matatanquiles@gmail.com
                        //arletee_14@hotmail.com
                        $message->to('arletee_14@hotmail.com')->subject('Notificacion del Sistema');
                    });
                    
                }else if($datetr < $valoresul){
                    // echo"verde TRAMITE";
                    
                    $valor_verde="T";
                    DB::table('juicios')
                    ->where('nojuicio', $no_xhort)
                    ->update([
                        'status' => $valor_verde
                    ]);
                    //echo"Notificacion de oficio 1";
                    $data = array(
                        'name' => "EL No. Oficio: ".$no_oficio."/".$oficiospartd." esta en trámite",
                    );
                    Mail::send('emails.information', $data, function($message)
                    {
                        $message->from('informaticaigecem@gmail.com', 'UNIDAD JURIDICA - IGECEM');
                        //matatanquiles@gmail.com
                        //arletee_14@hotmail.com
                        $message->to('arletee_14@hotmail.com')->subject('Notificacion del Sistema');
                    });
                    
                }else{
                    //echo "Error";
                }
            }
            
        }
        
        //die();
        //$todos_update = Oficio::all();
        //$users = App\User::paginate(15);
        $todos_update= DB::table('juicios')->whereIn('status', ["A","T","V"])->orderBy('status', 'asc')->paginate(10);
        return view('juicios.lista',['todos' => $todos_update]);
        /*************************ALGORITMO PARA DETERMINAR LA FECHA DE VENCIMIENTO DE UN OFICIO***********************/
        
        
    }

    
    public function savejuicicomplement(Request $request){
        $id_usu =  Auth::user()->id;
        $idoficio=$request->input('val');
        $no_oficio=$request->input('val2');
        $datee = DB::table('complementjs')->where('idtbloficios',$idoficio)->get();
        //return $request->all();
        //print_r($request->all());
        //print_r($datee);
        if(count($datee) !=0){
            return Redirect('/mostrarjux')->with('statuserror', 'Este folio ya cuenta con archivos Complemento');
        }else{
            if($request->hasFile('upfiles')){
                // recuperar el archivo
                $file = $request->file('upfiles');
                // agregar la fecha +  nombre del archivo del cliente
                $nombredelarchivo = date('d-m-Y').'-'.$file->getClientOriginalName();
                //ahora el archivo recuperado mover a la carpeta de(se crea una carpeta en la carpeta public y se crea una subcarpeta de images + el nombre del archivo con la fechaynombredel archivo cliente )
                $file->move(public_path().'/complementos_juicios/',$nombredelarchivo);
                
            }else
            {
                $nombredelarchivo="error/";
                return Redirect('/mostrarjux')->with('statuserror', 'ocurrio algun problema con los archivos, verificar formato');
            }
            
            if($request->input('val')!=0){
                
                $estatusfinal="C";
                DB::table('juicios')
                ->where('id', $idoficio)
                ->update(['status' => $estatusfinal]);
                $fechaNow = date('d-m-Y');
                $complemento_docs= new Complementj();
                $complemento_docs->idtbloficios = $idoficio;
                $complemento_docs->idoficio = $no_oficio;
                $complemento_docs->route = $nombredelarchivo;
                $complemento_docs->fecha = $fechaNow;
                $complemento_docs->idusers = $id_usu;
                $complemento_docs->save();
                
                
                //echo "actualizo";
                //die();
                return Redirect('/mostrarjux')->with('statusucess', 'Complemento Guardado');
                
            }else{
                return Redirect('/mostrarjux')->with('statuserror', 'ocurrio un problema con el destino del oficio');
            }
        }
    }
  
   
    public function filesviewjuxi(){
        
        $almacenarchivos = DB::table('juicios')
        ->join('complementjs', 'juicios.id', '=', 'complementjs.idtbloficios')
        ->select('juicios.*', 'complementjs.idtbloficios', 'complementjs.route')->whereIn('juicios.status', ["C"])->orderBy('juicios.expediente', 'asc')->paginate(10);
        
        //$almacenarchivos= DB::table('oficios')->whereIn('status', ["C"])->orderBy('oficio', 'asc')->paginate(10);
        return view('juicios.archivo',['almacenarchivos' => $almacenarchivos]);
        
        
    }
    
    public function ExpedientExtj($value){
        $oficce = DB::table('juicios')
        ->where('id', '=', $value)
        //->orWhere('status', 'AM')
        ->get();
        
        
        if(count($oficce)<0){
            return view('juicios.doc')->with('statuserror', 'No cuenta con mas información por el momento');
        }else {
            $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
            // print_r($oficce);
            // echo "hola consulta".$value;
            // die();
            //$ubica= Direccion::all();
            return view('juicios.expediente',['oficce' => $oficce,'meses' => $meses]);
        }
    }
   
    
    
}

    /*
     * arturo
     * $2y$10$P7jdE59D6ZmKCTeVXCPvzeFnjxuqFB0Wdz9JV6LOY7cOBG/1QVSt6
     * 
     * */
    
    
    
    
    
    /*

     * 
     * 
     * 
     * 
     * PARA DESAROLLAR SQL 
     * https://laravel.com/docs/5.4/queries
     * 
     * 
     * 
     * 
    select nombrep, cargop, gradoacdp, domiciliop, telefonop, emailp, nombres, cargos, gradoacds, domicilios, telefonos, emails
from presidentes aaa
join secretarios bbb on aaa.idepmun=bbb.idepmun;

select nombret, cargot, gradoacdt, domiciliot, telefonot, emailt,nombrec, cargoc, gradoacdc, domicilioc, telefonoc, emailc  from tesoreros aa
join  catastros bb on aa.idepmun=bb.idepmun;

select * from uippes;


select * from 
(select nombrep, cargop, gradoacdp, domiciliop, telefonop, emailp, nombres, cargos, gradoacds, domicilios, telefonos, emails,aaa.idepmun as idepemunaaa
from presidentes aaa
join secretarios bbb on aaa.idepmun=bbb.idepmun) as a
join 
(select nombret, cargot, gradoacdt, domiciliot, telefonot, emailt,nombrec, cargoc, gradoacdc, domicilioc, telefonoc, emailc, aa.idepmun as idepemunaa  from tesoreros aa
join  catastros bb on aa.idepmun=bb.idepmun) as b
on 
a.idepemunaaa = b.idepemunaa;



select * from 
(select * from 
(select nombrep, cargop, gradoacdp, domiciliop, telefonop, emailp, nombres, cargos, gradoacds, domicilios, telefonos, emails,aaa.idepmun as idepemunaaa
from presidentes aaa
join secretarios bbb on aaa.idepmun=bbb.idepmun) as a
join 
(select nombret, cargot, gradoacdt, domiciliot, telefonot, emailt,nombrec, cargoc, gradoacdc, domicilioc, telefonoc, emailc, aa.idepmun as idepemunaa  from tesoreros aa
join  catastros bb on aa.idepmun=bb.idepmun) as b
on 
a.idepemunaaa = b.idepemunaa) as alfa
join
(select * from uippes) as omega
on 
alfa.idepemunaa = omega.idepmun;

     * 
     * 
     * 
     * 
     * 
     * 
     * 
     * 
     * 
     * 
     * 
     * 
     * 
     * 
     * 
     * 
     * 
     * 
     * 
     * 
     * 
     * 
     * 
     * 
     * 
     * 
     * 
     * 
     * 
     * 
     *      */