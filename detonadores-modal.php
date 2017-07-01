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
            <div class="row back-white2">
               <div class="col-md-12">
                  <div class="col-md-1">
                     <div class="vertical-menu">
                        <a class="hover-icon-qr img-responsive" href="#"></a>
                        <a class="hover-icon-brocha img-responsive" href="#"></a>
                        <a class="hover-icon-coete img-responsive" href="#"></a>
                     </div>
                  </div>
                  
                  <div  class="col-md-11">
                     <h3 class="list-det">Lista de Detonadores</h3>
                     <a href="#desplegar-detonadores">Generar Detonador</a>
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


                <div class="col-md-11">
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
         </div>
      </div>
      <!-- cierre div wraper donde viene todo el contenido del nav-->
   </div>
</div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
