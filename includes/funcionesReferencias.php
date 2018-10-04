<?php

/**
 * @Usuarios clase en donde se accede a la base de datos
 * @ABM consultas sobre las tablas de usuarios y usarios-clientes
 */

date_default_timezone_set('America/Buenos_Aires');

class ServiciosReferencias {

function GUID()
{
    if (function_exists('com_create_guid') === true)
    {
        return trim(com_create_guid(), '{}');
    }

    return sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));
}



/* PARA Preguntas */

function insertarPreguntas($secuencia,$pregunta,$respuestacorrecta,$respuestaequivocada1,$respuestaequivocada2,$respuestaequivocada3,$valor) { 
$sql = "insert into dbpreguntas(idpregunta,secuencia,pregunta,respuestacorrecta,respuestaequivocada1,respuestaequivocada2,respuestaequivocada3,valor) 
values ('',".$secuencia.",'".($pregunta)."','".($respuestacorrecta)."','".($respuestaequivocada1)."','".($respuestaequivocada2)."','".($respuestaequivocada3)."',".$valor.")"; 
$res = $this->query($sql,1); 
return $res; 
} 


function modificarPreguntas($id,$secuencia,$pregunta,$respuestacorrecta,$respuestaequivocada1,$respuestaequivocada2,$respuestaequivocada3,$valor) { 
$sql = "update dbpreguntas 
set 
secuencia = ".$secuencia.",pregunta = '".($pregunta)."',respuestacorrecta = '".($respuestacorrecta)."',respuestaequivocada1 = '".($respuestaequivocada1)."',respuestaequivocada2 = '".($respuestaequivocada2)."',respuestaequivocada3 = '".($respuestaequivocada3)."',valor = ".$valor." 
where idpregunta =".$id; 
$res = $this->query($sql,0); 
return $res; 
} 


function eliminarPreguntas($id) { 
$sql = "delete from dbpreguntas where idpregunta =".$id; 
$res = $this->query($sql,0); 
return $res; 
} 



function traerPreguntas() { 
$sql = "select 
p.idpregunta,
p.secuencia,
p.pregunta,
p.respuestacorrecta,
p.respuestaequivocada1,
p.respuestaequivocada2,
p.respuestaequivocada3,
p.valor
from dbpreguntas p 
order by 1"; 
$res = $this->query($sql,0); 
return $res; 
} 

function traerPreguntasPorNivelLimit($nivel, $limit) { 
$sql = "select 
p.idpregunta,
p.secuencia,
p.pregunta,
p.respuestacorrecta,
p.respuestaequivocada1,
p.respuestaequivocada2,
p.respuestaequivocada3,
p.valor
from dbpreguntas p 
where p.secuencia = ".$nivel."
limit ".$limit.",1"; 
$res = $this->query($sql,0); 
return $res; 
} 


function traerPreguntasPorId($id) { 
$sql = "select idpregunta,secuencia,pregunta,respuestacorrecta,respuestaequivocada1,respuestaequivocada2,respuestaequivocada3,valor from dbpreguntas where idpregunta =".$id; 
$res = $this->query($sql,0); 
return $res; 
} 

/* Fin */
/* /* Fin de la Tabla: dbpreguntas*/


/* PARA Usuarios */

function insertarUsuarios($usuario,$password,$refroles,$email,$nombrecompleto) { 
$sql = "insert into dbusuarios(idusuario,usuario,password,refroles,email,nombrecompleto) 
values ('','".($usuario)."','".($password)."',".$refroles.",'".($email)."','".($nombrecompleto)."')"; 
$res = $this->query($sql,1); 
return $res; 
} 


function modificarUsuarios($id,$usuario,$password,$refroles,$email,$nombrecompleto) { 
$sql = "update dbusuarios 
set 
usuario = '".($usuario)."',password = '".($password)."',refroles = ".$refroles.",email = '".($email)."',nombrecompleto = '".($nombrecompleto)."' 
where idusuario =".$id; 
$res = $this->query($sql,0); 
return $res; 
} 


function eliminarUsuarios($id) { 
$sql = "delete from dbusuarios where idusuario =".$id; 
$res = $this->query($sql,0); 
return $res; 
} 


