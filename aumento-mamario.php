<?php 
  $description = "Aumanto Mamario con medicos certificados en la especialidad";
  $title = "Aumento Mamario";
  $desde = "Página - Aumento Mamario";
  include "header.php";
?>

<div class="container-fluid" id="aumento-mamario">
	<?php include "div-banner.php";?>
	<div id="titulos-paginas">
		<h1 class="text-center">Aumento Mamario</h1>
		<h2 class="text-center" style="margin-bottom: 1.2em;">Séras una mujer más atractiva</h2>
	</div>
	<div class="container">

    	<?php include "div-certificaciones.php" ?>
        <?php include "div-curriculum.php" ?>
		<div class="row">
			<div class="col-sm-12 col-md-6 text-justify">
				<a href="promocion-aumento-mamario"><img src="images/aumentomamario.jpg" class="img-responsive center-block thumbnail" style="margin-bottom: 1.2em;"></a>
			  	<p>La cirugía consiste en colocar una prótesis o implante mamario, habitualmente de silicona, para realzar el tamaño de la mama propia. El volumen del implante mamario se define de acuerdo a las medidas corporales y a los deseos de la paciente. Puede colocarse a través de las areolas, las axilas o del pliegue submamario, según el caso pueden situarse detrás o delante del músculo pectoral.</p>
			  <p class="hidden-xs">Esta cirugía esta indicada en el caso de mamas que siempre han sido pequeñas o cuyo tamaño no satisface a la paciente. Tambien es muy útil para mamas que sufren de falta de volumen o flaccidez posterior a la lactancia y/o posición anormal (mamas caídas o péndulas); también pueden tratarse alteraciones del desarrollo de la mama como las mamas tuberosas o la asimetría mamaria.</p>
				<p class="hidden-xs">La cirugía de Implante Mamario o Conocido como Aumento Mamario dura aproximadamente una hora y media y se realiza con anestesia local y sedación. La paciente vuelve a su casa al cabo de 6 a 8 horas. Debe realizarse drenaje linfático manual y ultrasonido post operatorio complementario. (4 a 6 sesiones aprox).</p>
				<h5>TIEMPO DE RECUPERACIÓN</h5>
			  	<p>Entre 3 y 7 días para volver a las actividades normales (excepto ejercicio) usando sostén compresivo hasta el mes.</p>
				<h5>RESULTADOS ESPERADOS</h5>
				<p>Aumento del volumen mamario, recuperacion de la firmeza de la mama, reposicionamiento de las areolas, cicatrices poco notorias.</p>
            </div>
			<div class="col-sm-12 col-md-6">
				<div class="row" id="index-contacto">
					<?php include "div-contacto.php" ?>
				</div>	
			</div>
            <div class="col-sm-12 col-md-6 text-justify">
                <img src="images/promocion-aumento-mamario.png" class="img-responsive center-block">
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
