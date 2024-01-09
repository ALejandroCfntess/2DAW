<?php
include_once("consultas.php");
Consultas::añadirDj($_POST["Dj"], $_POST["Nacionalidad"], $_POST["Edad"]);
header("location:../crud/crud.php");
?>