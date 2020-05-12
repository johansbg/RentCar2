
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
                        </div>
                    </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <section class="Reservas">
        <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="TablaUser" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>IdVehiculo</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>etc</th>
                            <th>etc</th>
                            <th>etc</th>
                            <th>etc</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1234</td>
                            <td>honda</td>
                            <td>asdasd</td>
                            <td>ffff</td>
                            <td>12.000</td>
                            <td>12/12/2020</td>
                            <td>$70</td>
                            <td><button type="button" class="btn btn-warning btn-sm" title="Modificar" data-toggle="modal" data-target="#ActualizarVehiculo" value="Editar Vehiculo"><i class="fa fa-edit"></i></button><button type="button" class="btn btn-danger btn-sm" title="Eliminar" data-toggle="modal" data-target="#EliminarVehiculo" value="Eliminar Vehiculo"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>IdVehiculo</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>etc</th>
                            <th>etc</th>
                            <th>etc</th>
                            <th>etc</th>
                            <th>Opciones</th>
                        </tr>
                    </tfoot>
                </table>
        </section>
        <div class="modal fade" id="ActualizarVehiculo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Actualizar Datos Vehiculo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <form class="form" action="##" method="post" id="registrationForm">
                        <div class="form-group">
                            
                            <div class="col-xs-6">
                                <label for="first_name"><h6>Nombres</h6></label>
                                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Nombres..." title="enter your first name if any.">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-6">
                              <label for="last_name"><h6>Apellidos</h6></label>
                                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Apellidos..." title="enter your last name if any.">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-Perfil">Guardar Cambios</button>
                </div>
            </div>
            </div>
        </div>
        <div class="modal fade" id="EliminarVehiculo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Eliminar Vehiculo *Nombre*</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>¿Seguro que quieres eliminar este vehiculo?.</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-success">Si</button>
                  <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                </div>
              </div>
            </div>
        </div>
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
                    <form class="form" action="##" method="post" id="registrationForm">
                        <div class="form-group">
                            
                            <div class="col-xs-6">
                                <label for="first_name"><h6>Nombre</h6></label>
                                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Nombres..." title="enter your first name if any.">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-6">
                              <label for="last_name"><h6>Marca</h6></label>
                                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Apellidos..." title="enter your last name if any.">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-6">
                              <label for="last_name"><h6>etc</h6></label>
                                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Apellidos..." title="enter your last name if any.">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-6">
                              <label for="last_name"><h6>etc</h6></label>
                                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Apellidos..." title="enter your last name if any.">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-Perfil">Crear Nuevo Vehiculo</button>
                </div>
            </div>
            </div>
        </div>
    
    <?include("Content/footer.php")?>
    <!-- Footer Section Begin -->
   
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
              "bSort" : true,
              "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
              },
              "searching": true,
            } 
          );
        });
    </script>
    <script>
        $('#ActualizarVehiculo').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var recipient = button.data('whatever') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
          });
          $('#EliminarVehiculo').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var recipient = button.data('whatever') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
          })
          $('#AgregarVehiculo').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var recipient = button.data('whatever') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
          })
          </script>	
</body>

</html>