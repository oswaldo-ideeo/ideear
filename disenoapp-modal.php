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
            </div>
         </div>
         <div class="container-fluid">
            <div class="row back-white2">
               <div class="col-md-1">
                  <div class="vertical-menu">
                     <a class="hover-icon-qr img-responsive" href="#"></a>
                     <a class="hover-icon-brocha img-responsive" href="#"></a>
                     <a class="hover-icon-coete img-responsive" href="#"></a>
                  </div>
               </div>
               <div class="container-fluid">
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
            </div>
         </div>
         <!-- cierre div wraper donde viene todo el contenido del nav-->
      </div>
      <script src="js/jquery.js"></script>
      <script src="js/bootstrap.min.js"></script>
   </body>
   </html>
