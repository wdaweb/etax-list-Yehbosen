
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>發票清單</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

<div class="navbar">
        <li>
            <a href="?year=2019&id=1">1,2月</a>
        </li>
        <li>
            <a href="?year=2019&id=2">3,4月</a>
        </li>
        <li>
            <a href="?year=2019&id=3">5,6月</a>
        </li>
        <li>
            <a href="?year=2019&id=4">7,8月</a>
        </li>
        <li>
            <a href="?year=2019&id=5">9,10月</a>
        </li>
        <li>
            <a href="?year=2019&id=6">11,12月</a>
        </li>
        <li>
            <a href="index.php">回首頁</a>
        </li>
    </div>
    <?php
        if(!empty($_GET['id'])){

        $dsn="mysql:host=localhost;charset=utf8;dbname=invoice";
        $pdo=new PDO($dsn,'root','1740');

        $month=$_GET['id'];
        $sql="SELECT `num`, `money` FROM `invo` WHERE mon='$month'";
       
        $data=$pdo->query($sql)->fetchAll();
        
        
    ?>  

    <h1>11,12月份發票清單</h1>
    <div class="invoice-list">
    <table border=1>
        <tr>
            <td>發票號碼</td>
            <td>發票金額</td>
        </tr>

    <?PHP
    foreach($data as $datas){
    ?>    
        <tr>
            <td><?=$datas['num'];?></td>
            <td><?=$datas['money'];?></td>
            
        </tr>
    <?php
    }
    ?>
    </table>
    <?php
        }else{
            echo "";
        } 
    ?>
    </div>
</body>
</html>
