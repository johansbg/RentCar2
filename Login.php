<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <!-- Custom styles for this template-->
  <link href="css/Login.min.css" rel="stylesheet">

</head>

<body style="background-color:#2F4F4F ;">
  
  <div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Iniciar sesión</h1>
                  </div>
                  <?if($_GET[user]=='2'){?>
                  <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Usuario Creado!</strong>
                  </div>
                  <?}else{
                      if($_GET[user]=='1'){?>
                      <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>El correo ya existe!</strong>
                      </div>
                      <?}
                      }?>
                  <form action="./php/ValidarUsuario.php" id="login-form" method="POST" class="user">
                      <div class="form-group">
                        <input type="email" class="form-control form-control-user" name="email" id="email" aria-describedby="emailHelp" placeholder="Escriba su correo...">
                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control form-control-user" name="password" id="password" placeholder="Contraseña">
                      </div>
                      <div class="form-group">
                        <div class="custom-control custom-checkbox small">
                          <input type="checkbox" value="yes" class="custom-control-input" id="remember" name="remember">
                          <label class="custom-control-label" for="remember">Recuerdame</label>
                        </div>
                      </div>
                      <footer>
                        <button type="submit" style="background-color:#2F4F4F;color:white;"class="btn btn-user btn-block">
                          Iniciar sesión
                        </button>
                      </footer>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="./Register.php">¿No tienes cuenta? Registrate</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="#">¿Olvido su contraseña?</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                  <img style="width: 100%; " src="img/Logologin.png" />

              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
</body>
</html>