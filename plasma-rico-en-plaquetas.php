<?php 
  $description = "Plasma Rico en Plaquetas - Rejuvenecimiento Facial con Medicos Certificados en la Especialidad";
  $title = "Plasma Rico en Plaquetas - Rejuvenecimiento Natural Facial";
  $desde = "Página - Plasma Rico en Plaquetas";
  include "header.php";
?>
<div class="container-fluid" id="plasma-rico-en-plaquetas">
	<div id="titulos-paginas">
		<h1 class="text-center">Plasma Rico en Plaquetas</h1>
		<h2 class="text-center" style="margin-bottom: 1.2em;">Rejuvenecimiento Natural Facial</h2>
	</div>
	<div class="container">
		<?php include "div-certificaciones.php" ?>
        <?php include "div-curriculum.php" ?>
		<div class="row">
			<div class="col-sm-12 col-md-6 text-justify">
				<img src="images/plasma-rico-en-plaquetas.jpg" class="img-responsive center-block thumbnail" style="margin-bottom: 1.2em;">

				<p>Nuestro tratamiento facial con plasma rico en plaquetas *PRP*, permite el rejuvenecimiento de la piel maltratada, arrugas y surcos a través de la estimulación cutánea. Lo cual reactiva la producción de colágeno, elastina y ácido hialurónico induce a la reparación y regeneración de tejidos recuperando la vitalidad de la piel. Los resultados dependen de la continuidad en las sesiones aplicadas al paciente. Se recomienda realizarlo tres veces en el año y puede ser combinado con nuestros tratamientos de ácido hialurónico, toxina botulínica</p>
				
				<div class="hidden-xs">
				<p> <strong>¿En que consiste?</strong></p>
				<p>Se le introduce en la piel del paciente una micro inyección de PRP.</p>
				<p>La micro inyección de PRP produce un doble efecto de rejuvenecimiento. Después de dos semanas la piel del paciente será notablemente más joven. La piel estará más estirada, flexible y las líneas de expresión y arrugas desparecerán.</p>
				<p> <strong>¿Cuánto tiempo dura el  tratamiento de PRP?</strong></p>
				<p>El tratamiento tarda unos 45 minutos.</p>

				<p><strong>¿Cuáles son los efectos secundarios o el tiempo de inactividad después de haber recibido el procedimiento?</strong></p>
				<p>No existe un tiempo de inactividad después de recibir el procedimiento. Los pacientes simplemente deben evitar tomar el sol durante unos días y usar protector solar cuando se encuentren al aire libre.</p>
				<p>Las mujeres deben abstenerse de usar maquillaje durante las 12 horas después de haber recibido el tratamiento.</p>
				<p>Luego del tratamiento, la cara del paciente lucirá ligeramente roja, lo cual desaparecerá después de unos días.</p>
			  <p>PRP  Rejuvenecimiento Natural Facial</p>
				<p> <strong>¿Cuánto duran los resultados del tratamiento de rejuvenecimiento facial PRP?</strong></p>
				<p>Los pacientes deben considerar realizarse el tratamiento cada seis meses para mantener la estimulación y crecimiento del colágeno.</p>
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
        $("#li-plasma-rico-en-plaquetas").addClass("active");
    });
</script>

