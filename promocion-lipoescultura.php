<?php 
  $description = "Promocion Lipoescultura-Liposucción con Medicos Certificados en la Especialidad";
  $title = "Promoción Lipoescultura-Liposucción";
  $desde = "Página - Promoción Lipoescultura-Liposucción";
  include "header.php";
?>
<div class="container-fluid" id="promocion-lipoescultura">
	<div id="titulos-paginas">
		<h2 class="text-center">Promoción Lipoescultura-Liposucción</h2>
	</div>
	<div class="container">
		<?php include "div-certificaciones.php" ?>
        <?php include "div-curriculum.php" ?>
		<div class="row">
			<div class="col-sm-12 col-md-6 text-justify">
			  	<img src="images/promocion-lipoescultura.png" class="img-responsive center-block">
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
        $("#li-liposuccion").addClass("active");
    });
</script>