<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<?
require_once('libs/db.php');$db = new db;
if (isset($_POST['name'])){
	
	$nameg = $_POST["name"];	                        							
	$passwg = $_POST["passw"];
	$roleg = $_POST["role"];
	if (empty($passwg)||empty($nameg)||empty($roleg)){            				
		echo "Не указан логин или пароль";
        echo "<br><a href=/>Назад</a>";

    }
    else {
		$db->GetValue("pass","users","WHERE name='$nameg'");                        
		$checkpass = $db->GetValueResult;            
		if ($checkpass!=$passwg){
        	echo "Неверный логин или пароль";
            echo "<br><a href=/>Назад</a>";
        }
        else {
        	setcookie("login", $nameg);
        	setcookie("role", $roleg);
        	echo "Вы вошли как ".$nameg;
        	header('Refresh: 3; URL=http://dnd.meidji.ru/game');
         	echo '<br>Через 3 сек. вы будете перенаправлены на новую страницу.';
        }
	}
    
};
?>
