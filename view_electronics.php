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
	
			<?php
				if(ISSET($_GET['id'])){
					require_once 'db_electronics.php';
					$id = $_GET['id'];
					$sql = $conn->prepare("SELECT * FROM `electronics` WHERE `id`='$id'");
					$sql->execute();
					$row = $sql->fetch();
				}
			?>
			
					<h1><?php echo $row['title']?></h1> <br>
			<center>	<img src="admin/uploads/<?php echo $row['image']; ?>" class="img-thumbnail" style="width:70%"><br><br></center>			
					

		<!-- LikeBtn.com BEGIN -->
<span class="likebtn-wrapper" data-lang="ru" data-ef_voting="bounce" data-identifier="item_electronics<?php echo $row ['id']; ?>" data-voting_frequency="500" data-popup_disabled="true" data-popup_position="bottom" data-tooltip_enabled="false"></span>
<script>(function(d,e,s){if(d.getElementById("likebtn_wjs"))return;a=d.createElement(e);m=d.getElementsByTagName(e)[0];a.async=1;a.id="likebtn_wjs";a.src=s;m.parentNode.insertBefore(a, m)})(document,"script","//w.likebtn.com/js/w/widget.js");</script>
<!-- LikeBtn.com END -->	<br><br>
					
					<p> <?php echo $row['description']?> </p><br>
						
			<?php
				$conn = null;
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
