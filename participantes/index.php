<?php

session_start();

if (!isset($_SESSION['usua_predio']))
{
    header('Location: ../index.html');
} else {

?>


<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Trivia Cerveza 593</title>
        <script type="text/javascript" src="../js/jquery-1.8.3.min.js"></script>

        <link rel="stylesheet" href="../css/jquery-ui.css">

		<script src="../js/jquery-ui.js"></script>
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"/>
        <script src="../bootstrap/js/bootstrap.min.js"></script>

        <link rel="stylesheet" type="text/css" href="../css/estiloTribia.css"/>
        
        <style>
		.terminosC {
		    background-color: #0f0559;
		    font-family: 'DIN LIGHT', Fallback, sans-serif;  -webkit-font-smoothing: antialiased;
		}

		.terminosC h1 {
		    color: white;
		    margin-left: 40px;
		    font-size: 46px;
		}

		.terminosC h3 {
		    color: white;
		    margin-left: 40px;
		    font-size: 18px;

		}

		.terminosC h4 {
		    color: white;
		    margin-left: 40px;
		    font-size: 16px;
		}

		.terminosC h5 {
		    color: white;
		    margin-left: 40px;
		    font-size: 16px;
		}


		.terminosC p {
		    color: white;
		    margin-left: 40px;
		    font-size: 12px;
		}

		.terminosC li {
		    color: white;
		    margin-left: 40px;
		    font-size: 12px;
		}

		@font-face {
		  font-family: 'DIN LIGHT';
		  src: url('../fuentes/Formulario/DIN-Light-Regular.woff') format('woff'); /* IE9 Compat Modes */
		  src: url('../fuentes/Formulario/DIN Light Regular/DIN Light Regular.otf')  format('truetype'), /* Safari, Android, iOS */   
		}


		</style>

    </head>
    <body>
    	<div class="row">
    		<div class="col-md-12 titulo">
    			<img src="../dashboard/imagenes/dash_logo.png">
    		</div>

    	</div>

    	<div class="row titulo3">
    		<form role="form" class="form-horizontal">
    			<div class="form-group">
    				<div class="col-md-2 col-xs-1">
    				</div>
					<label for="usuario" class="col-md-2 col-xs-4 control-label labelTribia" style="color:#FFF;text-align:right;">Nombres y Apellidos</label>
					<div class="col-md-5 col-xs-6">
					<input type="text" class="enjoy-css" id="apyn" name="apyn" />
					</div>
					<div class="col-md-3 col-xs-1">
    				</div>
				</div>

				<div class="form-group">
    				<div class="col-md-2 col-xs-1">
    				</div>
					<label for="usuario" class="col-md-2 col-xs-4 control-label labelTribia" style="color:#FFF;text-align:right;">Cédula de Identidad</label>
					<div class="col-md-5 col-xs-6">
					<input type="text" class="enjoy-css" id="cedula" name="cedula" />
					</div>
					<div class="col-md-3 col-xs-1">
    				</div>
				</div>

                <div class="form-group">
                    <div class="col-md-2 col-xs-1">
                    </div>
                    <label for="usuario" class="col-md-2 col-xs-4 control-label labelTribia" style="color:#FFF;text-align:right;">Correo Electrónico</label>
                    <div class="col-md-5 col-xs-6">
                    <input type="email" class="enjoy-css" id="email" name="email" />
                    </div>
                    <div class="col-md-3 col-xs-1">
                    </div>
                </div>

				<div class="form-group">
    				<div class="col-md-2 col-xs-1">
    				</div>

    				<div class="col-md-2 col-xs-2">
    				</div>

					<div class="col-md-5 col-xs-7" style="text-align: right;">
						<button type="button" class="btn btn-default enjoy-css-buttom" id="login" style="margin-right: 1%;">EMPEZAR JUEGO</button>
					</div>
					<div class="col-md-3 col-xs-2">
    				</div>
				</div>


                <div class="form-group titulo">
                    <div class="col-md-2 col-xs-1">
                    </div>
                    <div class="col-md-7 col-xs-9" style="text-align: center;">
                        <input type="checkbox"  id="terminoscondiciones"> <span class="checkLabel labelTribia">He leído y acepto los términos y condiciones</span>
                    </div>
                    <div class="col-md-3 col-xs-2">
                    </div>
                </div>
    		</form>
    		
    	</div>

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Notificación</h4>
          </div>
          <div class="modal-body respuesta">
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          </div>
        </div>

      </div>
    </div>


    <div id="myModal2" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Términos Y Condiciones</h4>
          </div>
          <div class="modal-body terminosC">
            <h1>TÉRMINOS Y CONDICIONES</h1>
<h3>ACTIVIDAD PROMOCIONAL – #593conRickyMartin</h3>
<h3>CONCURSO/ACTIVACIÓN DIGITAL PARA CERVEZA 593 PREMIUM LAGER</h3>

<h4>LOS PREMIOS:</h4>
		<ul>
		  <li>3 entradas a cancha para el concierto de Ricky Martin el 3 de Noviembre del 2018.</li>
		  <li>1 entrada a Golden Box para el concierto de Ricky Martin el día 3 de Noviembre del 2018.</li>
		</ul>
	<p>*Todas las entradas de los ganadores van acompañadas de un six pack de producto 593 Premium Lager.</p>

<h5>Lugar de ejecución de los premios:</h5>
	<p>Estadio Alejandro Serrano Aguilar, Cuenca, Ecuador</p>

<h5>Lugar de retiro de las entradas:</h5>
	<p>En la agencia de La Taberna más cercana para el ganador (a nivel nacional)</p>

<h4>FECHA DE ANUNCIO DE GANADORES:</h4>
		<ul>
		  <li>Primera entrada a cancha: 4 de octubre 2018</li>
		  <li>Segunda entrada a cancha: 11 de octubre 2018</li>
		  <li>Tercera entrada a cancha: 18 de octubre 2018</li>
		  <li>Entrada a Meet and greets: 25 de octubre 2018</li>
		</ul>
	<p>**Los ganadores se anunciarán por las redes de la marca y se los contactará por interno a cada uno.</p>


<h5>No incluye:</h5>
		<ul>
		  <li>Traslados ni gastos de alimentación y/u hospedaje.</li>
		  <li>Seguros o acompañamientos</li>
		</ul>
		<p>*El premio termina con la entrega de la entrada y un six pack.</p>

<h5>Público apto para participar (restricciones):</h5>
	<p>Todas las personas mayores de edad residentes en Ecuador</p>

<h5>Mecánica de la actividad: ¿Cómo participo?</h5>
	<p>Subiendo una foto de tu momento de consumo 593, es decir que aparezca el producto y el entorno en el que lo disfrutas. En el #593conRickymartin. Con eso ya estás participando.</p>

<h5>Selección de ganadores:</h5>
		<p>De todos los participantes se sortearán semanalmente los ganadores de las entradas a cancha a partir de la primera semana de octubre.<br>

		Para la entrada a Golden Box un jurado hará una preselección de los finalistas basados en interacciones, creatividad y entusiasmo para la campaña. Los jueces serán:<br>

		-El jefe de marca 593<br>
		-El maestro cervecero<br>
		-El director creativo de la agencia de marca.<br>

		Se seleccionarán 10 finalistas para un sorteo final.<br>

		Todos los sorteos serán subidos a la cuenta para garantizar la transparencia del mismo.</p>

<h5>Condiciones y Restricciones Generales</h5>

	<ul>
		  <li>•	Antes de participar en la actividad, el usuario admite que ha leído, entendido y aceptado los requisitos establecidos por el organizador de la actividad en estos Términos y Condiciones, los cuales estarán accesibles durante todo el tiempo de vigencia de la actividad en el siguiente link: 593.flip.ec/terminos-y-condiciones-concursos.docx. Si se llegase a presentar algún cambio inesperado en las condiciones del concurso, este será comunicado como comentario en la misma nota en que estarán estos términos y condiciones, además de por redes sociales.</li>
		  <li>•	No pueden participar los trabajadores directos de Almacenes Juan Eljuri o de sus sociedades filiales en Ecuador y aquellos trabajadores contratados por outsourcing para estas mismas compañías, y en ambos casos, sus cónyuges o compañero(a)s permanentes, sus familiares directos hasta cuarto grado de consanguinidad (hijos, padres, hermanos, tíos y primos hermanos), segundo grado de afinidad (suegros y cuñados) y primero civil (hijos adoptivos y padres adoptantes).</li>
		  <li>•	Cada usuario podrá participar con un único usuario en Facebook; nunca por medio de varios perfiles que pertenezcan a la misma persona, identificadas a través de la misma dirección IP y/o los mismos datos de registro.</li>
		  <li>Los concursantes no podrán invitar a menores de edad a participar en la actividad.</li>
		  <li>•	El premio es intransferible y por lo tanto se entregará exclusivamente a los ganadores, previa verificación del cumplimiento de la mecánica del concurso (términos y condiciones) y de su mayoría de edad, para lo cual se solicitará una copia de su cédula de ciudadanía.</li>
		  <li>•	Para los efectos de esta actividad, se considera como motivo de descalificación que los participantes incumplan estos términos y condiciones. En caso de identificar fraude de un participante en la actividad, Almacenes Juan Eljuri podrá descalificarlo automáticamente informando los motivos de su decisión mediante un correo electrónico o inbox vía Facebook. El participante de manera expresa acepta, que su participación en la actividad será de buena fe y se abstendrá de: <br>o	El Concursante no podrá difamar o expresarse en modo desprestigiante respecto de las marcas de la Patrocinadoras y sus compañías filiales y/o subsidiarias;<br>
		o	Expresarse negativamente respecto del mensaje o intención comunicacional de las marcas asociadas al concurso;<br>
		o	Cometer delitos o actos ilícitos, difamar o hacer “Bullying” durante cualquiera de las actividades ligadas a la dinámica del concurso;<br>
		o	Violar derechos de privacidad o datos personales de terceros;<br>
		o	Causar daño a otra persona;<br>
		o	Subir archivos o contenido que contenga virus o archivos corruptos;<br>
		o	Borrar, o alterar las medidas de seguridad de la página web;<br>
		o	Falsificar el código fuente de la página u otra información confidencial;<br>
		o	Cualquier actividad que constituya un delito. En vista de lo anterior, nos reservamos el derecho a:<br>

		♣	Restringir o impedir tu acceso;<br>
		♣	Eliminar contenidos que hayas colgado en nuestra página o en cualquier medio web asociado a esta página;<br>
		♣	Informar a las autoridades sobre hechos o actos ilícitos efectuados por los Concursantes o personas que hayan ingresado a la página.</li>
		<li>El premio no es transferible, canjeable ni reembolsable por dinero en efectivo, sin excepciones.</li>
		<li>El premio es una cortesía entregada por Almacenes Juan Eljuri y de ninguna manera podrá ser revendido o distribuido a terceros. De hacerlo, el ganador deberá responder legalmente por estos hechos.</li>
		<li>En ningún caso, se aceptarán registros con datos que no correspondan al titular de la cuenta, números incompletos o no válidos. Si los datos de registro no coinciden con el documento de identidad del ganador a la hora de hacer efectivo el premio, aquel no podrá recibirlo.</li>
		<li>Facebook no es patrocinador, administrador, garante o responsable en forma alguna de actividad. Por tanto, el participante exonera a la red social Facebook de cualquier reclamación o responsabilidad por causas surgidas con ocasión o en relación con la misma.</li>
		<li>Almacenes Juan Eljuri no se hace responsable de los comentarios u opiniones ni de los términos que los usuarios utilicen en las respuestas de la actividad en la red social Facebook o Instagram.</li>
		<li>Los ganadores conocen y entienden que Almacenes Juan Eljuri no es la organizadora del concierto y que, en consecuencia, no se hacen responsables por su ejecución o cualquier otro evento relacionado con la logística del mismo.</li>
		<li>Almacenes Juan Eljuri no se hace responsable de la integridad física, la salud, o la propiedad de los ganadores durante el concierto o los desplazamientos asociados a éste, ni de cualquier otro daño que estos sufran con ocasión de la participación en la actividad o del disfrute del premio otorgado. Los ganadores entienden y aceptan lo anterior y, por tanto, exoneran a Almacenes Juan Eljuri de cualquier reclamación judicial o extrajudicial que pudiere derivarse de tales eventos.</li>
	</ul>

<h5>Protección de datos personales</h5>
		<ul>
			<li>El participante declara que la información suministrada por él, incluyendo la relacionada con sus datos personales, es cierta, fidedigna y actualizada.</li>
			<li>Los datos personales y demás información suministrados por el participante serán objeto de tratamiento automatizado e incorporada a la base de datos administrada por la agencia de publicidad encargada de desarrollar la campaña o actividad promocional para la marca.</li>
			<li>El participante presta su consentimiento libre, expreso e informado para que la información personal que ha ingresado sea almacenada, recopilada o utilizada por Almacenes Juan Eljuri directamente o a través de terceros, con fines de comunicación, envío de información y/o para el mercadeo de sus productos.</li>
			<li>La información suministrada será objeto de protección mediante el uso de tecnologías y procedimientos de seguridad evitando el acceso, revelación y usos no autorizados.</li>
		</ul>

<h5>AUTORIZACIÓN DE USO DE IMAGEN:</h5>

	<p>Mediante la presente, el Concursante cede y/o autoriza el uso de su imagen respecto del contenido generado durante la dinámica del Concurso, así como para el uso e inclusión de su imagen en contenidos audiovisuales o fotográficos relacionados con la actividad del presente Concurso. Los Concursantes podrán por lo tanto ser filmados por las Entidades del Concurso mediante cualquier medio de grabación o filmación, consienten en que su imagen sea grabada y el producto de esta sea distribuido, explotado, reproducido, licenciado, transferido, usado o destruido por las Entidades del Concurso como bien lo decida, respetando los criterios de derecho a la imagen y evitando la difusión de imágenes que puedan afectar la reputación del Concursante. Los derechos patrimoniales de autor de estas grabaciones y los derechos de explotación de imagen de las personas filmadas son cedidos a las Entidades del Concurso sin limitación alguna.</p>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Aceptar</button>
          </div>
        </div>

      </div>
    </div>

    <script type="text/javascript">
        
        $(document).ready(function(){
            
            $('#terminoscondiciones').click(function() {
                $('#myModal2').modal();
            });

                $("#email").click(function(event) {
                    $("#email").removeClass("errorInput");
                    $("#email").attr('placeholder','Ingrese el email');
                });

                $("#email").change(function(event) {
                    $("#email").removeClass("errorInput");
                    $("#email").attr('placeholder','Ingrese el email');
                });
                
                
                $("#cedula").click(function(event) {
                    $("#cedula").removeClass("errorInput");
                    $("#cedula").attr('placeholder','Ingrese su Identificación');
                });

                $("#cedula").change(function(event) {
                    $("#cedula").removeClass("errorInput");
                    $("#cedula").attr('placeholder','Ingrese su Identificación');
                });


                $("#apyn").click(function(event) {
                    $("#apyn").removeClass("errorInput");
                    $("#apyn").attr('placeholder','Ingrese su Apellidos y Nombres');
                });

                $("#apyn").change(function(event) {
                    $("#apyn").removeClass("errorInput");
                    $("#apyn").attr('placeholder','Ingrese su Apellidos y Nombres');
                });
                
            
            function validador(){

                    $error = "";
    
                    if ($("#email").val() == "") {
                        $error = "Es obligatorio el campo E-Mail.";

                        $("#email").addClass("errorInput");
                        $("#email").attr('placeholder',$error);
                    }
                    
                    if ($("#cedula").val() == "") {
                        $error = "Es obligatorio el campo de Identificación.";

                        $("#cedula").addClass("errorInput");
                        $("#cedula").attr('placeholder',$error);
                    }


                    if ($("#apyn").val() == "") {
                        $error = "Es obligatorio el campo de Apellidos y Nombres.";

                        $("#apyn").addClass("errorInput");
                        $("#apyn").attr('placeholder',$error);
                    }
                    

                    
                    
                    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                    
                    if( !emailReg.test( $("#email").val() ) ) {
                        $error = "El E-Mail ingresado es inválido.";
                        $("#email").val('');
                        $("#email").addClass("errorInput");
                        $("#email").attr('placeholder',$error);
                        
                    }

                    return $error;
            }
            
            
            $("#login").click(function(event) {
                var terminoscondiciones = 0;
                if ($("#terminoscondiciones").prop('checked')) {
                    terminoscondiciones = 1;
                } else {
                    terminoscondiciones = 0;
                }

                if (validador() == "")
                {
                    $.ajax({
                        data:  {email:      $("#email").val(),
                                apyn:       $("#apyn").val(),
                                cedula:      $("#cedula").val(),
                                terminoscondiciones: terminoscondiciones,
                                accion:     'insertarParticipantes'},
                        url:   '../ajax/ajax.php',
                        type:  'post',
                        beforeSend: function () {
                            $('.respuesta').html('');
                        },
                        success:  function (response) {
                                
                            if (response != '') {
                                
                                $('.respuesta').html('<strong>Error!</strong> '+response);
                                $('#myModal').modal();

                            } else {
                                if (terminoscondiciones == 1) {
                                    url = "../inicio/";
                                    $(location).attr('href',url);
                                } else {
                                    $('.respuesta').html('<strong>Error!</strong> Lo siento pero sino acepta los términos y condiciones no puede jugar');
                                    $('#myModal').modal();
                                }
                                
                            }
                                
                        }
                    });
                }
            });
            
        });/* fin del document ready */
    
    </script>

    </body>
</html>

<?php
}
?>