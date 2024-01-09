<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../estiloo/crud.css">
    <link rel="stylesheet" href="../bootrap/css/bootstrap.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src="../jzz/script.js"></script>
</head>

<body class=" align-items-center d-flex bg-">
    

    <?php
    session_start();
    include_once("../consultas/consultas.php");

    if (isset($_SESSION["usuario"]) || isset($_POST["usuario"], $_POST["contra"]) && Consultas::Inicio($_POST["usuario"], $_POST["contra"])) {

        if (isset($_POST["usuario"], $_POST["contra"])) {
            $_SESSION["usuario"] = $_POST["usuario"];
        }


    ?>


        <div class="container  crud text-center bg-warning">
            <h1 class="mt-5 mb-5 bg-white">Bienvenido Sr/Sra <?php echo $_SESSION["usuario"]; ?></h1>
            <div class="row  ">
                <div class="col-lg-2  col-md-2 col-xl-2 acciones col-sm-12 ">
                    <form action="../consultas/añadir.php" method="post">
                        <input class="inputs" type="text" name="Dj" placeholder="Dj" required>
                        <input class="inputs" type="text" name="Nacionalidad" placeholder="Nacionalidad" required>
                        <input class="inputs" type="text" name="Edad" placeholder="Edad" required>
                        <br>
                        <br>
                        <input   type="submit" value="Crear">
                    </form>
                    </form>



                    <form action="../consultas/update.php" method="post">
                        <input class="inputs idmod" name="id"  type="text" name="id" placeholder="id de la Dj">
                        <input class="inputs nmod" type="text" name="Dj" placeholder="Dj" required>
                        <input class="inputs amod" type="text" name="Nacionalidad" placeholder="Nacionalidad" required>
                        <input class="inputs gmod" type="text" name="Edad" placeholder="Edad" required>
                        <br>
                        <br>
                        <input  type="submit" value="Modificar">
                    </form>
                    <br><br><br>
                    <form action="salir.php"><button >Cerrar Sesion</button></form>
                    

                </div>
                <div class="col-2"></div>
                <div class="col-lg-8 col-sm-12 col-md-8 col-xl-8 ">
                    <div class="divv bg-">
                        <table class="table table-hover table-white ">
                            <tr class="">
                                <th>ID</th>
                                <th>Dj</th>
                                <th>Nacionalidad</th>
                                <th>Edad</th>
                                <th></th>
                                </tr>
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
