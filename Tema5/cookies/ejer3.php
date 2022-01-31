<?php
//Miguel Angel Perez JImenez 2do DAW
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3</title>
</head>
<body>
    <h1>Ejercicio 3</h1>
    <h3>Miguel Ángel Pérez</h3>
<form action="ejer3.php" method="post">
        <label for="">¿Cómo te llamas?</label>
        <br>
        <input type="text" name="2_2" value="<?php
            if (isset($_POST["enviar2_2"])){
                echo $_POST["2_2"];
            }
        ?>">
        <select name="2_2accion" id="">
            <option value="saludo" <?php
                if(isset($_POST["enviar2_2"])&&$_POST["2_2accion"]=="saludo"){
                    echo "selected";
                }
            ?>>Saludo</option>
            <option value="despedida" <?php
                if(isset($_POST["enviar2_2"])&&$_POST["2_2accion"]=="despedida"){
                    echo "selected";
                }
            ?>>Despedida</option>
        </select>
        <input type="submit"  name="enviar2_2">
    </form>
</body>
</html>


<?php

    if (!isset($_COOKIE["nombre"])&&!isset($_COOKIE["saludo"])){
        if (isset($_POST["enviar2_2"])){
            setcookie("nombre",$_POST["2_2"],time()+120,"/");
            setcookie("saludo",$_POST["2_2accion"],time()+120,"/");
            ejercicio2($_POST["2_2"],$_POST["2_2accion"]);

        }
    }else{
        if (isset($_POST["enviar2_2"])){
            ejercicio2($_POST["2_2"],$_POST["2_2accion"]);
            echo "<br> Tenemos guardado tu nombre como  ". $_COOKIE["nombre"];
            echo " y la opción anterior elegida era ". $_COOKIE["saludo"];
            
        }
    }




function ejercicio2($nombre, $accion){
    if ($accion=="saludo"){
        echo "<strong>Saludos $nombre.</strong>";
    }else{
        echo "<strong> Hasta luego $nombre.</strong>";
    }

}
?>