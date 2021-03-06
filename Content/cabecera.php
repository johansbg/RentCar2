<div id="preloder">
        <div class="loader"></div>
    </div>
    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="ht-left">
                    <div>
                        <img src="img/Logo.png " alt="Logotipo" style="padding: 5%;">
                    </div>
                </div>
                <div class="ht-right">
                    <?if(isset($_SESSION['Correo'])){?>
                            <a href="./php/CerrarUsuario.php" class="login-panel" title="CerrarSession"><?=$_SESSION['Correo']?></i></a>
                    <?}else{?>
                            <a href="./Login.php" class="login-panel" title="Iniciar sesion"><i class="fa fa-user"></i>Iniciar Sesion</a>
                    <?}?>
                    </script>
                        <div class="lan-selector">
                        <select class="language_drop" name="countries" id="countries" style="width:300px;">
                            <option value='co' data-image="img/flag-3.png" data-imagecss="flag co"
                                data-title="Español">Español</option>
                            <option value='yt' data-image="img/flag-1.jpg" data-imagecss="flag yt"
                                data-title="English">English</option>
                            <option value='yu' data-image="img/flag-2.jpg" data-imagecss="flag yu"
                                data-title="Bangladesh">German </option>
                        </select>
                    </div>
                    <div class="top-social">
                        <a href="#"><i class="ti-facebook"></i></a>
                        <a href="#"><i class="ti-twitter-alt"></i></a>
                        <a href="#"><i class="ti-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-item">
            <div class="container">
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li class="active"><a href="/">Inicio</a></li>
                        <li><a href="Catalogo.php">Catalogo</a></li>
                        <?if(isset($_SESSION['Correo'])){?>
                        <li><a href="Reservas.php">Reservas</a></li>
                        <li><a href="Perfil.php">Perfil</a></li>
                        <?}?>
                        <?if($_SESSION[Perfil]=="A"){?>
                        <li><a href="#">Opciones Administrativas</a>
                        <ul class="dropdown">
                            <li><a href="AdminstrarUsuarios.php">Administrar Usuarios</a></li>
                            <li><a href="AdministrarVehiculos.php">Administrar Vehiculos</a></li>
                        </ul>
                        <?}?>
                        <li><a href="#">Ayuda</a>
                        <ul class="dropdown">
                            <li><a href="UbicacionVehiculos.php">¿Donde estan nuestros vehiculos? </a></li>
                            <li><a href="ComoAcceder.php">¿Como acceder a ellos?</a></li>
                        </ul>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap">
                </div>
            </div>
        </div>
    </header>

    <!-- Header End -->
    <HR width="100%">
    <HR width="100%">