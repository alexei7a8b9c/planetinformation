<!DOCTYPE html>
<html lang="ru">

<?php
include_once("header.php");
?>


<body>
<?php
include_once("nav.php");
?>

<?php
include_once("db_health.php");
?>


  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">

    </div>
	
	
    <div class="col-sm-8 text-left"> 
	
	<center><h2>Новые статьи в разделах:</h2></center>
	
	<h3><strong>Изобретения механики</strong></h3>
							<?php
								require_once('db.php');
								$result = $conn->prepare("SELECT * FROM mechanics ORDER BY id DESC LIMIT 2");
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++){
								$id=$row['id'];
							?>
							
		<p><a href="view_mechanics.php?id=<?php echo $row['id']?>"><?php echo $row ['title']; ?></a></p>
		<?php } ?>	
		
			<h3><strong>Электроника и новинки индустрии</strong></h3>
							<?php
								require_once('db.php');
								$result = $conn->prepare("SELECT * FROM electronics ORDER BY id DESC LIMIT 2");
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++){
								$id=$row['id'];
							?>
							
		<p><a href="view_electronics.php?id=<?php echo $row['id']?>"><?php echo $row ['title']; ?></a></p>
		<?php } ?>
		
					<h3><strong>Компьютеры и программирование</strong></h3>
							<?php
								require_once('db.php');
								$result = $conn->prepare("SELECT * FROM computers_and_programming ORDER BY id DESC LIMIT 2");
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++){
								$id=$row['id'];
							?>
							
		<p><a href="view_computers_and_programming.php?id=<?php echo $row['id']?>"><?php echo $row ['title']; ?></a></p>
		<?php } ?>
		
							<h3><strong>Схема и плата</strong></h3>
							<?php
								require_once('db.php');
								$result = $conn->prepare("SELECT * FROM scheme_and_fee ORDER BY id DESC LIMIT 2");
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++){
								$id=$row['id'];
							?>
							
		<p><a href="view_scheme_and_fee.php?id=<?php echo $row['id']?>"><?php echo $row ['title']; ?></a></p>
		<?php } ?>
		
									<h3><strong>Вещество и структура</strong></h3>
							<?php
								require_once('db.php');
								$result = $conn->prepare("SELECT * FROM substance_and_structure ORDER BY id DESC LIMIT 2");
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++){
								$id=$row['id'];
							?>
							
		<p><a href="view_substance_and_structure.php?id=<?php echo $row['id']?>"><?php echo $row ['title']; ?></a></p>
		<?php } ?>
		
											<h3><strong>Геохимия</strong></h3>
							<?php
								require_once('db.php');
								$result = $conn->prepare("SELECT * FROM geochemistry ORDER BY id DESC LIMIT 2");
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++){
								$id=$row['id'];
							?>
							
		<p><a href="view_geochemistry.php?id=<?php echo $row['id']?>"><?php echo $row ['title']; ?></a></p>
		<?php } ?>
		
													<h3><strong>Радиохимия</strong></h3>
							<?php
								require_once('db.php');
								$result = $conn->prepare("SELECT * FROM radiochemistry ORDER BY id DESC LIMIT 2");
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++){
								$id=$row['id'];
							?>
							
		<p><a href="view_radiochemistry.php?id=<?php echo $row['id']?>"><?php echo $row ['title']; ?></a></p>
		<?php } ?>
		
															<h3><strong>Биохимия</strong></h3>
							<?php
								require_once('db.php');
								$result = $conn->prepare("SELECT * FROM biochemistry ORDER BY id DESC LIMIT 2");
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++){
								$id=$row['id'];
							?>
							
		<p><a href="view_biochemistry.php?id=<?php echo $row['id']?>"><?php echo $row ['title']; ?></a></p>
		<?php } ?>
		
																	<h3><strong>Опыты</strong></h3>
							<?php
								require_once('db.php');
								$result = $conn->prepare("SELECT * FROM experiences ORDER BY id DESC LIMIT 2");
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++){
								$id=$row['id'];
							?>
							
		<p><a href="view_experiences.php?id=<?php echo $row['id']?>"><?php echo $row ['title']; ?></a></p>
		<?php } ?>
		
																	<h3><strong>Наблюдения</strong></h3>
							<?php
								require_once('db.php');
								$result = $conn->prepare("SELECT * FROM observations ORDER BY id DESC LIMIT 2");
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++){
								$id=$row['id'];
							?>
							
		<p><a href="view_observations.php?id=<?php echo $row['id']?>"><?php echo $row ['title']; ?></a></p>
		<?php } ?>
		
						<h3><strong>Животные</strong></h3>
							<?php
								require_once('db.php');
								$result = $conn->prepare("SELECT * FROM animals ORDER BY id DESC LIMIT 2");
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++){
								$id=$row['id'];
							?>
							
		<p><a href="view_animals.php?id=<?php echo $row['id']?>"><?php echo $row ['title']; ?></a></p>
		<?php } ?>
		
								<h3><strong>Растения</strong></h3>
							<?php
								require_once('db.php');
								$result = $conn->prepare("SELECT * FROM plants ORDER BY id DESC LIMIT 2");
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++){
								$id=$row['id'];
							?>
							
		<p><a href="view_plants.php?id=<?php echo $row['id']?>" ><?php echo $row ['title']; ?></a></p>
		<?php } ?>
		
										<h3><strong>Водный мир</strong></h3>
							<?php
								require_once('db.php');
								$result = $conn->prepare("SELECT * FROM water_world ORDER BY id DESC LIMIT 2");
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++){
								$id=$row['id'];
							?>
							
		<p><a href="view_water_world.php?id=<?php echo $row['id']?>" ><?php echo $row ['title']; ?></a></p>
		<?php } ?>
		
							<h3><strong>Солнечная система</strong></h3>
							<?php
								require_once('db.php');
								$result = $conn->prepare("SELECT * FROM solar_system ORDER BY id DESC LIMIT 2");
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++){
								$id=$row['id'];
							?>
							
		<p><a href="view_solar_system.php?id=<?php echo $row['id']?>" ><?php echo $row ['title']; ?></a></p>
		<?php } ?>
		
									<h3><strong>Звёзды и галактики</strong></h3>
							<?php
								require_once('db.php');
								$result = $conn->prepare("SELECT * FROM stars ORDER BY id DESC LIMIT 2");
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++){
								$id=$row['id'];
							?>
							
		<p><a href="view_stars.php?id=<?php echo $row['id']?>" ><?php echo $row ['title']; ?></a></p>
		<?php } ?>
		
						<h3><strong>Планеты</strong></h3>
							<?php
								require_once('db.php');
								$result = $conn->prepare("SELECT * FROM planets ORDER BY id DESC LIMIT 2");
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++){
								$id=$row['id'];
							?>
							
		<p><a href="view_planets.php?id=<?php echo $row['id']?>" ><?php echo $row ['title']; ?></a></p>
		<?php } ?>
		
								<h3><strong>Кометы и астероиды</strong></h3>
							<?php
								require_once('db.php');
								$result = $conn->prepare("SELECT * FROM comets_and_asteroids ORDER BY id DESC LIMIT 2");
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++){
								$id=$row['id'];
							?>
							
		<p><a href="view_comets_and_asteroids.php?id=<?php echo $row['id']?>" ><?php echo $row ['title']; ?></a></p>
		<?php } ?>
		
										<h3><strong>История</strong></h3>
							<?php
								require_once('db.php');
								$result = $conn->prepare("SELECT * FROM history ORDER BY id DESC LIMIT 2");
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++){
								$id=$row['id'];
							?>
							
		<p><a href="view_history.php?id=<?php echo $row['id']?>"><?php echo $row ['title']; ?></a></p>
		<?php } ?>
		
												<h3><strong>Археология</strong></h3>
							<?php
								require_once('db.php');
								$result = $conn->prepare("SELECT * FROM archeology ORDER BY id DESC LIMIT 2");
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++){
								$id=$row['id'];
							?>
							
		<p><a href="view_archeology.php?id=<?php echo $row['id']?>"><?php echo $row ['title']; ?></a></p>
		<?php } ?>
		
							<h3><strong>Культура</strong></h3>
							<?php
								require_once('db.php');
								$result = $conn->prepare("SELECT * FROM culture ORDER BY id DESC LIMIT 2");
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++){
								$id=$row['id'];
							?>
							
		<p><a href="view_culture.php?id=<?php echo $row['id']?>"><?php echo $row ['title']; ?></a></p>
		<?php } ?>
		
									<h3><strong>Здоровье</strong></h3>
							<?php
								require_once('db.php');
								$result = $conn->prepare("SELECT * FROM health ORDER BY id DESC LIMIT 2");
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++){
								$id=$row['id'];
							?>
							
		<p><a href="view_health.php?id=<?php echo $row['id']?>"><?php echo $row ['title']; ?></a></p>
		<?php } ?>
		
											<h3><strong>Общество</strong></h3>
							<?php
								require_once('db.php');
								$result = $conn->prepare("SELECT * FROM society ORDER BY id DESC LIMIT 2");
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++){
								$id=$row['id'];
							?>
							
		<p><a href="view_society.php?id=<?php echo $row['id']?>"><?php echo $row ['title']; ?></a></p>
		<?php } ?>
		
													<h3><strong>Экономика</strong></h3>
							<?php
								require_once('db.php');
								$result = $conn->prepare("SELECT * FROM economy ORDER BY id DESC LIMIT 2");
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++){
								$id=$row['id'];
							?>
							
		<p><a href="view_economy.php?id=<?php echo $row['id']?>"><?php echo $row ['title']; ?></a></p>
		<?php } ?>
		
		<br><br>
		<h2>Отзывы о сайте:</h2>
		
		<div id="wpac-review"></div>
<script type="text/javascript">
wpac_init = window.wpac_init || [];
wpac_init.push({widget: 'Review', id: 14368});
(function() {
    if ('WIDGETPACK_LOADED' in window) return;
    WIDGETPACK_LOADED = true;
    var mc = document.createElement('script');
    mc.type = 'text/javascript';
    mc.async = true;
    mc.src = 'https://embed.widgetpack.com/widget.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(mc, s.nextSibling);
})();
</script>

<br><br>
	  
    </div>
	
	
    <div class="col-sm-2 sidenav">

	
    </div>
  </div>
</div>

<?php
include_once("footer.php");
?>

</body>
</html>
