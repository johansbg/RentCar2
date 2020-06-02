
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
                            <h2>Administrar Usuarios</h2>
                            <p>Seccion determinada para la modificacion y eliminacion de usuarios</p>
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
                            <?if($_GET[Validate]=='1'){?>
                                    <div class="alert alert-success alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        <strong>Usuario Actualizado con exito!</strong>
                                    </div>
                            <?}?>
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
                            <th>IdUsuario</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Correo</th>
                            <th>FechaNacimiento</th>
                            <th>Documento</th>
                            <th>Membresia</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?$sql="SELECT 	`Idusuario`, 
                                `Correo`, 
                                `Nombres`, 
                                `Apellido`, 
                                `FechaNacimiento`, 
                                `Documento`, 
                                `Membresia`, 
                                `Perfil`
                                FROM 
                                `usuarios`";
                                $micon->consulta($sql);
                                while($row=$micon->campoconsultaA()){?>
                                <tr>
                                    <td><?=$row[Idusuario]?></td>
                                    <td><?=$row[Nombres]?></td>
                                    <td><?=$row[Apellido]?></td>
                                    <td><?=$row[Correo]?></td>
                                    <td><?=$row[FechaNacimiento]?></td>
                                    <td><?=$row[Documento]?></td>
                                    <td><?=$row[Membresia]?></td>
                                    <td><button type="button" class="btn btn-danger btn-sm" title="Eliminar <?=$row[Idusuario]?>" data-toggle="modal" data-target="#EliminarUser<?=$row[Idusuario]?>" value="Eliminar Usuario"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                                </tr>
                                <div class="modal fade" id="EliminarUser<?=$row[Idusuario]?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title">Eliminar Usuario <?=$row[Correo]?> </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <div class="modal-body">
                                        <p>¿Seguro que quieres eliminar este Usuario?.</p>
                                        </div>
                                        <div class="modal-footer">
                                        <a href="./php/EliminarUsuario.php?UserID=<?=$row[Idusuario]?>" type="button" class="btn btn-success">Si</a>
                                        <button type="button" data-dismiss="modal" class="btn btn-danger" data-dismiss="modal">No</button>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <?}?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>IdUsuario</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Correo</th>
                            <th>FechaNacimiento</th>
                            <th>Documento</th>
                            <th>Membresia</th>
                            <th>Opciones</th>
                        </tr>
                    </tfoot>
                </table>
        </section>
    <br>
    <br>
    <!-- Footer Section Begin -->
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
        <?$sql="SELECT 	`Idusuario`FROM `usuarios`";
        $micon->consulta($sql);
        while($row=$micon->campoconsultaA()){?>
        $('#EliminarUser<?=$row[Idusuario]?>').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var recipient = button.data('whatever') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
          })
        <?}?>
        $('.close').alert("close");
    </script>
</body>

</html>