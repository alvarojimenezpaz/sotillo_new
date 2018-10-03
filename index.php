<?php 
  $description = "Cirugia plastica con medicos certificados en la especialidad";
  $title = "Cirugía Plástica Estética";
  $desde = "Página - Principal";
  include "header.php";
?>
    
    <?php include "div-banner.php";?>

    <div class="container-fluid" id="index-certificaciones">
        <div class="container">
            <?php include "div-certificaciones.php" ?>
        </div>
    </div>

    <div class="container-fluid" id="index-servicios">
        <div class="container">
            <div class="row text-center">
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="thumbnail servicios">
                        <a href="promocion-aumento-mamario"><img src="images/aumentomamario_index.jpg" alt="Aumento Mamario" class="center-block img-responsive img_servicio"></a>	
                      <h4 class="sombra">Aumento Mamario</h4>
                        <p>Consiste en colocar una prótesis o implante mamario, para realzar el tamaño de la mama propia. El volumen del implante mamario se define de acuerdo a las medidas corporales y a las expectativas de la paciente.</p>
                        <!-- <div style="background-color:#ebd5f1;color:white;padding:3px 4px; margin:2px 2em; font-weight:bolder;">Promoción Aumento Mamario</div>
                        <a href="promocion-aumento-mamario"><div class="btn btn-primary">Ir a Promoción</div></a> -->
                    </div>
                    <div class="boton"><p><a href="aumento-mamario" class="btn btn-primary center-block">ver más</a></p></div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="thumbnail servicios">
                        <a href="abdominoplastia"><img src="images/abdominoplastia.jpg" alt="Abdominoplastia" class="center-block img-responsive img_servicio"></a>	
                        <h4 class="sombra">Abdominoplastia (Lipectomia)</h4>
                        <p>La Abdominoplastia es un procedimiento quirúrgico complejo que reconstruye la pared abdominal, eliminando el exceso de piel, el exceso de grasa y recuperando la firmeza de los músculos de la pared abdominal.</p>
                    </div>
                    <div class="boton"><p><a href="abdominoplastia" class="btn btn-primary center-block">ver más</a></p></div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="thumbnail servicios">
                        <a href="promocion-lipoescultura"><img src="images/liposuccion.jpg" alt="Liposucción" class="center-block img-responsive img_servicio"></a>	
                        <h4 class="sombra">Liposucción (Lipoescultura)</h4>
                        <p>La Liposucción consiste en utilizar la grasa retirada de alguna zona del cuerpo y utilizarla como tejido donante para otras. Con este procedimiento se modela la zona que se quiere lograr mayor volumen y curvas.</p>
                    </div>
                    <div class="boton"><p><a href="liposuccion" class="btn btn-primary center-block">ver más</a></p></div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="thumbnail servicios">
                        <a href="estetica-facial"><img src="images/estetica-facial.jpg" alt="Estetica Facial" class="center-block img-responsive img_servicio"></a>	
                        <h4 class="sombra">Toxina Botulínica</h4>
                        <p>Con este procedimiento se genera una parálisis muscular temporal, mientras actúa el producto. El efecto es considerado hoy en día como uno de los tratamientos que ofrece mejores resultados para eliminar las arrugas producidas por la expresión.</p>
                    </div>
                    <div class="boton"><p><a href="estetica-facial" class="btn btn-primary center-block">ver más</a></p></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" id="index-curriculum">
        <div class="container">
            <?php include "div-curriculum.php" ?>
        </div>
    </div>
    <div class="container-fluid" id="index-contacto">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <?php include "div-contacto.php" ?>
                </div>
            </div>
        </div>
    </div>    
    
    <div class="container" id="index-mapa" >
        <!-- Avenida Providencia 1208 oficina 1602, esq. Manuel Montt -->
        <div class="row">
             <div class="col-xs-12" >
                <h4 class="sombra">Avenida Providencia 1208 Of.1602</h4>
            </div>
            <div class="col-xs-12" >
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3329.7802559077545!2d-70.62334004965633!3d-33.42897290370122!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662cf6298821f1f%3A0xf4dd6fe22700341e!2sAv.+Providencia+1208%2C+Providencia%2C+Regi%C3%B3n+Metropolitana!5e0!3m2!1ses!2scl!4v1520498724146" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

<?php include "footer.php" ?>

<script>
    $(document).ready(function() {            
        $('.nav li').removeClass("active");
        $("#li-inicio").addClass("active");
    });
</script>