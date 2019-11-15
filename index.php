<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <h1>統一發票紀錄與兌獎</h1>
    <form action="recevie_invoice.php" method="POST">
    <table class="navber" border=1>
        <tr>
            <td><a href="./invoice_list.php">當期發票</a></td>
            <td><a href="./query_award.php">兌獎</a></td>
            <td><a href="./award_numbers.php">輸入獎號</a></td>
        </tr>
        <tr>
            <td>年份</td>
            <td colspan="2"><input type="text" name="year" id="year"></td>
            
        </tr>
        <tr>
            
            <td>期別:<select id="period" name="month">
                <option value="1">1,2月</option>
                <option value="2">3,4月</option>
                <option value="3">5,6月</option>
                <option value="4">7,8月</option>
                <option value="5">9,10月</option>
                <option value="6">11,12月</option>

                </select>
            </td>
            
        </tr>
        <tr>
            <td>發票號碼</td>
            <td><input type="text" name="numb" id="code"></td>
            
        </tr>
        <tr>
            <td>發票金額</td>
            <td><input type="text" name="money" id="expend"></td>
            
        </tr>
        <tr>
            <td><input type="submit" value="送出"></td>
            
        </tr>
    </table>
</form>
</body>
</html>