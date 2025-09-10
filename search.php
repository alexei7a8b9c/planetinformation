<?php
	if(ISSET($_POST['search'])){
		$keyword = $_POST['keyword'];
?>
<div>
	<h2>Результаты поиска:</h2>
	<hr style="border-top:2px dotted #ccc;"/>
	<?php
		require 'conn_search.php';
		$query = mysqli_query($conn, "SELECT * FROM `mechanics` WHERE `title` LIKE '%$keyword%' ORDER BY `title`") or die(mysqli_error());
		while($fetch = mysqli_fetch_array($query)){
	?>
	<div style="word-wrap:break-word;">
		<a href="set_post_mechanics.php?id=<?php echo $fetch['id']?>"><h4><?php echo $fetch['title']?></h4></a>
		<p><?php echo substr($fetch['description'], 0, 400)?>...<a href="set_post_mechanics.php?id=<?php echo $fetch['id']?>"><h6>Читать далее</h6></a></p>
	</div>
	<hr style="border-bottom:1px solid #ccc;"/>
	<?php
		}
	?>
</div>
<?php
	}
?>

<?php
	if(ISSET($_POST['search'])){
		$keyword = $_POST['keyword'];
?>
<div>
	<?php
		require 'conn.php';
		$query = mysqli_query($conn, "SELECT * FROM `electronics` WHERE `title` LIKE '%$keyword%' ORDER BY `title`") or die(mysqli_error());
		while($fetch = mysqli_fetch_array($query)){
	?>
	<div style="word-wrap:break-word;">
		<a href="set_post_electronics.php?id=<?php echo $fetch['id']?>"><h4><?php echo $fetch['title']?></h4></a>
		<p><?php echo substr($fetch['description'], 0, 400)?>...<a href="set_post_electronics.php?id=<?php echo $fetch['id']?>"><h6>Читать далее</h6></a></p>
	</div>
	<hr style="border-bottom:1px solid #ccc;"/>
	<?php
		}
	?>
</div>
<?php
	}
?>

<?php
	if(ISSET($_POST['search'])){
		$keyword = $_POST['keyword'];
?>
<div>
	<?php
		require 'conn.php';
		$query = mysqli_query($conn, "SELECT * FROM `computers_and_programming` WHERE `title` LIKE '%$keyword%' ORDER BY `title`") or die(mysqli_error());
		while($fetch = mysqli_fetch_array($query)){
	?>
	<div style="word-wrap:break-word;">
		<a href="set_post_computers_and_programming.php?id=<?php echo $fetch['id']?>"><h4><?php echo $fetch['title']?></h4></a>
		<p><?php echo substr($fetch['description'], 0, 400)?>...<a href="set_post_computers_and_programming.php?id=<?php echo $fetch['id']?>"><h6>Читать далее</h6></a></p>
	</div>
	<hr style="border-bottom:1px solid #ccc;"/>
	<?php
		}
	?>
</div>
<?php
	}
?>

<?php
	if(ISSET($_POST['search'])){
		$keyword = $_POST['keyword'];
?>
<div>
	<?php
		require 'conn.php';
		$query = mysqli_query($conn, "SELECT * FROM `scheme_and_fee` WHERE `title` LIKE '%$keyword%' ORDER BY `title`") or die(mysqli_error());
		while($fetch = mysqli_fetch_array($query)){
	?>
	<div style="word-wrap:break-word;">
		<a href="set_post_scheme_and_fee.php?id=<?php echo $fetch['id']?>"><h4><?php echo $fetch['title']?></h4></a>
		<p><?php echo substr($fetch['description'], 0, 400)?>...<a href="set_post_scheme_and_fee.php?id=<?php echo $fetch['id']?>"><h6>Читать далее</h6></a></p>
	</div>
	<hr style="border-bottom:1px solid #ccc;"/>
	<?php
		}
	?>
</div>
<?php
	}
?>

