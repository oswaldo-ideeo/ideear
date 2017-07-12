 <?php $title = 'Registro'; ?>
 <!DOCTYPE html>
 <html>
 <head>
    <?php include 'includes/header.php'; ?>

</head>

<body class="login">
  <div class="container">
    <div class="row">
      <div class="col-md-6 logo-home t-center">
       <img class="logo-login" src="images/logo.png">
       <div class="one-time">
        <img src="images/big-data.png" id="cambiante">
        <img src="images/mensaje.png" id="cambiante">
       </div>
     </div>

     <div class="col-md-5 logo-home">
       <div style="height:600px;" class="back-white2 container-login">
       

        <h3 class="per-bases text-center registro-login">Registro</h3>
        
        <div class="col-md-6"><input class="input-index" type="text" name="" placeholder="Nombre"></div>
        <div class="col-md-6"><input class="input-index" type="text" name="" placeholder="Apellido"></div>
      
        <div class="col-md-12"><input class="input-index2" type="text" name="" placeholder="Correo elecrtrónico"></div>
        <div class="col-md-12"><input class="input-index2" type="text" name="" placeholder="Confirmar correo electrónico"></div>

        <div class="col-md-12"><input class="input-index2" type="text" name="" placeholder="Empresa"></div>
        <div class="col-md-12"><input class="input-index2" type="text" name="" placeholder="Contraseña"></div>

        <div class="col-md-12"><input class="input-index2" type="text" name="" placeholder="Confirmar contraseña"></div>
        <div class="col-md-12"><input class="input-index2 blu" type="text" name="" placeholder="Tipo de plan"></div>
        
        <div class="col-md-12 boton-reg-index">
         <a class="registro-login" href="#">REGISTRARME</a>
        </div>

        <hr style="width: 100%; height: 1px; color:black;">

        <div class="col-md-12">
          <p class="text-center text-azul">Ya tengo una cuenta <a href="login.php"><b style="text-decoration:underline;">Iniciar Sesión.</b></a></p>
        </div>
       </div>
     </div>
    </div>
  </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.js"></script>
    <script>
      
      $('.one-time').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        autoplay: true,
        arrows: false
});

    </script>
      <!--<script>
         var i = 2;
      var cambiar = setInterval( function(){
         //$('#cambiante').css( 'background-image', 'url("2.jpg")' );
         $('.login').animate({
            opacity: 0
         }, 'slow', function(){
            $(this).css( {'background-image': 'url("' + i + '.jpg")'} )
            .animate({opacity: 1});
            i++;
            if ( i == 3 ) { i = 1  };
         });
      }, 2000);
      </script>-->
</body>
</html>