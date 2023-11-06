<?php
session_start();

if (isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Crear Archivos</title>
</head>
<body>
    <h1>Crear Archivos</h1>
    <form action="index.php" method="post">
        <label for="nombreArchivo">Nombre del archivo:</label>
        <input type="text" id="nombreArchivo" name="nombreArchivo" required><br><br>
        <label for="contenido">Contenido:</label><br>
        <textarea id="contenido" name="contenido" required></textarea><br><br>
        <input type="submit" value="Crear">
    </form>
</body>
</html>
