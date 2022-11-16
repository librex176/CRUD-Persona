<?php
//Funcion para hacer la consulta de todos los miembros de la tabla
include ("conectionToDB.php");
$conection = conect();

$showPersona = "SELECT * FROM persona";

$queryShowPersona = mysqli_query($conection, $showPersona);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/styles.css">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <title>Prueba Técnica</title>
</head>
<body>
    <!--Seccion del formulario-->
    <aside class>
        <form action="addPersona.php" method="POST">
            <div class="form_cont">
                <!--Campos del formulario con sus validaciones-->
                <input type="text"  name="Nombre" placeholder="Nombre" required maxlength="200">
                <input type="text"  name="Ape_Pat" placeholder="Apellido Paterno" required maxlength="200">
                <input type="text"  name="Ape_Mat" placeholder="Apellido Materno" required maxlength="200">
                <input type="text"  name="RFC" placeholder="RFC" required maxlength="13" minlength="13">
                <input type="text"  name="CURP" placeholder="CURP" required maxlength="18" minlength="18">
                <input type="date"  name="Fecha_Nacimiento" placeholder="Fecha de nacimiento" required>
                <input type="date"  name="Fecha_Alta" placeholder="Fecha de alta" required>
                
                <div class="status">
                        Status: 
                    <label >Estatus 1: <input type="radio"  name="Estatus_Id" value=1 required ></label>
                    <label >Estatus 2:
                    <input type="radio"  name="Estatus_Id" value=2 required >
                    </label>
                </div>
                <div class="sexo">
                        Sexo:
                    <label >Masculino: <input type="radio"  name="Sexo_id" value=1 required ></label>
                    <label >Femenino:
                    <input type="radio"  name="Sexo_id" value=2 required>
                    </label>
                </div>
                <div class="tipo_persona">
                        Tipo de persona:
                    <label >Tipo 1 <input type="radio"  name="Persona_Tipo_Id" value=1 required></label>
                    <label >Tipo 2
                    <input type="radio"  name="Persona_Tipo_Id" value=2 required >
                    </label>
                </div>
                 <input type="date"  name="Fecha_Modificacion" placeholder="Fecha de modificacion" required>
                 <input type="text"  name="Avatar" placeholder="Avatar" required>
                 <input type="submit" value="Agregar" required>
        </form>
    </aside>
    <!--Tabla donde se momstraran las busquedas-->
    <div class="table">
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>RFC</th>
                    <th>CURP</th>
                    <th>Fecha de nacimiento</th>
                    <th>Fecha de alta</th>
                    <th>Estatus</th>
                    <th>Sexo</th>
                    <th>Tipo de persona</th>
                    <th>Fecha de modificacion</th>
                    <th>Avatar</th>
                    
                    
                </tr>
            
    </div>
    <?php
    //Funcion para mostrar una busqueda
    include ("addPersona.php");
        while($row = mysqli_fetch_array($queryShowPersona)){
    ?>
    <tr class="table">
        <th><?php echo $row["Id"]?></th>
        <th><?php echo $row['Nombre']?></th>
        <th><?php echo $row['Ape_Pat']?></th>
        <th><?php echo $row['Ape_Mat']?></th>
        <th><?php echo $row['RFC']?></th>
        <th><?php echo $row['CURP']?></th>
        <th><?php echo $row['Fecha_Nacimiento']?></th>
        <th><?php echo $row['Fecha_Alta']?></th>
        <th><?php echo $row['Estatus_Id']?></th>
        <th><?php echo $row['Sexo_Id']?></th>
        <th><?php echo $row['Persona_Tipo_Id']?></th>
        <th><?php echo $row['Fecha_Modificacion']?></th>
        <th><?php echo $row['Avatar']?></th>
        <th><a href="updatePersona.php <?php echo $row ['Id']?> " class="btn btn-info">Editar </a></th>
        <th><a href="updatePersona.php <?php echo $row ['Id']?> " class="btn btn-danger">Eliminar </a></th>


    </tr>
    <?php
        }
    
    ?>
    </thead>
        </table>
    
    <script type="text/javascript" src="/jquery/jquery-3.6.1.min.js"></script>
    <script type="text/javascript" src="/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>