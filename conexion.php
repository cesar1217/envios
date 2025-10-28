<?php
$servername = "mysql-fatgold11.alwaysdata.net";
$username = "fatgold11";
$password = "misifu123+";
$database = "fatgold11_envios";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
