<?php
$user = "postgres";
$password = "Igecem2018";
$dbname = "unidadjuridica";
$port = "5432";
$host = "localhost";

$cadenaConexion = "host=$host port=$port dbname=$dbname user=$user password=$password";

$conexion = pg_connect($cadenaConexion) or die("Error en la Conexión: ".pg_last_error());
echo "--------------------Conexion Exitosa PHP - PostgreSQL---------------------------";

$query = "select * from oficios";

$resultadow = pg_query($conexion, $query) or die("Error en la Consulta SQL");

$numReg = pg_num_rows($resultadow);

if($numReg>0){
    $hoy = date('d-m-Y');
while ($fila=pg_fetch_array($resultadow)) {

           $primarykey=$fila['id'];
           ///$fe=$fila['feche'];
           $ft=$fila['fechanex'];
           $fl=$fila['fechalimit'];
           $no_oficio=$fila['oficio'];
           $oficiospartd=$fila['oficiopartdos'];
           $no_xhort=$fila['xhorto'];
           
              $fecha_inicio= date("d-m-Y", strtotime($ft));
              $fecha_limite= date("d", strtotime($fl));
              $fecha_tramite= date("d", strtotime($ft));
              $resultado=$fecha_limite-$fecha_tramite;




               $valor1= date("d", strtotime($fl))-1;
               $fechza = date('d-m-Y', strtotime($fl));
               $date = strtotime(date('d-m-Y', strtotime($fl)));
               $datetr = date('d-m-Y', strtotime($ft));
               $valoresul= $valor1.'-'.date('m', $date).'-'.date('Y', $date);
               //echo $datetr."------------".$valoresul."<br>";


$query2 = "select * from complements  where idtbloficios=".$primarykey;


$resultadow2 = pg_query($conexion, $query2) or die("Error en la Consulta SQL");

$numReglo = pg_num_rows($resultadow2);

if($numReglo>0){

}else{

 if($hoy==$fecha_inicio){               
               echo	$valor_moradoi="I";
               //echo"morado INGRESO";               

               }else if($hoy>=$fechza){
                   //echo"rojo VENCIDO";
                   echo $valorred="V";
                   $queryupdate_status = "update oficios set status='V' where id=".$primarykey;
                   $resultado_set = pg_query($conexion, $queryupdate_status) or die("Error en la Consulta SQL update");
                   

                   require 'PHPMailer/PHPMailerAutoload.php';
	
	$mail = new PHPMailer();
	
	$mail->isSMTP();
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = 'tls';
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 587;
	
	$mail->Username = 'informaticaigecem@gmail.com'; //Correo de donde enviaremos los correos
	$mail->Password = 'desarrolloDeSistemas2018'; // Password de la cuenta de envío
	
	$mail->setFrom('informaticaigecem@gmail.com', 'IGECEM-UNIDAD JURIDICA');
	$mail->addAddress('arletee_14@hotmail.com', 'Usuario'); //Correo receptor
	
	
	$mail->Subject = 'Notificacion del Sistema';
	$mail->Body    = "EL No. Oficio: ".$no_oficio."/".$oficiospartd." esta vencido";
	
	if($mail->send()) {
		echo 'Correo Enviado';
		} else {
		echo 'Error al enviar correo';
	}
     
              
               }else if($datetr < $valoresul){
                  // echo"verde TRAMITE";
                   echo $valor_verde="T";
                   $queryupdate_status = "update oficios set status='T' where id=".$primarykey;
                   $resultado_set = pg_query($conexion, $queryupdate_status) or die("Error en la Consulta SQL update");
                   
                               require 'PHPMailer/PHPMailerAutoload.php';
	
	$mail = new PHPMailer();
	
	$mail->isSMTP();
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = 'tls';
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 587;
	
	$mail->Username = 'informaticaigecem@gmail.com'; //Correo de donde enviaremos los correos
	$mail->Password = 'desarrolloDeSistemas2018'; // Password de la cuenta de envío
	
	$mail->setFrom('informaticaigecem@gmail.com', 'IGECEM-UNIDAD JURIDICA');
	$mail->addAddress('arletee_14@hotmail.com', 'Usuario'); //Correo receptor
	
	
	$mail->Subject = 'Notificacion del Sistema';
	$mail->Body    = "EL No. Oficio: ".$no_oficio."/".$oficiospartd." esta por vencer, atenderlo con urgencia";
	
	if($mail->send()) {
		echo 'Correo Enviado';
		} else {
		echo 'Error al enviar correo';
	}
                   
           }else{
               //echo "Error";
           }


}



              
      



}
}else{
echo "error";
}



die();



  /*************************ALGORITMO PARA DETERMINAR LA FECHA DE VENCIMIENTO DE UN OFICIO***********************/
  


