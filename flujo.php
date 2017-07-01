<?php $activeDet = "noactive-color"; ?>
<?php $activeFlujo = "active-color"; ?>
<?php $activeBas = "noactive-color"; ?>
<?php $activeUser = "noactive-color"; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <?php include 'includes/header.php'; ?>
  
</head>
  <?php include 'includes/nav2.php'; ?>

<body class="back-color">
  <div id="wrapper">
    <div id="page-wrapper">
    <div class="container-fluid">
      <div class="row header-page">
        <div class="col-md-6 col-xs-12">
          <div class="page-title">
            <p>Flujo de campaña /<span>Nombre de la camapaña</span></p>
          </div>
        </div>
        <div class="col-md-6 col-xs-12">
          <div class="button-page t-right">
            <button class="publicar" type="button">Publicar campaña</button>
          </div>
        </div>
        
      </div>
      
      <div class="row body-page">
        <div class="col-xs-12 over">
          <div class="sectiondos">
            <div class="add-detonador">
              <button type="button" id="inicia-camp" class="but-det" type="button"><span class="fa fa-plus-circle"></span>Agregar denotador inicial</button>
            </div>
            
             <div class="menu-item2 t-left" id="desplegar-menu2">
              <ul>
                <li id="m-impreso2"><img src="images/impreso-icon.png" alt=""><span>IMPRESO</span></li>
                <li id="m-mail2"><img src="images/mail-icon.png" alt=""><span>MAILING</span></li>
                <li id="m-sms2"><img src="images/sms-icon.png" alt=""><span>SMS</span></li>
                <li id="m-call2"><img src="images/call-icon.png" alt=""><span>LLAMADA</span></li>
                <li id="m-push2"><img src="images/push-icon.png" alt=""><span>PUSH NOTIFICACIÓN</span></li>
              </ul>
            </div>
           
            <div class="estadisticas-g">
              <div class="fa fa-line-chart grap-uno"><span class="fa-dif on-xs">Estadísticas generales</span></div>
            </div>
          </div>
        </div>
        <!--diagrama-->
        <div class="col-xs-12 over">

          <div class="prueb">
            <div class="inicio-camp">
              <div class="primero">
                <div class="d-inblock">
                  <img src="images/impreso-icon.png" alt="">
                </div>
                <p class="titulo-c d-inblock">Impreso detonador <span>ID:001</span></p>
              </div>
              <div class="segundo">
                <div class="fa fa-calendar d-inblock"></div>
                <div class="fa fa-bar-chart d-inblock porcent"><span>10%</span></div>
                <div class="mas fa fa-plus-circle" id="unos"></div>
              </div>
            </div>


            <div class="menu-item t-right" id="desplegar-menu">
              <ul>
                <li id="m-impreso"><span>IMPRESO</span><img src="images/impreso-icon.png" alt=""></li>
                <li id="m-mail"><span>MAILING</span><img src="images/mail-icon.png" alt=""></li>
                <li id="m-sms"><span>SMS</span><img src="images/sms-icon.png" alt=""></li>
                <li id="m-call"><span>LLAMADA</span><img src="images/call-icon.png" alt=""></li>
                <li id="m-push"><span>PUSH NOTIFICACIÓN</span><img src="images/push-icon.png" alt=""></li>
              </ul>
            </div>

          </div>



