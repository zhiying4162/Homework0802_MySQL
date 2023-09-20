<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>employee查詢.php</title>
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
    
        if(isset($_POST['query'])) 
        {
            // 值
            $sql="SELECT `員工編號`, `姓名`, `職稱`, `出生日期`,round((DATEDIFF(now(), `任用日期`))/365)
            FROM `員工`
            WHERE QUARTER(`出生日期`)=QUARTER(now())
            ORDER BY round((DATEDIFF(now(), `任用日期`))/365) DESC";

        $result = mysqli_query($link, $sql);
        if($result)
        {
            echo "<h2>查詢結果：</h2>";

            while($row = mysqli_fetch_assoc($result))
            {
                echo "<p>員工編號: {$row['員工編號']}</p>";
                echo "<p>姓名: {$row['姓名']}</p>";
                echo "<p>職稱: {$row['職稱']}</p>";
                echo "<p>出生日期: {$row['出生日期']}</p>";
                echo "<p>服務年限: {$row['round((DATEDIFF(now(), `任用日期`))/365)']}</p>";
                echo "<hr>";
            }
        } 
        else 
        {
            echo "資料查詢失敗: " . mysqli_error($link);
        }
        }
    }
?>


<form action="employee4.php" method="post">
<input type="submit" name="query" value="執行查詢"/>
</form>

<br/><a href="employee.php">新增頁面</a>
<br/><a href="employee2.php">刪除頁面</a>
<br/><a href="employee3.php">修改頁面</a>
</form>
</body>
</html>