function traerUsuarios() { 
$sql = "select 
u.idusuario,
u.usuario,
u.password,
u.refroles,
u.email,
u.nombrecompleto
from dbusuarios u 
inner join tbroles rol ON rol.idrol = u.refroles 
order by 1"; 
$res = $this->query($sql,0); 
return $res; 
} 


function traerUsuariosPorId($id) { 
$sql = "select idusuario,usuario,password,refroles,email,nombrecompleto from dbusuarios where idusuario =".$id; 
$res = $this->query($sql,0); 
return $res; 
} 

/* Fin */
/* /* Fin de la Tabla: dbusuarios*/



/* PARA Usuariostribia */

function insertarUsuariostribia($refparticipantes,$cantidadaciertos,$intento,$refestados,$refpremios,$puntobonusa,$aciertobonusa,$puntobonusb,$aciertobonusb) { 
$sql = "insert into dbusuariostribia(idusuariotribia,refparticipantes,cantidadaciertos,intento,refestados,refpremios,puntobonusa,aciertobonusa,puntobonusb,aciertobonusb) 
values ('',".$refparticipantes.",".$cantidadaciertos.",".$intento.",".$refestados.",".$refpremios.",".$puntobonusa.",".$aciertobonusa.",".$puntobonusb.",".$aciertobonusb.")"; 
$res = $this->query($sql,1); 
return $res; 
} 


function modificarUsuariostribia($id,$refparticipantes,$cantidadaciertos,$intento,$refestados,$refpremios,$puntobonusa,$aciertobonusa,$puntobonusb,$aciertobonusb) { 
$sql = "update dbusuariostribia 
set 
refparticipantes = ".$refparticipantes.",cantidadaciertos = ".$cantidadaciertos.",intento = ".$intento.",refestados = ".$refestados.",refpremios = ".$refpremios.",puntobonusa = ".$puntobonusa.",aciertobonusa = ".$aciertobonusa.",puntobonusb = ".$puntobonusb.",aciertobonusb = ".$aciertobonusb." 
where idusuariotribia =".$id; 
$res = $this->query($sql,0); 
return $res; 
} 

function modificarEstado($id, $estado) {
	$sql = "update dbusuariostribia
			set refestados = ".$estado."
			 where refparticipantes = ".$id;
	$res = $this->query($sql,0); 
	return $res; 
}

function agregarAcierto($id, $acierto) {
	$sql = "update dbusuariostribia
			set intento = (intento + 1), cantidadaciertos = (cantidadaciertos + ".$acierto.")
			 where refparticipantes = ".$id;
	$res = $this->query($sql,0); 
	return $res; 		 
}


function cargarBonoA($id) {
	$sql = "update dbusuariostribia
			set puntobonusa = 1, aciertobonusa = 1
			 where refparticipantes = ".$id;
	$res = $this->query($sql,0); 
	return $res; 		 
}


function cargarBonoB($id) {
	$sql = "update dbusuariostribia
			set puntobonusb = 1, aciertobonusb = 1
			 where refparticipantes = ".$id;
	$res = $this->query($sql,0); 
	return $res; 		 
}


function eliminarUsuariostribia($id) { 
$sql = "delete from dbusuariostribia where idusuariotribia =".$id; 
$res = $this->query($sql,0); 
return $res; 
} 


function traerUsuariostribia() { 
$sql = "select 
u.idusuariotribia,
u.refparticipantes,
u.cantidadaciertos,
u.intento,
u.refestados,
u.refpremios,
u.puntobonusa,
u.aciertobonusa,
u.puntobonusb,
u.aciertobonusb,
u.fechacreacion
from dbusuariostribia u 
inner join dbparticipantes par ON par.idparticipante = u.refparticipantes 
inner join dbusuarios us ON us.idusuario = par.refusuarios 
inner join tbestados est ON est.idestado = u.refestados 
inner join tbpremios pre ON pre.idpremio = u.refpremios 
order by 1"; 
$res = $this->query($sql,0); 
return $res; 
} 