<!--templates items-->
<!--ocultos
          <div class="prueb">
            <div class="inicio-camp">
              <div class="primero">
                <div class="d-inblock">
                  <img src="images/sms-icon.png" alt="">
                </div>
                <p class="titulo-c d-inblock">SMS Fase 1<span>ID:002</span></p>
              </div>
              <div class="segundo">
                <div class="fa fa-calendar d-inblock"></div>
                <div class="fa fa-bar-chart d-inblock porcent"><span>20%</span></div>
                <div class="mas fa fa-plus-circle" id="unos"></div>
              </div>
            </div>
          </div>


          <div class="prueb">
            <div class="inicio-camp">
              <div class="primero">
                <div class="d-inblock">
                  <img src="images/mail-icon.png" alt="">
                </div>
                <p class="titulo-c d-inblock">Mailing invitación<span>ID:003</span></p>
              </div>
              <div class="segundo">
                <div class="fa fa-calendar d-inblock"></div>
                <div class="fa fa-bar-chart d-inblock porcent"><span>12%</span></div>
                <div class="mas fa fa-plus-circle" id="unos"></div>
              </div>
            </div>
          </div>


          <div class="prueb">
            <div class="inicio-camp">
              <div class="primero">
                <div class="d-inblock">
                  <img src="images/call-icon.png" alt="">
                </div>
                <p class="titulo-c d-inblock">Call agradecimiento<span>ID:004</span></p>
              </div>
              <div class="segundo">
                <div class="fa fa-calendar d-inblock"></div>
                <div class="fa fa-bar-chart d-inblock porcent"><span>15%</span></div>
                <div class="mas fa fa-plus-circle" id="unos"></div>
              </div>
            </div>
          </div>


          <div class="prueb">
            <div class="inicio-camp">
              <div class="primero">
                <div class="d-inblock">
                  <img src="images/push-icon.png" alt="">
                </div>
                <p class="titulo-c d-inblock">Push notificación<span>ID:005</span></p>
              </div>
              <div class="segundo">
                <div class="fa fa-calendar d-inblock"></div>
                <div class="fa fa-bar-chart d-inblock porcent"><span>75%</span></div>
                <div class="mas fa fa-plus-circle" id="unos"></div>
              </div>
            </div>
          </div>
