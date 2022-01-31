<?php
//MIGUEL ANGEL PEREZ JIMENEZ 2DO DAW
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 4 Miguel Perez</title>
</head>
<body>
    <h1>Ejercicio 4</h1>
    <h3>Miguel Ángel Pérez Jiménez</h3>

    <p>¿Quieres recibir información en tu correo electronico?</p>

    <form action="ejer4.php" method="post">
        <label for="2_7">Introduce tu email</label>
        <input type="text" name="2_7" value="<?php 
        //Si le das al boton de enviar y el correo es valido, guardame el valor que tenga el input
        //Si le das a borrar dejame el campo vacio
        if (isset($_POST["enviar2_7"])&&filter_var($_POST["2_7"], FILTER_VALIDATE_EMAIL)) {
            echo $_POST["2_7"];
        }else if (isset($_POST["borrar2_7"])){

        }
         ?>"><br>
        <input type="checkbox" name="publi[]" value="publi" id="">
        <label for="publi">Quiero recibir publicidad en el correo</label><br>
        <input type="submit" name="enviar2_7" value="Enviar">
        <input type="submit" name="borrar2_7"value="Borrar">
    </form>
    
</body>
</html>

<?php

    if (!isset($_COOKIE["info"])){
        if (isset($_POST["enviar2_7"])){
            if (!empty($_POST["publi"])){
                setcookie("info","1",time()+120,"/");
            }
        }
    }else{
        if (isset($_POST["enviar2_7"])){
            if ($_COOKIE["info"]=="1"){
                echo "Tu opción guardada era recibir informacion";
            }else{
                echo "Tu opción guardada era no recibir informacion";
            }

            if (!empty($_POST{"publi"})){
                echo "Has elegido que te mandemos informacion";
                setcookie("info","1",time()+120,"/");

            }else{
                echo "Has elegido que no te mandemos informacion";
                setcookie("info","0",time()+120,"/");

            }
        }
    }




?>

