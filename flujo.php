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
      <div class="row header-page">
        <div class="col-md-6 col-xs-12">
          <div class="page-title">
            <p>Flujo de campaña /<span>Nombre de la camapaña</span></p>
          </div>
        </div>
        <div class="col-md-6 col-xs-12">
          <div class="button-page t-right">
            <button class="publicar" type="button">Publicar campaña</button>
          </div>
        </div>
        
      </div>
      
      <div class="row body-page">
        <div class="col-xs-12">
          <div class="sectiondos">
            <div class="add-detonador">
              <button type="button" id="inica-camp" class="but-det"><span class="fa fa-plus-circle"></span>Agregar denotador inicial</button>
            </div>
            <div class="estadisticas-g">
              <div class="fa fa-line-chart grap-uno"><span class="fa-dif on-xs">Estadísticas generales</span></div>
            </div>
          </div>
        </div>
      </div>

    </div>

    </div>
  </div>
  


  <div class="modal-dismis"></div>

  
    <form class="config-sms">
      <h2 class="modal-head t-center">
        <img src="images/sms-icon.png" alt="">
        Configurar SMS
      </h2>
      <div class="row">
        <div class="col-sm-6">
          <div class="m-item">
            <p class="n-text">Nombre del SMS</p>
            <input type="text" class="n-in" placeholder="SMS Fase1">
          </div>
        </div>
        
        <div class="col-sm-6">
          <div class="m-item">
            <p class="n-text">Canal de origen</p>
            <div class="n-canal">
              <img src="images/impreso-icon.png" alt="">
              IMPRESO DETONADOR 1
            </div>
          </div>
        </div>
        
        <div class="col-sm-12">
          <div class="m-textarea">
            <div class="n-text">Texto del SMS</div>
            <textarea name="" id="" cols="50" rows="10"></textarea>
          </div>
        </div>

        <div class="col-sm-6">
          <div class="m-item">
            <div class="n-text">Enviar Cuando</div>
            <div class="caja-select-m">
              <select name="" id="">
                <option value="0">Seleccionar opción</option>
                <option value="1">Al detonar</option>
                <option value="2">Al recibir</option>
              </select>
              <span class="fa fa-plus-circle"></span>
            </div>
            <div class="horas">
              <input type="number" placeholder="01">
              <div class="caja-select-m">
                <select name="" id="">
                  <option value="1">Hora(s)</option>
                  <option value="1">Día(s)</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="m-item">
            <div class="n-text">Enviar A</div>

            <input type="radio" name="enviar" class="box-per">
            <label for="">Usuarios que detonaron</label>
            <input type="radio" name="enviar" class="box-per">
            <label for="">Usuarios que NO detonaron</label>
            <input type="radio" name="enviar" class="box-per">
            <label for="">Todosss</label>
          </div>
        </div>



      </div>

    </form>








    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>