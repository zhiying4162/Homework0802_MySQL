<！DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>employee.php</title>
</head>
<body>
<?php
    $link = @mysqli_connect(
                'localhost', // MySQL主機名稱
                'root', // 使用者名稱
                '', // 密碼
                'testdbfromsql');
        if(isset($link)){
            echo "資料庫連線成功<br>";
        }
        else{
            echo "資料庫連線失敗<br>";
        }
?>

<form action="employee.php" method="post">
<table border="1">
<tr><td>員工編號：</td>
<td><input type="text" name="no" size="12"/></td>

<tr><td>姓名：</td>
<td><input type="text" name="name" size="12"/></td>

<tr><td>職稱：</td>
<td><input type="text" name="title" size="12"/></td>

<tr><td>性別：</td>
<td><input type="text" name="gemder" size="12"/></td>

<tr><td>主管：</td>
<td><input type="text" name="director" size="12"/></td>

<tr><td>出生日期：</td>
<td><input type="text" name="birth" size="12"/></td>

<tr><td>任用日期：</td>
<td><input type="text" name="long" size="12"/></td>

<tr><td>區域號碼：</td>
<td><input type="text" name="Ano" size="12"/></td>

<tr><td>地址：</td>
<td><input type="text" name="address" size="25"/></td>

<tr><td>分機號碼：</td>
<td><input type="text" name="exnum" size="12"/></td>

<body>
<html>