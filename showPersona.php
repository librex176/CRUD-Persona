<?php
    
    //Funcion para hacer la consulta de todos los miembros de la tabla
    include ("conectionToDB.php");
    $conection = conectar();
    $nombre = $_POST['Nombre'];
    //Filtro para mostrar un registro en específico 
    if($nombre != ''){
    $showPersona = "SELECT * FROM persona WHERE Nombre ='$nombre'";
    
    $queryShowPersona = mysqli_query($conection, $showPersona);
    //Filtro para mostrar todos los registros
    }else {
        $showPersona = "SELECT * FROM persona ";
    
        $queryShowPersona = mysqli_query($conection, $showPersona);
    }
    
?>
<!--HTML de la vista que mostrara la busqueda-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/styles.css">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
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
    
    //Ciclo para extraer informacion de la consulta
        while($row = mysqli_fetch_array($queryShowPersona)){
    ?>
    <!--Impresion de cada campo de la tabla-->
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
        <th><a href="updatePersonaForm.php?Id= <?php echo $row ['Id']?>"  class="btn btn-info">Editar </a></th>
        <th><a href="deletePersona.php?Id= <?php echo $row ['Id']?>"  class="btn btn-danger">Eliminar</a></th>


    </tr>
    <?php
        }
    
    ?>
    </thead>
        </table>
        <h1><a href="index.php">Regresar</a></h1>
    <script type="text/javascript" src="/jquery/jquery-3.6.1.min.js"></script>
    <script type="text/javascript" src="/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>