<?php
	if(ISSET($_POST['search'])){
		$keyword = $_POST['keyword'];
?>
<div>
	<?php
		require 'conn.php';
		$query = mysqli_query($conn, "SELECT * FROM `substance_and_structure` WHERE `title` LIKE '%$keyword%' ORDER BY `title`") or die(mysqli_error());
		while($fetch = mysqli_fetch_array($query)){
	?>
	<div style="word-wrap:break-word;">
		<a href="set_post_substance_and_structure.php?id=<?php echo $fetch['id']?>"><h4><?php echo $fetch['title']?></h4></a>
		<p><?php echo substr($fetch['description'], 0, 400)?>...<a href="set_post_substance_and_structure.php?id=<?php echo $fetch['id']?>"><h6>Читать далее</h6></a></p>
	</div>
	<hr style="border-bottom:1px solid #ccc;"/>
	<?php
		}
	?>
</div>
<?php
	}
?>

<?php
	if(ISSET($_POST['search'])){
		$keyword = $_POST['keyword'];
?>
<div>
	<?php
		require 'conn.php';
		$query = mysqli_query($conn, "SELECT * FROM `geochemistry` WHERE `title` LIKE '%$keyword%' ORDER BY `title`") or die(mysqli_error());
		while($fetch = mysqli_fetch_array($query)){
	?>
	<div style="word-wrap:break-word;">
		<a href="set_post_geochemistry.php?id=<?php echo $fetch['id']?>"><h4><?php echo $fetch['title']?></h4></a>
		<p><?php echo substr($fetch['description'], 0, 400)?>...<a href="set_post_geochemistry.php?id=<?php echo $fetch['id']?>"><h6>Читать далее</h6></a></p>
	</div>
	<hr style="border-bottom:1px solid #ccc;"/>
	<?php
		}
	?>
</div>
<?php
	}
?>

<?php
	if(ISSET($_POST['search'])){
		$keyword = $_POST['keyword'];
?>
<div>
	<?php
		require 'conn.php';
		$query = mysqli_query($conn, "SELECT * FROM `radiochemistry` WHERE `title` LIKE '%$keyword%' ORDER BY `title`") or die(mysqli_error());
		while($fetch = mysqli_fetch_array($query)){
	?>
	<div style="word-wrap:break-word;">
		<a href="set_post_radiochemistry.php?id=<?php echo $fetch['id']?>"><h4><?php echo $fetch['title']?></h4></a>
		<p><?php echo substr($fetch['description'], 0, 400)?>...<a href="set_post_radiochemistry.php?id=<?php echo $fetch['id']?>"><h6>Читать далее</h6></a></p>
	</div>
	<hr style="border-bottom:1px solid #ccc;"/>
	<?php
		}
	?>
</div>
<?php
	}
?>

<?php
	if(ISSET($_POST['search'])){
		$keyword = $_POST['keyword'];
?>
<div>
	<?php
		require 'conn.php';
		$query = mysqli_query($conn, "SELECT * FROM `biochemistry` WHERE `title` LIKE '%$keyword%' ORDER BY `title`") or die(mysqli_error());
		while($fetch = mysqli_fetch_array($query)){
	?>
	<div style="word-wrap:break-word;">
		<a href="set_post_biochemistry.php?id=<?php echo $fetch['id']?>"><h4><?php echo $fetch['title']?></h4></a>
		<p><?php echo substr($fetch['description'], 0, 400)?>...<a href="set_post_biochemistry.php?id=<?php echo $fetch['id']?>"><h6>Читать далее</h6></a></p>
	</div>
	<hr style="border-bottom:1px solid #ccc;"/>
	<?php
		}
	?>
</div>
<?php
	}
?>

<?php
	if(ISSET($_POST['search'])){
		$keyword = $_POST['keyword'];
?>
<div>
	<?php
		require 'conn.php';
		$query = mysqli_query($conn, "SELECT * FROM `experiences` WHERE `title` LIKE '%$keyword%' ORDER BY `title`") or die(mysqli_error());
		while($fetch = mysqli_fetch_array($query)){
	?>
	<div style="word-wrap:break-word;">
		<a href="set_post_experiences.php?id=<?php echo $fetch['id']?>"><h4><?php echo $fetch['title']?></h4></a>
		<p><?php echo substr($fetch['description'], 0, 400)?>...<a href="set_post_experiences.php?id=<?php echo $fetch['id']?>"><h6>Читать далее</h6></a></p>
	</div>
	<hr style="border-bottom:1px solid #ccc;"/>
	<?php
		}
	?>
</div>
<?php
	}
