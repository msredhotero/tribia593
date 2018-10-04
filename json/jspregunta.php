<?php


include ('../includes/funciones.php');
include ('../includes/funcionesReferencias.php');

$serviciosFunciones = new Servicios();
$serviciosReferencias 	= new ServiciosReferencias();

$datos = 0;
if (isset($_GET['nivel']))
{
	if ($_GET['nivel'] == 11) {
		$resTraerDatos = $serviciosReferencias->traerPreguntasPorNivelLimit(11,rand(0, 6));
	} else {
		if ($_GET['nivel'] == 4) {
			$resTraerDatos = $serviciosReferencias->traerPreguntasPorNivelLimit(11,rand(0, 6));
		} else {
			$resTraerDatos = $serviciosReferencias->traerPreguntasPorNivelLimit($_GET['nivel'],rand(0, 19));
		}
	}
	
	$datos = 1;
} else {
	$resTraerDatos = $serviciosReferencias->traerPreguntasPorNivelLimit(1,1);	
}

//echo $resTraerDatos;

$token = $_GET['callback'];

header("content-type: Access-Control-Allow-Origin: *");

$ar = array();

$rand = range(3, 6);
shuffle($rand);

$cad = '';
	while ($row = mysql_fetch_array($resTraerDatos)) {
		//$cadJugadores .= '"'.$row[0].'": "'.$row['apellido'].', '.$row['nombres'].' - '.$row['nrodocumento'].'",';

		array_push($ar,array('var1' => utf8_encode($row[2]), 
							 'var2' => utf8_encode($row[$rand[0]]), 
							 'var3' => utf8_encode($row[$rand[1]]), 
							 'var4' => utf8_encode($row[$rand[2]]), 
							 'var5' => utf8_encode($row[$rand[3]]),
							 'res1' => $rand[0],
							 'res2' => $rand[1],
							 'res3' => $rand[2],
							 'res4' => $rand[3]
							));
		/*
		$cad .= '
		      {
				"var1": "'.$row['pregunta'].',
				"var2": "'.$row[$rand[0]].',
				"var3": "'.$row[$rand[1]].',
				"var4": "'.$row[$rand[2]].',
				"var5": "'.$row[$rand[3]].',
				"res1": "'.$rand[0].',
				"res2": "'.$rand[1].',
				"res3": "'.$rand[2].',
				"res4": "'.$rand[3].',
				"id": "'.$row[0].'"
			  },';
		*/
	}

//echo "[".substr($cad,0,-1)."]";
echo $token.'('.json_encode($ar).');';

//echo substr($cad,0,-1);

?>