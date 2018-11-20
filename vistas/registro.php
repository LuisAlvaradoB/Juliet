<?php
  //require '../partials/conexion-database.php';
  //$error = array();
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Buses Romani | Registro</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/core.css" rel="stylesheet">
    <link href="../css/index.css" rel="stylesheet">
    <link href="../css/login.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation header -->
    <?php require '../partials/header.php'?>

    <!-- Page Content -->
    <div class="container main-card">

      <!-- Content Row -->
      <div class="row">
        <div class="col-md-1 mb-1">
          
        </div>
        <!-- /.col-md-4 -->
        <div class="col-md-10 mb-10">
          <div class="card h-100">
            <div class="card-body">
              <h2 class="card-title">Registro</h2>
              <form action="../partials/registra_usuario.php" method="POST">
                <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputEmail4">Nombre</label>
                      <input type="text" name="nombre" class="form-control" id="input-name" placeholder="">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputPassword4">Apellido Paterno</label>
                      <input type="text" name="apellido_paterno" class="form-control" id="input-apellido-pat" placeholder="">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputEmail4">Apellido Materno</label>
                      <input type="text" name="apellido_materno" class="form-control" id="input-apellido-mat" placeholder="">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputPassword4">RUN</label>
                      <input type="text" name="run" class="form-control" id="input-run" placeholder="">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputEmail4">Correo Electrónico</label>
                      <input type="email" name="correo" class="form-control" id="input-email" placeholder="">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputPassword4">Contraseña</label>
                      <input type="password" name="contraseña" class="form-control" id="input-password" placeholder="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Dirección</label>
                    <input type="text" name="direccion" class="form-control" id="input-direccion" placeholder="">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputCity">Ciudad</label>
                    <input type="text" name="ciudad" class="form-control" id="input-ciudad">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="inputState">Provincia</label>
                    <input type="text" name="provincia" class="form-control" id="input-provincia">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                    </div>
                    <div class="form-group col-md-6">
                        <button type="submit" class="btn btn-primary btn-block">Registrarse</button>
                    </div>
                    <div class="form-group col-md-3">
                    </div>
                </div>
            </form>
            </div>
            <div class="card-footer">
              <span>¿Deseas iniciar sesión? </span><a href="login.php">aquí</a>
            </div>
          </div>
        </div>
        <!-- /.col-md-4 -->
        <div class="col-md-1 mb-1">
          
         </div>
        
        <!-- /.col-md-4 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <?php require '../partials/footer.php'?>

    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