?>

<?php
	if(ISSET($_POST['search'])){
		$keyword = $_POST['keyword'];
?>
<div>
	<?php
		require 'conn.php';
		$query = mysqli_query($conn, "SELECT * FROM `observations` WHERE `title` LIKE '%$keyword%' ORDER BY `title`") or die(mysqli_error());
		while($fetch = mysqli_fetch_array($query)){
	?>
	<div style="word-wrap:break-word;">
		<a href="set_post_observations.php?id=<?php echo $fetch['id']?>"><h4><?php echo $fetch['title']?></h4></a>
		<p><?php echo substr($fetch['description'], 0, 400)?>...<a href="set_post_observations.php?id=<?php echo $fetch['id']?>"><h6>Читать далее</h6></a></p>
	</div>
	<hr style="border-bottom:1px solid #ccc;"/>
	<?php
		}
	?>
</div>
<?php
	}
?>

<?php
	if(ISSET($_POST['search'])){
		$keyword = $_POST['keyword'];
?>
<div>
	<?php
		require 'conn.php';
		$query = mysqli_query($conn, "SELECT * FROM `animals` WHERE `title` LIKE '%$keyword%' ORDER BY `title`") or die(mysqli_error());
		while($fetch = mysqli_fetch_array($query)){
	?>
	<div style="word-wrap:break-word;">
		<a href="set_post_animals.php?id=<?php echo $fetch['id']?>"><h4><?php echo $fetch['title']?></h4></a>
		<p><?php echo substr($fetch['description'], 0, 400)?>...<a href="set_post_animals.php?id=<?php echo $fetch['id']?>"><h6>Читать далее</h6></a></p>
	</div>
	<hr style="border-bottom:1px solid #ccc;"/>
	<?php
		}
	?>
</div>
<?php
	}
?>

<?php
	if(ISSET($_POST['search'])){
		$keyword = $_POST['keyword'];
?>
<div>
	<?php
		require 'conn.php';
		$query = mysqli_query($conn, "SELECT * FROM `plants` WHERE `title` LIKE '%$keyword%' ORDER BY `title`") or die(mysqli_error());
		while($fetch = mysqli_fetch_array($query)){
	?>
	<div style="word-wrap:break-word;">
		<a href="set_post_plants.php?id=<?php echo $fetch['id']?>"><h4><?php echo $fetch['title']?></h4></a>
		<p><?php echo substr($fetch['description'], 0, 400)?>...<a href="set_post_plants.php?id=<?php echo $fetch['id']?>"><h6>Читать далее</h6></a></p>
	</div>
	<hr style="border-bottom:1px solid #ccc;"/>
	<?php
		}
	?>
</div>
<?php
	}
?>

<?php
	if(ISSET($_POST['search'])){
		$keyword = $_POST['keyword'];
?>
<div>
	<?php
		require 'conn.php';
		$query = mysqli_query($conn, "SELECT * FROM `water_world` WHERE `title` LIKE '%$keyword%' ORDER BY `title`") or die(mysqli_error());
		while($fetch = mysqli_fetch_array($query)){
	?>
	<div style="word-wrap:break-word;">
		<a href="set_post_water_world.php?id=<?php echo $fetch['id']?>"><h4><?php echo $fetch['title']?></h4></a>
		<p><?php echo substr($fetch['description'], 0, 400)?>...<a href="set_post_water_world.php?id=<?php echo $fetch['id']?>"><h6>Читать далее</h6></a></p>
	</div>
	<hr style="border-bottom:1px solid #ccc;"/>
	<?php
		}
	?>
</div>
<?php
	}
?>

<?php
	if(ISSET($_POST['search'])){
		$keyword = $_POST['keyword'];
?>
<div>
	<?php
		require 'conn.php';
		$query = mysqli_query($conn, "SELECT * FROM `solar_system` WHERE `title` LIKE '%$keyword%' ORDER BY `title`") or die(mysqli_error());
		while($fetch = mysqli_fetch_array($query)){
	?>
	<div style="word-wrap:break-word;">
		<a href="set_post_solar_system.php?id=<?php echo $fetch['id']?>"><h4><?php echo $fetch['title']?></h4></a>
		<p><?php echo substr($fetch['description'], 0, 400)?>...<a href="set_post_solar_system.php?id=<?php echo $fetch['id']?>"><h6>Читать далее</h6></a></p>
	</div>
	<hr style="border-bottom:1px solid #ccc;"/>
	<?php
		}
	?>
</div>
<?php
	}
