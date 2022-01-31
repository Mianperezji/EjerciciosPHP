<?php
//Miguel Angel Perez Jimenez 2do DAW

   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio1 Miguel Perez</title>
</head>
<body>
    <h1>Ejercicio 1</h1>
    <h3>Miguel Ángel Pérez</h3>
    <form action="ejer1.php" method="post">
    <label for="nombre">Tu nombre:</label>    
    <input type="text" name="nombre" id=""><br>

    <label for="idioma">Tu idioma de preferencia</label>
    <select name="idioma" id="">
        <option value="espanyol">Español</option>
        <option value="ingles">Inglés</option>
        <option value="valenciano">Valenciano</option>
        <option value="frances">Frances</option>
    </select>
    <br>

    <label for="color">Color:</label>
    <input type="text" name="color" id="">
    <br>

    <label for="ciudad">Ciudad:</label>
    <input type="text" name="ciudad" id="">
    <br>

    <input type="submit" value="Enviar" name="enviar">    
        

    </form>
    
</body>
</html>

<?php
     //Si no se ha creado la coockie cuando apretes el boton enviar creamela
     if (!isset($_COOKIE["nombre"])&&!isset($_COOKIE["idioma"])&&!isset($_COOKIE["color"])&&!isset($_COOKIE["ciudad"])){
        if (isset($_POST["enviar"])){

            $cookie_nombre=$_POST["nombre"];
            $cookie_idioma=$_POST["idioma"];
            $cookie_color=$_POST["color"];
            $cookie_ciudad=$_POST["ciudad"];
            setcookie("nombre",$cookie_nombre,time()+60,"/");
            setcookie("idioma",$cookie_idioma,time()+60,"/");
            setcookie("color",$cookie_color,time()+60,"/");
            setcookie("ciudad",$cookie_ciudad,time()+60,"/");


        }


    }else{
        if(isset($_POST["enviar"])){
            echo "Hola ". $_POST["nombre"]. ", has elegido el idioma ". $_POST["idioma"]. " y el color ". $_POST["color"]. " y eres de ". $_POST["ciudad"];
            echo "<br> La información que teniamos guardada de ti anteriormente era: <br>";
            echo "Nombre:". $_COOKIE["nombre"];
            echo "<br>Idioma: ". $_COOKIE["idioma"];
            echo"<br>Color: ". $_COOKIE["color"];
            echo "<br>Ciudad: ". $_COOKIE["ciudad"];

        }
    }

?>