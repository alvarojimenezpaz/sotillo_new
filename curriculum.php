<?php 
  $description = "Doctor Gustavo Sotillo Ochoa";
  $title = "Curriculum - Doctor Gustavo Sotillo Ochoa";
  $desde = "Página - Curriculum";
  include "header.php";
?>
<div class="container-fluid" id="curriculum">
	<div id="titulos-paginas">
		<h1 class="text-center">Curriculum</h1>
		<h2 class="text-center" style="margin-bottom: 1.2em;">Doctor Gustavo Sotillo Ochoa</h2>
	</div>
	<div class="container">	
		<?php include "div-curriculum.php" ?>
	</div>																								
</div>
<hr>

<?php include "footer.php" ?>

<script>
    $(document).ready(function() {            
        $('.nav li').removeClass("active");
        $("#li-inicio").addClass("active");
    });
</script>

