<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Buses Romani | Home</title>

    <!-- Bootstrap core CSS -->
    <!--<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="../css/bootstrap-datetimepicker.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/core.css" rel="stylesheet">
    <link href="../css/index.css" rel="stylesheet">
    <link href="../css/login.css" rel="stylesheet">
    <link href="../css/home.css" rel="stylesheet">
    
   
  
  <body>
   <?php require '../partials/header_home.php'?>
    <!-- Page Content -->
    
    <div class="alert alert-info" role="alert">
      Iniciaste sesión con el correo : <?php echo $_SESSION['username']; ?>
    </div>

<div class="container main-card">

<!-- Content Row -->
<div class="row">
  <div class="col-md-12 mb-12">
    <div class="card h-100">
      <div class="card-body">
        <h2 class="card-title">Busqueda de viaje</h2>
        <label for="">Seleccione fecha en que quiere viajar más origen y destino, y presione BUSCAR VIAJES.</label>
        <label for="">Cuando aparezcan los viajes con disponibilidad, presione COMPRAR en el viaje elegido.</label>

        <form method='POST'>
          <div class="row main-fila">
            <div class="col-md-3 mb-3">
              <div class='input-group date' id='datetimepicker1'>
                <input type='text' class="form-control" />
                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                </span>
              </div>
            </div>

            <div class="col-md-3 mb-3">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="inputGroupSelect01">Origen</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01" name="ciudad_origen" >
                <?php require '../partials/busqueda_viaje.php'?>
                </select>
              </div>
            </div>

            <div class="col-md-3 mb-3">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="inputGroupSelect01">Destino</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01" name="ciudad_destino">
                  <option selected>-</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
            </div>

            <div class="col-md-3 mb-3">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="inputGroupSelect01">Cantidad de asientos</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01" name="cantidad_asientos">
                  
                  <?php 
                      for( $i=1;$i<31;$i++){
                        echo '<option value="'.$i.'">'.$i."</option>";
                      } 
                  ?>
                </select>
              </div>
            </div>
          </div> <!-- cierre row 2 fila -->

          <div class="row">
            <div class="col-md-4 mb-4">
            </div>
            <div class="col-md-4 mb-4">
              <button type="button" class="btn btn-outline-primary btn-sm btn-block">Buscar viaje</button>
            </div>
            <div class="col-md-4 mb-4">
            </div>
          </div> <!-- Cierre fila button -->
        </form>
        </div>
      </div>
    </div>
  
</div>
<!-- /.row -->
</div>


<div class="container main-card">
  <div class="row">
    <div class="col-md-12 mb-12">
      <div class="card h-100">
        <div class="card-body">
          <h4 class="card-title">Resultado de la búsqueda</h4>
          <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
        </div>
      </div>
    </div>
  </div>
</div>

  

    <!-- Footer -->
    <?php require '../partials/footer.php'?>

    <!-- Bootstrap core JavaScript -->
    <!--<script src="../vendor/jquery/jquery.min.js"></script>-->
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/moment.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap-datetimepicker.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap-datetimepicker.es.js"></script>
    <script src="../partials/datapicker.js"></script>
    
    
    

  </body>

</html>
