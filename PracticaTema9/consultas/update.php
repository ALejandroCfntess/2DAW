<?php
include_once("consultas.php");
Consultas::Update($_POST["id"],$_POST["Dj"], $_POST["Nacionalidad"], $_POST["Edad"]);
header("location:../crud/crud.php");
?>