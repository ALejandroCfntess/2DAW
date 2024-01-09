<?php
class Consultas
{
    public static function crearTabla()
    {
        $host = "localhost";
        $usuarios = "root";
        $contra = "";
        $conexion = mysqli_connect($host, $usuario, $contra);



        $sql = "CREATE DATABASE IF NOT EXISTS DjBD";

        $crearTabla = "CREATE TABLE IF NOT EXISTS usuarios( usuarios VARCHAR(30) PRIMARY KEY, contra VARCHAR(1000));";

        $tablaDj = "CREATE TABLE IF NOT EXISTS Dj( ID INT AUTO_INCREMENT PRIMARY KEY, Dj VARCHAR(40), Nacionalidad VARCHAR(40), Edad INTEGER(2));";

        mysqli_query($conexion, $sql);

        mysqli_select_db($conexion, "DjBD");

        mysqli_query($conexion, $crearTabla);

        mysqli_query($conexion, $tablaDj);

        mysqli_close($conexion);
    }



    public static function Crear($usuarios, $pass)
    {

        $host = "localhost";
        $usuario = "root";
        $contra = "";
        $baseDatos = "DjBD";

        $conexion = mysqli_connect($host, $usuario, $contra, $baseDatos);

        $ConsultaInsertar = "INSERT INTO usuarios VALUES(?,?)";

        $stmtInsertar = mysqli_prepare($conexion, $ConsultaInsertar);

        mysqli_stmt_bind_param($stmtInsertar, "ss", $usuarios, $pass);

        mysqli_stmt_execute($stmtInsertar);

        mysqli_stmt_close($stmtInsertar);
        mysqli_close($conexion);
    }


    public static function RegistroExistente($usuarios)
    {

        $host = "localhost";
        $usuario = "root";
        $contra = "";
        $baseDatos = "DjBD";
        $conexion = mysqli_connect($host, $usuario, $contra, $baseDatos);
        $Existe = false;

        $consultausuarioss = "SELECT * FROM usuarios WHERE usuario=?";
        $stmusuarioss = mysqli_prepare($conexion, $consultausuarioss);
        mysqli_stmt_bind_param($stmusuarioss, "s", $usuarios);
        mysqli_stmt_execute($stmusuarioss);

        mysqli_stmt_store_result($stmusuarioss);

        if (mysqli_stmt_num_rows($stmusuarioss) > 0) {
            $Existe = true;
        }
        mysqli_stmt_close($stmusuarioss);



        mysqli_close($conexion);

        return $Existe;
    }




    public static function Inicio($usuarios, $pass)
    {

        $host = "localhost";
        $usuario = "root";
        $contra = "";
        $baseDatos = "djbd";

        $conexion = mysqli_connect($host, $usuario, $contra, $baseDatos);
        $Existe = false;
                            //Crearia la consulta
        $consulta = "SELECT contra FROM usuarios WHERE usuario=?";
                            //Preparar la Consulta
        $stmt = mysqli_prepare($conexion, $consulta);
                            //Vincular los parámetros
        mysqli_stmt_bind_param($stmt, "s", $usuarios);

                            //Ejecutar la consulta
        mysqli_stmt_execute($stmt);

        mysqli_stmt_bind_result($stmt, $claveColumna);
                        // Obtener los resultados
        mysqli_stmt_fetch($stmt);
        
        if ($pass==$claveColumna) {
            $Existe = true;
        
        }
    
    // Cierro conexiones
        
    mysqli_close($conexion);

    return $Existe;

    }
                         
    

    public static function MeterDj($Dj, $Nacionalidad, $Edad)
    {
        $host = "localhost";
        $usuario = "root";
        $contra = "";
        $baseDatos = "DjBD";
        $conexion = mysqli_connect($host, $usuario, $contra, $baseDatos);

                            //Consultar los valores
        $ConsultaInsertar = "INSERT INTO Dj (Dj,Nacionalidad,Edad) VALUES(?,?,?)";
                            //Preparo la consulta de insertar
        $stmtInsertar = mysqli_prepare($conexion, $ConsultaInsertar);
                            //Vincular los parametro
        mysqli_stmt_bind_param($stmtInsertar, "ssi", $Dj, $Nacionalidad, $Edad);
                            //Ejecuta la consulta preparada
        mysqli_stmt_execute($stmtInsertar);

                            //Cerrar conexiones
        mysqli_stmt_close($stmtInsertar);
        mysqli_close($conexion);
    }


    public static function Eliminar($id)
    {
        $host = "localhost";
        $usuario = "root";
        $contra = "";
        $baseDatos = "DjBD";
                            //Establezco conexion
        $conexion = mysqli_connect($host, $usuario, $contra, $baseDatos);
                            //Consulta para eliminar
        $consultaEliminar = "DELETE FROM Dj WHERE ID=$id";
                            //Preparo consulta
        $stmt = mysqli_prepare($conexion, $consultaEliminar);
                        //Ejecutar y sacar respuesta de la consulta
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);

                         //Cerrar conexiones
        mysqli_stmt_close($stmt);
        mysqli_close($conexion);
    }








    public static function MuestreodeTabla()
    {
        $host = "localhost";
        $usuario = "root";
        $contra = "";
        $baseDatos = "DjBD";

        $conexion = mysqli_connect($host, $usuario, $contra, $baseDatos);
        $consulta = "SELECT * FROM Dj";

        $Stmt = mysqli_prepare($conexion, $consulta);
        mysqli_stmt_execute($Stmt);
        mysqli_stmt_store_result($Stmt);
        mysqli_stmt_bind_result($Stmt, $id, $Dj, $Nacionalidad, $Edad,);

        while (mysqli_stmt_fetch($Stmt)) {

            echo "<tr'>";
            echo "<td style='color:black;'>$id</td>";//Color de lo td de la tabla 
            echo "<td>$Dj</td>";
            echo "<td>$Nacionalidad</td>";
            echo "<td>$Edad</td>";
            echo "<td><form method='post' action='../consultas/Eliminar.php'> <button name='id' value='$id' class='btn '><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash3-fill' viewBox='0 0 16 16'>
            <path d='M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5'/>
          </svg>
          </button></form></td>";
            echo "</tr>";
        }

        mysqli_stmt_close($Stmt);


        mysqli_close($conexion);
    }

    public static function Update($id, $Dj, $Nacionalidad, $Edad)
    {

        $host = "localhost";
        $usuario = "root";
        $contra = "";
        $baseDatos = "DjBD";
        $conexion = mysqli_connect($host, $usuario, $contra, $baseDatos) or die("error");
        $sql = "UPDATE Dj SET Dj=?, Nacionalidad=?, Edad=? WHERE ID=?";
        $stmt = mysqli_prepare($conexion, $sql);
        mysqli_stmt_bind_param($stmt, "sssi", $Dj, $Nacionalidad, $Edad, $id);
        mysqli_stmt_execute($stmt);

        mysqli_stmt_close($stmt);

        mysqli_close($conexion);
    }
}

