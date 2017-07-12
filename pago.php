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

          <div class="planes-tittle espacio">Realizar Pago</div>
          <table class="table table-hover table-condensed">
          
            <thead>
             <p class="resumen">Resumen</p>
              <tr class="border-azul">
                <td>Producto</td>
                <td>Descripción</td>
                <td>Importe</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><b>Plan Premium IdeeAR+</b></td>
                <td>50 campañas<br>99 créditos<br>50 detonadores</td>
                <td><b>$25000</b></td>
              </tr>
            </tbody>
          </table>
          <div class="">
          <a href="pago-datos.php">
            <div class="button-pago">PAGAR</div>
          </a>
          </div>

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