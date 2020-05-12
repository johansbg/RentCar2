<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Registro</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/Login.min.css" rel="stylesheet">

</head>
<style>

  input[type=date]::-webkit-outer-spin-button,
  
  input[type=date]::-webkit-inner-spin-button {
  
      -webkit-appearance: none;
  
      margin: 0;
  
  }
  
   
  
  input[type=date] {
  
      -moz-appearance:textfield;
  
  }
  
</style>
<body style="background-color: #2F4F4F;">
  
  <div class="container"style="padding-left:0%;padding-right:0%;">
    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5" >
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Regristrate</h1>
                  </div>
                  <form action="/php/CrearUsuario.php" id="login-form" method="POST" class="user">
                      <div class="form-group">
                        <label>Correo</label>
                        <input type="email" class="form-control form-control-user" name="email" id="email" aria-describedby="emailHelp" placeholder="Escriba su correo...">
                      </div>
                      <div class="form-group">
                        <label>Contraseña:</label>
                        <input type="password" class="form-control form-control-user" name="password" id="password" placeholder="Contraseña">
                      </div>
                      <footer>
                        <button type="submit" style="background-color:#2F4F4F;color:white;" class="btn btn-success btn-user btn-block">
                          Crear nueva cuenta
                        </button>
                      </footer>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="inicioSesion">¿Ya tienes cuenta? Inicia sesión</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="#">¿Olvido su contraseña?</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-6"style="">
                  <img style="padding-top:50%; " src="img/Logologin.png" />
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

</body>

</html>