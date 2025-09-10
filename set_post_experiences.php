<!DOCTYPE html>
<html lang="ru">

<?php
include_once("header.php");
?>


<body>
<?php
include_once("nav.php");
?>


  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">

    </div>
	
	
    <div class="col-sm-8 text-left"> 
	<br>
		<?php
			require 'conn_search.php';
			if(ISSET($_REQUEST['id'])){
				$query = mysqli_query($conn, "SELECT * FROM `experiences` WHERE `id` = '$_REQUEST[id]'") or die(mysqli_error());
				$fetch = mysqli_fetch_array($query);
		?>
				<h1><?php echo $fetch['title']?></h1>
			<center>	<img src="admin/uploads/<?php echo $fetch['image']; ?>" class="img-thumbnail" style="width:70%"><br><br></center>				
							<p><?php echo nl2br($fetch['description'])?></p>
		<?php
			}
		?>

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