-->
<!--templates item fin-->


        </div>
        <!--diagrama fin-->
      </div>

    </div>

    </div>
  </div>
  


  <div class="modal-dismis"></div>

  <!--modal SMS-->
    <form class="config-modal" id="sms">
      <h2 class="modal-head t-center">
        <img src="images/sms-icon.png" alt="">
        Configurar SMS
      </h2>
      <div class="row">
        <div class="col-sm-6">
          <div class="m-item">
            <p class="n-text">Nombre del SMS</p>
            <input type="text" class="n-in" placeholder="SMS Nombre">
          </div>
        </div>
        
        <div class="col-sm-6">
          <div class="m-item">
            <p class="n-text">Canal de origen</p>
            <div class="n-canal">
              <img src="images/impreso-icon.png" alt="">
              IMPRESO DETONADOR 1
            </div>
          </div>
        </div>
        
        <div class="col-sm-12">
          <div class="m-item">
            <div class="n-text">Texto del SMS</div>
            <textarea name="" id="" cols="50" rows="5"></textarea>
          </div>
        </div>

        <div class="col-sm-6">
          <div class="m-item">
            <div class="n-text">Enviar Cuando</div>
            <div class="caja-select-m">
              <select name="" id="">
                <option value="0">Seleccionar opción</option>
                <option value="1">Al detonar</option>
                <option value="2">Al recibir</option>
              </select>
             
            </div>
             <span class="fa fa-plus-circle" id="add-enviar"></span>
            <div class="horas">
              <input type="number" placeholder="01" class="num-horas">
              <div class="caja-select-m select-small">
                <select name="" id="">
                  <option value="1">Hora(s)</option>
                  <option value="1">Día(s)</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="m-item">
            <div class="n-text">Enviar A</div>
              <div class="radio-caja">
                <input type="radio" name="enviar" class="box-per">
                <label for="">Usuarios que detonaron</label>
              </div>
              <div class="radio-caja">
                <input type="radio" name="enviar" class="box-per">
                <label for="">Usuarios que NO detonaron</label>
              </div>
              <div class="radio-caja">
                <input type="radio" name="enviar" class="box-per">
                <label for="">Todos</label>
              </div>
          </div>
        </div>
        
        <div class="col-sm-12 espacio-modal"></div>


        <div class="col-sm-12">
          <div class="botones-modal t-center">
            <input type="reset" name="" value="Cancelar" class="b-modal b-gris" id="close-modal">
            <button type="button" class="b-modal" id="sms-boton">Guardar</button>
          </div>
        </div>



      </div>

    </form>

    <!--modal SMS fin -->

    <!--modal mail-->
    <form class="config-modal" id="mail">
      <h2 class="modal-head t-center">
        <img src="images/mail-icon.png" alt="">
        Configurar Mailing
      </h2>
      <div class="row">
        <div class="col-sm-6">
          <div class="m-item">
            <p class="n-text">Nombre de mailing</p>
            <input type="text" class="n-in" placeholder="Mail Nombre">
          </div>
        </div>
        
        <div class="col-sm-6">
          <div class="m-item">
            <p class="n-text">Canal de origen</p>
            <div class="n-canal">
              <img src="images/sms-icon.png" alt="">
              SMS
            </div>
          </div>
        </div>
        
        <div class="col-sm-12">
          <div class="m-item">
            <div class="n-text">Archivo ZIP del mailing</div>
            <div class="up-mail-area">
              <div class="col-sm-6 no-pad">
                <div class="m-archivo">Nombre_Archivo.zip</div>
                <div class="m-vista-previa"><span class="fa fa-eye"></span>VISTA PREVIA</div>
              </div>
              <div class="col-sm-6 t-right no-pad space-down">
                <button class="b-modal">IMPORTAR ZIP</button>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6">
          <div class="m-item">
            <div class="n-text">Enviar Cuando</div>
            <div class="caja-select-m">
              <select name="" id="">
                <option value="0">Seleccionar opción</option>
                <option value="1">Al detonar</option>
                <option value="2">Al recibir</option>
              </select>
             
            </div>
             <span class="fa fa-plus-circle" id="add-enviar"></span>
            <div class="horas">
              <input type="number" placeholder="01" class="num-horas">
              <div class="caja-select-m select-small">
                <select name="" id="">
                  <option value="1">Hora(s)</option>
                  <option value="1">Día(s)</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="m-item">
            <div class="n-text">Enviar A</div>
              <div class="radio-caja">
                <input type="radio" name="enviar" class="box-per">
                <label for="">Usuarios que detonaron</label>
              </div>
              <div class="radio-caja">
                <input type="radio" name="enviar" class="box-per">
                <label for="">Usuarios que NO detonaron</label>
              </div>
              <div class="radio-caja">
                <input type="radio" name="enviar" class="box-per">
                <label for="">Todos</label>
              </div>
          </div>
        </div>
        
        <div class="col-sm-12 espacio-modal"></div>


        <div class="col-sm-12">
          <div class="botones-modal t-center">
            <input type="reset" name="" value="Cancelar" class="b-modal b-gris" id="close-modal">
            <button type="button" class="b-modal" id="mail-boton">Guardar</button>
          </div>
        </div>



      </div>

    </form>
    <!--modal mail fin-->


    <!--modal llamada-->
    <form class="config-modal" id="call">
      <h2 class="modal-head t-center">
        <img src="images/call-icon.png" alt="">
        Configurar Llamada
      </h2>
      <div class="row">
        <div class="col-sm-6">
          <div class="m-item">
            <p class="n-text">Nombre de la llamada</p>
            <input type="text" class="n-in" placeholder="Llamada Nombre">
          </div>
        </div>
        
        <div class="col-sm-6">
          <div class="m-item">
            <p class="n-text">Canal de origen</p>
            <div class="n-canal">
              <img src="images/sms-icon.png" alt="">
              SMS
            </div>
          </div>
        </div>
        
        <div class="col-sm-12">
          <div class="m-item">
            <div class="n-text">Archivo de Audio</div>
            <div class="up-mail-area">
              <div class="col-sm-6 no-pad">
                <div class="m-archivo">Nombre_Archivo.mp3</div>
                <div class="m-vista-previa"><span class="fa fa-eye"></span>VISTA PREVIA</div>
              </div>
              <div class="col-sm-6 t-right no-pad space-down">
                <button class="b-modal">IMPORTAR AUDIO</button>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6">
          <div class="m-item">
            <div class="n-text">Enviar Cuando</div>
            <div class="caja-select-m">
              <select name="" id="">
                <option value="0">Seleccionar opción</option>
                <option value="1">Al detonar</option>
                <option value="2">Al recibir</option>
              </select>
             
            </div>
             <span class="fa fa-plus-circle" id="add-enviar"></span>
            <div class="horas">
              <input type="number" placeholder="01" class="num-horas">
              <div class="caja-select-m select-small">
                <select name="" id="">
                  <option value="1">Hora(s)</option>
                  <option value="1">Día(s)</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="m-item">
            <div class="n-text">Enviar A</div>
              <div class="radio-caja">
                <input type="radio" name="enviar" class="box-per">
                <label for="">Usuarios que detonaron</label>
              </div>
              <div class="radio-caja">
                <input type="radio" name="enviar" class="box-per">
                <label for="">Usuarios que NO detonaron</label>
              </div>
              <div class="radio-caja">
                <input type="radio" name="enviar" class="box-per">
                <label for="">Todos</label>
              </div>
          </div>
        </div>
        
        <div class="col-sm-12 espacio-modal"></div>


        <div class="col-sm-12">
          <div class="botones-modal t-center">
            <input type="reset" name="" value="Cancelar" class="b-modal b-gris" id="close-modal">
            <button type="button" class="b-modal" id="call-boton">Guardar</button>
          </div>
        </div>



      </div>

    </form>
    <!--modal llamada fin-->


    <!--modal PUSH-->
    <form class="config-modal" id="push">
      <h2 class="modal-head t-center">
        <img src="images/push-icon.png" alt="">
        Configurar Push Notificación
      </h2>
      <div class="row">
        <div class="col-sm-6">
          <div class="m-item">
            <p class="n-text">Nombre de la notificación</p>
            <input type="text" class="n-in" placeholder="Push 01 - recordatorio">
          </div>
        </div>
        
        <div class="col-sm-6">
          <div class="m-item">
            <p class="n-text">Canal de origen</p>
            <div class="n-canal">
              <img src="images/call-icon.png" alt="">
              IMPRESO DETONADOR 1
            </div>
          </div>
        </div>
        
        <div class="col-sm-12">
          <div class="sub-t">
            Detalles de la notificación
          </div>
        </div>

        <div class="col-sm-6">
          <div class="m-item">
            <p class="n-text">Título de la notificación</p>
            <input type="text" class="n-in" placeholder="Notificación - título">
          </div>
        </div>

        <div class="col-sm-6">
          <div class="m-item">
            <p class="n-text">URL a donde va a dirigir</p>
            <input type="text" class="n-in" placeholder="www.ejemplo.com">
          </div>
        </div>
        
        <div class="col-sm-12">
          <div class="m-item">
            <div class="n-text">Descripción</div>
            <textarea name="" id="" cols="50" rows="5"></textarea>
          </div>
        </div>

        <div class="col-sm-6">
          <div class="m-item">
            <div class="n-text">Enviar Cuando</div>
            <div class="caja-select-m">
              <select name="" id="">
                <option value="0">Seleccionar opción</option>
                <option value="1">Al detonar</option>
                <option value="2">Al recibir</option>
              </select>
             
            </div>
             <span class="fa fa-plus-circle" id="add-enviar"></span>
            <div class="horas">
              <input type="number" placeholder="01" class="num-horas">
              <div class="caja-select-m select-small">
                <select name="" id="">
                  <option value="1">Hora(s)</option>
                  <option value="1">Día(s)</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="m-item">
            <div class="n-text">Enviar A</div>
              <div class="radio-caja">
                <input type="radio" name="enviar" class="box-per">
                <label for="">Usuarios que detonaron</label>
              </div>
              <div class="radio-caja">
                <input type="radio" name="enviar" class="box-per">
                <label for="">Usuarios que NO detonaron</label>
              </div>
              <div class="radio-caja">
                <input type="radio" name="enviar" class="box-per">
                <label for="">Todos</label>
              </div>
          </div>
        </div>
        
        <div class="col-sm-12 espacio-modal"></div>


        <div class="col-sm-12">
          <div class="botones-modal t-center">
            <input type="reset" name="" value="Cancelar" class="b-modal b-gris" id="close-modal">
            <button type="button" class="b-modal" id="push-boton">Guardar</button>
          </div>
        </div>



      </div>

    </form>

    <!--modal PUSH fin -->



    <!--modal IMPRESO-->
    <form class="config-modal modal-grande" id="impreso">
      <div class="container-fluid">
  <div class="row back-white2 no-shadow">
    <div class="col-md-1">
      <div class="vertical-menu">
        <button id="v-menu1" class="hover-icon-qr img-responsive" type="button"></button>
        <button id="v-menu2" class="hover-icon-brocha img-responsive" type="button"></button>
        <button id="v-menu3" class="hover-icon-coete img-responsive" type="button"></button>
      </div>
  </div>
  <section id="contenido1">
    <div class="col-md-5 line-modal">
     <div class="">
       <div class="col-md-12">
         <h3 class="per-bases">Configurar QR o MQR</h3>
       </div>
        <div class="col-md-12">
        <br>
        <p class="text-azul2">Nombre de la campaña</p>
        <input class="form-diseno-app" type="text" name="" placeholder="Pruebas de UX / UI">
      </div>
       <div class="col-md-12">
        <br>
        <p class="text-azul2"><b>QR descarga de App genérica</b></p>
      </div>

      <div class="col-md-3">
       <img src="images/codigo-qr.jpg">
      </div>

      <div class="col-md-5 margin-box-url">
        <p class="text-azul2">URL descarga de App Genérica</p>
        <input class="form-diseno-app" type="text" name="" placeholder="http://promocioncliente.com">
        <h5><b style="color:#55acee;">QR exclusivo de IdeeAR+</b></h5>
        <div class="col-md-3">
          <p>No</p>
        </div>
        <div class="col-md-4">
          <div class="onoffswitch">
            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch">
            <label class="onoffswitch-label" for="myonoffswitch">
             <span class="onoffswitch-inner"></span>
             <span class="onoffswitch-switch"></span>
           </label>
         </div>
       </div>
       <div class="col-md-4">
         <p>Si</p>
       </div>
     </div>

      <div class="col-md-12">
        <br>
        <p class="text-azul2"><b>Contenido</b></p>
        <p class="text-azul2">Contenido al escanear QR o descargar la App</p>
        <div class="form-group">
        <div class="caja-select">
          <select class="form-control form-d-campana" id="exampleSelect1">
            <option>Abrir URL</option>
            <option>Abrir plantilla HTML</option>
            <option>Abrir Sección Realidad Aumentada</option>
          </select>
        </div>
      </div>
    </div>
       <div class="col-md-6 col-lg-3 guardar-col">
       <a class="guardar" href="#">CANCELAR</a>
       </div>
      <div class="col-md-6 col-lg-4 cancelar-b guardar-col">
       <a class="guardar" href="#">GUARDAR</a>
       </div>
     </div>
   </div>

   <!-- -->

      <div class="col-md-6">
       <h3 class="per-bases vista-p2">Magic QR</h3>
       <p class="text-azul">Icono de la Aplicación</p>
       <br>
       <div class="col-md-2 borders">
       <img class="codigo-qr-disenocampanas" src="images/codigo-qr-disenocampanas.jpg">
       </div>
       <div class="col-md-9">
         <p class="text-grai">Personalice un código QR con la imagen de su campaña.</p>
       </div>
       <div class="col-md-12">
        <p style="margin-top: 15px; margin-left: 10px;" class="text-azul2"><b>Icono de la Campaña</b></p>
        </div>
        <div class="col-md-12 text-center">
          <p>Selecciona la imagen en donde se generará el Magic QR.<br>
            La imagen no debe pesar más de XXX Kbs</p>
          </div>
          <div class="col-lg-12 col-md-6">
            <img widt="10" class="img-responsive" src="images/arrastrar-img.jpg">
          </div>

        
        <div class="col-md-12 guardar-col">
          <button class="guardar" type="button" id="impreso-boton">GUARDAR</button>
        </div>
     </div>

     </section>
      
