    <div class="container-fluid" id="antes-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 text-center">
                    <a href="#" data-toggle="modal" data-target="#myModal-email"><img src="images/email.png" alt="Contáctanos" class="img-responsive center-block"></a>
                </div>
                <div class="col-sm-12 col-md-6 text-center">
                    <a href="https://wa.me/56974788115"><img src="images/fono.png" alt="Llámanos" class="img-responsive center-block"></a>
                </div>
            </div>
        </div>
        <div class="container">
                <img src="images/formas-pago.jpg" alt="Formas de pago" class="img-responsive center-block"> 
        </div>
    </div>
    <div class="container-fluid" id="footer">
        <div class="container piedepagina">
            <h4 class="text-center">Prefiere Médicos Certificados</h4><br>
            <img src="images/certificaciones_footer.png" alt="certificaciones" class="center-block img-responsive">
            <h6 class="pull-right"><a href="politica-privacidad">Política de Privacidad</a></h6>
        </div>
    </div>

    <div id="myModal-email" class="modal fade" role="dialog">
        <div class="modal-dialog" id="modal-contacto">

            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title text-center">Solicita tu Evaluación</h3>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="well">
                                <form role="form" id="contactFormModal" data-toggle="validator" class="form-horizontal shake">
                                    <div class="form-group">
                                        <!-- <label for="nameModal" class="h4">Nombre</label> -->
                                        <input type="hidden" name="desde" id="desde" value="<?php echo $desde ?>"> 
                                        <input type="text" class="form-control" id="nameModal" placeholder="Nombre" required data-error="¡ Ingrese su Nombre !">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <!-- <label for="emailModal" class="h4">Email</label> -->
                                        <input type="email" class="form-control" id="emailModal" placeholder="email" required data-error="¡ Ingrese su email !">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <!-- <label for="telefonoModal" class="h4">Teléfono</label> -->
                                        <input type="text" class="form-control" id="telefonoModal" placeholder="su Teléfono" required data-error="¡ Ingrese su teléfono !">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <!-- <label for="messageModal" class="h4 ">Mensaje</label> -->
                                        <textarea id="messageModal" class="form-control" rows="5" placeholder="Ingrese su mensaje" required data-error="¡ Ingrese su Mensaje !"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <button type="submit" id="form-submitModal" class="btn btn-success btn-lg pull-right ">Enviar</button>
                                    <div id="msgSubmitModal" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="btn_contacto">
        <div class="pull-right">
            <a href="#" class="btn btn-default btn-tcc btn-lg" data-toggle="modal" data-target="#myModal-email"><span class="glyphicon glyphicon-envelope"></span> Solicita tu Evaluación</a>
        </div>
    </div>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/validator.min.js"></script>
    <script type="text/javascript" src="js/form-scripts.min.js"></script>
    <script type="text/javascript" src="js/plantilla.min.js"></script>

    <!-- <script>
        $(document).ready(function() {            
            setTimeout(function() { $(".btn_contacto").fadeIn(1500); }, 100);
        });
    </script> -->

</body>

</html>