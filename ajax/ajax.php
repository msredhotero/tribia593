<?php

include ('../includes/funcionesUsuarios.php');
include ('../includes/funciones.php');
include ('../includes/funcionesHTML.php');
include ('../includes/funcionesReferencias.php');


$serviciosUsuarios  		= new ServiciosUsuarios();
$serviciosFunciones 		= new Servicios();
$serviciosHTML				= new ServiciosHTML();
$serviciosReferencias		= new ServiciosReferencias();


$accion = $_POST['accion'];


switch ($accion) {
    case 'login':
        enviarMail($serviciosUsuarios);
        break;
    case 'loginParticipantes':
    	loginParticipantes($serviciosUsuarios);
    	break;
	case 'entrar':
		entrar($serviciosUsuarios);
		break;
	case 'insertarUsuario':
        insertarUsuario($serviciosUsuarios);
        break;
	case 'modificarUsuario':
        modificarUsuario($serviciosUsuarios);
        break;
	case 'registrar':
		registrar($serviciosUsuarios);
        break;


case 'insertarParticipantes': 
insertarParticipantes($serviciosReferencias); 
break; 
case 'modificarParticipantes': 
modificarParticipantes($serviciosReferencias); 
break; 
case 'eliminarParticipantes': 
eliminarParticipantes($serviciosReferencias); 
break; 

case 'insertarPreguntas': 
insertarPreguntas($serviciosReferencias); 
break; 
case 'modificarPreguntas': 
modificarPreguntas($serviciosReferencias); 
break; 
case 'eliminarPreguntas': 
eliminarPreguntas($serviciosReferencias); 
break; 
case 'insertarUsuarios': 
insertarUsuarios($serviciosReferencias); 
break; 
case 'modificarUsuarios': 
modificarUsuarios($serviciosReferencias); 
break; 
case 'eliminarUsuarios': 
eliminarUsuarios($serviciosReferencias); 
break; 
case 'insertarUsuariostribia': 
insertarUsuariostribia($serviciosReferencias); 
break; 
case 'modificarUsuariostribia': 
modificarUsuariostribia($serviciosReferencias); 
break; 
case 'eliminarUsuariostribia': 
eliminarUsuariostribia($serviciosReferencias); 
break; 
case 'insertarPredio_menu': 
insertarPredio_menu($serviciosReferencias); 
break; 
case 'modificarPredio_menu': 
modificarPredio_menu($serviciosReferencias); 
break; 
case 'eliminarPredio_menu': 
eliminarPredio_menu($serviciosReferencias); 
break; 
case 'insertarEstados': 
insertarEstados($serviciosReferencias); 
break; 
case 'modificarEstados': 
modificarEstados($serviciosReferencias); 
break; 
case 'eliminarEstados': 
eliminarEstados($serviciosReferencias); 
break; 
case 'insertarHorarios': 
insertarHorarios($serviciosReferencias); 
break; 
case 'modificarHorarios': 
modificarHorarios($serviciosReferencias); 
break; 
case 'eliminarHorarios': 
eliminarHorarios($serviciosReferencias); 
break; 
case 'insertarMeses': 
insertarMeses($serviciosReferencias); 
break; 
case 'modificarMeses': 
modificarMeses($serviciosReferencias); 
break; 
case 'eliminarMeses': 
eliminarMeses($serviciosReferencias); 
break; 
case 'insertarPremios': 
insertarPremios($serviciosReferencias); 
break; 
case 'modificarPremios': 
modificarPremios($serviciosReferencias); 
break; 
case 'eliminarPremios': 
eliminarPremios($serviciosReferencias); 
break; 
case 'insertarRoles': 
insertarRoles($serviciosReferencias); 
break; 
case 'modificarRoles': 
modificarRoles($serviciosReferencias); 
break; 
case 'eliminarRoles': 
eliminarRoles($serviciosReferencias); 
break; 

/* juego  */

case 'agregarAcierto':
agregarAcierto($serviciosReferencias);
break;

case 'cargarBonoA':
cargarBonoA($serviciosReferencias);
break;

case 'cargarBonoB':
cargarBonoB($serviciosReferencias);
break;

case 'modificarEstado':
modificarEstado($serviciosReferencias);
break;

/* fin juego */

/* Fin */

}
/* Fin */


