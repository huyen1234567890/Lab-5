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
// Hiển thị dữ liệu 
$sql = $connection -> query( "SELECT * FROM my_contacts where id = 3 "); 

$sql -> setFetchMode(PDO:: FETCH_ASSOC);
while ($row = $sql -> fetch()) {         
    echo 'ID: ' . $row['id'] . '<br>';         
    echo 'Full Names: ' . $row['full_names'] . '<br>';        
    echo 'Gender: ' . $row['gender'] . '<br>';         
    echo 'Contact No: ' . $row['contact_no'] . '<br>';         
    echo 'Email: ' . $row['email'] . '<br>';         
    echo 'City: ' . $row['city'] . '<br>';         
    echo 'Country: ' . $row['country'] . '<br><br>';     
}  
?>
 