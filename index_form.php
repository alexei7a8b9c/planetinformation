<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Вход | Регистрация</title>
	<link rel="stylesheet" type="text/css" href="bootstrap4/css/bootstrap.min.css">
	<script src="font-awesome/fontawesome-all.min.js"></script>
</head>
<body>
<div class="container">
	<h1 class="text-center" style="margin-top:30px;">Вход</h1>
	<hr>
	<div class="row justify-content-md-center">
		<div class="col-md-12">
			<?php
				if(isset($_SESSION['error'])){
					echo "
						<div class='alert alert-danger text-center'>
							<i class='fas fa-exclamation-triangle'></i> ".$_SESSION['error']."
						</div>
					";

					//unset error
					unset($_SESSION['error']);
				}

				if(isset($_SESSION['success'])){
					echo "
						<div class='alert alert-success text-center'>
							<i class='fas fa-check-circle'></i> ".$_SESSION['success']."
						</div>
					";

					//unset success
					unset($_SESSION['success']);
				}
			?>
			<div class="card">
				<div class="card-body">
				    <h5 class="card-title text-center">Вход в аккаунт</h5>
				    <hr>
				    <form method="POST" action="login.php">
				    	<div class="form-group row">
						  	<label for="email" class="col-3 col-form-label">Эл. почта</label>
						  	<div class="col-9">
						    	<input class="form-control" type="email" id="email" name="email" value="<?php echo (isset($_SESSION['email'])) ? $_SESSION['email'] : ''; unset($_SESSION['email']) ?>" placeholder="Введите Е-mail" required>
						  	</div>
						</div>
						<div class="form-group row">
						  	<label for="password" class="col-3 col-form-label">Пароль</label>
						  	<div class="col-9">
						    	<input class="form-control" type="password" id="password" name="password" value="<?php echo (isset($_SESSION['password'])) ? $_SESSION['password'] : ''; unset($_SESSION['password']) ?>" placeholder="Введите Рassword" required>
						  	</div>
						</div>
				    <hr>
				    <div>
				    	<button type="submit" class="btn btn-primary" name="login"><i class="fas fa-sign-in-alt"></i> Вход</button>
				    	<a href="register_form.php">Регистрация</a>
				    </div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>