/* juego */

function modificarEstado($serviciosReferencias) {
	$id = $_POST['id'];
	$estado = $_POST['estado'];

	$res = $serviciosReferencias->modificarEstado($id, $estado);

	if ($res == true) { 
		echo ''; 
	} else { 
		echo 'Huvo un error al modificar datos'; 
	} 
}


function agregarAcierto($serviciosReferencias) {
	$id = $_POST['id'];
	$acierto = $_POST['acierto'];

	$res = $serviciosReferencias->agregarAcierto($id, $acierto);

	if ($res == true) { 
		echo ''; 
	} else { 
		echo 'Huvo un error al modificar datos'; 
	} 
}


function cargarBonoA($serviciosReferencias) {
	$id = $_POST['id'];

	$res = $serviciosReferencias->cargarBonoA($id);

	if ($res == true) { 
		echo ''; 
	} else { 
		echo 'Huvo un error al modificar datos'; 
	} 
}



function cargarBonoB($serviciosReferencias) {
	$id = $_POST['id'];

	$res = $serviciosReferencias->cargarBonoB($id);

	if ($res == true) { 
		echo ''; 
	} else { 
		echo 'Huvo un error al modificar datos'; 
	} 
}

/* fin juego */


function insertarParticipantes($serviciosReferencias) { 

	session_start();

	$refusuarios = $_SESSION['idusuario']; 
	$nombrecompleto = $_POST['apyn']; 
	$cedula = $_POST['cedula']; 
	$email = $_POST['email']; 

	$terminoscondiciones = $_POST['terminoscondiciones']; 

	

	$res = $serviciosReferencias->insertarParticipantes($refusuarios,$nombrecompleto,$cedula,$email,$terminoscondiciones); 
	
	if ((integer)$res > 0) { 
		

		$_SESSION['idparticipante'] = $res;
		$_SESSION['nombre_participante'] = $nombrecompleto;

		echo ''; 
	} else { 
		echo 'Huvo un error al insertar datos';	 
	} 

} 

function modificarParticipantes($serviciosReferencias) { 
	$id = $_POST['id']; 
	$refusuarios = $_POST['refusuarios']; 
	$nombrecompleto = $_POST['nombrecompleto']; 
	$cedula = $_POST['cedula']; 
	$email = $_POST['email']; 
	
	if (isset($_POST['terminoscondiciones'])) { 
		$terminoscondiciones	= 1; 
	} else { 
		$terminoscondiciones = 0; 
	} 

	
	$res = $serviciosReferencias->modificarParticipantes($id,$refusuarios,$nombrecompleto,$cedula,$email,$terminoscondiciones); 
	
	if ($res == true) { 
		echo ''; 
	} else { 
		echo 'Huvo un error al modificar datos'; 
	} 
} 


function eliminarParticipantes($serviciosReferencias) { 
	$id = $_POST['id']; 
	$res = $serviciosReferencias->eliminarParticipantes($id); 
	echo $res; 
} 


