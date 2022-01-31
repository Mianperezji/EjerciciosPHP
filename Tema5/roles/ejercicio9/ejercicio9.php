<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Miguel Ángel Pérez Jiménez </title>
</head>
<body>
    <h2>Ejercicio 9</h2>
    <h3>Miguel Ángel Pérez Jiménez</h3>

    <form action="ejercicio9.php" method="post">
        <label for="nombre">Introduce tu nombre:</label>
        <input type="text" name="nombre" value="<?php
        if (isset($_POST["nombre"])){
            if (ctype_alpha($_POST["nombre"])){
                echo $_POST["nombre"];
            }
        }
        ?>" id="">
        <label for="apellidos">Introduce tu apellido:</label>
        <input type="text" name="apellido" value="<?php
        if (isset($_POST["apellido"])){
            if (ctype_alpha($_POST["apellido"])){
                echo $_POST["apellido"];
            }
        }
        ?>"><br><br>
        <label for="edad">Selecciona si eres menor o mayor de edad</label><br>
        <input type="radio" name="edad" value="menor" <?php
            if (isset($_POST["edad"])){
                if ($_POST["edad"]=="menor") echo "checked";
            }
        ?> id="">
        <label for="edad">Menor</label><br>
        <input type="radio" name="edad" value="mayor"<?php
            if (isset($_POST["edad"])){
                if ($_POST["edad"]=="mayor") echo "checked";
            }
        ?> id="">
        <label for="edad">Mayor</label><br>

        <p>Selecciona tu cargo</p>
        <input type="radio" name="cargo" value="si" <?php
            if (isset($_POST["cargo"])){
                if ($_POST["cargo"]=="si") echo "checked";
            }
        ?>  id="">
        <label for="cargo">Con cargo</label><br>
        <input type="radio" name="cargo" <?php
            if (isset($_POST["cargo"])){
                if ($_POST["cargo"]=="no") echo "checked";
            }
        ?> value="no" id="">
        <label for="cargo">Sin cargo</label><br>
        <p>Selecciona asignatura y grupo</p>
        <select name="asignatura" id="">
            <option value="1" <?php
                if (isset($_POST["asignatura"])){
                    if($_POST["asignatura"]==1) echo "selected";
                }
            ?> >Programacion 1º DAW</option>
            <option value="2" <?php
                if (isset($_POST["asignatura"])){
                    if($_POST["asignatura"]==2) echo "selected";
                }
            ?> >Programacion 1º DAM</option>
            <option value="3" <?php
                if (isset($_POST["asignatura"])){
                    if($_POST["asignatura"]==3) echo "selected";
                }
            ?> >Servidores 2º DAW</option>
            <option value="4" <?php
                if (isset($_POST["asignatura"])){
                    if($_POST["asignatura"]==4) echo "selected";
                }
            ?> >Cliente 2º DAW</option>
        </select><br><br><br>
        <input type="submit" name="enviar" value="Iniciar Sesión">
    </form>
</body>
</html>

<?php
    
    if (isset($_POST["enviar"])){

        //Mensajes de errores
        if (!isset($_POST["edad"])){
            echo "<strong> No has seleccionado si eres menor o mayor de edad.</strong><br>";
        }

        if (!isset($_POST["cargo"])){
            echo "<strong> No has seleccionado el cargo. </strong>";
        }
        if (!isset($_POST["nombre"])){
            echo "<strong> No has introducido un nombre. </strong>";
        }
        if (!isset($_POST["apellido"])){
            echo "<strong> No has introducido un apellido. </strong>";

        }
        

        //Compruebo que esten todos los datos
        if (isset($_POST["edad"])&&isset($_POST["cargo"])&&isset($_POST["nombre"])&&isset($_POST["apellido"])){

            if (!ctype_alpha($_POST["nombre"])){
                echo "<strong>El nombre está incorrecto.</strong>";
            }else if (!ctype_alpha($_POST["apellido"])){
                echo "<strong>El apellido está incorrecto.</strong>";
                //Nombre y apellido correctos
            }else{
                $_SESSION["nombre"]=$_POST["nombre"];
                $_SESSION["apellido"]=$_POST["apellido"];
                $_SESSION["asignatura"]=$_POST["asignatura"];

                    if ($_POST["edad"]=="menor"&&$_POST["cargo"]=="si"){

                        header("Location:delegado.php");
                        exit();
                    }else if ($_POST["edad"]=="menor"&&$_POST["cargo"]=="no"){
                        header("Location:estudiante.php");
                        exit();
                    }else if($_POST["edad"]=="mayor"&&$_POST["cargo"]=="si"){
                        header("Location:director.php");
                        exit();
                    }else{
                        header("Location:profesor.php");
                        exit();
                    }


            }
            
        }
        
    }
    
    
    
    
    ?>


