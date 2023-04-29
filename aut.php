<?php
	session_start();
?>

<!Doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Авторизация</title>
	<link rel="stylesheet" href="css/styleReg.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
    		integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body bgcolor="#fafafb">
	<form action="signin.php" method="post">
		<label>Логин</label>
		<input class="form-control mb-2 mt-1" type="text" name="login" placeholder="Введите свой логин">
		<label>Пароль</label>
		<input class="form-control mb-2 mt-1" type="password" name="password" placeholder="Введите свой пароль">
		<button class="mt-2 mb-2 btn btn-primary" type="submit">Войти</button>
		<p>У вас нет аккаунта? - <a href="register.php">зарегистрируйтесь</a></p>
		<?php
			if ($_SESSION['message']){
					echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
			}
			unset( $_SESSION['message']);
		?>
	</form>
</body>
</html>