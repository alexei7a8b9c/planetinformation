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
include_once("db_history.php");
?>


  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">

    </div>
	
	
    <div class="col-sm-8 text-left"> 
	
	<?php 
		$query = "SELECT * FROM history ORDER BY id DESC";       
		$data_per_Page=2;
		$query_1 = $pagination->paging($query,$data_per_Page);
		$pagination->dataview($query_1);
		$pagination->paginglink($query,$data_per_Page);  
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