function traerUsuariostribiaGrid() { 
$sql = "select 
u.idusuariotribia,
par.nombrecompleto,
par.cedula,
par.email,
u.cantidadaciertos,
u.intento,
date_format(u.fechacreacion, '%Y/%m/%d %H:%i:%s') as fechacreacion,
u.puntobonusa,
u.aciertobonusa,
u.puntobonusb,
u.aciertobonusb,

u.refparticipantes,
u.refestados,
u.refpremios
from dbusuariostribia u 
inner join dbparticipantes par ON par.idparticipante = u.refparticipantes 
inner join dbusuarios us ON us.idusuario = par.refusuarios 
inner join tbestados est ON est.idestado = u.refestados 
inner join tbpremios pre ON pre.idpremio = u.refpremios 
where est.idestado in (3)
order by u.cantidadaciertos desc"; 
$res = $this->query($sql,0); 
return $res; 
} 


function traerUsuariostribiaPorId($id) { 
$sql = "select idusuariotribia,refparticipantes,cantidadaciertos,
		intento,refestados,refpremios,
		(case when puntobonusa = 1 then 'Si' else 'No' end) as puntobonusa,
		(case when aciertobonusa = 1 then 'Si' else 'No' end) as aciertobonusa,
		(case when puntobonusb = 1 then 'Si' else 'No' end) as puntobonusb,
		(case when aciertobonusb = 1 then 'Si' else 'No' end) as aciertobonusb,
		fechacreacion from dbusuariostribia where idusuariotribia =".$id; 
$res = $this->query($sql,0); 
return $res; 
} 

function traerTribiaPorParticipante($id) {
	$sql = "select idusuariotribia,refparticipantes,cantidadaciertos,
		intento,refestados,refpremios,
		(case when puntobonusa = 1 then 'Si' else 'No' end) as puntobonusa,
		(case when aciertobonusa = 1 then 'Si' else 'No' end) as aciertobonusa,
		(case when puntobonusb = 1 then 'Si' else 'No' end) as puntobonusb,
		(case when aciertobonusb = 1 then 'Si' else 'No' end) as aciertobonusb,
		fechacreacion from dbusuariostribia where refparticipantes =".$id; 
	$res = $this->query($sql,0); 
	return $res;
}

/* Fin */
/* /* Fin de la Tabla: dbusuariostribia*/



/* PARA Participantes */

function existeCedula($cedula) {
    $sql = "select idparticipante from dbparticipantes where cedula = ".$cedula." and terminoscondiciones = 1";
    $res = $this->query($sql,0);
    
    if (mysql_num_rows($res)>0) {
        return 1;   
    }
    return 0;
}

function insertarParticipantes($refusuarios,$nombrecompleto,$cedula,$email,$terminoscondiciones) { 

$sql = "insert into dbparticipantes(idparticipante,refusuarios,nombrecompleto,cedula,email,terminoscondiciones) 
values ('',".$refusuarios.",'".utf8_decode($nombrecompleto)."','".utf8_decode($cedula)."','".utf8_decode($email)."',".$terminoscondiciones.")"; 
$res = $this->query($sql,1); 
return $res; 
} 


function modificarParticipantes($id,$refusuarios,$nombrecompleto,$cedula,$email,$terminoscondiciones) { 
$sql = "update dbparticipantes 
set 
refusuarios = ".$refusuarios.",nombrecompleto = '".utf8_decode($nombrecompleto)."',cedula = '".utf8_decode($cedula)."',email = '".utf8_decode($email)."',terminoscondiciones = ".$terminoscondiciones." 
where idparticipante =".$id; 
$res = $this->query($sql,0); 
return $res; 
} 


function eliminarParticipantes($id) { 
$sql = "delete from dbparticipantes where idparticipante =".$id; 
$res = $this->query($sql,0); 
return $res; 
} 


function traerParticipantes() { 
$sql = "select 
p.idparticipante,
p.refusuarios,
p.nombrecompleto,
p.cedula,
p.email,
p.terminoscondiciones,
p.fechacreacion
from dbparticipantes p 
inner join dbusuarios usu ON usu.idusuario = p.refusuarios 
inner join tbroles ro ON ro.idrol = usu.refroles 
order by 1"; 
$res = $this->query($sql,0); 
return $res; 
} 


