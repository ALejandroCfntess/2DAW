<?php
session_start();

if (isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['nombreArchivo'])) {
    $nombreArchivo = $_GET['nombreArchivo'];
    $ruta = __DIR__ . "/" . $nombreArchivo;

    if (file_exists($ruta)) {
        echo "El archivo $nombreArchivo fue encontrado en la ruta: $ruta";
    } else {
        echo "El archivo $nombreArchivo no fue encontrado.";
    }
} else {
    echo "Error en la solicitud.";
}
