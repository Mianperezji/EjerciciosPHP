<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
</head>
<body>
<?php
    //Mensaje de bienvenida y recordatorio del curso escogido
    echo "<h2> Bienvenido ". $_SESSION["nombre"]. " ". $_SESSION["apellido"]. ", eres el director. </h2> <br> <br>";
    echo "<h4>";
        switch ($_SESSION["asignatura"]){
            
            case 1:
                echo "Has accedido al curso de 1º DAW de Programación.";
                break;
            case 2:
                echo "Has accedido al curso de 1º DAM de Programación";
                break;
            case 3:
                echo "Has accedido al curso de Desarrollo en entornos de servidor de 2º DAW";
                break;
            case 4:
                echo "Has accedido al curso de Desarrollo en entorno cliente de 2º de DAW";
                break;
            
        }
        echo "</h4>";


?>

        <form action="director.php" method="post">
            <input type="submit" name="enviar" value="Cerrar Sersion">
        </form>
</body>
</html>

<?php

    if (isset($_POST["enviar"])){
        unset($_SESSION["nombre"]);
        unset($_SESSION["apellido"]);
        unset($_SESSION["asignatura"]);
        header("Location:ejercicio9.php");
        exit();

    }
?>
