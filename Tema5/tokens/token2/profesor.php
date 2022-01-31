<?php
session_start();

if (isset($_POST["enviar"])){
    unset($_SESSION["nombre"]);
    unset($_SESSION["apellido"]);
    unset($_SESSION["asignatura"]);
    unset($_SESSION["token"]);
    header("Location:ejercicio11.php");
    exit();

}
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
if (hash_equals($_GET['token'], $_SESSION['token']) === false) {
    print('El token no coincide!');
}else{
    //Mensaje de bienvenida y recordatorio del curso escogido
    echo "<h2> Bienvenido ". $_SESSION["nombre"]. " ". $_SESSION["apellido"]. ", eres el profesor. </h2> <br> <br>";
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

        echo "
        <form action=".'profesor.php'." method=".'post'.">
            <input type=".'submit'." name=".'enviar'." value=".'Cerrar Sesion'.">
        </form>";
}
?>

        
</body>
</html>

<?php

    
?>

