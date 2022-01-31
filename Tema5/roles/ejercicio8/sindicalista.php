<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nominas</title>
</head>
<body>
    <?php
    echo "<h2>Bienvenido ". $_SESSION["nombre"]." eres el sindicalista.</h2><br>";

    foreach ($_SESSION["trabajadores"] as $name => $salary){
        echo "Nombre: $name. Salario: $salary";
        echo "<br>";
    }

    echo "<br> <strong> El salario medio es de ". $_SESSION["salmed"]."</strong>";

    
    ?>
    <br><br><br>

    

   





</body>
</html>