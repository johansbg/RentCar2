
<?include("Content/head.php")?>

<body>
<?include("Content/cabecera.php")?>

    <!-- Header End -->
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>     
    <section class="Perfil">
        <div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-10">
                        <div class="profile-head">
                                    <h3>
                                        Nombre de prueba , Apellido de prueba
                                    </h3>
                                    <br>
                                    <p class="proile-rating">SALDO EN LA MEMBRESIA : <span>$0</span></p>
                        </div>
                    </div>
                    <div class="col-md-2">
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
                    </div>
                </div> 
                <div class="row">
                    <div class="col-md-2">
                        <input type="button" class="btn btn-Membresia" data-toggle="modal" data-target="#AbonoMembresia" value="Abonar a la Membresia"/>
                        <!-- Modal -->
                        <div class="modal fade" id="AbonoMembresia" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Actualizar Datos</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <form class="form" action="##" method="post" id="registrationForm">
                                        <div class="form-group">
                                            
                                            <div class="col-xs-6">
                                                <label for="first_name"><h6>Numero de tarjeta </h6></label>
                                                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Numero de tarjeta" title="enter your first name if any.">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-6">
                                              <label for="last_name"><h6>CVV</h6></label>
                                                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="CVV..." title="enter your last name if any.">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-6">
                                                <label for="last_name"><h6>Fecha de expedicion</h6></label>
                                                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Fecha de expedicion..." title="enter your last name if any.">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-6">
                                                <label for="first_name"><h6>Nombre del propietario de la tarjeta </h6></label>
                                                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Nombre..." title="enter your first name if any.">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-6">
                                                <label for="first_name"><h6>Cantidad a recargar</h6></label>
                                                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Cantidad..." title="enter your first name if any.">
                                            </div>
                                        </div>
                                    </form>
                                    <img src="img/payment-method.png" alt="">
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-Perfil">Abonar a la Membresia</button>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active btn-Perfil" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Detalles de la persona</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn-Perfil" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Historial de reservas</a>
                    </li>
                </ul>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nombres</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Kshiti123</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Apellidos</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Kshiti Ghelani</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Correo Electronico</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>kshitighelani@gmail.com</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Fecha de nacimiento</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>123 456 7890</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>No se que mas puse xd</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Web Developer and Designer</p>
                                            </div>
                                        </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <table id="example" class="table table-striped table-bordered" style="width:100%">
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
                                    <tfoot>
                                        <tr>
                                            <th>IdVehiculo</th>
                                            <th>Marca</th>
                                            <th>Año</th>
                                            <th>Color</th>
                                            <th>Kilometros</th>
                                            <th>Fecha</th>
                                            <th>PagoTotal</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>          
        </div>
    </section>
    <br>
    <br>
    <!-- Footer Section Begin -->
    
    <?include("Content/footer.php")?>
    <script>
    $('#ActualizarPerfil').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
      });
      $('#AbonoMembresia').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
      })
      </script>
</body>

</html>