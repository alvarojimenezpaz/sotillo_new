<?php 
  $description = "Mejora la apariencia de tu rostro con medicos certificados en la especialidad";
  $title = "Estética Facial - Mejora la Apariencia de tu Rostro";
  $desde = "Página - Estética Facial";
  include "header.php";
?>
<div class="container-fluid" id="botox">
	<div id="titulos-paginas">
		<h1 class="text-center">Estética Facial</h1>
		<h2 class="text-center" style="margin-bottom: 1.2em;">Mejora tu apariencia</h2>
	</div>
	<div class="container">
		<?php include "div-certificaciones.php" ?>
        <?php include "div-curriculum.php" ?>
		<div class="row">
			<div class="col-sm-12 col-md-6 text-justify">
				<img src="images/estetica-facial.jpg" class="img-responsive center-block thumbnail" style="margin-bottom: 1.2em;">
		  	  <div id="mjs-object_577">
		  	    <div>
			  	    <p>Éste es un medicamento producido y registrado por la empresa Allergan, Inc. de Irvine, California, obtuvo la aprobación oficial en EE.UU en abril de 2002, para uso estético.</p>
			  	    <p>Con el procedimiento se genera una parálisis muscular temporal, mientras actúa el producto. El efecto es considerado hoy en día como uno de los tratamientos que ofrece mejores resultados para eliminar las arrugas producidas por la expresión.</p>
			  	    <p>Fundamentalmente se aplica en el tercio superior del rostro en en procedimiento que se realiza en la consulta médica. La duracion del procedimiento es de 30 a 60 minutos y los efectos pueden perdurar por hasta un año (6-8 meses promedio).</p>
			  	    <p>Se puede combinar con rellenos faciales para potenciar el resultado.</p>
			  	    <h5>TIEMPO DE RECUPERACIÓN</h5>
			  	    <p>Reposo relativo en las siguientes 6 horas.</p>
			  	    <h5>RESULTADOS ESPERADOS</h5>
		  	      <p>Disminución de las líneas de expresión del tercio superior del rostro, atenuación de arrugas.</p>
		  	      <p>&nbsp;</p>
		  	    </div>
		  	  </div>
          </div>
			<div class="col-sm-12 col-md-6">
				<div class="row" id="index-contacto">
					<?php include "div-contacto.php" ?>
				</div>	

			</div>
		</div>
	</div>																								
</div>
<hr>
<?php include "footer.php" ?>

<script>
    $(document).ready(function() {            
        $('.nav li').removeClass("active");
        $("#li-estetica-facial").addClass("active");
    });
</script>
