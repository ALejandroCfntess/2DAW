<?php
session_start(); // Inicia la sesión



//Genera archivo con el parámetro dado. En este caso la fecha.
function generarTiempo( $datos ) {
    file_put_contents('fecha.txt', $datos);
}



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica las credenciales del usuario (por ejemplo, en una base de datos)
    $usuario = $_POST["username"];
    $contraseña = $_POST["pwd"];
    
    if ($usuario == "admin" && $contraseña == "1234") {
        // Si las credenciales son correctas, establece una cookie para mantener la sesión
        setcookie('nombre_usuario', $usuario, time() + 3600, '/');
        $_SESSION['id'] = true; 
        // Registra el tiempo de inicio de sesión
        $_SESSION['inicio_sesion'] = date('Y-m-d H:i:s');
        generarTiempo( $_SESSION['inicio_sesion']);
        header('Location: principal.html');
        exit;
    } else if ($usuario == "cliente1" && $contraseña == "0000") {
        setcookie('nombre_usuario', $usuario, time() + 3600, '/');
        $_SESSION['id'] = true; 
        // Registra el tiempo de inicio de sesión
        $_SESSION['inicio_sesion'] = date('Y-m-d H:i:s');
        generarTiempo( $_SESSION['inicio_sesion']);

        header('Location: espaciouser.html');
        exit;
    } else {
        // Redirige a la página de inicio de sesión con un mensaje de error
        header('Location: Login.html?error=1');
        exit;
    }





}
?>










