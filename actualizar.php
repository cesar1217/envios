<?php
include('conexion.php');

$id = $_POST['id'];
$destinatario = $_POST['destinatario'];
$direccion = $_POST['direccion'];
$descripcion = $_POST['descripcion'];

$sql = "UPDATE envios 
        SET destinatario='$destinatario', direccion='$direccion', descripcion='$descripcion'
        WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Error al actualizar: " . $conn->error;
}
?>
