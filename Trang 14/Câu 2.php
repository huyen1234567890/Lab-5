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
// Sửa dữ liệu 
$sql = $connection -> prepare("UPDATE my_contacts SET email = :new_email  WHERE id = :id");
$sql->bindParam(':new_email', $email);
$sql->bindParam(':id', $id);
// Gán giá trị 
$email = "le3654238@gmail.com";
$id = 1;
// Thực Thi
if ($sql->execute ()) {
    echo "Cập nhật thành công!";
} else {
    echo "Cập nhật thất bại!";
}   
?>