<?php
include_once("consultas.php");
Consultas::MeterDj($_POST["Dj"], $_POST["Nacionalidad"], $_POST["Edad"]);
header("location:../crud/crud.php");
?>