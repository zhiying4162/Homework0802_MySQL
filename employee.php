<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>employee新增.php</title>
</head>
<body>
<?php
    // 資料庫連線
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
    
        if(isset($_POST['insert'])) 
        {
            // 值
            $no = $_POST['no'];
            $name = $_POST['name'];
            $title = $_POST['title'];
            $gender = $_POST['gender']; 
            $director = $_POST['director'];
            $birth = $_POST['birth'];
            $employ_date = $_POST['employ_date']; 
            $area_num = $_POST['area_num']; 
            $address = $_POST['address'];
            $exnum = $_POST['exnum'];
            
            $sql = "INSERT INTO `員工`(`員工編號`, `姓名`, `職稱`, `性別`, `主管`, `出生日期`, `任用日期`, `區域號碼`, `地址`, `分機號碼`)";
            $sql .= "VALUES ('$no', '$name', '$title', '$gender', '$director', '$birth', '$employ_date', '$area_num', '$address', '$exnum')";
            
            if(mysqli_query($link, $sql))
            {
                echo "資料插入成功";
            } else 
            {
                echo "資料插入失敗: " . mysqli_error($link);
            }
        }
    }
?>

<form action="employee.php" method="post">
<table border="1">
<tr><td>員工編號：</td>
<td><input type="text" name="no" size="12"/></td></tr>

<tr><td>姓名：</td>
<td><input type="text" name="name" size="12"/></td></tr>

<tr><td>職稱：</td>
<td><input type="text" name="title" size="12"/></td></tr>

<tr><td>性別：</td>
<td><input type="text" name="gender" size="12"/></td></tr>

<tr><td>主管：</td>
<td><input type="text" name="director" size="12"/></td></tr>

<tr><td>出生日期：</td>
<td><input type="text" name="birth" size="12"/></td></tr>

<tr><td>任用日期：</td>
<td><input type="text" name="employ_date" size="12"/></td></tr>

<tr><td>區域號碼：</td>
<td><input type="text" name="area_num" size="12"/></td></tr>

<tr><td>地址：</td>
<td><input type="text" name="address" size="25"/></td></tr>

<tr><td>分機號碼：</td>
<td><input type="text" name="exnum" size="12"/></td></tr>

</table><hr/>
<input type="submit" name="insert" value="新增"/>

<br/><a href="employee2.php">刪除頁面</a>
<br/><a href="employee3.php">修改頁面</a>
<br/><a href="employee4.php">查詢頁面</a>
</form>
</body>
</html>