function traerParticipantesGrid() { 
$sql = "select 
p.idparticipante,
usu.nombrecompleto as usuario,
p.nombrecompleto,
p.cedula,
p.email,
(case when p.terminoscondiciones = 1 then 'Si' else 'No' end) as terminoscondiciones,
date_format(p.fechacreacion, '%Y/%m/%d %H:%i:%s') as fechacreacion,
p.refusuarios
from dbparticipantes p 
inner join dbusuarios usu ON usu.idusuario = p.refusuarios 
inner join tbroles ro ON ro.idrol = usu.refroles 
order by 1"; 
$res = $this->query($sql,0); 
return $res; 
} 





function traerParticipantesPorId($id) { 
$sql = "select idparticipante,refusuarios,nombrecompleto,cedula,email,terminoscondiciones,fechacreacion from dbparticipantes where idparticipante =".$id; 
$res = $this->query($sql,0); 
return $res; 
} 

/* Fin */
/* /* Fin de la Tabla: dbparticipantes*/


/* PARA Predio_menu */

function insertarPredio_menu($url,$icono,$nombre,$Orden,$hover,$permiso) { 
$sql = "insert into predio_menu(idmenu,url,icono,nombre,Orden,hover,permiso) 
values ('','".($url)."','".($icono)."','".($nombre)."',".$Orden.",'".($hover)."','".($permiso)."')"; 
$res = $this->query($sql,1); 
return $res; 
} 


function modificarPredio_menu($id,$url,$icono,$nombre,$Orden,$hover,$permiso) { 
$sql = "update predio_menu 
set 
url = '".($url)."',icono = '".($icono)."',nombre = '".($nombre)."',Orden = ".$Orden.",hover = '".($hover)."',permiso = '".($permiso)."' 
where idmenu =".$id; 
$res = $this->query($sql,0); 
return $res; 
} 


function eliminarPredio_menu($id) { 
$sql = "delete from predio_menu where idmenu =".$id; 
$res = $this->query($sql,0); 
return $res; 
} 


function traerPredio_menu() { 
$sql = "select 
p.idmenu,
p.url,
p.icono,
p.nombre,
p.Orden,
p.hover,
p.permiso
from predio_menu p 
order by 1"; 
$res = $this->query($sql,0); 
return $res; 
} 


function traerPredio_menuPorId($id) { 
$sql = "select idmenu,url,icono,nombre,Orden,hover,permiso from predio_menu where idmenu =".$id; 
$res = $this->query($sql,0); 
return $res; 
} 

/* Fin */
/* /* Fin de la Tabla: predio_menu*/


/* PARA Estados */

function insertarEstados($estado) { 
$sql = "insert into tbestados(idestado,estado) 
values ('','".($estado)."')"; 
$res = $this->query($sql,1); 
return $res; 
} 


function modificarEstados($id,$estado) { 
$sql = "update tbestados 
set 
estado = '".($estado)."' 
where idestado =".$id; 
$res = $this->query($sql,0); 
return $res; 
} 


function eliminarEstados($id) { 
$sql = "delete from tbestados where idestado =".$id; 
$res = $this->query($sql,0); 
return $res; 
} 


function traerEstados() { 
$sql = "select 
e.idestado,
e.estado
from tbestados e 
order by 1"; 
$res = $this->query($sql,0); 
return $res; 
} 


function traerEstadosPorId($id) { 
$sql = "select idestado,estado from tbestados where idestado =".$id; 
$res = $this->query($sql,0); 
return $res; 
} 

/* Fin */
/* /* Fin de la Tabla: tbestados*/


/* PARA Horarios */

function insertarHorarios($hora) { 
$sql = "insert into tbhorarios(idtbhorario,hora) 
values ('',".$hora.")"; 
$res = $this->query($sql,1); 
return $res; 
} 


function modificarHorarios($id,$hora) { 
$sql = "update tbhorarios 
set 
hora = ".$hora." 
where idtbhorario =".$id; 
$res = $this->query($sql,0); 
return $res; 
} 


function eliminarHorarios($id) { 
$sql = "delete from tbhorarios where idtbhorario =".$id; 
$res = $this->query($sql,0); 
return $res; 
} 


function traerHorarios() { 
$sql = "select 
h.idtbhorario,
h.hora
from tbhorarios h 
order by 1"; 
$res = $this->query($sql,0); 
return $res; 
} 


function traerHorariosPorId($id) { 
$sql = "select idtbhorario,hora from tbhorarios where idtbhorario =".$id; 
$res = $this->query($sql,0); 
return $res; 
} 

