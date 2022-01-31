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
    echo "<h2>Bienvenido ". $_SESSION["nombre"]." eres el gerente.</h2><br>";

    foreach ($_SESSION["trabajadores"] as $name => $salary){
        echo "Nombre: $name. Salario: $salary";
        echo "<br>";
    }

    
    ?>
    <br><br><br>

    <form action="gerente.php" method="post">
        <input type="checkbox" name="calcular[]" value="minimo" id="">
        <label for="minimo">Calcular salario mínimo.</label><br>
        <input type="checkbox" name="calcular[]" value="maximo" id="">
        <label for="maximo">Calcular salario máximo.</label><br>
        <input type="checkbox" name="calcular[]" value ="medio" id="">
        <label for="medio">Calcular salario medio</label>
        
        <br><br>
        <input type="submit" name ="enviar" value="Calcular">
    </form>

    <?php
        if (isset($_POST["enviar"])){
            if(empty($_POST["calcular"])){
                echo "<strong> Selecciona al menos un tipo de calculo</strong>";
            }else{
                echo "<strong>";
                if (in_array("minimo",$_POST["calcular"])){
                    echo "Salario minimo : ". $_SESSION["salmin"];
                }
                if (in_array("maximo",$_POST["calcular"])){
                    echo "<br>Salario máximo : ". $_SESSION["salmax"];
                }
                if (in_array("medio",$_POST["calcular"])){
                    echo "<br>Salario medio : ". $_SESSION["salmed"];
                }
                echo "</strong>";
            }
        }
    
    ?>





</body>
</html>