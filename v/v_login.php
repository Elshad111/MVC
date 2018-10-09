<form method="POST">
	Логин<br>
	<input type="text" name="login" value="<?php echo $login; ?>"><br>
	Пароль<br>
	<input type="password" name="password"><br>
	<input type="checkbox" name="remember"><br>
	<input type="submit" value="Войти">
</form>

<?php echo $msg; ?>