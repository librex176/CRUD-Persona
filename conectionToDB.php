<?php
function conect(){
    $host = "localhost";
    $user = "root";
    $password = "";

    $bd = "persona";

    $conection = mysqli_connect($host, $user, $password);
    mysqli_select_db($conection, $bd);

    return $conection;


}

?>