?>

<?php
	if(ISSET($_POST['search'])){
		$keyword = $_POST['keyword'];
?>
<div>
	<?php
		require 'conn.php';
		$query = mysqli_query($conn, "SELECT * FROM `stars` WHERE `title` LIKE '%$keyword%' ORDER BY `title`") or die(mysqli_error());
		while($fetch = mysqli_fetch_array($query)){
	?>
	<div style="word-wrap:break-word;">
		<a href="set_post_stars.php?id=<?php echo $fetch['id']?>"><h4><?php echo $fetch['title']?></h4></a>
		<p><?php echo substr($fetch['description'], 0, 400)?>...<a href="set_post_stars.php?id=<?php echo $fetch['id']?>"><h6>Читать далее</h6></a></p>
	</div>
	<hr style="border-bottom:1px solid #ccc;"/>
	<?php
		}
	?>
</div>
<?php
	}
?>

<?php
	if(ISSET($_POST['search'])){
		$keyword = $_POST['keyword'];
?>
<div>
	<?php
		require 'conn.php';
		$query = mysqli_query($conn, "SELECT * FROM `planets` WHERE `title` LIKE '%$keyword%' ORDER BY `title`") or die(mysqli_error());
		while($fetch = mysqli_fetch_array($query)){
	?>
	<div style="word-wrap:break-word;">
		<a href="set_post_planets.php?id=<?php echo $fetch['id']?>"><h4><?php echo $fetch['title']?></h4></a>
		<p><?php echo substr($fetch['description'], 0, 400)?>...<a href="set_post_planets.php?id=<?php echo $fetch['id']?>"><h6>Читать далее</h6></a></p>
	</div>
	<hr style="border-bottom:1px solid #ccc;"/>
	<?php
		}
	?>
</div>
<?php
	}
?>

<?php
	if(ISSET($_POST['search'])){
		$keyword = $_POST['keyword'];
?>
<div>
	<?php
		require 'conn.php';
		$query = mysqli_query($conn, "SELECT * FROM `comets_and_asteroids` WHERE `title` LIKE '%$keyword%' ORDER BY `title`") or die(mysqli_error());
		while($fetch = mysqli_fetch_array($query)){
	?>
	<div style="word-wrap:break-word;">
		<a href="set_post_comets_and_asteroids.php?id=<?php echo $fetch['id']?>"><h4><?php echo $fetch['title']?></h4></a>
		<p><?php echo substr($fetch['description'], 0, 400)?>...<a href="set_post_comets_and_asteroids.php?id=<?php echo $fetch['id']?>"><h6>Читать далее</h6></a></p>
	</div>
	<hr style="border-bottom:1px solid #ccc;"/>
	<?php
		}
	?>
</div>
<?php
	}
?>

<?php
	if(ISSET($_POST['search'])){
		$keyword = $_POST['keyword'];
?>
<div>
	<?php
		require 'conn.php';
		$query = mysqli_query($conn, "SELECT * FROM `history` WHERE `title` LIKE '%$keyword%' ORDER BY `title`") or die(mysqli_error());
		while($fetch = mysqli_fetch_array($query)){
	?>
	<div style="word-wrap:break-word;">
		<a href="set_post_history.php?id=<?php echo $fetch['id']?>"><h4><?php echo $fetch['title']?></h4></a>
		<p><?php echo substr($fetch['description'], 0, 400)?>...<a href="set_post_history.php?id=<?php echo $fetch['id']?>"><h6>Читать далее</h6></a></p>
	</div>
	<hr style="border-bottom:1px solid #ccc;"/>
	<?php
		}
	?>
</div>
<?php
	}
?>

