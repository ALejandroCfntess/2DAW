<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

    <style>
    
    body{
        background:fixed url(dentro.jpeg);
        background-size: cover;
    }
    .bg-trans{
        background-color: rgba(255, 255, 255, 0.267);
        backdrop-filter: blur(5px);
        height: 400px;
        width: 350px;
        border-radius: 10%;
        margin-top: 7%;

    }
    .bg-transp{
        background-color: rgba(255, 255, 255, 0.267);
        backdrop-filter: blur(5px);
        height: 400px;
        width: 800px;
        border-radius: 10px;
        margin-top: 7%;
    }
    .fs{
        font-family: login;
        font-size: 130px;
    }
    .imagen{
        margin-top: -110px;
    }
    .boton{
    margin-left: 40%;
    border-radius: 10%;
    background-color: rgb(252, 195, 79);
    }
        
    pre{
        font-family: horaDia;
        color: white;
        text-align: center;
        margin-top:20px;
        font-size: 60px;
    }
    h3{
        font-family: login;
        color: red;
    }
    h2{
        color:white;
    }
    .boton1{
        margin-top: 100px;
        margin-left: 25px;
    }
    .boton2{
        margin-top: 100px;
        margin-left: 55px;
    }
    .boton3{
        margin-top: 100px;
        margin-left: 60px;
    }
    .CA{
        margin-top: 50px;
        margin-left: 20px;
    }
    .BA{
        margin-top: 50px;
        margin-left: 30px;
    }


</style>

</head>
<body>
<center>
<h2>Bienvenido jefe</h2>
</center>

<?php

        
        echo "<pre>".date("d/m/y")."</pre>";
        
        echo "<pre>".date("h:i:s")."</pre>";
    
    ?>
    <br>
      <center>  
    <ul>
        <li><a href="ruta.php">Obtener Ruta Actual</a></li>
        <li><a href="buscar.php">Buscar un Archivo</a></li>
        <li><a href="crear.php">Crear un Nuevo Archivo</a></li>
    </ul>
    <center>  
        
</div>
</body>
</html>