/*

while ($fila=pg_fetch_array($resultado)) {

$fila['id'];
$fila['feche'];
$ft=$fila['fechanex'];
$fl=$fila['fechalimit'];

$fecha_limite= date("d", strtotime($fl));
$fecha_tramite= date("d", strtotime($ft));
$resultado1=$fecha_limite-$fecha_tramite;

           if($resultado1==2){             
           	   $no_oficio=$fila['oficio'];
           	   $oficiospartd=$fila['oficiopartdos'];
              // echo"Notificacion de oficio 2";                    
               //echo"<br>";
	require 'PHPMailer/PHPMailerAutoload.php';
	
	$mail = new PHPMailer();
	
	$mail->isSMTP();
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = 'tls';
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 587;
	
	$mail->Username = 'informaticaigecem@gmail.com'; //Correo de donde enviaremos los correos
	$mail->Password = 'desarrolloDeSistemas2018'; // Password de la cuenta de envío
	
	$mail->setFrom('informaticaigecem@gmail.com', 'IGECEM-UNIDAD JURIDICA');
	$mail->addAddress('arletee_14@hotmail.com', 'Usuario'); //Correo receptor
	
	
	$mail->Subject = 'Notificacion del Sistema';
	$mail->Body    = "EL No. Oficio: ".$no_oficio."/".$oficiospartd." esta por vencer, atenderlo con urgencia";
	
	if($mail->send()) {
		echo 'Correo Enviado';
		} else {
		echo 'Error al enviar correo';
	}
           }else if($resultado1==1){
           	 $no_oficio=$fila['oficio'];
           	   $oficiospartd=$fila['oficiopartdos'];
              // echo"Notificacion de oficio 1";               
               //echo"<br>";


	require 'PHPMailer/PHPMailerAutoload.php';
	
	$mail = new PHPMailer();
	
	$mail->isSMTP();
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = 'tls';
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 587;
	
	$mail->Username = 'informaticaigecem@gmail.com'; //Correo de donde enviaremos los correos
	$mail->Password = 'desarrolloDeSistemas2018'; // Password de la cuenta de envío
	
	$mail->setFrom('informaticaigecem@gmail.com', 'IGECEM-UNIDAD JURIDICA');
	$mail->addAddress('arletee_14@hotmail.com', 'Usuario'); //Correo receptor
	
	
	$mail->Subject = 'Notificacion del Sistema';
	$mail->Body    = "EL No. Oficio: ".$no_oficio."/".$oficiospartd." esta por vencer, atenderlo con urgencia";
	
	if($mail->send()) {
		echo 'Correo Enviado';
		} else {
		echo 'Error al enviar correo';
	}
	
           }else if($resultado1==0){
           	//echo $fila['oficio'];
               	 $no_oficio=$fila['oficio'];
           	   $oficiospartd=$fila['oficiopartdos'];
              // echo"Notificacion de oficio 1";               
               //echo"<br>";


	require 'PHPMailer/PHPMailerAutoload.php';
	
	$mail = new PHPMailer();
	
	$mail->isSMTP();
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = 'tls';
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 587;
	
	$mail->Username = 'informaticaigecem@gmail.com'; //Correo de donde enviaremos los correos
	$mail->Password = 'desarrolloDeSistemas2018'; // Password de la cuenta de envío
	
	$mail->setFrom('informaticaigecem@gmail.com', 'IGECEM-UNIDAD JURIDICA');
	$mail->addAddress('arletee_14@hotmail.com', 'Usuario'); //Correo receptor
	
	
	$mail->Subject = 'Notificacion del Sistema';
	$mail->Body    = "EL No. Oficio: ".$no_oficio."/".$oficiospartd." esta vencido";
	
	if($mail->send()) {
		echo 'Correo Enviado';
		} else {
		echo 'Error al enviar correo';
	}




           }else if($resultado1<0){
           	echo $fila['oficio'];
               echo "Vencido";
               echo"<br>";
           }

}
             //   echo "</table>";
}else{
                echo "No hay Registros";
}

pg_close($conexion);

die();
*/
/*

// Conectando y seleccionado la base de datos  
$dbconn = pg_connect("host=localhost dbname=unidadjuridica user=postgres password=Igecem2018")
    or die('No se ha podido conectar: ' . pg_last_error());

// Realizando una consulta SQL
$query = 'SELECT id,oficio,feche,fechanex,fechalimit FROM oficios';
$result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());





// Imprimiendo los resultados en HTML
echo "<table>\n";
while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td>".$col_value."</td>\n";
    }
    echo "\t</tr>\n";
}
echo "</table>\n";

// Liberando el conjunto de resultados
pg_free_result($result);

// Cerrando la conexión
pg_close($dbconn);



die();
*/





?>