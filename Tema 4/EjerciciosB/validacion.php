<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <?php
        require_once "dependencias.php";
        $nombre=$_GET["nombre"];
        $apellidos=$_GET["apellidos"];
        $edad =$_GET["edad"];
        $peso = $_GET["peso"];
        $sexo=$_GET["sexo"];
        $estadocivil=$_GET["estadocivil"];
        $aficiones = $_GET["aficiones"];
        

        ejercicio8($nombre,$apellidos,$edad,$peso,$sexo,$estadocivil,$aficiones);
    ?>
    
</body>
</html>