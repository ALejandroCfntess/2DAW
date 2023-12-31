<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../estiloo/crud.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src="../jzz/script.js"></script>
</head>

<body class=" align-items-center d-flex bg-dark">

    <?php
    session_start();
    include_once("../consultas/consultas.php");

    if (isset($_SESSION["usuario"]) || isset($_POST["usuario"], $_POST["contra"]) && Consultas::ComprobarInicio($_POST["usuario"], $_POST["contra"])) {

        if (isset($_POST["usuario"], $_POST["contra"])) {
            $_SESSION["usuario"] = $_POST["usuario"];
        }


    ?>


        <div class="container  crud text-center">
            <h1 class="mt-5 mb-5">Bienvenido al <b>CRUD</b> <?php echo $_SESSION["usuario"]; ?></h1>
            <div class="row  ">
                <div class="col-lg-2  col-md-2 col-xl-2 acciones col-sm-12 ">
                    <form action="../consultas/añadir.php" method="post">
                        <input class="inputs" type="text" name="Dj" placeholder="Dj" required>
                        <input class="inputs" type="text" name="Nacionalidad" placeholder="Nacionalidad" required>
                        <input class="inputs" type="text" name="Edad" placeholder="Edad" required>
                        <br>
                        <br>
                        <input class="btn btn-dark btn-outline-success " type="submit" value="Crear">
                    </form>
                    </form>



                    <form action="../consultas/update.php" method="post">
                        <input class="inputs idmod" name="id" style="background-color: darkslategrey; color: yellow;" type="text" name="id" placeholder="id de la Dj">
                        <input class="inputs nmod" type="text" name="Dj" placeholder="Dj" required>
                        <input class="inputs amod" type="text" name="Nacionalidad" placeholder="Nacionalidad" required>
                        <input class="inputs gmod" type="text" name="Edad" placeholder="Edad" required>
                        <br>
                        <br>
                        <input class="btn btn-dark btn-outline-warning " type="submit" value="Modificar">
                    </form>
                    <br><br><br>
                    <form action="salir.php"><button class="btn btn-dark btn-outline-danger">Cerrar Sesion</button></form>
                    

                </div>
                <div class="col-2"></div>
                <div class="col-lg-8 col-sm-12 col-md-8 col-xl-8 ">
                    <div class="divv ">
                        <table class="table table-hover table-dark  ">
                            <tr class="">
                                <th>ID</th>
                                <th>Dj</th>
                                <th>Nacionalidad</th>
                                <th>Edad</th>
                                <th></th>
                                <?php


                                Consultas::MuestreodeTabla();

                                ?>
                            </tr>


                        </table>
                    </div>
                </div>

            </div>


        </div>

    <?php
    } else {
        header("location:../indexx.php?inco=0");
    }
    ?>
</body>

</html>