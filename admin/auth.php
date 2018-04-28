<?php
	session_start();
	require_once "../lib/functions.php";
	if((checkUser($_SESSION["email"],$_SESSION["password"])) && isAdmin($_SESSION["email"])){
		header("Location: /admin/index.php");
	exit;}
?>
<html>
	<head>
		<title>Вход в Admin-панель</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="../styles/main.css" type="text/css">
		<link rel="shortcut icon" href="../images/icon.png" type="image/png">
	</head>
	<body>
				<div>
					<?php
						if ($_SESSION["error_auth"]){
							echo "Неверное имя или пароль!";
							unset($_SESSION["error_auth"]);
						}
						else if ($_SESSION["email"]!=""){
							echo "У Вас нет прав администратора!";
							unset($_SESSION["email"]);
						}	
					?> 
					<form name="auth" action="../auth.php" method="post">
						<p>
							E-mail:<br/>
							<input type="text" name="email"/>
						</p>
						<p>
							Пароль:<br/>
							<input type="password" name="password"/>
						</p>
						<p>
							<input type="submit" name="button_auth" value="Войти"/>
						</p>
					</form>
				</div>
	</body>
</html>