function insertarPreguntas($serviciosReferencias) { 
$secuencia = $_POST['secuencia']; 
$pregunta = $_POST['pregunta']; 
$respuestacorrecta = $_POST['respuestacorrecta']; 
$respuestaequivocada1 = $_POST['respuestaequivocada1']; 
$respuestaequivocada2 = $_POST['respuestaequivocada2']; 
$respuestaequivocada3 = $_POST['respuestaequivocada3']; 
$valor = $_POST['valor']; 
$res = $serviciosReferencias->insertarPreguntas($secuencia,$pregunta,$respuestacorrecta,$respuestaequivocada1,$respuestaequivocada2,$respuestaequivocada3,$valor); 
if ((integer)$res > 0) { 
echo ''; 
} else { 
echo 'Huvo un error al insertar datos';	 
} 
} 
function modificarPreguntas($serviciosReferencias) { 
$id = $_POST['id']; 
$secuencia = $_POST['secuencia']; 
$pregunta = $_POST['pregunta']; 
$respuestacorrecta = $_POST['respuestacorrecta']; 
$respuestaequivocada1 = $_POST['respuestaequivocada1']; 
$respuestaequivocada2 = $_POST['respuestaequivocada2']; 
$respuestaequivocada3 = $_POST['respuestaequivocada3']; 
$valor = $_POST['valor']; 
$res = $serviciosReferencias->modificarPreguntas($id,$secuencia,$pregunta,$respuestacorrecta,$respuestaequivocada1,$respuestaequivocada2,$respuestaequivocada3,$valor); 
if ($res == true) { 
echo ''; 
} else { 
echo 'Huvo un error al modificar datos'; 
} 
} 
function eliminarPreguntas($serviciosReferencias) { 
$id = $_POST['id']; 
$res = $serviciosReferencias->eliminarPreguntas($id); 
echo $res; 
} 
function insertarUsuarios($serviciosReferencias) { 
$usuario = $_POST['usuario']; 
$password = $_POST['password']; 
$refroles = $_POST['refroles']; 
$email = $_POST['email']; 
$nombrecompleto = $_POST['nombrecompleto']; 
$res = $serviciosReferencias->insertarUsuarios($usuario,$password,$refroles,$email,$nombrecompleto); 
if ((integer)$res > 0) { 
echo ''; 
} else { 
echo 'Huvo un error al insertar datos';	 
} 
} 
function modificarUsuarios($serviciosReferencias) { 
$id = $_POST['id']; 
$usuario = $_POST['usuario']; 
$password = $_POST['password']; 
$refroles = $_POST['refroles']; 
$email = $_POST['email']; 
$nombrecompleto = $_POST['nombrecompleto']; 
$res = $serviciosReferencias->modificarUsuarios($id,$usuario,$password,$refroles,$email,$nombrecompleto); 
if ($res == true) { 
echo ''; 
} else { 
echo 'Huvo un error al modificar datos'; 
} 
} 
function eliminarUsuarios($serviciosReferencias) { 
$id = $_POST['id']; 
$res = $serviciosReferencias->eliminarUsuarios($id); 
echo $res; 
} 



	function insertarUsuariostribia($serviciosReferencias) { 
		$refusuarios = $_POST['refusuarios']; 
		$cantidadaciertos = $_POST['cantidadaciertos']; 
		$intento = $_POST['intento']; 
		$refestados = $_POST['refestados']; 
		$refpremios = $_POST['refpremios']; 
		
		if (isset($_POST['puntobonus'])) { 
			$puntobonus	= 1; 
		} else { 
			$puntobonus = 0; 
		} 

		if (isset($_POST['aciertobonus'])) { 
			$aciertobonus	= 1; 
		} else { 
			$aciertobonus = 0; 
		} 
		
		
		$res = $serviciosReferencias->insertarUsuariostribia($refusuarios,$cantidadaciertos,$intento,$refestados,$refpremios,$puntobonus,$aciertobonus); 

		if ((integer)$res > 0) { 
			echo ''; 
		} else { 
			echo 'Huvo un error al insertar datos';	 
		} 
	} 


	function modificarUsuariostribia($serviciosReferencias) { 
		$id = $_POST['id']; 
		$refusuarios = $_POST['refusuarios']; 
		$cantidadaciertos = $_POST['cantidadaciertos']; 
		$intento = $_POST['intento']; 
		$refestados = $_POST['refestados']; 
		$refpremios = $_POST['refpremios']; 
		
		if (isset($_POST['puntobonus'])) { 
			$puntobonus	= 1; 
		} else { 
			$puntobonus = 0; 
		} 

		if (isset($_POST['aciertobonus'])) { 
			$aciertobonus	= 1; 
		} else { 
			$aciertobonus = 0; 
		} 
		 
		
		$res = $serviciosReferencias->modificarUsuariostribia($id,$refusuarios,$cantidadaciertos,$intento,$refestados,$refpremios,$puntobonus,$aciertobonus); 
		
		if ($res == true) { 
			echo ''; 
		} else { 
			echo 'Huvo un error al modificar datos'; 
		} 
	} 

	function eliminarUsuariostribia($serviciosReferencias) { 
		$id = $_POST['id']; 
		$res = $serviciosReferencias->eliminarUsuariostribia($id); 
		echo $res; 
	} 


