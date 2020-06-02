
<?include("Content/head.php")?>

<body>
<?include("Content/cabecera.php")?>

    <!-- Header End -->
    <br>
    <br>
    <br>
    <br>     
    <section class="Perfil">
        <div class="container emp-profile">
                <div class="row">
                    <div class="col-md-10">
                        <div class="profile-head">
                                    <h3>
                                        <?if($_SESSION[Nombres]!=""){?>
                                            <?=$_SESSION[Nombres].",".$_SESSION[Apellido]?>
                                        <?}else{?>
                                            ACTUALICE SU PERFIL PARA OBTENER RESERVAS
                                        <?}?>
                                    </h3>
                                    <br>
                                    <?
                                    $sql="SELECT `Saldo` FROM `usuarios` WHERE `Idusuario`='$_SESSION[Idusuario]'";
                                    $micon->consulta($sql);   
                                    $row=$micon->campoconsultaA();     
                                    ?>
                                    <p class="proile-rating">SALDO EN LA MEMBRESIA : <span>$<?=$row[Saldo]?></span></p>
                        </div>
                    </div>
                </div>
                </div>
                <div class="row">
                    <div style="margin-left: 12%;" class="col-md-2">
                        <input type="button" class="btn btn-Perfil" data-toggle="modal" data-target="#ActualizarPerfil" value="Editar Perfil"/>
                        <!-- Modal -->
                        <div class="modal fade" id="ActualizarPerfil" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Actualizar Datos</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="php/ActualizarUsuario.php" id="login-form" method="POST" class="user">
                                            <div class="form-group">
                                                <div class="col-xs-6">
                                                    <label for="first_name"><h6>Nombres</h6></label>
                                                    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Nombres...">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-xs-6">
                                                <label for="last_name"><h6>Apellidos</h6></label>
                                                    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Apellidos...">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-xs-6">
                                                    <label for="first_name"><h6>Fecha de Nacimiento</h6></label>
                                                    <input type="date" id="start" name="start"value="<?=date("Y-m-d")?>" data-dateformat='yy/mm/dd'>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-xs-6">
                                                <label for="last_name"><h6>Documento</h6></label>
                                                    <input type="text" class="form-control" name="DOCU" id="DOCU" placeholder="Documento...">
                                                </div>
                                            </div>
                                            <button type="submit" style="background-color:#2F4F4F;color:white;" class="btn btn-success btn-user btn-block">Guardar Cambios</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                        
                    <div style="margin-left: 1%;" class="col-md-2">
                        <input type="button" class="btn btn-Membresia" data-toggle="modal" data-target="#AbonoMembresia" value="Abonar a la Membresia"/>
                        <!-- Modal -->
                        <div class="modal fade" id="AbonoMembresia" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Añadir dinero a la membresia</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <form class="form" action="php/AgregarMonto.php" method="post" id="registrationForm">
                                        <div class="form-group">
                                            
                                            <div class="col-xs-6">
                                                <label for="NumeroT"><h6>Numero de tarjeta </h6></label>
                                                <input type="text" class="form-control" name="NumeroT" id="NumeroT" placeholder="Numero de tarjeta" title="enter your first name if any.">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-6">
                                              <label for="CVV"><h6>CVV</h6></label>
                                                <input type="text" class="form-control" name="CVV" id="CVV" placeholder="CVV..." title="enter your last name if any.">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-6">
                                                <label for="FechaE"><h6>Fecha de expedicion</h6></label>
                                                <input type="text" class="form-control" name="FechaE" id="FechaE" placeholder="Fecha de expedicion..." title="enter your last name if any.">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-6">
                                                <label for="NombreT"><h6>Nombre del propietario de la tarjeta </h6></label>
                                                <input type="text" class="form-control" name="NombreT" id="NombreT" placeholder="Nombre..." title="enter your first name if any.">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-6">
                                                <label for="Cantidad"><h6>Cantidad a recargar</h6></label>
                                                <input type="text" class="form-control" name="Cantidad" id="Cantidad" placeholder="Cantidad..." title="enter your first name if any.">
                                            </div>
                                        </div>
                                            <img src="img/payment-method.png" alt="">
                                            <button type="submit" style="background-color:#2F4F4F;color:white;" class="btn btn-success btn-user btn-block">Guardar Cambios</button>
                                    </form>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <section>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <?if($_GET[Val]=='1'){?>
                                        <div class="alert alert-success alert-dismissible">
                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                            <strong>Usuario Actualizado con exito!</strong>
                                        </div>
                                    <?}else{
                                    if($_GET[Val]=='2'){?>
                                        <div class="alert alert-success alert-dismissible">
                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                            <strong>Dinero Añadido a la membresia!</strong>
                                        </div>
                                    <?}
                                    }?>
                                    </div>
                                </div>
                        </div>
                    </div>
                </section>
                <br>
                <ul style="margin-left: 10%;margin-right: 10%;" class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active btn-Perfil" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Detalles de la persona</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn-Perfil" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Historial de reservas</a>
                    </li>
                </ul>
                <br>
                <div style="margin-left: 10%;margin-right: 10%;" class="row">
                    <div class="col-md-12">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <?$sql="SELECT 	`Idusuario`, 
                                                `Correo`, 
                                                `Contraseña`, 
                                                `Nombres`, 
                                                `Apellido`, 
                                                `FechaNacimiento`, 
                                                `Documento`, 
                                                `Membresia`, 
                                                `Perfil`
                                                
                                                FROM 
                                                `usuarios` 
                                                WHERE `Idusuario`=$_SESSION[Idusuario];";
                                                $micon->consulta($sql);
                                                $row=$micon->campoconsultaA();
                                                ?>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nombres</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?=$row[Nombres]?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Apellidos</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?=$row[Apellido]?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Correo Electronico</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?=$row[Correo]?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Fecha de nacimiento</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?=$row[FechaNacimiento]?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Documento</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?=$row[Documento]?></p>
                                            </div>
                                        </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="card shadow mb-4">
                                <div class="card-body">
                                <div class="table-responsive">
                                <table class="table table-bordered" id="TablaUser" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>IdVehiculo</th>
                                            <th>Marca</th>
                                            <th>Año</th>
                                            <th>Color</th>
                                            <th>Kilometros</th>
                                            <th>Fecha</th>
                                            <th>PagoTotal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1234</td>
                                            <td>Honda</td>
                                            <td>2020</td>
                                            <td>Rojo</td>
                                            <td>12.000</td>
                                            <td>12/12/2020</td>
                                            <td>$70</td>
                                        </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>          
        </div>
    </section>
    <br>
    <br>
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
      $('#ActualizarPerfil').on('show.bs.modal', function (event) {

      });
      $('#AbonoMembresia').on('show.bs.modal', function (event) {
      });
    </script>
</body>

</html>