<!--contenido2-->
      <div class="container-fluid" id="contenido2">
                  <div class="row">
                     <div class="col-md-7 col-lg-6">
                        <div class="col-md-12">
                           <h3 class="per-bases">Diseño de la App</h3>
                           <p class="text-azul2">Icono de la Aplicación</p>
                        </div>
                        <div class="col-md-1">
                           <img class="user-pic" src="images/user-pic.jpg">
                        </div>
                        <div class="col-md-8">
                           <p class="nota">Nota: Se recomienda un tamaño de imagen de 512 x 512 px (máximo) y formato .png</p>
                           <a class="selec-im" href="#">SELECCIONAR IMAGEN</a>
                        </div>
                        <div class="col-md-12">
                           <br>
                           <p class="text-azul2">Nombre de la aplicación</p>
                           <input class="form-diseno-app" type="text" name="" placeholder="Pruebas de UX / UI">
                        </div>
                        <div class="col-md-12">
                           <br>
                           <div class="col-md-3">
                              <p class="text-azul3">Incluir Tab de promoción</p>
                           </div>
                           <div class="col-md-9">
                              <div class="onoffswitch">
                                 <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch">
                                 <label class="onoffswitch-label" for="myonoffswitch">
                                    <span class="onoffswitch-inner"></span>
                                    <span class="onoffswitch-switch"></span>
                                 </label>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <br>
                           <div class="col-md-9">
                              <p class="text-azul4">Texto de la promoción</p>
                           </div>
                           <div class="col-md-3">
                              <p class="text-azul3">Colores</p>
                           </div>
                           <div class="col-md-8 form-app-sec">
                              <input class="form-diseno-app" type="text" name="" placeholder="Visita www.promocion50.com">
                           </div>
                           <div class="col-md-2">
                              <a class="selector-color" href="#"></a>
                              <p class="color-code">#edf0f5</p>
                           </div>
                           <div class="col-md-2">
                              <a class="selector-color" href="#"></a>
                              <p class="color-code">#edf0f5</p>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <br>
                           <p class="text-azul2">URL de la Promoción</p>
                           <input class="form-diseno-app" type="text" name="" placeholder="http://promocioncliente.com">
                        </div>
                        <div class="col-md-12">
                           <br>
                           <h5 style="color:#55acee;" class="text-azul2">Pantalla de Inicio (Splash screen)</h5>
                        </div>
                        <div class="col-md-12">
                           <br>
                           <div class="col-md-9">
                              <p class="text-azul4">Texto de Bienvenida</p>
                           </div>
                           <div class="col-md-3">
                              <p class="text-azul3">Colores</p>
                           </div>
                           <div class="col-md-8 form-app-sec">
                              <input class="form-diseno-app" type="text" name="" placeholder="Bienvenido a Pruebas UX / UI Ideeo Labs">
                           </div>
                           <div class="col-md-2">
                              <a class="selector-color" href="#"></a>
                              <p class="color-code">#edf0f5</p>
                           </div>
                           <div class="col-md-2">
                              <a class="selector-color" href="#"></a>
                              <p class="color-code">#edf0f5</p>
                           </div>
                        </div>
                        <div class="col-md-12  guardar-col">
                           <a class="guardar" href="#">GUARDAR</a>
                        </div>
                     </div>
                     <div class="col-md-4 col-lg-5">
                           <h3 class="per-bases vista-p">Vista preliminar</h3>
                           <img class="iphone img-responsive" src="images/iphone.png">
                           <br>
                        </div>
                  </div>
                  <!-- -->
               </div>
