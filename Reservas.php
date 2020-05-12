

<?include("Content/head.php")?>

<body>
    <?include("Content/cabecera.php")?>
    <!-- Header End -->
    <br>
    <br>
    <br> 
    <section class="hero-section">
        <section class="set-bg spad" data-setbg="img/LogoBanner.png">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                            <h1 style="color:white;" >TUS RESERVAS</h1>
                            <p style="color:white;">Podras ver tus reservas en vivo en esta pagina</p>
                            <a href="#" class="primary-btn">Devolver Vehiculo</a>
                        </div>
                    </div>
            </div>
        </div>
    </section>
    <section class="Reservas">
        <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="TablaReservas" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>IdVehiculo</th>
                            <th>Marca</th>
                            <th>Año</th>
                            <th>Color</th>
                            <th>Kilometros</th>
                            <th>Fecha</th>
                            <th>PagoTotal</th>
                            <th>Estado</th>
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
                            <td><span class="badge badge-secondary">En uso</span></td>
                        </tr>
                        <tr>
                            <td>1234</td>
                            <td>Honda</td>
                            <td>2020</td>
                            <td>Rojo</td>
                            <td>12.000</td>
                            <td>12/12/2020</td>
                            <td>$70</td>
                            <td><span class="badge badge-success">Entregado</span></td>
                        </tr>
                        <tr>
                            <td>1234</td>
                            <td>Honda</td>
                            <td>2020</td>
                            <td>Rojo</td>
                            <td>12.000</td>
                            <td>12/12/2020</td>
                            <td>$70</td>
                            <td><span class="badge badge-danger">En deuda</span></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>IdVehiculo</th>
                            <th>Marca</th>
                            <th>Año</th>
                            <th>Color</th>
                            <th>Kilometros</th>
                            <th>Fecha</th>
                            <th>PagoTotal</th>
                            <th>Estado</th>
                        </tr>
                    </tfoot>
                </table>
    </section>
    <br>
    <br>
    <!-- Footer Section Begin -->
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
          $('#TablaReservas').DataTable(
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
</body>

</html>