function insertarPredio_menu($serviciosReferencias) { 
$url = $_POST['url']; 
$icono = $_POST['icono']; 
$nombre = $_POST['nombre']; 
$Orden = $_POST['Orden']; 
$hover = $_POST['hover']; 
$permiso = $_POST['permiso']; 
$res = $serviciosReferencias->insertarPredio_menu($url,$icono,$nombre,$Orden,$hover,$permiso); 
if ((integer)$res > 0) { 
echo ''; 
} else { 
echo 'Huvo un error al insertar datos';	 
} 
} 
function modificarPredio_menu($serviciosReferencias) { 
$id = $_POST['id']; 
$url = $_POST['url']; 
$icono = $_POST['icono']; 
$nombre = $_POST['nombre']; 
$Orden = $_POST['Orden']; 
$hover = $_POST['hover']; 
$permiso = $_POST['permiso']; 
$res = $serviciosReferencias->modificarPredio_menu($id,$url,$icono,$nombre,$Orden,$hover,$permiso); 
if ($res == true) { 
echo ''; 
} else { 
echo 'Huvo un error al modificar datos'; 
} 
} 
function eliminarPredio_menu($serviciosReferencias) { 
$id = $_POST['id']; 
$res = $serviciosReferencias->eliminarPredio_menu($id); 
echo $res; 
} 
function insertarEstados($serviciosReferencias) { 
$estado = $_POST['estado']; 
$res = $serviciosReferencias->insertarEstados($estado); 
if ((integer)$res > 0) { 
echo ''; 
} else { 
echo 'Huvo un error al insertar datos';	 
} 
} 
function modificarEstados($serviciosReferencias) { 
$id = $_POST['id']; 
$estado = $_POST['estado']; 
$res = $serviciosReferencias->modificarEstados($id,$estado); 
if ($res == true) { 
echo ''; 
} else { 
echo 'Huvo un error al modificar datos'; 
} 
} 
function eliminarEstados($serviciosReferencias) { 
$id = $_POST['id']; 
$res = $serviciosReferencias->eliminarEstados($id); 
echo $res; 
} 
function insertarHorarios($serviciosReferencias) { 
$hora = $_POST['hora']; 
$res = $serviciosReferencias->insertarHorarios($hora); 
if ((integer)$res > 0) { 
echo ''; 
} else { 
echo 'Huvo un error al insertar datos';	 
} 
} 
function modificarHorarios($serviciosReferencias) { 
$id = $_POST['id']; 
$hora = $_POST['hora']; 
$res = $serviciosReferencias->modificarHorarios($id,$hora); 
if ($res == true) { 
echo ''; 
} else { 
echo 'Huvo un error al modificar datos'; 
} 
} 
function eliminarHorarios($serviciosReferencias) { 
$id = $_POST['id']; 
$res = $serviciosReferencias->eliminarHorarios($id); 
echo $res; 
} 
function insertarMeses($serviciosReferencias) { 
$nombremes = $_POST['nombremes']; 
$res = $serviciosReferencias->insertarMeses($nombremes); 
if ((integer)$res > 0) { 
echo ''; 
} else { 
echo 'Huvo un error al insertar datos';	 
} 
} 
function modificarMeses($serviciosReferencias) { 
$id = $_POST['id']; 
$nombremes = $_POST['nombremes']; 
$res = $serviciosReferencias->modificarMeses($id,$nombremes); 
if ($res == true) { 
echo ''; 
} else { 
echo 'Huvo un error al modificar datos'; 
} 
} 
function eliminarMeses($serviciosReferencias) { 
$id = $_POST['id']; 
$res = $serviciosReferencias->eliminarMeses($id); 
echo $res; 
} 
function insertarPremios($serviciosReferencias) { 
$premio = $_POST['premio']; 
$aciertos = $_POST['aciertos']; 
$res = $serviciosReferencias->insertarPremios($premio,$aciertos); 
if ((integer)$res > 0) { 
echo ''; 
} else { 
echo 'Huvo un error al insertar datos';	 
} 
} 
function modificarPremios($serviciosReferencias) { 
$id = $_POST['id']; 
$premio = $_POST['premio']; 
$aciertos = $_POST['aciertos']; 
$res = $serviciosReferencias->modificarPremios($id,$premio,$aciertos); 
if ($res == true) { 
echo ''; 
} else { 
echo 'Huvo un error al modificar datos'; 
} 
} 
function eliminarPremios($serviciosReferencias) { 
$id = $_POST['id']; 
$res = $serviciosReferencias->eliminarPremios($id); 
echo $res; 
} 
function insertarRoles($serviciosReferencias) { 
$descripcion = $_POST['descripcion']; 
if (isset($_POST['activo'])) { 
$activo	= 1; 
} else { 
$activo = 0; 
} 
$res = $serviciosReferencias->insertarRoles($descripcion,$activo); 
if ((integer)$res > 0) { 
echo ''; 
} else { 
echo 'Huvo un error al insertar datos';	 
} 
} 
function modificarRoles($serviciosReferencias) { 
$id = $_POST['id']; 
$descripcion = $_POST['descripcion']; 
if (isset($_POST['activo'])) { 
$activo	= 1; 
} else { 
$activo = 0; 
} 
$res = $serviciosReferencias->modificarRoles($id,$descripcion,$activo); 
if ($res == true) { 
echo ''; 
} else { 
echo 'Huvo un error al modificar datos'; 
} 
} 
function eliminarRoles($serviciosReferencias) { 
$id = $_POST['id']; 
$res = $serviciosReferencias->eliminarRoles($id); 
echo $res; 
} 


