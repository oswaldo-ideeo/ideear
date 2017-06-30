<?php $activeDet = "active-color"; ?>
<?php $activeFlujo = "noactive-color"; ?>
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
        <div class="col-md-12 col-xs-12">
          <div class="page-title">
            <p>Detalle de Campaña</p>
          </div>
        </div>
        
        
      </div>
      
      <form action="" class="body-page">
      <div class="row">
        <div class="col-md-6 col-xs-12">
          <div class="formpart1">
            <input type="text" class="detalles-form" placeholder="Nombre de la campaña">
            <input type="text" class="detalles-form" placeholder="Cliente">
            <input type="text" class="detalles-form" placeholder="Nombre del Cliente">
          </div>
        </div>

        <div class="col-md-6 col-xs-12">
          <div class="date-camp">
            <div class="date-title">Inicio de la Campaña</div>
            <div class="date-input">
              <div class="date-sub">Fecha de inicio</div>
              <span class="fa fa-calendar"></span>
              <input type="date" placeholder="2017-06-30">
            </div>
            <div class="date-input">
              <div class="date-sub">Hora de inicio</div>
              <span class="fa fa-clock-o"></span>
              <input type="time" placeholder="14:00">
            </div>
          </div>
          
          <div class="date-camp">
            <div class="date-title">Cierre de la campaña</div>
            <div class="date-input">
              <div class="date-sub">Fecha de conclusión</div>
              <span class="fa fa-calendar"></span>
              <input type="date">
            </div>
            <div class="date-input">
              <div class="date-sub">Hora de conclusión</div>
              <span class="fa fa-clock-o"></span>
              <input type="time">
            </div>
          </div>
          <div class="aviso-firefox">
            Ingresa la fecha en formato <b>AAAA-MM-DD</b> y la hora en formato de 24 hrs <b>13:00</b>
          </div>


        </div>

      </div>
      <div class="row">
         <div class="col-md-12 button-ir">
           <a href="flujo.php" class="flujo-ir"><span class="fa fa-plus"></span> Diseña la campaña</a>
         </div>
       </div>
        
       <div class="row separador">
         <div class="col-md-12 t-center">
           <button class="guarda-btn" type="submit">GUARDAR</button>
         </div>
       </div>
      </form>

    </div>

    </div>
  </div>




    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
      var es_firefox = navigator.userAgent.toLowerCase().indexOf('firefox') > -1;
      if(es_firefox){
          $('.aviso-firefox').show();
      }
    </script>
</body>
</html>