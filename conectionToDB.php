<?php
//Funcion para realizar a la conexion a la base de datos
function conectar(){
    //Variables para la conexion a la base de datos
    $host = "localhost";
    $user = "root";
    $password = "";

    $bd = "persona";

    //Ejecucion de la conexión
    $conection = mysqli_connect($host, $user, $password);

    mysqli_select_db($conection, $bd);

    return $conection;


}

?>