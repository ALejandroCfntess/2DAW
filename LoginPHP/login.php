<!DOCTYPE html>
<html>
<head>
    <title>Acceso al Directorio de Archivos</title>
</head>
<body>
    <?php
    session_start();
    include("base_de_datos.php");
    if (isset($_POST['login'])) {
         $nombre = ($_POST['nombre']);
         $contraseña = ($_POST['contrasena']);
          if ($nombre == 'admin' && $contraseña == '1234') {
           header("Location: index.php");
             echo "Bienvenido, ".$nombre.". Has accedido el " ;
          } else {
              echo "Credenciales incorrectas. Inténtalo de nuevo.";
          }
        } 
    
    ?>
    <style>
    
    body{
        background:fixed url(principal.jpeg);
        background-size: cover;
    }
    </style>
<center>
    <h1>Acceso al Directorio de Archivos</h1>
    <form method="post" action="login.php">

        <h1><label for="username">Usuario:</label>
        <input type="text" id="username" name="nombre" required><br><br>
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="contrasena" required><br><br>
        <input type="submit" name="login" value="Toca"></h1>
        
    </form>
</center>
</body>
</html>
