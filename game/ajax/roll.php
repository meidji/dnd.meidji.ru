<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<?
//mysql
require_once('../../libs/db.php');
$db = new db;
$user = $_COOKIE['login'];
//backend

if(isset($_GET['d4'])){
$rollresult = mt_rand(1,4);
$db->Insert("rolls(dice,user,rezultat)", "VALUES('d4','$user','$rollresult')");
echo "Последний бросок:<br>d4 = $rollresult";
}
if(isset($_GET['d6'])){
$rollresult = mt_rand(1,6);
$db->Insert("rolls(dice,user,rezultat)", "VALUES('d6','$user','$rollresult')");
echo "Последний бросок:<br>d6 = $rollresult";
}
if(isset($_GET['d8'])){
$rollresult = mt_rand(1,8);
$db->Insert("rolls(dice,user,rezultat)", "VALUES('d8','$user','$rollresult')");
echo "Последний бросок:<br>d8 = $rollresult";
}
if(isset($_GET['d10'])){
$rollresult = mt_rand(1,10);
$db->Insert("rolls(dice,user,rezultat)", "VALUES('d10','$user','$rollresult')");
echo "Последний бросок:<br>d10 = $rollresult";
}
if(isset($_GET['d12'])){
$rollresult = mt_rand(1,12);
$db->Insert("rolls(dice,user,rezultat)", "VALUES('d12','$user','$rollresult')");
echo "Последний бросок:<br>d12 = $rollresult";
}
if(isset($_GET['d20'])){
$rollresult = mt_rand(1,20);
$db->Insert("rolls(dice,user,rezultat)", "VALUES('d20','$user','$rollresult')");
echo "Последний бросок:<br>d20 = $rollresult";
}
if(isset($_GET['d100'])){
$rollresult = mt_rand(1,100);
$db->Insert("rolls(dice,user,rezultat)", "VALUES('d100','$user','$rollresult')");
echo "Последний бросок:<br>d100 = $rollresult";
}
if(isset($_GET['cd4'])){
$rollresult = mt_rand(1,4);
echo "Последний бросок был в закрытую:<br>d4 = $rollresult";
}
if(isset($_GET['cd6'])){
$rollresult = mt_rand(1,6);
echo "Последний бросок был в закрытую:<br>d6 = $rollresult";
}
if(isset($_GET['cd8'])){
$rollresult = mt_rand(1,8);
echo "Последний бросок был в закрытую:<br>d8 = $rollresult";
}
if(isset($_GET['cd10'])){
$rollresult = mt_rand(1,10);
echo "Последний бросок был в закрытую:<br>d10 = $rollresult";
}
if(isset($_GET['cd12'])){
$rollresult = mt_rand(1,12);
echo "Последний бросок был в закрытую:<br>d12 = $rollresult";
}
if(isset($_GET['cd20'])){
$rollresult = mt_rand(1,20);
echo "Последний бросок был в закрытую:<br>d20 = $rollresult";
}
if(isset($_GET['cd100'])){
$rollresult = mt_rand(1,100);
echo "Последний бросок был в закрытую:<br>d100 = $rollresult";
}

?>
