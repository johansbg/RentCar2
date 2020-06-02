
<?include("Content/head.php")?>
<?if(!isset($_SESSION['Correo'])){
    header('Location: ../Login.php?');
}else{?>

<body>
    <?include("Content/cabecera.php")?>
    <!-- Header End -->
    <br>
    <section class="hero-section">
        <section class="set-bg spad" data-setbg="img/LogoBanner.png">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                            <?if($_SESSION[Perfil]!="A"){?>
                            <h1 style="color:white;" >TUS RESERVAS</h1>
                            <p style="color:white;">Podras ver tus reservas en vivo en esta pagina</p>
                            <a href="./php/DevolverVehiculo.php" class="primary-btn">Devolver Vehiculo</a>
                            <?}else{?>
                            <h1 style="color:white;" >RESERVAS</h1>
                            <p style="color:white;">Seccion administrativa de las reservas</p>
                            <?}?>
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
                            <?if($_GET[validate]=='2'){?>
                                    <div class="alert alert-danger alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        <strong>No puedes solicitar una reserva ya que tu saldo es negativo!</strong>
                                    </div>
                                    <?}else{
                                    if($_GET[validate]=='1'){?>
                                    <div class="alert alert-success alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        <strong>Se creo una reserva con exito!</strong>
                                    </div>
                                    <?}
                             }?>
                             <?if($_GET[validate]=='3'){?>
                                    <div class="alert alert-success alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        <strong>Se ha devuelto el vehiculo con exito!</strong>
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
                <table  class="table table-bordered" id="TablaUser" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Idreserva</th>
                            <th>IdVehiculos</th>
                            <th>Idusuario</th>
                            <th>Fecha y hora Comienzo</th>
                            <th>Fecha y hora Final</th>
                            <th>Total</th>
                            <th>Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?$sql="SELECT 
                        `Idreserva`, 
                        `IdVehiculos`, 
                        `Idusuario`, 
                        `FechayhoraComienzo`, 
                        `FechayhoraFinal`, 
                        `Total`, 
                        `Estado` 
                        FROM `reservas`";
                        if($_SESSION[Perfil]!="A"){
                            $sql=$sql." WHERE `Idusuario`=".$_SESSION[Idusuario].";";
                        }?>
                        <?$micon->consulta($sql);
                        while($row=$micon->campoconsultaA()){?>
                        <tr>
                            <td><?=$row[Idreserva]?></td>
                            <td><?=$row[IdVehiculos]?></td>
                            <td><?=$row[Idusuario]?></td>
                            <td><?=$row[FechayhoraComienzo]?></td>
                            <td><?=$row[FechayhoraFinal]?></td>
                            <td>$<?=$row[Total]?></td>
                            <?if($row[Estado]=="E"){?>
                                <td><span class="badge badge-success">Entregado</span></td>
                            <?}else{
                                if($row[Estado]=="D"){?>
                                <td><span class="badge badge-danger">En deuda</span></td>
                                <?}else{?>
                                    <td><span class="badge badge-secondary">En uso</span></td>
                                <?}
                            }?>
                        </tr>
                        <?}?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Idreserva</th>
                            <th>IdVehiculos</th>
                            <th>Idusuario</th>
                            <th>Fecha y hora Comienzo</th>
                            <th>Fecha y hora Final</th>
                            <th>Total</th>
                            <th>Estado</th>
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
    </script>
</body>

</html>
<?}?>