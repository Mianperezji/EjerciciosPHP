<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 8</title>
</head>
<body>
    
    <?php 
    //Aqui tengo todas las funciones
    require_once "dependencias.php";?>
    <h2></h2>
    <h1>Ejercicio 8</h1>
    <form action="ejercicio8.php" method="post">
        <input type="text" name="nombre" value="<?php
        //Si el nombre es correcto no lo borres
            if (isset($_POST["enviar"])){
                if (!$_POST["nombre"]==""&&ctype_alpha($_POST["nombre"])){
                    echo $_POST["nombre"];
                }
            }
        ?>">
        <label for="nombre">Introduce tu nombre</label><br>
        <input type="text" name="apellidos" value="<?php
        //No borra los apellidos si son  correctos
            if (isset($_POST["enviar"])){
                if (!$_POST["apellidos"]==""&&ctype_alpha($_POST["apellidos"])){
                    echo $_POST["apellidos"];
                }
            }
        ?>">
        <label for="apellidos">Introduce tus apellidos</label><br>
        <input type="text" name="edad" value="<?php
        //No borra la edad si es correcta
            if (isset($_POST["enviar"])){
                if ($_POST["edad"]>0&&$_POST["edad"]<110&&ctype_digit($_POST["edad"])){
                    echo $_POST["edad"];
                }
            }
        ?>">
        <label for="edad">Introduce tu edad</label><br>
        <input type="text" name="peso" value="<?php
            if (isset($_POST["enviar"])){
                if ($_POST["peso"]>10&&$_POST["peso"]<150&&ctype_digit($_POST["peso"])){
                    echo $_POST["peso"];
                }
            }
        ?>">
        <label for="peso">Introduce tu peso, tiene que ser mayor de 10 y menor de 150</label><br>
        <input type="text" name="sexo" value="<?php
        //Como hay muchos géneros no valido nada, que cada uno se defina como el quiera
            if(isset($_POST["enviar"])){
                echo $_POST["sexo"];
            }
        ?>">
        <label for="sexo">Introduce tu sexo</label><br>
    
        <select name="estadocivil" id="">
            <option value="soltero" <?php
            //De aqui para abajo guardo la opcion seleccionada
                if (isset($_POST["enviar"])){
                    if ( $_POST["estadocivil"]=="soltero"){
                        echo "selected";
                    }
                }
            ?>>Soltero</option>
            <option value="casado" <?php
                if (isset($_POST["enviar"])){
                    if ( $_POST["estadocivil"]=="casado"){
                        echo "selected";
                    }
                }
            ?>>Casado</option>
            <option value="viudo" <?php
                if (isset($_POST["enviar"])){
                    if  ($_POST["estadocivil"]=="viudo"){
                        echo "selected";
                    }
                }
            ?>>Viudo</option>
            <option value="divorciado" <?php
                if (isset($_POST["enviar"])){
                    if ( $_POST["estadocivil"]=="divorciado"){
                        echo "selected";
                    }
                }
            ?>>Divorciado</option>
            <option value="otro" <?php
                if (isset($_POST["enviar"])){
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
            if (isset($_POST["enviar"])&&!empty($_POST["aficiones"])){
                if (in_array("Cine",$_POST["aficiones"])){
                    echo "checked";
                }
            }
        ?>>Cine       
        <input type="checkbox" name="aficiones[]" value="Deporte" <?php
            if (isset($_POST["enviar"])&&!empty($_POST["aficiones"])){
                if (in_array("Deporte",$_POST["aficiones"])){
                    echo "checked";
                }
            }
        ?>>Deporte
        <input type="checkbox" name="aficiones[]" value="Literatura" <?php
            if (isset($_POST["enviar"])&&!empty($_POST["aficiones"])){
                if (in_array("Literatura",$_POST["aficiones"])){
                    echo "checked";
                }
            }
        ?>>Literatura
        <input type="checkbox" name="aficiones[]" value="Música" <?php
            if (isset($_POST["enviar"])&&!empty($_POST["aficiones"])){
                if (in_array("Música",$_POST["aficiones"])){
                    echo "checked";
                }
            }
        ?>>Música
        <input type="checkbox" name="aficiones[]" value="Cómics" <?php
            if (isset($_POST["enviar"])&&!empty($_POST["aficiones"])){
                if (in_array("Cómics",$_POST["aficiones"])){
                    echo "checked";
                }
            }
        ?>>Cómics
        <input type="checkbox" name="aficiones[]" value="Series"
        <?php
            if (isset($_POST["enviar"])&&!empty($_POST["aficiones"])){
                if (in_array("Series",$_POST["aficiones"])){
                    echo "checked";
                }
            }
        ?>>Series
        <input type="checkbox" name="aficiones[]" value="Videojuegos"
        <?php
            if (isset($_POST["enviar"])&&!empty($_POST["aficiones"])){
                if (in_array("VideoJuegos",$_POST["aficiones"])){
                    echo "checked";
                }
            }
        ?>>VideoJuegos
        <br>
        <input type="submit" name="enviar" value="Enviar">
        <input type="submit" name="borrar" value="Borrar">
    </form>
    <?php
        if (isset($_POST["enviar"])){
            $nombre=$_POST["nombre"];
            $apellidos=$_POST["apellidos"];
            $edad=$_POST["edad"];
            $peso=$_POST["peso"];
            $sexo=$_POST["sexo"];
            $estadocivil=$_POST["estadocivil"];
            
            
            //Si el checkbox esta marcado hazme un array.
            if (!empty($_POST["aficiones"])){
                $aficiones=$_POST["aficiones"];
                //cambio el array a string para pasarlo a la otra web
                $aficiones=implode(" ",$aficiones);
            }else{
                $aficiones="";
            }
            
            //Funcion que devuelve true si no hay errores
            if(validacion8($nombre,$apellidos,$edad,$peso,$sexo)){
                //Si todo va bien dirigeme a otra pagina
                echo "entra";
                header('Location:validacion.php?nombre='.$nombre.'&apellidos='.$apellidos.'&edad='.$edad.'&peso='.$peso.'&sexo='.$sexo.'&estadocivil='.$estadocivil.'&aficiones='.$aficiones);
                exit();

                
            }else{
                //Mensajes de error
                echo "<strong>";
                if ($nombre==""||!ctype_alpha($nombre)){
                    echo "El nombre esta incorrecto<BR>";
                }
                if ($apellidos=""||!ctype_alpha($apellidos)){
                    echo "El apellido esta incorrecto<BR>";
                }
                if (!ctype_digit($edad)||$edad<0||$edad>110){
                    echo "La edad esta incorrecta<BR>";
                }
                if (!ctype_digit($peso)||$peso<=10 ||$peso>=150){
                    echo "El peso esta incorrecto <BR>";
                }
                if (!ctype_alpha($sexo)){
                    echo "El sexo esta incorrecto";
                }

                echo "</strong>";
            }

        }
    
    
    
    ?>
    
</body>
</html>