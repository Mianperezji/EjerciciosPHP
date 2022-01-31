<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Datos guardados</title>
</head>
<body>

<?php
echo "<h2> Hola ". $_SESSION["nombre"]." ". $_SESSION["apellidos"];

echo "<p><strong> Se han guardado los siguientes datos</strong></p>";

echo "<p><strong>Edad: </strong> <span style=color:green;>". $_SESSION["edad"]."</p>";
echo "<p><strong>Peso: </strong> <span style=color:green;>". $_SESSION["peso"]."</p>";
echo "<p><strong>Sexo: </strong> <span style=color:green;>". $_SESSION["sexo"]."</p>";
echo "<p><strong>Estado Civil: </strong> <span style=color:green;>". $_SESSION["estado"]."</p>";
echo "<p><strong>Aficiones: </strong> <span style=color:green;>". $_SESSION["aficiones"]."</p>";


?>
    
</body>
</html>