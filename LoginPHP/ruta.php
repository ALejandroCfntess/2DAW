<?php
session_start();

if (isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

$currentPath = __DIR__;

echo "La ruta actual es: $currentPath";
