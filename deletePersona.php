<?php
//Conexión a la base de datos
    include("conectionToDB.php");
    $conection = conectar();
    //Obtencion del Id de la persona para eliminarla
    $Id =  $_GET['Id'];

    //Query para eliminar el registro
    $sqlQuery = "DELETE FROM persona WHERE Id = '$Id'";

    $sqlQueryUse = mysqli_query($conection, $sqlQuery);

    if($sqlQueryUse){
        Header("Location: showPersona.php");
    }
?>