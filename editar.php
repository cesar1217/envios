<?php
include('conexion.php');

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM envios WHERE id=$id");
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Envío</title>
</head>
<body>
    <h1>Editar Envío</h1>

    <form action="actualizar.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <input type="text" name="destinatario" value="<?php echo $row['destinatario']; ?>" required><br>
        <input type="text" name="direccion" value="<?php echo $row['direccion']; ?>" required><br>
        <textarea name="descripcion" required><?php echo $row['descripcion']; ?></textarea><br>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
