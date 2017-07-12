<?php $activeDet = "noactive-color"; ?>
<?php $activeFlujo = "noactive-color"; ?>
<?php $activeBas = "active-color"; ?>
<?php $activeUser = "noactive-color"; ?>
 <?php $title = 'Bases de datos'; ?>
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
    <div class="col-md-12">
      <h3 class="per-bases">Personalización de Bases de Datos</h3>
    </div>
    <div class="col-md-3">Nota: La Base de Datos deberá estar estructurada como el layout de la plataforma.</div>
    <div class="col-md-9"><a href="#"><img src="images/download-icon.png"></a></div>

<div class="rigth-align">
    <div class="col-md-12"><a href="#"><img class="float-cont icon-azul" src="images/icon-down.png"></a>
      <p class="float-cont">1 - 10 de 56</p>
      <ul class="pager">
        <li><a class="float-cont" href="#"><</a></li>
        <li><a href="#">></a></li>
      </ul>
    </div>
</div>
      <hr style="margin-top: 50px; width: 100%;">

<div class="container-fluid">
  <div class="row">
    <div class="col-md-2"><button class="butons-reg" id="">IMPORTAR BASE</button></div>
    <div class="col-md-2"><button class="butons-reg" id="registromas">AÑADIR REGISTRO</button></div>
    <div class="col-md-2"><a href="#"><img style="margin-left: 5px;" src="images/icon-bajar.png">DESCARGA PERSONALIZADA</a></div>

  </div>
</div>

</div>
</div>
<br><br>


<table class="table table-striped">
  <thead>
    <tr style="color:#55acee">
      <th>ID QR</th>
      <th>FOLIO</th>
      <th>NOMBRE</th>
      <th>EMAIL</th>
      <th>VARIABLE 1</th>
      <th>APP</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <th scope="row">641</th>
      <td>3776</td>
      <td>Abbie Hamilton</td>
      <td>clement_windler@gmail.com</td>
      <td>A Starter Guide To Self Improvement</td>
      <td>Si</td>
    </tr>
    <tr>
      <th scope="row">974</th>
      <td>1123</td>
      <td>Philip Graves</td>
      <td>deangelo_moen@hotmail.com</td>
      <td>A Starter Guide To Self Improvement</td>
      <td>Si</td>
    </tr>
    <tr>
      <th scope="row">395</th>
      <td>9223</td>
      <td>Mathilda Farmer</td>
      <td>deangelo_moen@hotmail.com</td>
      <td>A Starter Guide To Self Improvement</td>
      <td>Si</td>
    </tr>
  </tbody>
</table>

<div class="rigth-align">
    <div class="col-md-12"><a href="#"><img class="float-cont icon-azul" src=""></a>
      <p class="float-cont">1 - 10 de 56</p>
      <ul class="pager">
        <li><a class="float-cont" href="#"><</a></li>
        <li><a href="#">></a></li>
      </ul>
    </div>
</div>

<br>

</section>

<!--modal SMS-->
<div class="modal-dismis"></div>
      <form class="config-modal" id="anadir-reg">
         <h2 class="modal-head t-center">
            <div class="fa fa-plus-circle"></div>
            Añadir registro
         </h2>
         <div class="row">
            <div class="col-sm-12">
               <div class="m-item">
                  <p class="n-text">Folio Cliente</p>
                  <input type="text" class="n-in" placeholder="3020202">
               </div>
            </div>
            <div class="col-sm-12">
               <div class="m-item">
                  <p class="n-text">Nombre de Usuario</p>
                  <input type="text" class="n-in" placeholder="Nombre">
               </div>
            </div>
            <div class="col-sm-12">
               <div class="m-item">
                  <p class="n-text">Correo electrónico</p>
                  <input type="email" class="n-in" placeholder="example@example.com">
               </div>
            </div> 
            <div class="col-sm-12">
               <div class="m-item">
                  <p class="n-text">Variante de personalización</p>
                  <input type="text" class="n-in" placeholder="Variable 1">
               </div>
            </div> 
            
            <div class="col-sm-12 espacio-modal"></div>
            <div class="col-sm-12">
               <div class="botones-modal t-center">
                  <input type="reset" name="" value="Cancelar" class="b-modal b-gris" id="close-modal">
                  <button type="button" class="b-modal" id="reg-boton">Guardar</button>
               </div>
            </div>
         </div>
      </form>
      <!--modal SMS fin -->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
      $('#registromas').on('click', function(){
    $('#anadir-reg').fadeIn();
    $('.modal-dismis').show();
  })

      $('#reg-boton').on('click', function(){
        $('#anadir-reg, .modal-dismis').fadeOut();
      })
    $('.modal-dismis').on('click', function(){
      $('#anadir-reg').fadeOut();
      $(this).fadeOut();
    })

    </script>
</body>
</html>