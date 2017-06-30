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
                     <a href="#">Generar Detonador</a>
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
