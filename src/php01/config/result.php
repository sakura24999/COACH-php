<?php
$name = htmlspecialchars($_POST["name"], ENT_QUOTES);
echo "私の名前は、" . $name . "<br>";

$commodity = htmlspecialchars($_POST["commodity"], ENT_QUOTES);
echo "ご希望の商品は、" . $commodity . "<br>";

$order = htmlspecialchars($_POST["order"], ENT_NOQUOTES);
echo "注文数は、" . $order . "<br>";
?>