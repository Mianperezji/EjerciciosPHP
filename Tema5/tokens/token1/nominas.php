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
    //Muestrame la informacion solo si el token es correcto
    if (hash_equals($_GET['token'], $_SESSION['token']) === false) {
        print('El token no coincide!');
    }else{
        echo "<h2>Bienvenido ". $_SESSION["nombre"]." eres el responsable de nominas.</h2><br>";

        foreach ($_SESSION["trabajadores"] as $name => $salary){
            echo "Nombre: $name. Salario: $salary";
            echo "<br>";
        }
    
    
        echo "<br><br><br>
    
        <form action=".'nominas.php'." method=".'post'.">
            <input type=".'checkbox'." name=".'calcular[]'." value=".'minimo'." id=>
            <label for=".'minimo'.">Calcular salario mínimo.</label><br>
            <input type=".'checkbox'." name=".'calcular[]'." value=".'maximo'." id=>
            <label for=".'maximo'.">Calcular salario máximo.</label><br><br>
            <input type=".'submit'." name =".'enviar'." value=".'Calcular'.">
        </form>";
    }


   
    
    ?>            
    

    <?php
        if (isset($_POST["enviar"])){
            if(empty($_POST["calcular"])){
                echo "<strong> Selecciona al menos un tipo de calculo</strong>";
            }else{
                echo "<strong>";
                if (in_array("minimo",$_POST["calcular"])&&in_array("maximo",$_POST["calcular"])){
                    echo "Salario minimo: ". $_SESSION["salmin"]."<br>";
                    echo "Salario máximo: ", $_SESSION["salmax"];

                }else if (in_array("minimo",$_POST["calcular"])){
                    echo "Salario minimo: ". $_SESSION["salmin"]."<br>";
                }else{
                    echo "Salario máximo: ", $_SESSION["salmax"];
                }
                echo "</strong>";
            }
        }
    
    ?>





</body>
</html>