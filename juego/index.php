<?php


session_start();

if (!isset($_SESSION['usua_predio']))
{
    header('Location: ../index.html');
} else {

include ('../includes/funciones.php');
include ('../includes/funcionesUsuarios.php');
include ('../includes/funcionesHTML.php');
include ('../includes/funcionesReferencias.php');

$serviciosFunciones     = new Servicios();
$serviciosUsuario       = new ServiciosUsuarios();
$serviciosHTML          = new ServiciosHTML();
$serviciosReferencias   = new ServiciosReferencias();

$cantidadaciertos = 0;
$intento = 0;
$refestados = 1;
$refpremios = 1;
$puntobonusa = 0;
$aciertobonusa = 0;
$puntobonusb = 0;
$aciertobonusb = 0;

$existe = $serviciosReferencias->traerTribiaPorParticipante($_SESSION['idparticipante']);

$yajugo = 0;

if (mysql_num_rows($existe)>0) {
    if (mysql_result($existe, 0,'intento') == 0) {
        $yajugo = 0;
    } else {
        $yajugo = 0;    
        //$serviciosReferencias->modificarEstado($_SESSION['idparticipante'],4);
    }
    
} else {
    $serviciosReferencias->insertarUsuariostribia($_SESSION['idparticipante'],$cantidadaciertos,$intento,$refestados,$refpremios,$puntobonusa,$aciertobonusa,$puntobonusb,$aciertobonusb);
}

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
        <script src="../js/progressbar.min.js"></script>
        
        <link rel="stylesheet" type="text/css" href="../css/estiloTribiaJuego.css"/>
        <link rel="stylesheet" href="../css/animate.min.css">
        <style>
            #barraprogreso {
              margin: 20px;
              width: 90%;
              height: 15px;
            }
        </style>

    </head>
    <body>
        <form role="form" class="form-horizontal">

        <div id="contenedorPreguntas">
        	<div class="row titulo" align="center" id="lstPreguntas">
                <div class="row" style="margin-top: 0%;">
                    <div class="col-md-3 col-xs-2">
                    </div>
            		<div class="col-md-6 col-xs-8">
                        <h3 class="pregunta animated bounceInDown"></h3>
                    </div>
                    <div class="col-md-3 col-xs-2">
                    </div>
        		</div>

                <div class="row titulo4">
                    <div class="col-md-3 col-xs-3">
                    </div>
                    <div class="col-md-6 col-xs-6">
                        <button type="button" class="btnrespuesta btn btn-default enjoy-css respuesta1 animated bounceInLeft" id="" style="margin-right: 1%;"></button>
                    </div>
                    <div class="col-md-3 col-xs-3">
                    </div>
                </div>

                <div class="row titulo4">
                    <div class="col-md-3 col-xs-3">
                    </div>
                    <div class="col-md-6 col-xs-6">
                        <button type="button" class="btnrespuesta btn btn-default enjoy-css respuesta2 animated bounceInRight" id="" style="margin-right: 1%;"></button>
                    </div>
                    <div class="col-md-3 col-xs-3">
                    </div>
                </div>


                <div class="row titulo4">
                    <div class="col-md-3 col-xs-3">
                    </div>
                    <div class="col-md-6 col-xs-6">
                        <button type="button" class="btnrespuesta btn btn-default enjoy-css respuesta3 animated bounceInLeft" id="" style="margin-right: 1%;"></button>
                    </div>
                    <div class="col-md-3 col-xs-3">
                    </div>
                </div>

                <div class="row titulo4">
                    <div class="col-md-3 col-xs-3">
                    </div>
                    <div class="col-md-6 col-xs-6">
                        <button type="button" class="btnrespuesta btn btn-default enjoy-css respuesta4 animated bounceInRight" id="" style="margin-right: 1%;"></button>
                    </div>
                    <div class="col-md-3 col-xs-3">
                    </div>
                </div>
        	</div>

            <input type="hidden" name="valorRespuesta" id="valorRespuesta" value="0" />
            <input type="hidden" name="valorPregunta" id="valorPregunta" value="1" />
            <div class="form-group" style="margin-top: 2%;">
                <div class="col-md-3 col-xs-3">
                </div>

                <div class="col-md-6 col-xs-6" style="text-align: center;">
                    <?php
                    if ($yajugo == 1) {
                    ?>
                    <button type="button" class="btn btn-default enjoy-css-buttom-juego" id="volver">YA PARTICIPO - VOLVER</button>
                    <?php
                    } else {
                    ?>
                    <button type="button" class="btn btn-default enjoy-css-buttom-juego" id="responder">RESPUESTA</button>
                    <?php
                    } 
                    ?>
                </div>
                <div class="col-md-3 col-xs-3">
                </div>
            </div>
            
            
            <div class="form-group" style="margin-top: 1%;">
                <div class="col-md-3 col-xs-3">
                </div>

                <div class="col-md-6 col-xs-6" style="text-align: center;">
                    <div id="barraprogreso"></div>
                </div>
                <div class="col-md-3 col-xs-3">
                </div>
            </div>
    	
        </div>


        <div id="contenedorGanaBotella" style="display: none;">
            <img class="animated flash infinite" src="../imagenes/bg_confetib.png" style="float: left; top: 0; left: 0; width: 95%;z-index: 50; position: absolute;">
            <img class="animated bounceInRight delay-1s" src="../imagenes/bg_otela_iniciob.png" style="float: left; top: 0; left: 0; position: absolute; height: 100%; z-index: 97; margin-left: 15%;">

            <div class="footer">
        
            </div>

        </div>

        <div id="contenedorGanaEntrada" style="display: none;">
            <img class="animated flash infinite" src="../imagenes/bg_confeti.png" style="float: left; top: 0; left: 0; width: 95%;z-index: 50; position: absolute;">
            <img class="animated pulse infinite delay-1s" src="../imagenes/bg_entrada_solo.png" style="float: left; top: 50%; left: 50%; width: 50%;z-index: 55; position: absolute; margin-left: -25%;margin-top: -17%;">

            <img class="animated bounceInLeft delay-1s" src="../imagenes/bg_meetgret_cervezab.png" style="float: right; bottom: 0; right: 0; height: 70%;z-index: 51; position: absolute; margin-right: 9%;">
            <img class="animated bounceInRight delay-1s" src="../imagenes/bg_meetgret_cerveza.png" style="float: left; bottom: 0; left: 0; height: 70%;z-index: 52; position: absolute; margin-left: 13%;">

            <div class="footer">
        
            </div>

        </div>


        <div id="contenedorGanaMeetGreet" style="display: none;">
            <img class="animated flash infinite" src="../imagenes/bg_confeti.png" style="float: left; top: 0; left: 0; width: 95%;z-index: 50; position: absolute;">
            <img class="animated zoomIn infinite delay-2s" src="../imagenes/bg_meetgret_mgb.png" style="float: left; top: 50%; left: 50%; width: 50%;z-index: 55; position: absolute; margin-left: -25%;margin-top: -17%;">

            <img class="animated bounceInLeft delay-1s" src="../imagenes/bg_meetgret_cerveza.png" style="float: right; bottom: 0; right: 0; height: 70%;z-index: 51; position: absolute; margin-right: 4%;">
            <img class="animated bounceInRight delay-1s" src="../imagenes/bg_meetgret_cervezab.png" style="float: left; bottom: 0; left: 0; height: 70%;z-index: 52; position: absolute; margin-left: 4%;">
            <div class="footer">
        
            </div>

        </div>


        <div id="contenedorRespuestaIncorrecta" style="display: none;">
            <img class="animated flash infinite" src="../imagenes/bg_respuesta_incorrecta.png" style="float: left; top: 0; left: 0; width: 100%;z-index: 50; position: absolute;">
            <img class="animated bounceInRight delay-1s" src="../imagenes/bg_otela_iniciob.png" style="float: left; top: 0; left: 0; position: absolute; height: 100%; z-index: 97; margin-left: 5%;">

            <div class="footer">
        
            </div>

        </div>

        <div id="contenedorTiempoAgotado" style="display: none;">
            <img class="animated flash infinite delay-1s" src="../imagenes/bg_tiempo_agotado.png" style="float: left; top: 0; left: 0; width: 100%;z-index: 50; position: absolute;">
            <img class="animated bounceInRight delay-1s acarr" src="../imagenes/bg_otela_iniciob.png" style="float: left; top: 0; left: 0; position: absolute; height: 100%; z-index: 97; margin-left: 5%;">

            <div class="footer">
        
            </div>

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
        <!-- fin modal -->

        </form>



    <script type="text/javascript">
        
        $(document).ready(function(){
            

            $('#volver').click(function() {
                url = "../participantes/";
                $(location).attr('href',url);
            });

            function volver(){
                url = "../participantes/";
                $(location).attr('href',url);
            }

            function cambiarBackground(background){
                $('body').css("background-image", background);
            }

            function traerPregunta(nivel) {
                $.ajax({
                    dataType: 'jsonp',
                    url: '../json/jspregunta.php',
                    data: {nivel: nivel},
                    beforeSend: function (XMLHttpRequest) {
                            
                    },
                    success: function(datos) {
                                
                                for (var clave in datos) {
                                    $('.pregunta').html(datos[clave].var1);
                                    $('.respuesta1').html(datos[clave].var2);
                                    $('.respuesta2').html(datos[clave].var3);
                                    $('.respuesta3').html(datos[clave].var4);
                                    $('.respuesta4').html(datos[clave].var5);

                                    $('.pregunta').html(datos[clave].var1);
                                    $('.pregunta').html(datos[clave].var1);
                                    $('.pregunta').html(datos[clave].var1);
                                    $('.pregunta').html(datos[clave].var1);

                                    $(".respuesta1").attr("id",datos[clave].res1);
                                    $(".respuesta2").attr("id",datos[clave].res2);
                                    $(".respuesta3").attr("id",datos[clave].res3);
                                    $(".respuesta4").attr("id",datos[clave].res4);

                                    //alert(datos[clave].var1);
                                    //alert(datos[clave].id);
                                    
                                    
                                    
                                }
                    },
                    error: function() { alert("Error leyendo fichero json"); }
                });
            }

            traerPregunta($('#valorPregunta').val());
            
            var bar = new ProgressBar.Line(barraprogreso, {
              strokeWidth: 4,
              easing: 'easeInOut',
              duration: 7000,
              color: '#FFEA82',
              trailColor: '#eee',
              trailWidth: 1,
              svgStyle: {width: '100%', height: '100%'},
              from: {color: '#0FF354'},
              to: {color: '#FF0000'},
              step: (state, bar) => {
                bar.path.setAttribute('stroke', state.color);
              }
            });
            
            bar.animate(1.0, {
                duration: 34000
            }, function() {
                $('#contenedorPreguntas').hide();
                $('#contenedorTiempoAgotado').show();


                $('body').css("background-image", "url(../imagenes/bg_tiempo_agotado.jpg)");
                            
                $('#lstPreguntas').hide();
                $('#responder').hide();

                setTimeout(function(){

                    $('#lstPreguntas').show();
                    $('#responder').show();

                    cargarAcierto(0);  //marco un intento
                    // si falla en lo envio al punto bono
                    $('#valorPregunta').val(11);

                    $('#valorRespuesta').val(0); //vuelvo a cero el valor de la eleccion de las respuestas

                    setTimeout(cambiarBackground('url(../imagenes/bg_pregunta_bono.jpg)'), 3000);
                     //$('body').css("background-image", "url(../imagenes/bg_pregunta_bono.jpg)"); // modifico la imagen de fondo

                    traerPregunta(11);

                    $('#contenedorPreguntas').show();
                    $('#contenedorTiempoAgotado').hide();
                }, 3000);
            });

            $('#responder').click(function() {
                bar.set(0);
                
                bar.animate(1.0, {
                    duration: 34000
                }, function() {

                    $('#contenedorPreguntas').hide();
                    $('#contenedorTiempoAgotado').show();


                    $('body').css("background-image", "url(../imagenes/bg_tiempo_agotado.jpg)");
                                
                    $('#lstPreguntas').hide();
                    $('#responder').hide();

                    setTimeout(function(){

                        $('#lstPreguntas').show();
                        $('#responder').show();

                        cargarAcierto(0);  //marco un intento
                        // si falla en lo envio al punto bono
                        $('#valorPregunta').val(11);

                        $('#valorRespuesta').val(0); //vuelvo a cero el valor de la eleccion de las respuestas

                        setTimeout(cambiarBackground('url(../imagenes/bg_pregunta_bono.jpg)'), 3000);
                         //$('body').css("background-image", "url(../imagenes/bg_pregunta_bono.jpg)"); // modifico la imagen de fondo

                        traerPregunta(11);

                        $('#contenedorPreguntas').show();
                        $('#contenedorTiempoAgotado').hide();
                    }, 3000);
                });



                $('.respuesta').html('');
                if ($('#valorRespuesta').val() == 0) {
                    $('.respuesta').html('Debe elegir una respuesta para continuar.');
                    $('#myModal').modal();
                } else {
                    modificarEstado(2);
                    if ($('#valorRespuesta').val() == 3) {  //verifico si eligio la respuesta correcta
                        // averiguo que fue lo que respondio
                        if ($('#valorPregunta').val() == 11)  //si es el punto bonos despues termina
                        {
                            cargarBonoA();

                            $('#lstPreguntas').hide();
                            $('#responder').hide();

                            $('body').css("background-image", "url(../imagenes/bg_ganaste_botellab.jpg)"); // modifico la imagen de fondo

                            $('#contenedorPreguntas').hide();
                            $('#contenedorGanaBotella').show();

                            modificarEstado(3);

                            setTimeout(volver, 4000);

                        } 
                        else 
                        {

                            if ($('#valorPregunta').val() == 4) //si acierta le muestro que gana una botella y sigue
                            {
                                $('#lstPreguntas').hide();
                                $('#responder').hide();

                                cargarBonoB();

                                $('body').css("background-image", "url(../imagenes/bg_ganaste_botellab.jpg)"); // modifico la imagen de fondo

                                $('#contenedorPreguntas').hide();
                                $('#contenedorGanaBotella').show();

                                setTimeout(function(){

                                    $('#lstPreguntas').show();
                                    $('#responder').show();

                                    cargarAcierto(1); //marco un intento y un acierto
                        
                                    $('#valorPregunta').val( parseInt($('#valorPregunta').val())+1 ); //cambio el nivel de pregunta

                                    $('body').css("background-image", "url(../imagenes/bg_pregunta_" + $('#valorPregunta').val() + ".jpg)"); // modifico la imagen de fondo

                                    $('#valorRespuesta').val(0); //vuelvo a cero el valor de la eleccion de las respuestas

                                    traerPregunta($('#valorPregunta').val());

                                    $('#contenedorPreguntas').show();
                                    $('#contenedorGanaBotella').hide();
                                }, 3000);
                            } else {
                                if ($('#valorPregunta').val() == 7) //si acierta le muestro que gana una botella y sigue
                                {
                                    $('#lstPreguntas').hide();
                                    $('#responder').hide();

                                    $('#contenedorPreguntas').hide();
                                    $('#contenedorGanaEntrada').show();

                                    cargarAcierto(1); //marco un intento y un acierto

                                    $('body').css("background-image", "url(../imagenes/bg_ganaste_entradab.jpg)"); // modifico la imagen de fondo

                                    setTimeout(function(){

                                        $('#lstPreguntas').show();
                                        $('#responder').show();

                                        $('#valorPregunta').val( parseInt($('#valorPregunta').val())+1 ); //cambio el nivel de pregunta

                                        $('body').css("background-image", "url(../imagenes/bg_pregunta_" + $('#valorPregunta').val() + ".jpg)"); // modifico la imagen de fondo

                                        $('#valorRespuesta').val(0); //vuelvo a cero el valor de la eleccion de las respuestas

                                        $('#contenedorPreguntas').show();
                                        $('#contenedorGanaEntrada').hide();

                                        traerPregunta($('#valorPregunta').val());
                                    }, 3000);
                                } else {

                                    if ($('#valorPregunta').val() == 10) //si acierta le muestro que gana el meet y greed y termina
                                    {
                                        $('#lstPreguntas').hide();
                                        $('#responder').hide();

                                        $('#contenedorPreguntas').hide();
                                        $('#contenedorGanaMeetGreet').show();
                                        
                                        modificarEstado(3);
                                        
                                        $('body').css("background-image", "url(../imagenes/bg_ganaste_meetgreetb.jpg)"); // modifico la imagen de fondo

                                        cargarAcierto(1); //marco un intento y un acierto

                                        

                                        setTimeout(function(){

                                            volver();
                                            
                                        }, 4000);
                                    }
                                    else 
                                    {
                                        cargarAcierto(1); //marco un intento y un acierto
                        
                                        $('#valorPregunta').val( parseInt($('#valorPregunta').val())+1 ); //cambio el nivel de pregunta

                                        $('body').css("background-image", "url(../imagenes/bg_pregunta_" + $('#valorPregunta').val() + ".jpg)"); // modifico la imagen de fondo

                                        $('#valorRespuesta').val(0); //vuelvo a cero el valor de la eleccion de las respuestas

                                        traerPregunta($('#valorPregunta').val());
                                    }
                                    
                                }
                            }
                            
                        }

                    } else {
                        if ($('#valorPregunta').val() == 4) //si es la pregunta 4 si pierde lo dejo pasar
                        {
                            cargarAcierto(1); //marco un intento y un acierto
                        
                            $('#valorPregunta').val( parseInt($('#valorPregunta').val())+1 ); //cambio el nivel de pregunta

                            $('body').css("background-image", "url(../imagenes/bg_pregunta_" + $('#valorPregunta').val() + ".jpg)"); // modifico la imagen de fondo

                            $('#valorRespuesta').val(0); //vuelvo a cero el valor de la eleccion de las respuestas

                            traerPregunta($('#valorPregunta').val());
                        }
                        else
                        {
                            if ($('#valorPregunta').val() != 11)  //si es el punto bonos despues termina
                            {
                                $('#contenedorPreguntas').hide();
                                $('#contenedorRespuestaIncorrecta').show();
                                
                                setTimeout(cambiarBackground('url(../imagenes/bg_respuesta_incorrectab.jpg)'), 3000);
                                
                                $('#lstPreguntas').hide();
                                $('#responder').hide();

                                bar.set(1);

                                setTimeout(function(){

                                    $('#lstPreguntas').show();
                                    $('#responder').show();

                                    cargarAcierto(0);  //marco un intento
                                    // si falla en lo envio al punto bono
                                    $('#valorPregunta').val(11);

                                    $('#valorRespuesta').val(0); //vuelvo a cero el valor de la eleccion de las respuestas

                                    setTimeout(cambiarBackground('url(../imagenes/bg_pregunta_bono.jpg)'), 3000);
                                     //$('body').css("background-image", "url(../imagenes/bg_pregunta_bono.jpg)"); // modifico la imagen de fondo

                                     $('#contenedorPreguntas').show();
                                    $('#contenedorRespuestaIncorrecta').hide();

                                    traerPregunta(11);
                                }, 3000);
                                

                            }
                            else 
                            {
                                $('body').css("background-image", "url(../imagenes/bg_respuesta_incorrecta_finalb.jpg)"); // modifico la imagen de fondo

                                $('#contenedorPreguntas').hide();
                                $('#contenedorRespuestaIncorrecta').show();

                                $('#lstPreguntas').hide();
                                $('#responder').hide();

                                modificarEstado(3);

                                setTimeout(volver, 3000);
                                
                            }
                        }
                        

                    }    
                }
                
            });

            function cargarAcierto(acierto) {
                $.ajax({
                    data:  {id: <?php echo $_SESSION['idparticipante']; ?>,
                            acierto: acierto,
                            accion:     'agregarAcierto'},
                    url:   '../ajax/ajax.php',
                    type:  'post',
                    beforeSend: function () {

                    },
                    success:  function (response) {

                            
                    }
                });
            }


            function modificarEstado(estado) {
                $.ajax({
                    data:  {id: <?php echo $_SESSION['idparticipante']; ?>,
                            estado: estado,
                            accion:     'modificarEstado'},
                    url:   '../ajax/ajax.php',
                    type:  'post',
                    beforeSend: function () {

                    },
                    success:  function (response) {

                            
                    }
                });
            }


            function cargarBonoA() {
                $.ajax({
                    data:  {id: <?php echo $_SESSION['idparticipante']; ?>,
                            accion:     'cargarBonoA'},
                    url:   '../ajax/ajax.php',
                    type:  'post',
                    beforeSend: function () {

                    },
                    success:  function (response) {

                            
                    }
                });
            }


            function cargarBonoB() {
                $.ajax({
                    data:  {id: <?php echo $_SESSION['idparticipante']; ?>,
                            accion:     'cargarBonoB'},
                    url:   '../ajax/ajax.php',
                    type:  'post',
                    beforeSend: function () {

                    },
                    success:  function (response) {

                            
                    }
                });
            }

            $("#lstPreguntas").on("click",'.enjoy-css', function(){
                usersid =  $(this).attr("id");
                $('#valorRespuesta').val(usersid);
            });//fin del boton eliminar


            //$('body').css("background-image", "url(../imagenes/bg_tiempo_agotado.jpg)");

        });/* fin del document ready */
    
    </script>

    </body>
</html>

<?php
}
?>