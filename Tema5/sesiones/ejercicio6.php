<?php
//Miguel Ángel Pérez Jiménez
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 6</title>
</head>
<body>
    

    <h2>Miguel Ángel Pérez Jiménez</h2>
    <h1>Ejercicio 8</h1>
    <form action="ejercicio6.php<?php echo htmlspecialchars(SID); ?>" method="post">
        <input type="text" name="nombre" value="<?php
        //Si el nombre es correcto no lo borres
            if (isset($_POST["validar"])){
                if (!$_POST["nombre"]==""&&ctype_alpha($_POST["nombre"])){
                    echo $_POST["nombre"];
                }
            }
        ?>">
        <label for="nombre">Introduce tu nombre</label><br>
        <input type="text" name="apellidos" value="<?php
        //No borra los apellidos si son  correctos
            if (isset($_POST["validar"])){
                if (!$_POST["apellidos"]==""&&ctype_alpha($_POST["apellidos"])){
                    echo $_POST["apellidos"];
                }
            }
        ?>">
        <label for="apellidos">Introduce tus apellidos</label><br>
        <input type="text" name="edad" value="<?php
        //No borra la edad si es correcta
            if (isset($_POST["validar"])){
                if ($_POST["edad"]>0&&$_POST["edad"]<110&&ctype_digit($_POST["edad"])){
                    echo $_POST["edad"];
                }
            }
        ?>">
        <label for="edad">Introduce tu edad</label><br>
        <input type="text" name="peso" value="<?php
            if (isset($_POST["validar"])){
                if ($_POST["peso"]>10&&$_POST["peso"]<150&&ctype_digit($_POST["peso"])){
                    echo $_POST["peso"];
                }
            }
        ?>">
        <label for="peso">Introduce tu peso, tiene que ser mayor de 10 y menor de 150</label><br>
        <input type="text" name="sexo" value="<?php
        //Como hay muchos géneros no valido nada, que cada uno se defina como el quiera
            if(isset($_POST["validar"])){
                echo $_POST["sexo"];
            }
        ?>">
        <label for="sexo">Introduce tu sexo</label><br>
    
        <select name="estadocivil" id="">
            <option value="soltero" <?php
            //De aqui para abajo guardo la opcion seleccionada
                if (isset($_POST["validar"])){
                    if ( $_POST["estadocivil"]=="soltero"){
                        echo "selected";
                    }
                }
            ?>>Soltero</option>
            <option value="casado" <?php
                if (isset($_POST["validar"])){
                    if ( $_POST["estadocivil"]=="casado"){
                        echo "selected";
                    }
                }
            ?>>Casado</option>
            <option value="viudo" <?php
                if (isset($_POST["validar"])){
                    if  ($_POST["estadocivil"]=="viudo"){
                        echo "selected";
                    }
                }
            ?>>Viudo</option>
            <option value="divorciado" <?php
                if (isset($_POST["validar"])){
                    if ( $_POST["estadocivil"]=="divorciado"){
                        echo "selected";
                    }
                }
            ?>>Divorciado</option>
            <option value="otro" <?php
                if (isset($_POST["validar"])){
                    if ( $_POST["estadocivil"]=="otro"){
                        echo "selected";
                    }
                }
            ?>>Otro</option>
        </select>
        <label for="estadocivil">Introduce tu estado civil</label><br>
        <label for="aficiones">Selecciona tus aficiones</label><br>
        <input type="checkbox" name="aficiones[]" value="Cine" <?php
        //De aqui para adelante si han seleccionado una opcion la dejo seleccionada
            if (isset($_POST["validar"])&&!empty($_POST["aficiones"])){
                if (in_array("Cine",$_POST["aficiones"])){
                    echo "checked";
                }
            }
        ?>>Cine       
        <input type="checkbox" name="aficiones[]" value="Deporte" <?php
            if (isset($_POST["validar"])&&!empty($_POST["aficiones"])){
                if (in_array("Deporte",$_POST["aficiones"])){
                    echo "checked";
                }
            }
        ?>>Deporte
        <input type="checkbox" name="aficiones[]" value="Literatura" <?php
            if (isset($_POST["validar"])&&!empty($_POST["aficiones"])){
                if (in_array("Literatura",$_POST["aficiones"])){
                    echo "checked";
                }
            }
        ?>>Literatura
        <input type="checkbox" name="aficiones[]" value="Música" <?php
            if (isset($_POST["validar"])&&!empty($_POST["aficiones"])){
                if (in_array("Música",$_POST["aficiones"])){
                    echo "checked";
                }
            }
        ?>>Música
        <input type="checkbox" name="aficiones[]" value="Cómics" <?php
            if (isset($_POST["validar"])&&!empty($_POST["aficiones"])){
                if (in_array("Cómics",$_POST["aficiones"])){
                    echo "checked";
                }
            }
        ?>>Cómics
        <input type="checkbox" name="aficiones[]" value="Series"
        <?php
            if (isset($_POST["validar"])&&!empty($_POST["aficiones"])){
                if (in_array("Series",$_POST["aficiones"])){
                    echo "checked";
                }
            }
        ?>>Series
        <input type="checkbox" name="aficiones[]" value="Videojuegos"
        <?php
            if (isset($_POST["validar"])&&!empty($_POST["aficiones"])){
                if (in_array("VideoJuegos",$_POST["aficiones"])){
                    echo "checked";
                }
            }
        ?>>VideoJuegos
        <br><br>    
        <input type="submit" name="validar" value="Validar"><br><br><br>
        <input type="submit" name="enviar" value="Enviar">
        <input type="submit" name="borrar" value="Borrar">
        
    </form>
    <?php

        if (isset($_POST["validar"])){
            $_SESSION["nombre"]=$_POST["nombre"];
            $_SESSION["apellidos"]=$_POST["apellidos"];
            $_SESSION["edad"]=$_POST["edad"];
            $_SESSION["peso"]=$_POST["peso"];
            $_SESSION["sexo"]=$_POST["sexo"];
            $_SESSION["estado"]=$_POST["estadocivil"];

            //Si has validado y todo esta ok creamos un booleano para que no le podamos dar a enviar sin validar todo
            if(validacion8($_SESSION["nombre"],$_SESSION["apellidos"],$_SESSION["edad"],$_SESSION["peso"],$_SESSION["sexo"])){
                $_SESSION["validado"]=true;
                echo "<p style=color:blue;> El formulario está correctamente validado y preparado para su envio <p>";
            }
            else{
                $_SESSION["validado"]=false;
            }
            //Imprimeme los fallos
            echo "<strong>";
                if ($_SESSION["nombre"]==""||!ctype_alpha($_SESSION["nombre"])){
                    echo "<p style=color:red;>El nombre esta incorrecto</p>";
                }
                if ($_SESSION["apellidos"]==""||!ctype_alpha($_SESSION["apellidos"])){
                    echo "<p style=color:red;>El apellido esta incorrecto</p>";
                }
                if (!ctype_digit($_SESSION["edad"])||$_SESSION["edad"]<0||$_SESSION["edad"]>110){
                    echo "<p style=color:red;>La edad esta incorrecta</p>";
                }
                if (!ctype_digit($_SESSION["peso"])||$_SESSION["peso"]<=10 ||$_SESSION["peso"]>=150){
                    echo "<p style=color:red;>El peso esta incorrecto</p>";
                }
                if (!ctype_alpha($_SESSION["sexo"])){
                    echo "<p style=color:red;>El sexo esta incorrecto</p>";
                }

                echo "</strong>";
            
            
            //Si el checkbox esta marcado hazme un array.
            if (!empty($_POST["aficiones"])){
                $aficiones=$_POST["aficiones"];
                //cambio el array a string para pasarlo a la otra web
                $aficiones=implode(" ",$aficiones);
                $_SESSION["aficiones"]=$aficiones;
            }else{
                $aficiones="";
            }
            
            

        }
        
        if (isset($_POST["enviar"])){
            if(validacion8($_SESSION["nombre"],$_SESSION["apellidos"],$_SESSION["edad"],$_SESSION["peso"],$_SESSION["sexo"])&&$_SESSION["validado"]){
                //Si todo va bien dirigeme a otra pagina
                echo "entra";
                header('Location:validacion.php');
                //Refresco el booleano para que si el valor es verdadero, al volver a entrar no se guarde y se le pueda dar al boton enviar con los campos vacios
                $_SESSION["validado"]=false;
                exit();
    
                
            }else{
                echo "<strong><p style=color:red>No has validado el formulario</p><strong>";
            }
        }
    
    
    
    ?>
    
</body>
</html>

<?php
//Funcion que valida los datos
function validacion8($nombre, $apellidos, $edad, $peso, $sexo){
    //Compruebo que la edad y el peso sean digitos, si lo son cambio su valor a int
    if (!ctype_digit($edad)||!ctype_digit($peso)){
        return false;
    }else{
        $edad = intval($edad);
        $peso = intval($peso);
    }
    //Compruebo que no hay campos vacios
    if ($nombre==""||$apellidos==""||$edad=""||$peso==""||$sexo==""){
       
        return false;
        //Compruebo que el nombre apellido y sexo son alfabeticos y que el peso y edad entre en el rango.
    }else if (!ctype_alpha($nombre)||!ctype_alpha($apellidos)||$edad<0||$edad>110||$peso<=10||$peso>=150||!ctype_alpha($sexo)){
        return false;
    }else{
        return true;
    }
}?>
