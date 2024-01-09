<html lang="en">

<head>
    <link rel="stylesheet" href="estiloo/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src="jzz/script.js"></script>

    <script>
        var luz = false;
    </script>
</head>


<body class="align-items-center d-flex">




    <?php
    session_start();
    session_destroy();
    include_once("consultas/consultas.php");

    if (isset($_POST["usuario"], $_POST["contra"])) {


        if (Consultas::RegistroExistente($_POST["usuario"])) {
            header("location:indexx.php?r=0");
        } else {
            Consultas::Crear($_POST["usuario"], $_POST["contra"]);
            header("location:indexx.php?i=0");
        }
    } else {






    ?>











        
            <!--
                FORM SIGN IN
            -->
            <div class="container contenedor text-center w-75 text-light animate__animated animate__bounce align-items-center " id="login">

                <div class="container-fluid float-start  ">


                    <form action="indexx.php" method="post" class="w-75 mx-auto mt-3">

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">@</span>
                            </div>
                            <input type="text" name="usuario" class="form-control inputs" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required>
                        </div>

                        <!---->


                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">*</span>
                            </div>
                            <input name="contra" id="clave1" type="password" class="form-control inputs" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1" required>
                        </div>


                        <!---->

                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">*</span>
                            </div>
                            <input oninput="inputIguales()" name="clave" type="password" class="form-control inputs" placeholder=" verify Password" id="clave2" aria-label="Username" aria-describedby="basic-addon1" required>
                        </div>


                        <!---->
                        <p id="mensaje" style="display: none;" class="alert alert-info"> Contraseña no coincide </p>


                        <input type="submit" id="enviar" class="btn" value="Register"><br>
                    </form>

                </div>


                <!--
                FORM SIGN IN
            -->

                <div class="container-fluid float-start  ">
                    <form action="crud/crud.php" method="post" class="w-75 mx-auto mt-3">

                        <?php
                        if (isset($_GET["i"])) {
                            echo "
        <p class='alert alert-success'>Usuario registrado</p>";
                        } ?>
                        <?php
                        if (isset($_GET["r"])) {
                            echo "
        <p class='alert alert-danger'>Usuario en uso </p>";
                        } ?>
                        <?php
                        if (isset($_GET["inco"])) {
                            echo "
        <p class='alert alert-danger'>Usuario Incorrecto</p>";
                        } ?>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">@</span>
                            </div>
                            <input type="text"
                             name="usuario" 
                             class="form-control inputs" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required>
                        </div>


                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">*</span>
                            </div>
                            <input
                             name="contra"
                              type="password" class="form-control inputs" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1" required>
                        </div>

                        <input type="submit" class="btn" value="Entrar"><br>
                    </form>

                </div>

            </div>


        </div>
    <?php
    //Respuesta Pregunta 1
    //PDO (PHP Data Objects) es una extensión de PHP que ofrece una capa de abstracción para acceder a bases de datos desde aplicaciones PHP. 
    //Algunas de sus ventajas son la portabilidad del código entre diferentes sistemas de gestión de bases de datos, seguridad mediante consultas 
    //preparadas, soporte para diversos SGBD, manejo consistente de errores, orientación a objetos y soporte para transacciones. 
    //Estas características hacen que sea más fácil y seguro trabajar con bases de datos en entornos PHP.
   } 
    ?>
    
</body>

</html>