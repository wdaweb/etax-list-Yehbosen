
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>各期奬號</title>
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
        $dsn="mysql:host=localhost;charset=utf8;dbname=invoice";
        $pdo=new PDO($dsn,'root','1740');

        if(!empty($_GET['id'])){
            
        

        $month=$_GET['id'];
        $sql="SELECT `month`, `num1`, `num2`, `num3`, `num4`, `num5`, `num6`, `num7`, `num8` ,`month`.`mon`
        FROM `lucky`,`month` WHERE  lucky.month = month.id && lucky.month = '$month'"; 
        
    
        
        $data=$pdo->query($sql)->fetchAll();
        // print_r ($data);
    ?>
    <h1>統一發票中獎號碼單</h1>
    <form action="award.php" method="post">

            <input type="submit" value="對獎">
    
    <div class="award-form">
    
            <table border=1>
                <tr>
                    <td colspan="3">年度：2019</td>                                    
                </tr>
                <tr>
                    <td>月份</td>
                    <?php
                        foreach($data as $datas):
                    ?>
                    <td><?=$datas['mon'];?>月</td>
                    <?php
                        endforeach;
                    ?>
                                           
                    <td>獎金</td>
                </tr>
                <tr>
                    <td>特別獎</td>
                    <?php
                        foreach($data as $datas):
                    ?>
                    <td>
                        <li><?=$datas['num1'];?></li>
                    </td>
                    <?php
                        endforeach;
                    ?>
                    <td>1000萬元</td>
                </tr>
                <tr>
                    <td>特獎</td>
                    <?php
                        foreach($data as $datas):
                    ?>
                    <td>
                        <li><?=$datas['num2'];?></li>
                    </td>
                    <?php
                        endforeach;
                    ?>
                    <td>200萬元</td>
                </tr>
                <tr>
                    <td>頭獎</td>
                    <?php
                        foreach($data as $datas):
                    ?>
                    <td>
                        <li><?=$datas['num3'];?></li>
                        <li><?=$datas['num4'];?></li>
                        <li><?=$datas['num5'];?></li>
                    </td>
                    <?php
                        endforeach;
                    ?>
                    <td>20萬元</td>
                </tr>
                <tr>
                    <td>二獎</td>
                    <td>末 7 位數號碼與頭獎中獎號碼末 7 位相同者</td>
                    <td>4萬元</td>
                </tr>
                <tr>
                    <td>三獎</td>
                    <td>末 6 位數號碼與頭獎中獎號碼末 6 位相同者</td>
                    <td>1萬元</td>
                </tr>
                <tr>
                    <td>四獎</td>
                    <td>末 5 位數號碼與頭獎中獎號碼末 5 位相同者</td>
                    <td>4千元</td>
                </tr>
                <tr>
                    <td>五獎</td>
                    <td>末 4 位數號碼與頭獎中獎號碼末 4 位相同者</td>
                    <td>1千元</td>
                </tr>
                <tr>
                    <td>六獎</td>
                    <td>末 3 位數號碼與頭獎中獎號碼末 3 位相同者</td>
                    <td>2百元</td>
                </tr>
                <tr>
                    <td>增開六獎</td>
                    <?php
                        foreach($data as $datas):
                    ?>
                    <td>
                        <li><?=$datas['num6'];?></li>
                        <li><?=$datas['num7'];?></li>
                        <li><?=$datas['num8'];?></li>
                    </td>
                    <?php
                        endforeach;
                    ?>
                    <td>2百元</td>          
            </table>
            <input type="hidden" name='mon' value="<?=$datas['mon'];?>">
            <input type="hidden" name='num1' value="<?=$datas['num1'];?>">
            <input type="hidden" name='num2' value="<?=$datas['num2'];?>">
            <input type="hidden" name='num3' value="<?=$datas['num3'];?>">
            <input type="hidden" name='num4' value="<?=$datas['num4'];?>">
            <input type="hidden" name='num5' value="<?=$datas['num5'];?>">
            <input type="hidden" name='num6' value="<?=$datas['num6'];?>">
            <input type="hidden" name='num7' value="<?=$datas['num7'];?>">
            <input type="hidden" name='num8' value="<?=$datas['num8'];?>">
            </form>  
        <?php
        }else{
            echo "";
        } 
        ?>     
    </div>
</body>
</html>