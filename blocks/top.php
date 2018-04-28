
        <tr><!--строка1-->
			<td colspan="2" id="header">
			<h1> Хочу пиццу</h1>
			<!-- <hr color="black"/> -->
			</td>
		</tr>
		<tr>
			<td align="center">
			<form class="search" name="search" action="search.php" method="get">
			<input type="search" name="words" value="" placeholder="Поиск...">
			<input type="submit" name="button_search" value="Найти" class="new">
			</form>
			</td>
		</tr>
		<tr><!--строка2 для меню-->
			<td>
				<table id="topmenu">
				<tr>
				<td>
					<a href ="index.php">Главная</a>	
				</td>
				<td>
					<a href ="reg.php">Регистрация</a>	
				</td>
				<td>	
					<a href ="articles.php">Статьи</a>	
				</td>
				<td>
					<a href ="gosti.php">Контакты</a>	
				</td>
				<td>
					<a href ="guestbook.php">Гостевая книга</a>	
				</td>
                
				<?php 
						if (checkUser($_SESSION["email"],$_SESSION["password"]))
							require_once "blocks/user_panel.php";
						    else require_once "blocks/aut.php";
						?>
				</tr>
				</table>

			</td>
		</tr>
        <!--<tr>	 прямаялиния 
			<td colspan="2"><hr color="black"/></td> 
		</tr> 