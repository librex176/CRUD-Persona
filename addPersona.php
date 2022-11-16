<?php
//Conexion al archivo que realiza la conexion con la base de datos
include ("conectionToDB.php");
$conection2 = conectar();

//Variables para recibir los valores del formulario
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
//Query para insertar una persona
$QueryAddPersona = "INSERT INTO Persona VALUES(
 0 , '$Nombre', '$Ape_Pat ', '$Ape_Mat', '$RFC', '$CURP', '$Fecha_Nacimiento',
 '$Fecha_Alta', '$Estatus_Id', '$Sexo_Id', '$Persona_Tipo_Id', '$Fecha_Modificacion', '$Avatar'
)";
//Ejecucion de la query
$UseQueryAddPersona = mysqli_query($conection2, $QueryAddPersona);

if($query){
    Header("Location: index.php");
}else{
    Header("Location: index.php");
}

?>