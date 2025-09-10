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
	<h1 class="text-center" style="margin-top:30px;">Регистрация</h1>
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
				    <h5 class="card-title text-center">Создать аккаунт</h5>
				    <hr>
				    <form method="POST" action="register.php">
				    	<div class="form-group row">
						  	<label for="email" class="col-3 col-form-label">Эл. почта</label>
						  	<div class="col-9">
						    	<input class="form-control" type="email" id="email" name="email" value="<?php echo (isset($_SESSION['email'])) ? $_SESSION['email'] : ''; unset($_SESSION['email']) ?>" placeholder="Введите Е-mail" required>
						  	</div>
						</div>
						<div class="form-group row">
						  	<label for="password" class="col-3 col-form-label">Пароль</label>
						  	<div class="col-9">
						    	<input class="form-control" type="password" id="password" name="password" value="<?php echo (isset($_SESSION['password'])) ? $_SESSION['password'] : ''; unset($_SESSION['password']) ?>" placeholder="Введите Password" required>
						  	</div>
						</div>
						<div class="form-group row">
						  	<label for="confirm" class="col-3 col-form-label">Повтор пароля</label>
						  	<div class="col-9">
						    	<input class="form-control" type="password" id="confirm" name="confirm" value="<?php echo (isset($_SESSION['confirm'])) ? $_SESSION['confirm'] : ''; unset($_SESSION['confirm']) ?>" placeholder="Повторите Password">
						  	</div>
						</div>
				    <hr>
				    <div>
				    	<button type="submit" class="btn btn-success" name="register"><i class="far fa-user"></i> Зарегистрироваться</button>
				    	<a href="index.php">На главную страницу</a>
				    </div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>