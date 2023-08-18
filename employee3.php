<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>employee分機號碼修改.php</title>
</head>
<body>
<?php
    $link = @mysqli_connect(
                'localhost', // MySQL主機名稱
                'root',      // 使用者名稱
                '',          // 密碼
                'testdbfromsql');
                
    // 檢查連線是否成功
    if($link === false) 
    {
        echo "資料庫連線失敗: " . mysqli_connect_error();
    } 
    else
    {
        echo "資料庫連線成功<br>";
    
        if(isset($_POST['update'])) 
        {
            $exnum1 = $_POST['exnum1'];
            $exnum = $_POST['exnum'];

            $sql = "UPDATE `員工` SET `分機號碼`='$exnum1' WHERE `分機號碼`='$exnum'";

            if(mysqli_query($link, $sql))
            {
                echo "資料修改成功";
            } else 
            {
                echo "資料修改失敗: " . mysqli_error($link);
            }
        }
    }
?>

<form action="employee3.php" method="post">
<table border="1">

<tr><td>請輸入要修改的分機號碼：</td>
<td><input type="text" name="exnum1" size="12"/></td></tr>

<tr><td>分機號碼：</td>
<td><input type="text" name="exnum" size="12"/></td></tr>

</table><hr/>
<input type="submit" name="update" value="修改"/>

<br/><a href="employee.php">新增頁面</a>
<br/><a href="employee2.php">刪除頁面</a>
<br/><a href="employee4.php">查詢頁面</a>
</form>
</body>
</html>