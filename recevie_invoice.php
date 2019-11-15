<?php

echo "年".$year=$_POST['year'];
echo "<br>";
echo "月".$month=$_POST['month'];
echo "<br>";
echo "號碼".$numb=$_POST['numb'];
echo "<br>";
echo "消費".$money=$_POST['money'];
echo "<br>";

$dsn="mysql:host=localhost;charset=utf8;dbname=invoice";
$pdo=new PDO($dsn,'root','1740');

$sql="INSERT INTO `invo`(`year`, `mon`, `num`, `money`) VALUES ('$year','$month','$numb','$money')";

$pdo->exec($sql);

?>
<div></div><a href="./index.php">回首頁</a></div>