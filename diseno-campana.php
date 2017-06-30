<?php $active1 = "active-color"; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php include 'includes/header.php'; ?>
    <?php include 'includes/nav2.php'; ?>
</head>

<body class="back-color">
<div id="wrapper">

<div id="page-wrapper">

<br>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-6">
     <div class="back-white2" style="height:725px;">
       <div class="col-md-12">
         <h3 class="per-bases">Diseño de Campaña</h3>
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
       <div class="col-md-12 guardar-col">
       <a class="guardar" href="#">GUARDAR</a>
       </div>

     </div>
   </div>




   <div class="col-md-6">
     <div style="height:725px; margin-top:-3px;" class="back-white2">
       <h3 class="per-bases vista-p2">Magic QR</h3>
       <p class="text-azul">Icono de la Aplicación</p>
       <br>
       <div class="col-md-2 borders">
       <img class="codigo-qr-disenocampanas" src="images/codigo-qr-disenocampanas.jpg">
       </div>
       <div class="col-md-9">
         <p class="text-grai">Personalice un código QR con la imagen de su campaña.</p>
       </div>
        <div style="text-align: center; margin-top:17px;" class="col-md-5">
         <a class="conf-diseno-camp" href="#">CONFIGURAR</a>
       </div>
       <div class="col-md-12">
        <p style="margin-top: 15px; margin-left: 10px;" class="text-azul2"><b>Icono de la Campaña</b></p>
        </div>

        <div class="col-md-6">
         <p style="margin-top: 15px; margin-left: 10px;" class="text-azul2">Fecha de inicio</p>
        </div>
         <div class="col-md-6">
         <p style="margin-top: 15px; margin-left: 10px;" class="text-azul2">Hora de inicio</p>
        </div>
        
        <div class="col-md-1">
            <span class="glyphicon  glyphicon-calendar"></span>
        </div>
        <div class="col-md-5">
            <input class="input-date" type="date" name="">
        </div>

        <div class="col-md-1">
            <span class="glyphicon glyphicon-dashboard"></span>
        </div>
        <div class="col-md-2">
            <input class="input-time" type="time" name="">
        </div>
        <div class="col-md-2">
             <input class="input-time" type="time" name="">
        </div>


        <!-- segunda columna -->

         <div class="col-md-12">
        <p style="margin-top: 55px; margin-left: 10px;" class="text-azul2"><b>Cierre de la Campaña</b></p>
        </div>

        <div class="col-md-6">
         <p style="margin-top: 15px; margin-left: 10px;" class="text-azul2">Fecha de conclución</p>
        </div>
         <div class="col-md-6">
         <p style="margin-top: 15px; margin-left: 10px;" class="text-azul2">Hora de conclución</p>
        </div>
        
        <div class="col-md-1">
            <span class="glyphicon  glyphicon-calendar"></span>
        </div>
        <div class="col-md-5">
            <input class="input-date" type="date" name="">
        </div>

        <div class="col-md-1">
            <span class="glyphicon glyphicon-dashboard"></span>
        </div>
        <div class="col-md-2">
            <input class="input-time" type="time" name="">
        </div>
        <div class="col-md-2">
             <input class="input-time" type="time" name="">
        </div>

        <div class="col-md-12 guardar-col">
          <a class="guardar" href="#">GUARDAR</a>
        </div>
     </div>
   </div>
 </dir>
</div>


    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>