<?php
$dbh = mysqli_connect('localhost', 'root','','melody'); 
    // Kết nối tới MySQL Server
    
    if (!$dbh)    
    die("Unable to connect to MySQL: " . mysqli_connect_error()); 
    // Thông báo lỗi nếu kết nối thất bại 
    
    if (!mysqli_select_db($dbh,'melody'))     
    die("Unable to select database: " . mysql_connect_error()); 
    // Thông báo lỗi nếu chọn CSDL thất bại
    
   $sql_stmt = "UPDATE `my_contacts` SET `full_names` = 'Boi Tieu May',`email` = 'le3654238@gmail.com'";
    $sql_stmt .= "WHERE `id` = 7";
    
    $result = mysqli_query($dbh,$sql_stmt);
    // Thực thi câu lệnh SQL

    if (!$result) {
        die("Cập nhật dữ liệu thất bại: " . mysqli_error());
        // Thông báo lỗi nếu thực thi thất bại
    } else {
        echo "Cập nhật dữ liệu thành công!";
    }
    
    mysqli_close($dbh); //close the database connection
?>