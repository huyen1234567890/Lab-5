<?php
// Kết nối cơ sở dữ liệu
try { 
    $DB_TYPE = "mysql";
    $DB_HOST = "localhost";
    $DB_NAME = "melody";
    $USER_NAME = "root";
    $USER_PASSWORD = "";
    $connection = new PDO("$DB_TYPE:host=$DB_HOST; dbname=$DB_NAME", $USER_NAME, $USER_PASSWORD);
} catch (PDOException $e) {
    die( "Lỗi: " . $e -> getMessage()); 
}
// Xóa dữ liệu 
$sql = $connection -> prepare("DELETE FROM my_contacts WHERE id = :id");
// Gán biến
$sql->bindParam(':id', $id);
// Gán giá trị 
$id = 4;
// Thực Thi 
if ($sql->execute ()) {
    echo "Xóa thành công!";
} else {
    echo "Xóa thất bại!";
}   
?>