<?php
    $year=$_POST['year'];
    $month=$_POST['month'];
    $num1=$_POST['num1'];
    $num2=$_POST['num2'];
    $num3=$_POST['num3'];
    $num4=$_POST['num4'];
    $num5=$_POST['num5'];
    $num6=$_POST['num6'];
    $num7=$_POST['num7'];
    $num8=$_POST['num8'];
        
    $dsn="mysql:host=localhost;charset=utf8;dbname=invoice";
    $pdo=new PDO($dsn,'root','1740');
    
    $sql="INSERT INTO `lucky`(`year`, `month`, `num1`, `num2`, `num3`, `num4`, `num5`, `num6`, `num7`, `num8`) VALUES 
    ('$year','$month','$num1','$num2','$num3','$num4','$num5','$num6','$num7','$num8')";

    $pdo->exec($sql);

?>
<div><a href="./index.php">回首頁</a></div>
<div><a href="./award_numbers.php">回輸入獎號</a></div>