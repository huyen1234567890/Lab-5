<?php
$dbh = mysqli_connect('localhost', 'root','', 'melody'); 
    // Kết nối với MySQL Server

    if (!$dbh)     
    die("Unable to connect to MySQL: " . mysqli_connect_error()); 
    // Thông báo lỗi nếu kết nối thất bại 
    
    if (!mysqli_select_db($dbh, 'melody'))     
    die("Unable to select database: " . mysql_connect_error()); 
    // Thông báo lỗi nếu chọn CSDL thất bại
    
   $sql_stmt = "INSERT INTO `my_contacts` (`full_names`,`gender`,`contact_no`,`email`,`city`,`country`)"; 
    $sql_stmt .= "VALUES('Le Ngoc Huyen','Female','279',' huyenngoc3654238@gmail.com','Ha Noi','Viet Nam')"; 
        
    $result = mysqli_query($dbh, $sql_stmt); // Thực thi câu lệnh SQL
    
    if (!$result) {
        die("Thêm dữ liệu thất bại: " . mysqli_error()); 
        // Thông báo lỗi nếu thực thi câu lệnh thất bại
    } else {
        echo "Thêm dữ liệu thành công!";
    }

    mysqli_close($dbh); // Đóng kết nối CSDL 
?>