////////////////////////// FIN DE TRAER DATOS ////////////////////////////////////////////////////////////

//////////////////////////  BASICO  /////////////////////////////////////////////////////////////////////////

function toArray($query)
{
    $res = array();
    while ($row = @mysql_fetch_array($query)) {
        $res[] = $row;
    }
    return $res;
}


function entrar($serviciosUsuarios) {
	$email		=	$_POST['email'];
	$pass		=	$_POST['pass'];
	echo $serviciosUsuarios->loginUsuario($email,$pass);
}


function registrar($serviciosUsuarios) {
	$usuario			=	$_POST['usuario'];
	$password			=	$_POST['password'];
	$refroll			=	$_POST['refroll'];
	$email				=	$_POST['email'];
	$nombre				=	$_POST['nombrecompleto'];
	
	$res = $serviciosUsuarios->insertarUsuario($usuario,$password,$refroll,$email,$nombre);
	if ((integer)$res > 0) {
		echo '';	
	} else {
		echo $res;	
	}
}


function insertarUsuario($serviciosUsuarios) {
	$usuario			=	$_POST['usuario'];
	$password			=	$_POST['password'];
	$refroll			=	$_POST['refroles'];
	$email				=	$_POST['email'];
	$nombre				=	$_POST['nombrecompleto'];
	$cedula				=	$_POST['cedula'];

	if (isset($_POST['terminoscondiciones'])) { 
		$terminoscondiciones	= 1; 
	} else { 
		$terminoscondiciones = 0; 
	} 

	
	$res = $serviciosUsuarios->insertarUsuario($usuario,$password,$refroll,$email,$nombre, $cedula, $terminoscondiciones);
	if ((integer)$res > 0) {
		echo '';	
	} else {
		echo $res;	
	}
}


function modificarUsuario($serviciosUsuarios) {
	$id					=	$_POST['id'];
	$usuario			=	$_POST['usuario'];
	$password			=	$_POST['password'];
	$refroll			=	$_POST['refroles'];
	$email				=	$_POST['email'];
	$nombre				=	$_POST['nombrecompleto'];
	$cedula				=	$_POST['cedula'];

	if (isset($_POST['terminoscondiciones'])) { 
		$terminoscondiciones	= 1; 
	} else { 
		$terminoscondiciones = 0; 
	} 
	
	echo $serviciosUsuarios->modificarUsuario($id,$usuario,$password,$refroll,$email,$nombre, $cedula, $terminoscondiciones);
}


