 <?php $title = 'Campañas'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php include 'includes/header.php'; ?>
    <?php include 'includes/nav.php'; ?>
</head>

<body class="back-color">
 <div id="wrapper">
    <!-- Navigation -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
           <div class="col-md-12 back-color2 prueba2">

               <div class="col-md-2 prueba">
               <div>
                <p class="saldos">Saldo en Créditos <b style="color: rgba(255, 0, 0, 0);">Créditos</b></p>

                <p class="number-campanas">99,999</p>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width:95%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="num-campanas">99,999 / 99,999</p>
              </div>
             </div>
            
            <div class="col-md-2 prueba">
               <div>
                <p class="saldos">Campañas disponibles</p>
                <p class="number-campanas">99,999</p>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width:95%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="num-campanas">99,999 / 99,999</p>
              </div>
             </div>

            <div class="col-md-2 prueba">
               <div>
                <p class="saldos-2">Detonadores disponibles</p>
                <p class="number-campanas">10</p>
                <div class="progress">
                    <div class="progress-bar colour" role="progressbar" style="width:5%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="num-campanas">99,999 / 99,999</p>
              </div>
             </div>

             <div class="col-md-2 prueba">
               <div>
                <p class="saldos-2">Escaneos disponibles</p>
                <p class="number-campanas">99,999</p>
                <div class="progress">
                    <div class="progress-bar colour" role="progressbar" style="width:95%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="num-campanas">99,999 / 99,999</p>
              </div>
             </div>

            <div class="col-md-2 prueba">
               <div>
                <p class="saldos-2">Registros Personalizados</p>
                <p class="number-campanas">99,999</p>
                <div class="progress">
                    <div class="progress-bar colour" role="progressbar" style="width:95%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="num-campanas">99,999 / 99,999</p>
              </div>
             </div>

             <div class="col-md-2">
                 <img class="coete-icon" src="images/coete-icon.png">
                 <p>Potencializa tus campañas
                    incrementando las opciones.</p>
                    <div class="boton-upgrade">
                        <a class="upgrade" href="planes.php">UPGRADE</a>
                    </div>
                </div>
           </div>
        </div>
    </div>
 </div>
<br>
 <div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
            <div class="color-blue-boton">
                <div class="col-md-12 content-buton-icon">
                    <img src="images/icon-tromp.png">
                </div>

                <div class="col-md-12 content-buton-blue">
                    <a type="button" class="btn btn-primary crear-campana" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Crear campaña</a>
                </div>
            </div>
        </div>


        <div class="col-md-2">
          <div class="color-white-boton">
            <div class="col-md-12 center-img">
                <img src="images/icon-campanas1.png">
            </div>

            <div style="padding-left: 5px;" class="col-md-12 center-camp">
                <p class="nomb-cam">NOMBRE CAMPAÑA 1</p>
                <a class="link" href="#">www.ideear.com</a>
            </div>
        </div>
    </div>

            <div class="col-md-2">
          <div class="color-white-boton">
            <div class="col-md-12 center-img">
                <img src="images/icon-campanas2.png">
            </div>

            <div style="padding-left: 5px;" class="col-md-12 center-camp">
                <p class="nomb-cam">NOMBRE CAMPAÑA 1</p>
                <a class="link" href="#">www.ideear.com</a>
            </div>
        </div>
    </div>

            <div class="col-md-2">
          <div class="color-white-boton">
            <div class="col-md-12 center-img">
                <img src="images/icon-campanas2.png">
            </div>

            <div style="padding-left: 5px;" class="col-md-12 center-camp">
                <p class="nomb-cam">NOMBRE CAMPAÑA 1</p>
                <a class="link" href="#">www.ideear.com</a>
            </div>
        </div>
    </div>

            <div class="col-md-2">
          <div class="color-white-boton">
            <div class="col-md-12 center-img">
                <img src="images/icon-campanas2.png">
            </div>

            <div style="padding-left: 5px;" class="col-md-12 center-camp">
                <p class="nomb-cam">NOMBRE CAMPAÑA 1</p>
                <a class="link" href="#">www.ideear.com</a>
            </div>
        </div>
    </div>

            <div class="col-md-2">
          <div class="color-white-boton">
            <div class="col-md-12 center-img">
                <img src="images/icon-campanas2.png">
            </div>

            <div style="padding-left: 5px;" class="col-md-12 center-camp">
                <p class="nomb-cam">NOMBRE CAMPAÑA 1</p>
                <a class="link" href="#">www.ideear.com</a>
            </div>
        </div>
    </div>
</div>


<!-- AQUI ESTA EL MODAL -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <div class="margin-text-modal">
            <img class="corneta" src="images/corneta.png">
            <h4 class="modal-title title-crear" id="exampleModalLabel">Crear campaña</h4>
        </div>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <input class="modalcrear-campana" type="text" placeholder="Nombre de la campaña" class="form-control" id="recipient-name">
          </div>
           <div class="form-group">
            <input class="modalcrear-campana blu blu-line" type="text" placeholder="Crear nuevo cliente"  class="form-control" id="recipient-name">
          </div>
           <div class="form-group">
            <input class="modalcrear-campana" type="text" placeholder="Nombre del cliente" class="form-control" id="recipient-name">
          </div>
        </form>
      </div>
      <div class="modal-butons">
        <button type="button" class="modal-crear-proyecto" data-dismiss="modal">Cancelar</button>
        <button type="button" onclick="window.location.href='detalles-camp.php' " class="modal-crear-proyecto2">Crear</button>
      </div>
    </div>
  </div>
</div>
<!-- AQUI ESTA EL MODAL -->





    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>