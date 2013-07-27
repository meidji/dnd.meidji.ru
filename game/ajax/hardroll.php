<!DOCTYPE html>
<html>
        <head>
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        </head>
<body>
<?
$hardroll = $_GET['hardroll'];
$hardresult = array('1' => $d4 = array('dicevalue' => 4
							), 
			'2' => $d6 = array('dicevalue' => 6
							), 
			'3' => $d8 = array('dicevalue' => 8
							), 
			'4' => $d10 = array('dicevalue' => 10
							), 
			'5' => $d12 = array('dicevalue' => 12
							), 
			'6' => $d20 = array('dicevalue' => 20
							), 
			'7' => $d100 = array('dicevalue' => 100
							) 
		);


$majorresult = 0;
foreach ($hardresult as $key => $value) {	
	$dicecount =  substr($hardroll, strpos($hardroll, "xd".$value["dicevalue"]) - 3, 3); //Получаем позицию кубика и считаем количество дайсов
	$hardresult[$key]["dicecount"] = $dicecount; //Записываем информацию о количестве дайсов
	$rollinfo = "("; // Задаем пустую переменную с информацией о каждом броске
	$result = 0; //Задаем пустею переменную с информацией о результате всех бросков
	for ($i=0; $i < $dicecount; $i++) {  //Считаем все броски
		$rollresult = mt_rand(1,$value["dicevalue"]);
		$rollinfo = $rollinfo.$rollresult." ";
		$result = $result + $rollresult;
	}
	$hardresult[$key]["rollinfo"] = $rollinfo.")"; //Записываем информацию о всех бросках
	$hardresult[$key]["result"] = $result;//Записываем информацию о результате
	$majorresult = $majorresult + $result;
}
$hardresult["majorresult"] = $majorresult;
echo "Последний бросок: ".$majorresult;

?>
</body>
</html>
