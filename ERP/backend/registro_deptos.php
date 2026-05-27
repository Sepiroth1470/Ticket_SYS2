<?php
require_once 'conexion.php';

$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre_area = $_POST['nombre_area'];
    $descripcion = $_POST['descripcion'];

    $sql = "INSERT INTO areas (nombre_area, descripcion)
            VALUES (?, ?)";

    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("ss", $nombre_area, $descripcion);

    if ($stmt->execute()) {
        $mensaje = "Área registrada correctamente.";
    } else {
        $mensaje = "Error al registrar el área.";
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Áreas</title>
</head>
<body>

    <h2>Registro de Áreas</h2>

    <?php if($mensaje != ""): ?>
        <p><?php echo $mensaje; ?></p>
    <?php endif; ?>

    <form method="POST">

        <label>Nombre del Área:</label><br>
        <input type="text" name="nombre_area" required>
        <br><br>

        <label>Descripción:</label><br>
        <textarea name="descripcion"></textarea>
        <br><br>

        <button type="submit">
            Guardar Área
        </button>

    </form>

</body>
</html>