/* Fin */
/* /* Fin de la Tabla: tbhorarios*/


/* PARA Meses */

function insertarMeses($nombremes) { 
$sql = "insert into tbmeses(mes,nombremes) 
values ('','".($nombremes)."')"; 
$res = $this->query($sql,1); 
return $res; 
} 


function modificarMeses($id,$nombremes) { 
$sql = "update tbmeses 
set 
nombremes = '".($nombremes)."' 
where mes =".$id; 
$res = $this->query($sql,0); 
return $res; 
} 


function eliminarMeses($id) { 
$sql = "delete from tbmeses where mes =".$id; 
$res = $this->query($sql,0); 
return $res; 
} 


function traerMeses() { 
$sql = "select 
m.mes,
m.nombremes
from tbmeses m 
order by 1"; 
$res = $this->query($sql,0); 
return $res; 
} 


function traerMesesPorId($id) { 
$sql = "select mes,nombremes from tbmeses where mes =".$id; 
$res = $this->query($sql,0); 
return $res; 
} 

/* Fin */
/* /* Fin de la Tabla: tbmeses*/


/* PARA Premios */

function insertarPremios($premio,$aciertos) { 
$sql = "insert into tbpremios(idpremio,premio,aciertos) 
values ('','".($premio)."',".$aciertos.")"; 
$res = $this->query($sql,1); 
return $res; 
} 


function modificarPremios($id,$premio,$aciertos) { 
$sql = "update tbpremios 
set 
premio = '".($premio)."',aciertos = ".$aciertos." 
where idpremio =".$id; 
$res = $this->query($sql,0); 
return $res; 
} 


function eliminarPremios($id) { 
$sql = "delete from tbpremios where idpremio =".$id; 
$res = $this->query($sql,0); 
return $res; 
} 


function traerPremios() { 
$sql = "select 
p.idpremio,
p.premio,
p.aciertos
from tbpremios p 
order by 1"; 
$res = $this->query($sql,0); 
return $res; 
} 


function traerPremiosPorId($id) { 
$sql = "select idpremio,premio,aciertos from tbpremios where idpremio =".$id; 
$res = $this->query($sql,0); 
return $res; 
} 

/* Fin */
/* /* Fin de la Tabla: tbpremios*/


/* PARA Roles */

function insertarRoles($descripcion,$activo) { 
$sql = "insert into tbroles(idrol,descripcion,activo) 
values ('','".($descripcion)."',".$activo.")"; 
$res = $this->query($sql,1); 
return $res; 
} 


function modificarRoles($id,$descripcion,$activo) { 
$sql = "update tbroles 
set 
descripcion = '".($descripcion)."',activo = ".$activo." 
where idrol =".$id; 
$res = $this->query($sql,0); 
return $res; 
} 


function eliminarRoles($id) { 
$sql = "delete from tbroles where idrol =".$id; 
$res = $this->query($sql,0); 
return $res; 
} 


function traerRoles() { 
$sql = "select 
r.idrol,
r.descripcion,
r.activo
from tbroles r 
order by 1"; 
$res = $this->query($sql,0); 
return $res; 
} 


function traerRolesPorId($id) { 
$sql = "select idrol,descripcion,activo from tbroles where idrol =".$id; 
$res = $this->query($sql,0); 
return $res; 
} 

/* Fin */
/* /* Fin de la Tabla: tbroles*/



function query($sql,$accion) {
		
		
		
		require_once 'appconfig.php';

		$appconfig	= new appconfig();
		$datos		= $appconfig->conexion();	
		$hostname	= $datos['hostname'];
		$database	= $datos['database'];
		$username	= $datos['username'];
		$password	= $datos['password'];
		
		$conex = mysql_connect($hostname,$username,$password) or die ("no se puede conectar".mysql_error());
		
		mysql_select_db($database);
		
		        $error = 0;
		mysql_query("BEGIN");
		$result=mysql_query($sql,$conex);
		if ($accion && $result) {
			$result = mysql_insert_id();
		}
		if(!$result){
			$error=1;
		}
		if($error==1){
			mysql_query("ROLLBACK");
			return false;
		}
		 else{
			mysql_query("COMMIT");
			return $result;
		}
		
	}

}

?>