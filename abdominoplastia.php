<?php 
  $description = "Abdominoplastia con medicos certificados en la especialidad";
  $title = "Abdominoplastia";
  $desde = "Página - Abdominoplastia";
  include "header.php";
?>
<div class="container-fluid" id="abdominoplastia">
	<?php include "div-banner.php";?>
	<div id="titulos-paginas">
		<h1 class="text-center">Abdominoplastia</h1>
		<h2 class="text-center" style="margin-bottom: 1.2em;">Alcanza el cuerpo que siempre soñaste</h2>
	</div>
	<div class="container">
		<?php include "div-certificaciones.php" ?>
        <?php include "div-curriculum.php" ?>
		<div class="row">
			<div class="col-sm-12 col-md-6 text-justify">
				<a href="promocion-abdominoplastia"><img src="images/abdominoplastia.jpg" class="img-responsive center-block thumbnail" style="margin-bottom: 1.2em;"></a>
			  	<p>La Abdominoplastia es un procedimiento quirúrgico complejo de reconstrucción de la pared abdominal, que consta de eliminación del exceso de piel, del exceso de grasa y recuperación de la firmeza de los músculos de la pared abdominal.</p>
			  	<p>Esta cirugía esta indicada en toda paciente post parto o posterior a cirugías para bajar de peso (bariátricas). Es de gran utilidad para remover piel con estrias, piel redundante o flácida y cicatrices de cirugías anteriores del abdomen, bajo el ombligo.</p>
			  	<p class="hidden-xs">La intervención se lleva a cabo bajo anestesia regional y sedacion, en algunos casos general. Esta dura entre 3 y 5 horas. Habitualmente requiere uno o dos dias de hospitalizacion. Casi siempre debe realizarse lipoescultura en asociacion a este procedimiento.</p>	  	<p class="hidden-xs">Se requiere realizar varios controles post operatorios estrictos, curaciones, drenajes linfaticos y ultrasonido (al menos 10 sesiones).</p>
				<h5>TIEMPO DE RECUPERACIÓN</h5>
				<p>Al cabo de 10 a 15 días puede recuperar su actividad normal (excepto ejercicio) usando faja de presoterapia hasta completar un mes.</p>
				<h5>RESULTADOS ESPERADOS</h5>
				<p>Abdomen plano y firme, eliminación de estrías y piel excedente, cicatriz poco notoria en ubicación baja fácilmente disimulable.</p>
				<h5>&nbsp;</h5>
            </div>
			<div class="col-sm-12 col-md-6">
				<div class="row" id="index-contacto">
					<?php include "div-contacto.php" ?>
				</div>	
			</div>
            <div class="col-sm-12 col-md-6 text-justify">
                <img src="images/promocion-abdominoplastia.png" class="img-responsive center-block">
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
