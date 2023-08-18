<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>employee刪除.php</title>
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
    
        if(isset($_POST['delete'])) 
        {
            // 值
            $no = $_POST['no'];

            $sql="DELETE FROM `員工`";
            $sql.="WHERE `員工編號`=$no";

            if(mysqli_query($link, $sql))
            {
                echo "資料刪除成功";
            } else 
            {
                echo "資料刪除失敗: " . mysqli_error($link);
            }
        }
    }
?>

<form action="employee刪除.php" method="post">
<table border="1">
<tr><td>員工編號：</td>
<td><input type="text" name="no" size="12"/></td></tr>

</table><hr/>
<input type="submit" name="delete" value="刪除"/>

</form>
</body>
</html>