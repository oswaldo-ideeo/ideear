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

<section class="back-white">
 <div class="container-fluid">
  <div class="row">
   <h3 class="list-det">Detonadores</h3>
    <h5 class="list-det">Crear un detonador</h5>
    <br>
    <div class="col-md-2">
      <div class="color-blue-boton">
        <div class="col-md-12 content-buton-icon">
        <img src="images/icon-codigo.png">
        </div>

        <div class="col-md-12 content-buton-blue">
          <a type="button" class="btn btn-primary crear-campana" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Crear código QR</a>
        </div>
      </div>
    </div>


    <div class="col-md-2 border-content">
      <div class="color-white-boton">
        <div class="col-md-12 center-img2">
          <img src="images/icon-detonadores.png">
        </div>

        <div class="col-md-12">
          <button type="button" class="btn btn-primary button-detonadores">CREAR IMAGEN TRIGGER</button>
        </div>
      </div>
    </div>

    <div class="col-md-2 border-content">
      <div class="color-white-boton">
        <div class="col-md-12 center-img2">
          <img src="images/icon-detonadores2.png">
        </div>

        <div class="col-md-12">
          <button type="button" class="btn btn-primary button-detonadores det-2">CREAR CÓDIGO DE BARRAS</button>
        </div>
      </div>
    </div>

    <div class="col-md-2 border-content">
      <div class="color-white-boton">
        <div class="col-md-12 center-img2">
          <img src="images/icon-detonadores3.png">
        </div>

        <div class="col-md-12">
          <button type="button" class="btn btn-primary button-detonadores">CREAR IMAGEN VERIFY</button>
        </div>
      </div>
    </div>

    <div class="col-md-2 border-content">
      <div class="color-white-boton">
        <div class="col-md-12 center-img2">
          <img src="images/icon-detonadores4.png">
        </div>

        <div class="col-md-12">
          <button type="button" class="btn btn-primary button-detonadores">CREAR AUDIO VERIFY</button>
        </div>
      </div>
    </div>
  </div>
</div>
</section>


<br>

<section class="back-white">
 <div class="container-fluid">
    <div class="row">
    <h3 class="list-det">Lista de Detonadores</h3>
    <br>
        <div class="col-md-2 border-content-style2">
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

            <div class="col-md-2 border-content-style2">
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
<br><br><br><br><br><br><br><br><br><br><br><br>

</section>






    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>