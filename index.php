

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
    <div class="principal">
    <div class="formulary">
        <form action="addPersona.php" method="POST">
            <div class="form_cont">
                <!--Campos del formulario con sus validaciones-->
                <input type="text"  name="Nombre" placeholder="Nombre" required maxlength="200">
                <input type="text"  name="Ape_Pat" placeholder="Apellido Paterno" required maxlength="200">
                <input type="text"  name="Ape_Mat" placeholder="Apellido Materno" required maxlength="200">
                <input type="text"  name="RFC" placeholder="RFC" required maxlength="13" minlength="13">
                <input type="text"  name="CURP" placeholder="CURP" required maxlength="18" minlength="18">
                <input type="text"  name="Avatar" placeholder="Avatar" required>
                <label>Fecha de nacimiento:
                    <input type="date"  name="Fecha_Nacimiento"  required></label>
                <label>Fecha de alta: 
                    <input type="date"  name="Fecha_Alta" required></label>
                <label>Fecha de modificacion:
                    <input type="date"  name="Fecha_Modificacion"  required></label>
                
                <div class="status">
                        Status: 
                    <label >Estatus 1: <input type="radio"  name="Estatus_Id" value=1 required ></label>
                    <label >Estatus 2:
                    <input type="radio"  name="Estatus_Id" value=2 required >
                    </label>
                </div>
                <div class="sexo">
                        Sexo:
                    <label >Masculino: <input type="radio"  name="Sexo_Id" value=1 required ></label>
                    <label >Femenino:
                    <input type="radio"  name="Sexo_Id" value=2 required>
                    </label>
                </div>
                <div class="tipo_persona">
                        Tipo de persona:
                    <label >Tipo 1 <input type="radio"  name="Persona_Tipo_Id" value=1 required></label>
                    <label >Tipo 2
                    <input type="radio"  name="Persona_Tipo_Id" value=2 required >
                    </label>
                </div>
                
                 
                 <input type="submit" value="Agregar" required>
        </form>
    </aside>
        </div>
    </div>
    
    
    
    <script type="text/javascript" src="/jquery/jquery-3.6.1.min.js"></script>
    <script type="text/javascript" src="/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>