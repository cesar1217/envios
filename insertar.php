<?php
include('conexion.php');

$destinatario = $_POST['destinatario'];
$direccion = $_POST['direccion'];
$descripcion = $_POST['descripcion'];

$sql = "INSERT INTO envios (destinatario, direccion, descripcion) 
        VALUES ('$destinatario', '$direccion', '$descripcion')";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Error: " . $conn->error;
}
?>
