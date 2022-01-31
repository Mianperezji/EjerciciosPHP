<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Datos guardados</title>
</head>
<body>
    <?php
    $alojamiento= implode(",",$_SESSION["alojamiento"]);
    $servicios = implode(",",$_SESSION["servicios"]);
    echo "<h2>Hola".$_SESSION["nombre"].", se han guardado los siguientes datos.<h2>";
    echo "<p><strong>Usuario: </strong> <span style=color:green;>". $_SESSION["usuario"]."</span></p>";
    echo "<p><strong>Contraseña: </strong> <span style=color:green;>". $_SESSION["password"]."</span></p>";
    echo "<p><strong>Teléfono Fijo: </strong> <span style=color:green;>". $_SESSION["fijo"]."</span></p>";
    echo "<p><strong>Movil: </strong> <span style=color:green;>". $_SESSION["movil"]."</span></p>";
    echo "<p><strong>Direccion: </strong> <span style=color:green;>". $_SESSION["direccion"]."</span></p>";
    echo "<p><strong>Código Postal: </strong> <span style=color:green;>". $_SESSION["cp"]."</span></p>";
    echo "<p><strong>Opciones de alojamiento: </strong> <span style=color:green;>". $alojamiento."</span></p>";
    echo "<p><strong>Opciones de servicio: </strong> <span style=color:green;>". $servicios."</span></p>";









    
    ?>
    
</body>
</html>