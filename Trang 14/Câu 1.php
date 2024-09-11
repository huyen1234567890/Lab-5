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
// Thêm dữ liệu 
$sql = $connection -> prepare("INSERT INTO my_contacts (full_names,gender,contact_no,email,city,country)
     VALUES( :full_names, :gender, :contact_no, :email, :city, :country)"); 
// Gán các biến
$sql->bindParam(':full_name', $full_name);
$sql->bindParam(':gender', $gender);
$sql->bindParam(':contact_no', $contact_no);
$sql->bindParam(':email', $email);
$sql->bindParam(':city', $city);
$sql->bindParam(':country', $country);
// Gán giá trị 
$fullname = "Le Ngoc Huyen" ;
$gender = "Female";
$contact_no = "279";
$email = "huyenngoc3654238";
$city = "Ha Noi";
$country = "Viet Nam";
// Thực thi 
if ($sql->execute ()) {
    echo "Thêm thành công!";
} else {
    echo "Thêm thất bại!";
}     
?>