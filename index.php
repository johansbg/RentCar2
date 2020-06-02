<?include("Content/head.php")?>

<body>
    <!-- Header Section Begin -->
    <?include("Content/cabecera.php")?>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero-section">
        <section class="set-bg spad" data-setbg="img/LogoBanner.png">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                            <h1 style="color:white;" >CITYRENT</h1>
                            <p style="color:white;">La nueva forma de rentar autos donde quieras y a la hora que quieras.</p>
                            <button class="primary-btn" data-toggle="modal" data-target="#TrailerZipCar">Mira como funciona</button>
                        </div>
                    </div>
            </div>
        </div>
    </section>
<!-- Modal -->
    <div class="modal fade" id="TrailerZipCar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Como usar RENTCAR</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    <iframe width="100%" height="415"  src="https://www.youtube.com/embed/ZWXSbCcFQ8M" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                                </div>
                </div>
            </div>
        </div>   
    </div>     
    <!-- Hero Section End -->

    <!-- Banner Section Begin -->
    <div class="banner-section spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="img/banner-1.png" alt="">
                        <div class="inner-text">
                            <h4>Conocenos</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="img/banner-2.png" alt="">
                        <div class="inner-text">
                            <a href="Catalogo.php"><h4>Rentalo</h4></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="img/banner-3.png" alt="">
                        <div class="inner-text">
                        <a href="Reservas.php"><h4>Devuelvelo</h4></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Section End -->

    <!-- Women Banner Section Begin -->
    <section class="Carrusel Carros">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="filter-control">
                        <h3 >Catalogo de Vehiculos</h3>
                    </div>
                    <div class="product-slider owl-carousel">
                    <?$sql="SELECT 	`IdVehiculos`, 
                                        `Nombre`, 
                                        `Marca`, 
                                        `Modelo`, 
                                        `Color`,
                                        `Ano`, 
                                        `Kilometraje`, 
                                        `IdCategoria`,
                                        `Imagen1`, 
                                        `Imagen2`, 
                                        `Imagen3`
                                        FROM 
                                        `vehiculos`";
                            $micon->consulta($sql);
                            while($row=$micon->campoconsultaA()){
                                $sql1="SELECT `IdCategoria`, 
                                `NombreCategoria`, 
                                `PrecioHora`, 
                                `PrecioDia`, 
                                `Tiempodevida`
                                FROM 
                                `categoriavehiculo`
                                WHERE `IdCategoria`='$row[IdCategoria]';";
                                $micon1->consulta($sql1);
                                $row1=$micon1->campoconsultaA();
                            ?>
                        <div class="product-item">
                            <div class="pi-pic">
                                <?$Images1="images/productos/".$row[IdVehiculos]."/".$row[Imagen1];?>
                                <img src="<?=$Images1?>" alt="">
                                <ul>
                                    <li class="quick-view"><a href="Catalogo.php?IdVeh">+ Ver En el Catalogo</a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name"><?=$row1[NombreCategoria]?></div>
                                <a href="#">
                                    <h5><?=$row[Nombre]?></h5>
                                </a>
                                <div class="product-price">
                                    $<?=$row1[PrecioHora]?>/hr-$<?=$row1[PrecioDia]?>/dia
                                </div>
                            </div>
                        </div>
                            <?}?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="Benefits">
            <div class="benefit-items">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="img/icon-1.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Free Shipping</h6>
                                <p>For all order over 99$</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="img/icon-2.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Delivery On Time</h6>
                                <p>If good have prolems</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="img/icon-1.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Secure Payment</h6>
                                <p>100% secure payment</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer Section Begin -->
    <?include("Content/footer.php")?>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script>
    $(document).ready(function() {
      $('#TrailerZipCar').on('show.bs.modal', function (event) {

      });
    })
    </script>
    
</body>

</html>
    
    
