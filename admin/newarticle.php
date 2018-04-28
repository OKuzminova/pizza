<?php
	require_once "start.php";
	if(isset($_POST["button_newarticle"]))
		$success=addArticle($_POST["title"],$_POST["intro_text"],$_POST["full_text"]);
?>
<html>
<head>
	<title>Добавление новой статьи</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="../styles/main.css" type="text/css">
	<link rel="shortcut icon" href="../images/icon.png" type="image/png">
</head>
<body>
	<?php require_once "blocks/menu.php";
	if($success) echo "Статья успешно добавлена.";
	else if (isset($_POST["button_newarticle"])) echo "Ошибка!";
	?>
	
	<div>
		<form name="newarticle" method="post" action="">
		<p>
			Название:<input type="text" name="title"/>
		</p>
		<div>
			Вступление:<br/>
			<textarea name="intro_text" cols="40" rows="10"></textarea>
		</div>
		<div>
			Полный текст:<br/>
			<textarea name="full_text" cols="40" rows="10"></textarea>
		</div>
		<p>
		<input type="submit" name="button_newarticle" value="Добавить статью"/>
		</p>
		</form>
	</div>
</body>
</html>
