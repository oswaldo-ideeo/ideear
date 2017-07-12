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
          <p class="resumen">Datos de facturación</p>
          <form class="row datos-compra">
            <div class="col-md-6">
              <table class="table table-condensed">
              
                <thead>
                 
                  <tr class="border-azul">
                    <td colspan="2">Datos del titular</td>
                   
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <label for="">Nombre</label>
                      <input type="text" placeholder="Alejandro">
                    </td>
                    <td>
                      <label for="">Apellido</label>
                      <input type="text">
                    </td>
                    
                  </tr>
                  <tr>
                    <td colspan="2">
                      <label>Calle</label>
                      <input class="w-100" type="text" placeholder="Carrie Ranch">
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <label for="">Número exterior</label>
                      <input type="number" placeholder="154">
                    </td>
                    <td>
                      <label for="">Código Postal</label>
                      <input type="number" placeholder="09070">
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label for="">País</label>
                      <div class="contenedor-select">
                        <select name="" id="">
                          <option value="0">Seleciona País</option>
                          <option value="1">México</option>
                          <option value="2">Brasil</option>
                          <option value="3">Peru</option>
                        </select>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div class="col-md-6">
              <table class="table table-condensed">
              
                <thead>
                 
                  <tr class="border-azul">
                    <td colspan="3">Datos de Tarjeta</td>
                    
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td colspan="3">
                      <label for="">No. de Tarjeta</label>
                      <input class="w-75" type="number" placeholder="5321 6355 6329 4152">
                      <span class="fa fa-cc-mastercard"><span class="fa fa-cc-visa"></span></span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label>Fecha de expiración</label>
                      <div class="contenedor-select">
                        <select name="" id="">
                          <option value="01">ENE</option>
                          <option value="02">FEB</option>
                          <option value="03">MAR</option>
                          <option value="04">ABR</option>
                          <option value="05">MAY</option>
                          <option value="06">JUN</option>
                          <option value="07">JUL</option>
                          <option value="08">AGT</option>
                          <option value="09">SEP</option>
                          <option value="10">OCT</option>
                          <option value="11">NOV</option>
                          <option value="12">DIC</option>
                        </select>
                      </div>
                    </td>
                    <td >
                      <label for="" class="hides">oculto</label>
                      <div class="contenedor-select w-100" >
                        <select name="" id="">
                          <option value="">2017</option>
                          <option value="">2018</option>
                          <option value="">2019</option>
                          <option value="">2020</option>
                          <option value="">2021</option>
                          <option value="">2022</option>
                          <option value="">2023</option>
                          <option value="">2024</option>
                          <option value="">2025</option>
                          <option value="">2026</option>
                        </select>
                      </div>
                    </td>
                    <td>
                      <label for="">CVV <span class="fa fa-info-circle info-card" data-toggle="tooltip" title="<img src='images/visa.png' /><br>Los numeros que aparecen al reverso de tu tarjeta"></span></label>
                      <input type="password">

                      
                      
                    </td>
                  </tr>

                  <tr>
                    <td colspan="3">
                      <label for="">Nombre del titular</label>
                      <input class="w-100" type="text" placeholder="Como aparece en la Tarjeta">
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="clear"></div>
             <div class="pagaar">
              <p><b>Plan Ulimited IdeeAR+</b></p>
              <p><span>Importe</span><b class="monto">$490,000</b></p>
              
                <button type="button" class="button-pago" onclick="window.location.href='pago-error.php'">PAGAR</button>
              
            </div>
          </form>
         

          </div>
        </div>
      </div>
    </div>
  

  </div>
</div>
   



    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
      $(function () {
  $('[data-toggle="tooltip"]').tooltip({
    animated:'fade',
    placement: 'right',
    html: true
  })
})
    </script>
</body>
</html>