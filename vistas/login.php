<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Buses Romani | Login</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/core.css" rel="stylesheet">
    <link href="../css/index.css" rel="stylesheet">
    <link href="../css/login.css" rel="stylesheet">

  </head>

  <body>
    <!-- header -->
    <?php require '../partials/header.php'?>
    <!-- Page Content -->
    <div class="container main-card">

      <!-- Content Row -->
      <div class="row">
        <div class="col-md-3 mb-3">
          
        </div>
        <!-- /.col-md-4 -->
        <div class="col-md-6 mb-6">
          <div class="card h-100">
            <div class="card-body">
              <h2 class="card-title">Iniciar Sesión</h2>
              <form action="../partials/valida_usuario.php" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Correo Electrónico</label>
                    <input type="email" name="correo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Su correo electrónico">
                    <small id="emailHelp" class="form-text text-muted">Nunca compartiremos tu correo electrónico con nadie más.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Contraseña</label>
                    <input type="password" name="contraseña" class="form-control" id="exampleInputPassword1" placeholder="Su contraseña">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
            </form>
            </div>
            <div class="card-footer">
              <span>¿Aún no tienes cuenta? Regístrate </span><a href="registro.php">aquí</a>
            </div>
          </div>
        </div>
        <!-- /.col-md-4 -->
        <div class="col-md-3 mb-3">
          
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
