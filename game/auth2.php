<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?  session_start();
    $test = $_SESSION['username'];
    require_once('../libs/db.php');
    $db = new db;
    if (isset($_POST['name'])){
        $nameg = $_POST["name"];
        $passwg = $_POST["passw"];
        if (empty($passwg)||empty($nameg)){
            error ("Не указан логин или пароль");
        }
        else {
            $db->GetValue("pass","users","WHERE name='$nameg'");    
                    $checkpass = $db->GetValueResult;
            if ($checkpass!=$passwg){
                echo "Неверный логин или пароль";
            }
            else {
                 $_SESSION['username'] = "$nameg";
                 $check = 5;
            }
        }
    }

echo "$test";

//	if($check = 7){
//	header('Refresh: 3; URL=http://dnd.meidji.ru/game');
//	echo 'Через 3 сек. вы будете перенаправлены на новую страницу.';
//	session_destroy();
//	exit;
//	}
?>
