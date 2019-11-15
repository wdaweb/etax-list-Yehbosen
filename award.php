<?php
    $mon = $_POST['mon'];
    
    echo "<hr>" ;
    $num1 = $_POST['num1'];   
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];
    $num4 = $_POST['num4'];
    $num5 = $_POST['num5'];
    $num6 = $_POST['num6'];
    $num7 = $_POST['num7'];
    $num8 = $_POST['num8'];

    $dsn="mysql:host=localhost;charset=utf8;dbname=invoice";
    $pdo=new PDO($dsn,'root','1740');
    
    
    $sql="SELECT `invo`.`mon`, `num`, `money` FROM `invo`,`month` WHERE `month`.`id` = `invo`.`mon` && `month`.`mon` = '$mon'";
    // echo $sql;
    $data=$pdo->query($sql)->fetchAll();
    // print_r($data); 
    foreach ($data as $a){
        
    if($num1 == $a['num']){
        echo "發票號碼:".$a['num']."中1000萬"."<br>";
    }else if($num2 == $a['num']){
        echo "發票號碼:".$a['num']."中200萬"."<br>";
    }else if(($num3 == $a['num'] )||($num4 == $a['num'] )||($num5 == $a['num'] )){
        echo "發票號碼:".$a['num']."中20萬"."<br>";
    }else if((substr( "$num3" , 1 , 8 ) == substr( $a['num'] , 1 , 8 )) ||
            (substr( "$num4" , 1 , 8 ) == substr( $a['num'] , 1 , 8 )) ||
            (substr( "$num5" , 1 , 8 ) == substr( $a['num'] , 1 , 8 ))
            )
            {
        echo "發票號碼:".$a['num']."中4萬"."<br>";
    }else if((substr( "$num3" , 2 , 8 ) == substr( $a['num'] , 2 , 8 )) ||
            (substr( "$num4" , 2 , 8 ) == substr( $a['num'] , 2 , 8 )) ||
            (substr( "$num5" , 2 , 8 ) == substr( $a['num'] , 2 , 8 ))
            )
            {
        echo "發票號碼:".$a['num']."中1萬"."<br>";
    }else if((substr( "$num3" , 3 , 8 ) == substr( $a['num'] , 3 , 8 )) ||
            (substr( "$num4" , 3 , 8 ) == substr( $a['num'] , 3 , 8 )) ||
            (substr( "$num5" , 3 , 8 ) == substr( $a['num'] , 3 , 8 ))
            )
            {
        echo "發票號碼:".$a['num']."中4千"."<br>";
    }else if((substr( "$num3" , 4 , 8 ) == substr( $a['num'] , 4 , 8 )) ||
            (substr( "$num4" , 4 , 8 ) == substr( $a['num'] , 4 , 8 )) ||
            (substr( "$num5" , 4 , 8 ) == substr( $a['num'] , 4 , 8 ))
            )
            {
        echo "發票號碼:".$a['num']."中1千"."<br>";
    }else if((substr( "$num3" , 5 , 8 ) == substr( $a['num'] , 5 , 8 )) ||
            (substr( "$num4" , 5 , 8 ) == substr( $a['num'] , 5 , 8 )) ||
            (substr( "$num5" , 5 , 8 ) == substr( $a['num'] , 5 , 8 ))
            )
            {
        echo "發票號碼:".$a['num']."中2百"."<br>";
    }else if((substr( "$num6" , 0 , 3 ) == substr( $a['num'] , 5 , 8 )) ||
            (substr( "$num7" , 0 , 3 ) == substr( $a['num'] , 5 , 8 )) ||
            (substr( "$num8" , 0 , 3 ) == substr( $a['num'] , 5 , 8 ))
            )
            {
        echo "發票號碼:".$a['num']."中2百"."<br>";
    }else{
        echo "發票號碼:".$a['num']."沒中"."<br>";
    }    
    }
    
?>
<a href="query_award.php">回去</a>

