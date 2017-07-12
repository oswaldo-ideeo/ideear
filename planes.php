 <?php $title = 'Upgrade'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php include 'includes/header.php'; ?>
   
</head>

<body class="back-color">
  <div id="wrapper">
    <?php include 'includes/nav.php'; ?>
      <!-- Navigation -->
    <div id="page-wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 back-white t-center">

          <div class="planes-tittle">Planes idee<b>AR+</b></div>
            <div class="planes basico">
              <div class="plan-nombre">Basic</div>
              <div class="plan-precio"><sup>$</sup>125<sup>/MES</sup></div>
              <div class="plan-desc">25 campañas<br>50 créditos<br>25 detonadores</div>
              <button class="contratar" disabled>TU PLAN</button>
            </div>

            
            <div class="planes premium">
              <div class="plan-nombre">Premium</div>
              <div class="plan-precio"><sup>$</sup>250<sup>/MES</sup></div>
              <div class="plan-desc">50 campañas<br>99 créditos<br>50 detonadores</div>
              <button class="contratar" onclick="window.location.href='pago.php'">CONTRATAR</button>
            </div>
            

            <div class="planes unlimited">
               <div class="plan-nombre">Unlimited</div>
              <div class="plan-precio"><sup>$</sup>499<sup>/MES</sup></div>
              <div class="plan-desc">+99 campañas<br> Créditos ilimitados<br>Detonadores ilimitados</div>
              <button class="contratar" onclick="window.location.href='pago2.php'">CONTRATAR</button>
            </div>
            <p class="plan-nota">*Los precios de los planes se maneja en miles de pesos</p>
          </div>
        </div>
      </div>
    </div>
  

  </div>
</div>
   



    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>