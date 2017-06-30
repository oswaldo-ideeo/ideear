<!--empieza nav -->
    <!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top navbar-cim" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><img src="images/logo2.png"></a>
        </div>
        <!-- Top Menu Items -->

    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
          <form class="navbar-form form-buscar" role="search">
            <div class="input-group add-on">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
              </div>
              <input class="form-control search-barra" placeholder="Buscar campaña" name="srch-term" id="srch-term" type="text">
            </div>
          </form>

          <ul class="nav navbar-nav side-nav">
            <h4 class="inez">Inez Hoffman</h4>
            <p class="empresa-campanas">Empresa Solutions</p>
            <p class="sinco">5</p>
            <p class="campanas-camp">Campañas</p>
            <!--
            <li class="active">
                <a href="index.php">Mis Proyectos</a>
            </li>
          -->
          <br>
          <li class="<?= $activeDet ?>">
            <a class="menus" href="detalles-camp.php"><img class="icon-tromp" src="images/icon-tromp.png"><p class="menu-camp">Detalle Campaña</p></a>
          </li>
          <li class="<?= $activeFlujo ?>">
            <a class="menus" href="flujo.php"><img class="icon-tromp" src="images/icon3.png"><p class="menu-camp">Flujo de campaña</p></a>
          </li>
         
          <li class="<?= $activeBas ?>">
            <a class="menus" href="basesdedatos.php"><img class="icon-tromp" src="images/icon5.png"><p class="menu-camp">Bases de Datos</p></a>
          </li>
          <li class="<?= $activeUser ?>">
            <a class="menus" href="permisos-de-usuarios.php"><img class="icon-tromp" src="images/icon6.png"><p class="menu-camp">Usuarios</p></a>
          </li>
          

          <li>
          <a class="menus2" href="#"><img class="icon-tromp" src="images/youtube-icon.png"><p class="menu-camp">Tutorial</p></a>
         </li>
         <li>
           <p class="powerby">Power by Ideeo</p>
         </li>
       </ul>
    </div>
</nav>
<!--termina nav -->