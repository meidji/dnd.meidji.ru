<?
  $_COOKIE['counter']++;
  setcookie("counter",$_COOKIE['counter']);
  echo "Вы посетили эту страницу" .$_COOKIE['counter']."раз";
?>
