<?php
    //Conexion a la base de datos
    include("conectionToDB.php");
    $conection = conectar();

    //Variables para recibir la informacion del formulario
    $Id = $_POST['Id'];

    $Nombre = $_POST['Nombre'];
    $Ape_Pat = $_POST['Ape_Pat'];
    $Ape_Mat = $_POST['Ape_Mat'];
    $RFC = $_POST['RFC'];
    $CURP = $_POST['CURP'];
    $Fecha_Nacimiento = $_POST['Fecha_Nacimiento'];
    $Fecha_Alta = $_POST['Fecha_Alta'];
    $Estatus_Id = $_POST['Estatus_Id'];
    $Sexo_Id = $_POST['Sexo_Id'];
    $Persona_Tipo_Id = $_POST['Persona_Tipo_Id'];
    $Fecha_Modificacion = $_POST['Fecha_Modificacion'];
    $Avatar = $_POST['Avatar'];
    //Query para actualizar un registro
    $sqlQuery = "UPDATE persona SET Nombre = '$Nombre', Ape_Pat = '$Ape_Pat',
    Ape_Mat = '$Ape_Mat', RFC = '$RFC', CURP = '$CURP', Fecha_Nacimiento = '$Fecha_Nacimiento',
    Fecha_Alta = '$Fecha_Alta', Estatus_Id = '$Estatus_Id', Sexo_Id = '$Sexo_Id', Persona_Tipo_Id = '$Persona_Tipo_Id',
    Fecha_Modificacion = '$Fecha_Modificacion', Avatar = '$Avatar' WHERE Id = '$Id'";

    $sqlQueryUse = mysqli_query($conection, $sqlQuery);

    if($sqlQueryUse){
        Header("Location: index.php");
    }
?>