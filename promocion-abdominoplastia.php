<?php 
  $description = "Promocion Abdominoplastia con Medicos Certificados en la Especialidad";
  $title = "Promoción Abdominoplastia";
  $desde = "Página - Abdominoplastia";
  include "header.php";
?>
<div class="container-fluid" id="promocion-abdominoplastia">
	<div id="titulos-paginas">
		<h2 class="text-center">Promoción Abdominoplastia</h2>
	</div>
	<div class="container">
		<?php include "div-certificaciones.php" ?>
        <?php include "div-curriculum.php" ?>
		<div class="row">
			<div class="col-sm-12 col-md-6 text-justify">
			  	<img src="images/promocion-abdominoplastia.png" class="img-responsive center-block">
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
        $("#li-abdominoplastia").addClass("active");
    });
</script>