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
    <title>Buscar Archivo</title>
</head>
<body>
    <h1>Buscar un Archivo</h1>
    <form action="peticion.php" method="get">
        <label for="nombreArchivo">Nombre del archivo:</label>
        <input type="text" id="nombreArchivo" name="nombreArchivo" required>
        <input type="submit" value="Buscar">
    </form>
</body>
</html>
