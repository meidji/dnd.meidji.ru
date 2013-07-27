<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<?

	//mysql
	require_once('../../libs/db.php');
	$db = new db;

	//backend
		$db->GetValue("max(rolls_id)","rolls");	   //узнаем количество записей
		$maxrollid = $db->GetValueResult;
		$lastrecords = $maxrollid - 20;
		$db->GetArray("rolls_id, dice, user, rezultat","rolls","limit $lastrecords, 20"); 
		$result = $db->GetArrayResult;
		foreach($db->GetArrayResult as $data) {
			$rolls_id[] = $data["rolls_id"];
			$dice[] = $data["dice"];
			$user[] = $data["user"];
			$rezultat[] = $data["rezultat"];
		}
		echo "<b><u>Результаты последних 20 бросков:</b></u><br>";
		foreach($rolls_id as $key => $value){
				echo "$rolls_id[$key]. $user[$key] бросил $dice[$key] с результатом $rezultat[$key]<br>";
									  }
?>
