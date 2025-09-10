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
						<form class="form-inline" method="POST" action="search_query.php">
				<div class="input-group col-md-12">
					<input type="text" width="100%" class="form-control" placeholder="Введите текст для поиска ..." name="keyword" required="required"/>
					<span class="input-group-btn">
						<button class="btn btn-danger" name="search"><span class="glyphicon glyphicon-search"></span></button>
					</span>
				</div>
			</form>
			<br />
			<?php include 'search.php'?>

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
