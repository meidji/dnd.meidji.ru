<html>
	<head>
	</head>
	<body>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />		
	<?
		if (isset($_COOKIE['login'])&&isset($_COOKIE['role'])){
			echo "Вы уже авторизованы как ".$_COOKIE['login'];
            header('Refresh: 5; URL=http://dnd.meidji.ru/game');
            echo '<br>Через 5 сек. вы будете перенаправлены на новую страницу.';
            echo '<br>Если это не вы, нажмите <a href=/kill.php>сюда</a>';
        }
		else {
			echo '<form action="check_auth.php" method="post">';
			echo '		Name: <input type="text" name="name" />';
			echo '		Pass:<input type="text" name="passw" />';
			echo '		<input type="radio" name="role" value="1" /> Master';
			echo '		<input type="radio" name="role" value="2" checked="yes" /> Player';
			echo '		<input type="submit" />';
			echo '	</form>';
		}
	?>
	</body>
</html>




