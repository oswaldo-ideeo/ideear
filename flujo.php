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
              <button type="button" id="inica-camp" class="but-det"><span class="fa fa-plus-circle"></span>Agregar denotador inicial</button>
            </div>
            <!--menu
             <div class="menu-item t-left" id="desplegar-menu2">
              <ul>
                <li id="m-impreso"><img src="images/impreso-icon.png" alt=""><span>IMPRESO</span></li>
                <li id="m-mail"><img src="images/mail-icon.png" alt=""><span>MAILING</span></li>
                <li id="m-sms"><img src="images/sms-icon.png" alt=""><span>SMS</span></li>
                <li id="m-call"><img src="images/call-icon.png" alt=""><span>LLAMADA</span></li>
                <li id="m-push"><img src="images/push-icon.png" alt=""><span>PUSH NOTIFICACIÓN</span></li>
              </ul>
            </div>
            fin menu-->
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








    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/diagrama.js"></script>
</body>
</html>