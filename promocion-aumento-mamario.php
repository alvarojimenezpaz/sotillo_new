<?php 
  $description = "Promocion Aumento Mamario con Medicos Certificados en la Especialidad";
  $title = "Promoción Aumento Mamario";
  $desde = "Página - Promoción Aumento Mamario";
  include "header.php";
?>
<div class="container-fluid" id="promocion-aumento-mamario">
	<div id="titulos-paginas">
		<h2 class="text-center">Promoción Aumento Mamario</h2>
	</div>
	<div class="container">
		<?php include "div-certificaciones.php" ?>
        <?php include "div-curriculum.php" ?>
		<div class="row">
			<div class="col-sm-12 col-md-6 text-justify">
			  	<img src="images/promocion-aumento-mamario.png" class="img-responsive center-block">
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
        $("#li-aumento-mamario").addClass("active");
    });
</script>