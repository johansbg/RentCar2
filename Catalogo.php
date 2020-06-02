

<?include("Content/head.php")?>
<body>
    <?include("Content/cabecera.php")?>

    <!-- Header End -->
    <br>
    <br>
    <!-- Product Shop Section Begin -->
    <section class="product-shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 produts-sidebar-filter">
                <?
                 $sql1="SELECT `IdCategoria`, 
                                `NombreCategoria`, 
                                `PrecioHora`, 
                                `PrecioDia`, 
                                `Tiempodevida`
                                FROM 
                                `categoriavehiculo`";
                                $micon1->consulta($sql1);
                   $sql="SELECT DISTINCT `Marca`
                                        FROM 
                                        `vehiculos`";
                            $micon->consulta($sql);?>
                <form class="form" action="php/FiltrarBusquedas.php" method="post" id="registrationForm">
                    <div class="filter-widget">
                        <h4 class="fw-title">Ordenar por</h4>
                        <div class="fw-brand-check">
                            <select id="orden" name="orden">
                                <option value="0">Mas recientes</option>
                                <option value="1">De mayor a menor año</option>
                                <option value="2">De menor a mayor año</option>
                            </select>
                        </div>
                    </div>
                    <div class="filter-widget">
                        <h4 class="fw-title">Categorias</h4>
                        <div class="fw-brand-check">
                        <?while($row1=$micon1->campoconsultaA()){?>
                            <div class="bc-item">
                                <input type="checkbox" value="yes" class="checkmark" id="<?=$row1[NombreCategoria]?>" name="<?=$row1[NombreCategoria]?>">
                                <label for="<?=$row1[NombreCategoria]?>"><?=$row1[NombreCategoria]?></label>
                            </div>
                        <?}?>
                        </div>
                    </div>
                    <div class="filter-widget">
                        <h4 class="fw-title">Marcas</h4>
                        <div class="fw-brand-check">
                            <?while($row=$micon->campoconsultaA()){?>
                                <div class="bc-item">
                                    <input type="checkbox" value="yes" class="checkmark" id="<?=$row[Marca]?>" name="<?=$row[Marca]?>">
                                    <label for="<?=$row[Marca]?>"><?=$row[Marca]?></label>
                                </div>
                            <?}?>
                        </div>
                    </div>
                    <?$sql2="SELECT MIN(PrecioHora) as minimo,MAX(PrecioDia)as maximo FROM `categoriavehiculo`";
                    $micon2->consulta($sql2);
                    $row2=$micon2->campoconsultaA();?>
                    <div class="filter-widget">
                        <h4 class="fw-title">Precio</h4>
                        <div class="filter-range-wrap">
                            <div class="range-slider">
                                <div class="price-input">
                                    <input type="text" id="minamount" name="minamount" >
                                    <input type="text" id="maxamount" name="maxamount" >
                                </div>
                            </div>

                            <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                data-min="<?=$row2[minimo]?>" data-max="<?=$row2[maximo]?>">
                                <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                            </div>
                        </div>
                    </div>
                    <div class="filter-widget">
                        <h4 class="fw-title">Color</h4>
                        <div class="fw-brand-check">
                            <div class="bc-item">
                                <input type="checkbox" value="yes" class="checkmark" id="negro" name="negro">
                                <label for="negro">Negro</label>
                            </div>
                            <div class="bc-item">
                                <input type="checkbox" value="yes" class="checkmark" id="blanco" name="blanco">
                                <label for="violeta">Blanco</label>
                            </div>
                            <div class="bc-item">
                                <input type="checkbox" value="yes" class="checkmark" id="azul" name="azul">
                                <label for="violeta">Azul</label>
                            </div>
                            <div class="bc-item">
                                <input type="checkbox" value="yes" class="checkmark" id="Amarillo" name="Amarillo">
                                <label for="violeta">Amarillo</label>
                            </div>
                            <div class="bc-item">
                                <input type="checkbox" value="yes" class="checkmark" id="rojo" name="rojo">
                                <label for="rojo">Rojo</label>
                            </div>
                            <div class="bc-item">
                                <input type="checkbox" value="yes" class="checkmark" id="verde" name="verde">
                                <label for="verde">Verde</label>
                            </div>
                        </div>
                    </div>
                    <div class="filter-widget">
                        <button type="submit" style="background-color:#2F4F4F;color:white;" class="btn btn-success btn-user btn-block">Filtrar Todo</button>
                    </div>
                </form>
                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="product-show-option">
                        <div class="row">
                            <div class="col-lg-7 col-md-7">
                                <h4>Catalogo de vehiculos</h4>
                            </div>
                            <?$sql4="SELECT count(`Marca`) as Cantidad
                                        FROM 
                                        `vehiculos`";
                            $micon4->consulta($sql4);
                            $row4=$micon4->campoconsultaA();?>
                            <div class="col-lg-5 col-md-5 text-right">
                                <p>Se esta mostrando <?=$row4[Cantidad]?> resultados</p>
                            </div>
                        </div>
                    </div>
                    <div class="product-list">
                        <div class="row">
                            <!-- AQUI SE CARGAN LOS VEHICULOS-->
                            
                            <?if($_GET[SRCH]==""){
                            $sql="SELECT 	`IdVehiculos`, 
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
                            }else{
                                $consulta=base64_decode($_GET[SRCH]);
                                $sql="$consulta";
                            }
                            $micon->consulta($sql);
                            while($row=$micon->campoconsultaA()){
                                if($_GET[SRCH2]==""){
                                    $sql1="SELECT `IdCategoria`, 
                                    `NombreCategoria`, 
                                    `PrecioHora`, 
                                    `PrecioDia`, 
                                    `Tiempodevida`
                                    FROM 
                                    `categoriavehiculo`
                                    WHERE `IdCategoria`='$row[IdCategoria]';";
                                }else{
                                    $sql1="SELECT `IdCategoria`, 
                                    `NombreCategoria`, 
                                    `PrecioHora`, 
                                    `PrecioDia`, 
                                    `Tiempodevida`
                                    FROM 
                                    `categoriavehiculo`
                                    WHERE `IdCategoria`='$row[IdCategoria]'";
                                    $consulta1=base64_decode($_GET[SRCH2]);
                                    $sql1=$sql1.$consulta1;
                                }
                                $micon1->consulta($sql1);
                                $row1=$micon1->campoconsultaA();
                                if($row1[NombreCategoria]!=""){
                                ?>
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <?$Images1="images/productos/".$row[IdVehiculos]."/".$row[Imagen1];?>
                                        <img src="<?=$Images1?>" alt="">
                                        <ul>
                                            <li class="w-icon active"><a href="" data-toggle="modal" data-target="#Reservar<?=$row[IdVehiculos]?>">Reservar</a></li>
                                            
                                            <div class="modal fade" id="Reservar<?=$row[IdVehiculos]?>" tabindex="-1" role="dialog" aria-labelledby="Detalles" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                  <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="">Rentar Vehiculo *USAR TU MEMEBRESIA*</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        </div>
                                                    <div class="modal-body">
                                                        <a href="RutaVehiculo.php?idVeh=<?=$row[IdVehiculos]?>"><img  src="img/Membresia.png" alt="" title="Usar Membresia"></a>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            <li class="quick-view"><a href="" data-toggle="modal" data-target="#Detalles<?=$row[IdVehiculos]?>">Detalles</a></li>
                                            
                                            <div class="modal fade" id="Detalles<?=$row[IdVehiculos]?>" tabindex="-1" role="dialog" aria-labelledby="Detalles" aria-hidden="true">
                                                <div class="modal-dialog  modal-dialog-centered modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Detalles Del Vehiculo *<?=$row[Nombre]?>*</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="container-fluid">
                                                            <div class="row"> 
                                                            <div class="col-md-12 ml-auto">
                                                                <div id="carouselExampleIndicators<?=$row[IdVehiculos]?>" class="carousel slide" data-ride="carousel">
                                                                    <ol class="carousel-indicators">
                                                                        <li data-target="#carouselExampleIndicators<?=$row[IdVehiculos]?>" data-slide-to="0" class="active"></li>
                                                                        <?if($row[Imagen2]!=""){?>
                                                                        <li data-target="#carouselExampleIndicators<?=$row[IdVehiculos]?>" data-slide-to="1"></li>
                                                                        <?}?>
                                                                        <?if($row[Imagen3]!=""){?>
                                                                        <li data-target="#carouselExampleIndicators<?=$row[IdVehiculos]?>" data-slide-to="2"></li>
                                                                        <?}?>
                                                                    </ol>
                                                                    <div class="carousel-inner">
                                                                    <?$Images1="images/productos/".$row[IdVehiculos]."/".$row[Imagen1];?>
                                                                    <?$Images2="images/productos/".$row[IdVehiculos]."/".$row[Imagen2];?>
                                                                    <?$Images3="images/productos/".$row[IdVehiculos]."/".$row[Imagen3];?>
                                                                        <div class="carousel-item active">
                                                                        <img class="d-block w-100" src="<?=$Images1?>" alt="First slide">
                                                                        </div>
                                                                        <?if($row[Imagen2]!=""){?>
                                                                        <div class="carousel-item">
                                                                        <img class="d-block w-100" src="<?=$Images2?>" alt="Second slide">
                                                                        </div>
                                                                        <?}?>
                                                                        <?if($row[Imagen3]!=""){?>
                                                                        <div class="carousel-item">
                                                                        <img class="d-block w-100" src="<?=$Images3?>" alt="Third slide">
                                                                        </div>
                                                                        <?}?>
                                                                    </div>
                                                                    <a class="carousel-control-prev" href="#carouselExampleIndicators<?=$row[IdVehiculos]?>" role="button" data-slide="prev">
                                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                        <span class="sr-only">Previous</span>
                                                                    </a>
                                                                    <a class="carousel-control-next" href="#carouselExampleIndicators<?=$row[IdVehiculos]?>" role="button" data-slide="next">
                                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                        <span class="sr-only">Next</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 ml-auto">
                                                                <div class="card shadow mb-4">
                                                                    <div class="card-body">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-bordered" id="TablaUser" width="100%" cellspacing="0">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Marca</th>
                                                                                <th>Modelo</th>
                                                                                <th>Año</th>
                                                                                <th>Color</th>
                                                                                <th>Kilometros</th>
                                                                                <th>Categoria</th>
                                                                                <th>Precio por hora</th>
                                                                                <th>Precio por dia</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td><?=$row[Marca]?></td>
                                                                                <td><?=$row[Modelo]?></td>
                                                                                <td><?=$row[Ano]?></td>
                                                                                <td><?=$row[Color]?></td>
                                                                                <td><?=$row[Kilometraje]?></td>
                                                                                <td><?=$row1[NombreCategoria]?></td>
                                                                                <td><?=$row1[PrecioHora]?></td>
                                                                                <td><?=$row1[PrecioDia]?></td>
                                                                            </tr>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
                            </div>
                            <?}
                        }?>
                        </div>
                    </div>
                
            </div>
        </div>
    </section>
    <!-- Product Shop Section End -->
    <?include("Content/footer.php")?>
    <script src="js/plugin/jquery-form/jquery-form.min.js"></script>
	<script src="js/plugin/datatables/jquery.dataTables.min.js"></script>
	<script src="js/plugin/datatables/dataTables.colVis.min.js"></script>
	<script src="js/plugin/datatables/dataTables.tableTools.min.js"></script>
	<script src="js/plugin/datatables/dataTables.bootstrap.min.js"></script>
	<script src="js/plugin/datatable-responsive/datatables.responsive.min.js"></script>
    <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

	<!-- Page level plugins -->
	<script src="js/datatables/jquery.dataTables.min.js"></script>
	<script src="js/datatables/dataTables.bootstrap4.min.js"></script>
											
	<!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
    <script>
        $(document).ready(function() {
          $('#TablaUser').DataTable(
            {
				"bSort" : false,
				"lengthMenu": [[5], [5]],
				"language": {
					"url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
				},
				"searching": false,
				"lengthChange": false,
                "paging":   false,
                "info":     false
			} 
          );
        });
    </script>
    <script>
    <?$sql="SELECT 	`IdVehiculos`
     FROM 
     `vehiculos`";
    $micon->consulta($sql);
    while($row=$micon->campoconsultaA()){?>
      $('#Detalles<?=$row[IdVehiculos]?>').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
      }),
      $('.carouselExampleIndicators<?=$row[IdVehiculos]?>').carousel({
        interval: 2000
      });
    <?}?>
    </script>
</body>

</html>