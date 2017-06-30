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
          <a class="guardar" href="#">GUARDAR</a>
        </div>
     </div>
 </dir>
</div>



<!-- cierre div wraper donde viene todo el contenido del nav-->
</div>



  



    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>