function enviarMail($serviciosUsuarios) {
	$email		=	$_POST['email'];
	$pass		=	$_POST['pass'];
	//$idempresa  =	$_POST['idempresa'];
	
	echo $serviciosUsuarios->login($email,$pass);
}

function loginParticipantes($serviciosUsuarios) {
	$email		=	$_POST['email'];
	$pass		=	$_POST['pass'];
	//$idempresa  =	$_POST['idempresa'];
	
	echo $serviciosUsuarios->loginParticipantes($email,$pass);
}


function devolverImagen($nroInput) {
	
	if( $_FILES['archivo'.$nroInput]['name'] != null && $_FILES['archivo'.$nroInput]['size'] > 0 ){
	// Nivel de errores
	  error_reporting(E_ALL);
	  $altura = 100;
	  // Constantes
	  # Altura de el thumbnail en píxeles
	  //define("ALTURA", 100);
	  # Nombre del archivo temporal del thumbnail
	  //define("NAMETHUMB", "/tmp/thumbtemp"); //Esto en servidores Linux, en Windows podría ser:
	  //define("NAMETHUMB", "c:/windows/temp/thumbtemp"); //y te olvidas de los problemas de permisos
	  $NAMETHUMB = "c:/windows/temp/thumbtemp";
	  # Servidor de base de datos
	  //define("DBHOST", "localhost");
	  # nombre de la base de datos
	  //define("DBNAME", "portalinmobiliario");
	  # Usuario de base de datos
	  //define("DBUSER", "root");
	  # Password de base de datos
	  //define("DBPASSWORD", "");
	  // Mime types permitidos
	  $mimetypes = array("image/jpeg", "image/pjpeg", "image/gif", "image/png");
	  // Variables de la foto
	  $name = $_FILES["archivo".$nroInput]["name"];
	  $type = $_FILES["archivo".$nroInput]["type"];
	  $tmp_name = $_FILES["archivo".$nroInput]["tmp_name"];
	  $size = $_FILES["archivo".$nroInput]["size"];
	  // Verificamos si el archivo es una imagen válida
	  if(!in_array($type, $mimetypes))
		die("El archivo que subiste no es una imagen válida");
	  // Creando el thumbnail
	  switch($type) {
		case $mimetypes[0]:
		case $mimetypes[1]:
		  $img = imagecreatefromjpeg($tmp_name);
		  break;
		case $mimetypes[2]:
		  $img = imagecreatefromgif($tmp_name);
		  break;
		case $mimetypes[3]:
		  $img = imagecreatefrompng($tmp_name);
		  break;
	  }
	  
	  $datos = getimagesize($tmp_name);
	  
	  $ratio = ($datos[1]/$altura);
	  $ancho = round($datos[0]/$ratio);
	  $thumb = imagecreatetruecolor($ancho, $altura);
	  imagecopyresized($thumb, $img, 0, 0, 0, 0, $ancho, $altura, $datos[0], $datos[1]);
	  switch($type) {
		case $mimetypes[0]:
		case $mimetypes[1]:
		  imagejpeg($thumb, $NAMETHUMB);
			  break;
		case $mimetypes[2]:
		  imagegif($thumb, $NAMETHUMB);
		  break;
		case $mimetypes[3]:
		  imagepng($thumb, $NAMETHUMB);
		  break;
	  }
	  // Extrae los contenidos de las fotos
	  # contenido de la foto original
	  $fp = fopen($tmp_name, "rb");
	  $tfoto = fread($fp, filesize($tmp_name));
	  $tfoto = addslashes($tfoto);
	  fclose($fp);
	  # contenido del thumbnail
	  $fp = fopen($NAMETHUMB, "rb");
	  $tthumb = fread($fp, filesize($NAMETHUMB));
	  $tthumb = addslashes($tthumb);
	  fclose($fp);
	  // Borra archivos temporales si es que existen
	  //@unlink($tmp_name);
	  //@unlink(NAMETHUMB);
	} else {
		$tfoto = '';
		$type = '';
	}
	$tfoto = utf8_decode($tfoto);
	return array('tfoto' => $tfoto, 'type' => $type);	
}


?>