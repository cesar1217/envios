<?php include('conexion.php'); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Envíos</title>
</head>
<body>
    <h1>Gestión de Envíos</h1>

    <form action="insertar.php" method="POST">
        <input type="text" name="destinatario" placeholder="Destinatario" required><br>
        <input type="text" name="direccion" placeholder="Dirección" required><br>
        <textarea name="descripcion" placeholder="Descripción" required></textarea><br>
        <button type="submit">Agregar Envío</button>
    </form>

    <hr>

    <h2>Lista de Envíos</h2>

    <?php
    $sql = "SELECT * FROM envios";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border='1'>
                <tr>
                    <th>ID</th>
                    <th>Destinatario</th>
                    <th>Dirección</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                </tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['destinatario']}</td>
                    <td>{$row['direccion']}</td>
                    <td>{$row['descripcion']}</td>
                    <td>
                        <a href='editar.php?id={$row['id']}'>Editar</a> | 
                        <a href='eliminar.php?id={$row['id']}'>Eliminar</a>
                    </td>
                </tr>";
        }
        echo "</table>";
    } else {
        echo "No hay envíos registrados.";
    }
    ?>
</body>
</html>
