<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mysql Connection</title>
</head>
<body>
<?php
$servername = "localhost";        # utf8mb4_general_ci
$username = "root";
$password = "";

$conn = new mysqli($servername,$username,$password);

if($conn->connect_error){
    die("Bağlantı hatası : ".$conn->connect_error);
}
echo "Bağlantı başarılı!";
?>
</body>
</html>