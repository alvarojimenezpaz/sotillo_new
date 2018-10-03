<?php 
  $description = "Liposucion con medicos certificados en la especialidad";
  $title = "Liposucción - Lipoescultura";
  $desde = "Página - Liposucción";
  include "header.php";
?>
<div class="container-fluid" id="liposuccion">
	<?php include "div-banner.php";?>
	<div id="titulos-paginas">
		<h1 class="text-center">Liposucción</h1>
		<h2 class="text-center" style="margin-bottom: 1.2em;">Define tus curvas soñadas</h2>
	</div>
	<div class="container">
		<?php include "div-certificaciones.php" ?>
        <?php include "div-curriculum.php" ?>
		<div class="row">
			<div class="col-sm-12 col-md-6 text-justify">
				<a href="promocion-lipoescultura"><img src="images/liposuccion.jpg" class="img-responsive center-block thumbnail" style="margin-bottom: 1.2em;"></a>
			  	<p>La lipoescultura es un procedimiento quirúrgico ambulatorio para <strong>remover grasa localizada</strong> en ciertas zonas corporales. Las zonas mas comunes son el abdomen, cintura, cadera, espalda, muslos y axilas. También se conoce como <strong>lipoaspiración o liposucción.</strong> Puede combinarse con otros procedimientos como la lipotransferencia, aumento mamario, abdominoplastía y miniabdominoplastía.</p>
			  	<p>Según el tipo o extensión de la cirugía <strong>se realiza entre 3 y 5 incisiones que no superan los 4 milímetros</strong> y su cicatriz es imperceptible con el tiempo. Se realiza con anestesia regional, general o sedación. <strong>La cirugía dura entre 1 y 2 horas</strong> según el caso.</p>
		  	  <p>Habitualmente se puede remover hasta un 5% del peso corporal en la cirugía aunque varía de acuerdo a la persona.</p>
			  	<p>En el período post operatorio se debe realizar drenaje linfático manual y ultrasonido complementario para ayudar en la recuperación post quirúrgica.</p>
			  	<h5>TIEMPO DE RECUPERACIÓN</h5>
			  	<p>Al cabo de 3 a 5 días el paciente puede volver a su acitividad normal (excepto ejercicio) usando una faja de compresión. En un mes puede apreciarse resultados sorprendentes.</p>
			  	<h5>RESULTADOS ESPERADOS</h5>
			  	<p>El principal objetivo es la modelación del cuerpo. Con esto se reduce varios centímetros y se logra una figura mas estilizada. En algunos casos se puede producir baja de peso secundaria.</p>
            </div>
			<div class="col-sm-12 col-md-6">
				<div class="row" id="index-contacto">
					<?php include "div-contacto.php" ?>
				</div>	
			</div>
            <div class="col-sm-12 col-md-6 text-justify">
                <img src="images/promocion-lipoescultura.png" class="img-responsive center-block">
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