<!--contenido3-->
  <section id="contenido3">
    <div  class="col-md-11">
                     <h3 class="list-det">Lista de Detonadores</h3>
                     <a class="g-det" href="#desplegar-detonadores">Generar Detonador</a>

                     <div class="menu-item t-left" id="desplegar-detonadores">
                      <ul>
                       <li id="m-impreso"><img src="images/qr-redondo.png" alt=""><span>CÓDIGO QR</span></li>
                       <li id="m-mail"><img src="images/trigger-redondo.png" alt=""><span>IMAGEN TRIGGER</span></li>
                       <li id="m-sms"><img src="images/barras-redondo.png" alt=""><span>CÓDIGO DE BARRAS</span></li>
                       <li id="m-call"><img src="images/iverify-redondo.png" alt=""><span>IMAGEN VERIFY</span></li>
                       <li id="m-push"><img src="images/averify-redondo.png" alt=""><span>AUDIO VERIFY</span></li>
                    </ul>
                 </div>
              </div>

              <div class="col-md-11 paddin-detonadores-modal">
               <div class="col-md-3 col-lg-2 border-content-style2">
                  <div class="color-white-boton">
                     <div class="col-md-12 center-img2">
                        <img src="images/icon-campanas1.png">
                     </div>
                     <div style="padding-left: 5px;" class="col-md-12 center-camp">
                        <p class="nomb-cam">NOMBRE DETONADOR 1</p>
                        <a  href="#">TIPO: IMAGEN TRIGGER</a>
                     </div>
                  </div>
               </div>

               <div class="col-md-3 col-lg-2 border-content-style2">
                  <div class="color-white-boton">
                     <div class="col-md-12 center-img2">
                        <img src="images/icon-codigoqr.png">
                     </div>
                     <div style="padding-left: 5px;" class="col-md-12 center-camp">
                        <p class="nomb-cam">NOMBRE DETONADOR 2</p>
                        <a href="#">TIPO: IMAGEN TRIGGER</a>
                     </div>
                  </div>
               </div>
            </div>

         </div>
    </section>


 </dir>
</div>

    </form>

    <!--modal PUSH fin -->








    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
      $('#inicia-camp').on('click', function(){
    $('#desplegar-menu2').slideToggle();
  })
    </script>
    <script src="js/diagrama.js"></script>
    <script>
      $('#v-menu1').on('click', function(){
        $('#contenido2, #contenido3').hide();
        $('#contenido1').show();
      })
      $('#v-menu2').on('click', function(){
        $('#contenido1, #contenido3').hide();
        $('#contenido2').show();
      })
      $('#v-menu3').on('click', function(){
        $('#contenido2, #contenido1').hide();
        $('#contenido3').show();
      })
    </script>
</body>
</html>