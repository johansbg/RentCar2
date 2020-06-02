
<?include("Content/head.php")?>
<body>
    <?include("Content/cabecera.php")?>

    <!-- Header End -->
    <br>
    <br>
    <br> 
    <br>
    <br>
    <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                            <h2>Administrar Vehiculos</h2>
                            <p>Seccion determinada para la agregacion, modificacion y eliminacion de Vehiculos</p>
                            <a href="#" class="primary-btn" data-toggle="modal" data-target="#AgregarVehiculo" value="Agregar Vehiculo">Agregar Vehiculo</a>
                            <a href="#" class="primary-btn" data-toggle="modal" data-target="#AgregarCategoria" value="Agregar Categoria">Agregar Categoria</a>
                            </div>
                    </div>
            </div>
        </div>
    </section>
    <br>
    <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                            <?if($_GET[Validate]=='2'){?>
                                    <div class="alert alert-success alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        <strong>Vehiculo Modificado con exito!</strong>
                                    </div>
                                    <?}else{
                                    if($_GET[Validate]=='1'){?>
                                    <div class="alert alert-success alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        <strong>Vehiculo Eliminado con exito!</strong>
                                    </div>
                                    <?}
                             }?>
                             <?if($_GET[val]=='2'){?>
                                    <div class="alert alert-success alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        <strong>Se creo un vehiculo con exito!</strong>
                                    </div>
                                    <?}else{
                                    if($_GET[val]=='1'){?>
                                    <div class="alert alert-success alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        <strong>Se creo una categoria con exito!</strong>
                                    </div>
                                    <?}
                             }?>
                        </div>
                    </div>
            </div>
        </div>
    </section>
    <br>
    <section style="margin-left: 10%;margin-right: 10%;" class="Reservas">
        <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="TablaUser" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>IdVehiculo</th>
                            <th>Nombre</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>color</th>
                            <th>Año</th>
                            <th>Kilometraje</th>
                            <th>Categoria</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?
                    $sql="SELECT 	`IdVehiculos`, 
                    `Nombre`, 
                    `Marca`, 
                    `Modelo`, 
                    `Color`,
                    `Ano`, 
                    `Kilometraje`, 
	                `IdCategoria`
                    FROM 
                    `vehiculos`";
                    $micon->consulta($sql);
                    while($row=$micon->campoconsultaA()){?>
                        <tr>
                            <td><?=$row[IdVehiculos]?></td>
                            <td><?=$row[Nombre]?></td>
                            <td><?=$row[Marca]?></td>
                            <td><?=$row[Modelo]?></td>
                            <td><?=$row[Color]?></td>
                            <td><?=$row[Ano]?></td>
                            <td><?=$row[Kilometraje]?></td>
                            <?$sql1="SELECT 	`IdCategoria`, 
                                    `NombreCategoria`, 
                                    `PrecioHora`, 
                                    `PrecioDia`, 
                                    `Tiempodevida`
                                    FROM 
                                    `categoriavehiculo`
                                    WHERE `IdCategoria`='$row[IdCategoria]';";
                                    $micon1->consulta($sql1);
                                    $row1=$micon1->campoconsultaA();?>
                            <td><?=$row1[NombreCategoria]?></td>
                            <td><button type="button" class="btn btn-warning btn-sm" title="Modificar <?=$row[IdVehiculos]?>" data-toggle="modal" data-target="#ActualizarVehiculo<?=$row[IdVehiculos]?>" value="Editar Vehiculo"><i class="fa fa-edit"></i></button><button type="button" class="btn btn-danger btn-sm" title="Eliminar <?=$row[IdVehiculos]?>" data-toggle="modal" data-target="#EliminarVehiculo<?=$row[IdVehiculos]?>" value="Eliminar Vehiculo"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                        </tr>
                        <div class="modal fade" id="ActualizarVehiculo<?=$row[IdVehiculos]?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Actualizar Datos Vehiculo <?=$row[Nombre]?></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <form class="form" action="./php/ActualizarVehiculo.php?idVeh=<?=$row[IdVehiculos]?>" method="post" id="registrationForm<?=$row[IdVehiculos]?> " enctype="multipart/form-data">
                                    <div class="form-group">
                                        <div class="col-xs-6">
                                            <label for="first_name"><h6>Nombre</h6></label>
                                            <input type="text" class="form-control" name="Nombre" id="Nombre" placeholder="Nombre...">
                                        </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-6">
                                            <label for="last_name"><h6>Marca</h6></label>
                                                <input type="text" class="form-control" name="Marca" id="Marca" placeholder="Marca...">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-6">
                                            <label for="last_name"><h6>Modelo</h6></label>
                                                <input type="text" class="form-control" name="Modelo" id="Modelo" placeholder="Modelo..." >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-6">
                                            <label for="Color"><h6>Color</h6></label>
                                                <input type="text" class="form-control" name="Color" id="Color" placeholder="Color..." >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-6">
                                            <label for="last_name"><h6>Año</h6></label>
                                                <input type="text" class="form-control" name="Año" id="Año" placeholder="Año..." >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-6">
                                            <label for="last_name"><h6>Kilometraje</h6></label>
                                                <input type="text" class="form-control" name="Kilometraje" id="Kilometraje" placeholder="Kilometraje...">
                                            </div>
                                        </div>
                                        <?$sql2="SELECT 	`IdCategoria`, 
                                                `NombreCategoria`, 
                                                `PrecioHora`, 
                                                `PrecioDia`, 
                                                `Tiempodevida`
                                                FROM 
                                                `categoriavehiculo`";
                                                $micon2->consulta($sql2);
                                                ?>
                                        <div class="form-group">
                                            <div class="col-xs-6">
                                            <label for="last_name"><h6>Categoria</h6></label>
                                                <select class="form-control" id="Categoria" name="Categoria">
                                                <option value="value2" selected>Elige Categoria</option>
                                                <?while($row2=$micon2->campoconsultaA()){?>
                                                    <option value="<?=$row2[IdCategoria]?>"><?=$row2[NombreCategoria]?></option> 
                                                <?}?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="label"><small>Imagen 1*</small></label>
                                                <label class="input"> 
                                                    <input type="file" class="form-control" name="PrdImagen1" id="PrdImagen1">
                                                </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="label"><small>Imagen 2</small></label>
                                                <label class="input"> 
                                                    <input type="file" class="form-control" name="PrdImagen2" id="PrdImagen2">
                                                </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="label"><small>Imagen 3</small></label>
                                                <label class="input"> 
                                                    <input type="file" class="form-control" name="PrdImagen3" id="PrdImagen3">
                                                </label>
                                        </div>
                                        <button type="submit" style="background-color:#2F4F4F;color:white;" class="btn btn-success btn-user btn-block">Actualizar Vehiculo</button>
                                    </form>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="modal fade" id="EliminarVehiculo<?=$row[IdVehiculos]?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title">Eliminar Vehiculo <?=$row[Nombre]?></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                <p>¿Seguro que quieres eliminar este vehiculo?.</p>
                                </div>
                                <div class="modal-footer">
                                <a href="./php/EliminarVehiculo.php?Idvehi=<?=$row[IdVehiculos]?>" type="button" class="btn btn-success">Si</a>
                                <button type="button" data-dismiss="modal" class="btn btn-danger" data-dismiss="modal">No</button>
                                </div>
                            </div>
                            </div>
                        </div>
                    <?}?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>IdVehiculo</th>
                            <th>Nombre</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>color</th>
                            <th>Año</th>
                            <th>Kilometraje</th>
                            <th>Categoria</th>
                            <th>Opciones</th>
                        </tr>
                    </tfoot>
                </table>
        </section>
        <div class="modal fade" id="AgregarVehiculo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Agregar Vehiculo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <form class="form" action="./php/AnadirVehiculo.php" method="post" id="registrationForm"  enctype="multipart/form-data">
                        <div class="form-group">
                            
                            <div class="col-xs-6">
                                <label for="first_name"><h6>Nombre</h6></label>
                                <input type="text" class="form-control" name="Nombre" id="Nombre" placeholder="Nombre...">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-6">
                              <label for="last_name"><h6>Marca</h6></label>
                                <input type="text" class="form-control" name="Marca" id="Marca" placeholder="Marca...">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-6">
                              <label for="last_name"><h6>Modelo</h6></label>
                                <input type="text" class="form-control" name="Modelo" id="Modelo" placeholder="Modelo..." >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-6">
                              <label for="Color"><h6>Color</h6></label>
                                <input type="text" class="form-control" name="Color" id="Color" placeholder="Color..." >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-6">
                              <label for="last_name"><h6>Año</h6></label>
                                <input type="text" class="form-control" name="Año" id="Año" placeholder="Año..." >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-6">
                              <label for="last_name"><h6>Kilometraje</h6></label>
                                <input type="text" class="form-control" name="Kilometraje" id="Kilometraje" placeholder="Kilometraje...">
                            </div>
                        </div>
                        <?$sql2="SELECT 	`IdCategoria`, 
                                `NombreCategoria`, 
                                `PrecioHora`, 
                                `PrecioDia`, 
                                `Tiempodevida`
                                FROM 
                                `categoriavehiculo`";
                                $micon2->consulta($sql2);
                                ?>
                        <div class="form-group">
                            <div class="col-xs-6">
                              <label for="last_name"><h6>Categoria</h6></label>
                                <select class="form-control" id="Categoria" name="Categoria">
                                <option value="value2" selected>Elige Categoria</option>
                                <?while($row2=$micon2->campoconsultaA()){?>
                                    <option value="<?=$row2[IdCategoria]?>"><?=$row2[NombreCategoria]?></option> 
                                <?}?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
							<label class="label"><small>Imagen 1*</small></label>
								<label class="input"> 
									<input type="file" class="form-control" name="PrdImagen1" id="PrdImagen1">
								</label>
						</div>
                        <div class="form-group">
							<label class="label"><small>Imagen 2</small></label>
								<label class="input"> 
									<input type="file" class="form-control" name="PrdImagen2" id="PrdImagen2">
								</label>
						</div>
                        <div class="form-group">
							<label class="label"><small>Imagen 3</small></label>
								<label class="input"> 
									<input type="file" class="form-control" name="PrdImagen3" id="PrdImagen3">
								</label>
						</div>
                        <button type="submit" style="background-color:#2F4F4F;color:white;" class="btn btn-success btn-user btn-block">Crear Nuevo Vehiculo</button>
                    </form>
                </div>
            </div>
            </div>
        </div>
        <div class="modal fade" id="AgregarCategoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Agregar Categoria</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <form class="form" action="./php/AnadirCategoria.php" method="post" id="registrationForm">
                        <div class="form-group">
                            
                            <div class="col-xs-6">
                                <label for="NombreCategoria"><h6>Nombre Categoria</h6></label>
                                <input type="text" class="form-control" name="NombreCategoria" id="NombreCategoria" placeholder="Nombre Categoria...">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-6">
                              <label for="PrecioHora"><h6>Precio Hora</h6></label>
                                <input type="number" min="1" step="any" class="form-control" name="PrecioHora" id="PrecioHora" placeholder="Precio Hora...">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-6">
                              <label for="PrecioDia"><h6>Precio Dia</h6></label>
                                <input type="number" min="1" step="any" class="form-control" name="PrecioDia" id="PrecioDia" placeholder="Precio Dia...">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-6">
                              <label for="Tiempodevida"><h6>Tiempo de vida</h6></label>
                                <input type="text" class="form-control" name="Tiempodevida" id="Tiempodevida" placeholder="Tiempo de vida..." >
                            </div>
                        </div>
                        <button type="submit" style="background-color:#2F4F4F;color:white;" class="btn btn-success btn-user btn-block">Crear Nueva Categoria</button>
                    </form>
                </div>
            </div>
            </div>
        </div>
    
    <?include("Content/footer.php")?>
    <?include("Content/scripts.php")?>
    <script src="js/plugin/jquery-form/jquery-form.min.js"></script>
	<script src="js/plugin/datatables/jquery.dataTables.min.js"></script>
	<script src="js/plugin/datatables/dataTables.colVis.min.js"></script>
	<script src="js/plugin/datatables/dataTables.tableTools.min.js"></script>
	<script src="js/plugin/datatables/dataTables.bootstrap.min.js"></script>
	<script src="js/plugin/datatable-responsive/datatables.responsive.min.js"></script>
    <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    <script src="js/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
                                                                  
	<!-- Page level plugins -->
	<script src="js/datatables/jquery.dataTables.min.js"></script>
	<script src="js/datatables/dataTables.bootstrap4.min.js"></script>
											
	<!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
    <script>
        $(document).ready(function() {
          $('#TablaUser').DataTable(
            {
				"bSort" : true,
				"lengthMenu": [[5], [5]],
				"language": {
					"url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
				},
				"searching": true,
				"lengthChange": false
			}
          );
          pageSetUp();
        });
    </script>
    <script>
          $('#AgregarCategoria').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var recipient = button.data('whatever') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
          });
          $('#AgregarVehiculo').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var recipient = button.data('whatever') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
          });
          <?$sql="SELECT 	`IdVehiculos`
            FROM 
            `vehiculos`";
            $micon->consulta($sql);
            while($row=$micon->campoconsultaA()){?>
          $('#ActualizarVehiculo<?=$row[IdVehiculos]?>').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var recipient = button.data('whatever') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
          });
          $('#EliminarVehiculo<?=$row[IdVehiculos]?>').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var recipient = button.data('whatever') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
          })
        <?}?>
          </script>	
</body>

</html>