<?php
	if(ISSET($_POST['search'])){
		$keyword = $_POST['keyword'];
?>
<div>
	<?php
		require 'conn.php';
		$query = mysqli_query($conn, "SELECT * FROM `archeology` WHERE `title` LIKE '%$keyword%' ORDER BY `title`") or die(mysqli_error());
		while($fetch = mysqli_fetch_array($query)){
	?>
	<div style="word-wrap:break-word;">
		<a href="set_post_archeology.php?id=<?php echo $fetch['id']?>"><h4><?php echo $fetch['title']?></h4></a>
		<p><?php echo substr($fetch['description'], 0, 400)?>...<a href="set_post_archeology.php?id=<?php echo $fetch['id']?>"><h6>Читать далее</h6></a></p>
	</div>
	<hr style="border-bottom:1px solid #ccc;"/>
	<?php
		}
	?>
</div>
<?php
	}
?>

<?php
	if(ISSET($_POST['search'])){
		$keyword = $_POST['keyword'];
?>
<div>
	<?php
		require 'conn.php';
		$query = mysqli_query($conn, "SELECT * FROM `culture` WHERE `title` LIKE '%$keyword%' ORDER BY `title`") or die(mysqli_error());
		while($fetch = mysqli_fetch_array($query)){
	?>
	<div style="word-wrap:break-word;">
		<a href="set_post_culture.php?id=<?php echo $fetch['id']?>"><h4><?php echo $fetch['title']?></h4></a>
		<p><?php echo substr($fetch['description'], 0, 400)?>...<a href="set_post_culture.php?id=<?php echo $fetch['id']?>"><h6>Читать далее</h6></a></p>
	</div>
	<hr style="border-bottom:1px solid #ccc;"/>
	<?php
		}
	?>
</div>
<?php
	}
?>

<?php
	if(ISSET($_POST['search'])){
		$keyword = $_POST['keyword'];
?>
<div>
	<?php
		require 'conn.php';
		$query = mysqli_query($conn, "SELECT * FROM `health` WHERE `title` LIKE '%$keyword%' ORDER BY `title`") or die(mysqli_error());
		while($fetch = mysqli_fetch_array($query)){
	?>
	<div style="word-wrap:break-word;">
		<a href="set_post_health.php?id=<?php echo $fetch['id']?>"><h4><?php echo $fetch['title']?></h4></a>
		<p><?php echo substr($fetch['description'], 0, 400)?>...<a href="set_post_health.php?id=<?php echo $fetch['id']?>"><h6>Читать далее</h6></a></p>
	</div>
	<hr style="border-bottom:1px solid #ccc;"/>
	<?php
		}
	?>
</div>
<?php
	}
?>

<?php
	if(ISSET($_POST['search'])){
		$keyword = $_POST['keyword'];
?>
<div>
	<?php
		require 'conn.php';
		$query = mysqli_query($conn, "SELECT * FROM `society` WHERE `title` LIKE '%$keyword%' ORDER BY `title`") or die(mysqli_error());
		while($fetch = mysqli_fetch_array($query)){
	?>
	<div style="word-wrap:break-word;">
		<a href="set_post_society.php?id=<?php echo $fetch['id']?>"><h4><?php echo $fetch['title']?></h4></a>
		<p><?php echo substr($fetch['description'], 0, 400)?>...<a href="set_post_society.php?id=<?php echo $fetch['id']?>"><h6>Читать далее</h6></a></p>
	</div>
	<hr style="border-bottom:1px solid #ccc;"/>
	<?php
		}
	?>
</div>
<?php
	}
?>

<?php
	if(ISSET($_POST['search'])){
		$keyword = $_POST['keyword'];
?>
<div>
	<?php
		require 'conn.php';
		$query = mysqli_query($conn, "SELECT * FROM `economy` WHERE `title` LIKE '%$keyword%' ORDER BY `title`") or die(mysqli_error());
		while($fetch = mysqli_fetch_array($query)){
	?>
	<div style="word-wrap:break-word;">
		<a href="set_post_economy.php?id=<?php echo $fetch['id']?>"><h4><?php echo $fetch['title']?></h4></a>
		<p><?php echo substr($fetch['description'], 0, 400)?>...<a href="set_post_economy.php?id=<?php echo $fetch['id']?>"><h6>Читать далее</h6></a></p>
	</div>
	<hr style="border-bottom:1px solid #ccc;"/>
	<?php
		}
	?>
</div>
<?php
	}
?>