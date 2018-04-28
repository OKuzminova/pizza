<?php
	if($_SESSION["error_auth"]){
		unset($_SESSION["error_auth"]);
			$alert="Неверный E-mail и/или пароль!";
			include "alert.php";
	}
	?>
	
        <tr><!--строка1-->
			<td colspan="2" id="header">
			<h1> Хочу пиццу</h1>
			<!-- <hr color="black"/> -->
			</td>
		</tr>
		<tr><!--строка2 для меню-->
			<td>
				<table id="topmenu">
>					<tr>
				<form class="auth" name="auth" action="auth.php" method="post">
				<td>E-mail:
					<input type="text" name="email" placeholder="Email"/>
					<p>Пароль: 
					<input type="password" name="password" placeholder="Введите пароль" /></p>
					<p>
					<input type="submit" class="new" name="button_auth" value="Войти" />
	                <input type="submit" class="new" name="button_auth" value="Зарегестрироватсья" /></p>
				</td>
				</form>	
				</tr>
				</table>
			</td>
		</tr>