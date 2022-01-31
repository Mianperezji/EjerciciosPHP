<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parte 2 Creacion y Validacion de Formularios</title>
</head>
<body>
    <?php
        require_once "dependencias.php";
    ?>
    <h1>Miguel Ángel Pérez Jiménez</h1>
    <h2>Unidad 4 Ejercicios B</h2>
    <h3>Ejercicio 1</h3>
    <br>
    <form action="index.php" method="post">
        <label for="">Introduce hasta que numero impar quieres calcular</label>
        <br>
        <input type="text" name="2_1" value="<?php
            if (isset($_POST["enviar2_1"])){

                if (ctype_digit($_POST["2_1"])&&$_POST["2_1"]>1){
                   
                    $_SESSION["ejer1"]=$_POST["2_1"];
                    $variable1 = $_POST["2_1"];
                    echo $variable1;
                }
            }
        ?>">
        <select name="operacion2_1" id="">
            <option value="suma" <?php
                if (isset($_POST["enviar2_1"])&&$_POST["operacion2_1"]=="suma") echo "selected";
            ?>>Suma</option>
            <option value="producto" <?php
                if (isset($_POST["enviar2_1"])&&$_POST["operacion2_1"]=="producto") echo "selected";
            ?>>Producto</option>
        </select>
        <input type="submit" name="enviar2_1">
    </form>
    <?php
        if (isset($_POST["enviar2_1"])){
            $numero = $_POST["2_1"];
            $opcion = $_POST["operacion2_1"];
            if (ctype_digit($numero)){
                ejercicio1($numero,$opcion);
            }else{
                echo "No has seleccionado un numero";
            }
        }
    ?>
    <h3>Ejercicio 2</h3>
    <form action="index.php" method="post">
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
    <?php
        if (isset($_POST["enviar2_2"])){
            $nombre=$_POST["2_2"];
            $accion = $_POST["2_2accion"];
            if (strlen($nombre)>2){
                ejercicio2($nombre,$accion);
            }else{
                echo "<strong>No existe un nombre tan corto</strong>";
            }
        }
    ?>
    <h3>Ejercicio 3</h3>
    <form action="index.php" method="post">
        <label for="">Introduce numeros separados por ","</label>
        <br>
        <input type="text" name="2_3" value="<?php
            if (isset($_POST["enviar2_3"])){
                echo $_POST["2_3"];
            }
        ?>">
        <select name="opcion2_3">
            <option value="media" <?php
                if(isset($_POST["enviar2_3"])&&$_POST["opcion2_3"]=="media") echo "selected";
            ?>>Media</option>
            <option value="moda" <?php
                if(isset($_POST["enviar2_3"])&&$_POST["opcion2_3"]=="moda") echo "selected";
            ?>>Moda</option>
            <option value="mediana" <?php
                if(isset($_POST["enviar2_3"])&&$_POST["opcion2_3"]=="mediana") echo "selected";
            ?>>Mediana</option>
        </select>
        <input type="submit" name="enviar2_3">;
    </form>

    <?php
        if (isset($_POST["enviar2_3"])){
            $array=$_POST["2_3"];
            $opcion=$_POST["opcion2_3"];
            ejercicio3($array,$opcion);

        }
    
    ?>
    <h3>Ejercicio 4</h3>
    <p>Seleciona un curso y un modulo para saber el horario</p>
    <form action="index.php" method="post">
        <input type="radio" name="2_4" id="Primero" value="primero" <?php
            if (isset($_POST["enviar2_4"])&&$_POST["2_4"]=="primero") echo "checked";
        ?>>
        <label for="primero">Primero de DAW</label>
        <select name="opcionprimero" id="">
            <option value="BBDD" <?php
                if (isset($_POST["opcionprimero"])&&$_POST["opcionprimero"]=="BBDD") echo "selected";
            ?>>Base de Datos</option>
            <option value="Programacion" <?php
                if (isset($_POST["opcionprimero"])&&$_POST["opcionprimero"]=="Programacion") echo "selected";
            ?>>Programación</option>
            <option value="LMarcas" <?php
                if (isset($_POST["opcionprimero"])&&$_POST["opcionprimero"]=="LMarcas") echo "selected";
            ?>>Lenguaje de Marcas</option>
            <option value="Sistemas" <?php
                if (isset($_POST["opcionprimero"])&&$_POST["opcionprimero"]=="Sistemas") echo "selected";
            ?>>Sistemas microinformaticos</option>
            <option value="Ingles" <?php
                if (isset($_POST["opcionprimero"])&&$_POST["opcionprimero"]=="Ingles") echo "selected";
            ?>>Inglés</option>
        </select><br>
        <input type="radio" name="2_4" id="Segundo" value="segundo" <?php
            if (isset($_POST["enviar2_4"])&&$_POST["2_4"]=="segundo") echo "checked";
        ?>>
        <label for="Segundo">Segundo de DAW</label>
        <select name="opcionsegundo" id="">
            <option value="Disenyo" <?php
                if (isset($_POST["opcionsegundo"])&&$_POST["opcionsegundo"]=="Disenyo") echo "selected";
            ?>>Diseño de Interfaces</option>
            <option value="Server" <?php
                if (isset($_POST["opcionsegundo"])&&$_POST["opcionsegundo"]=="Server") echo "selected";
            ?>>Programacion en Servidor</option>
            <option value="Client" <?php
                if (isset($_POST["opcionsegundo"])&&$_POST["opcionsegundo"]=="Client") echo "selected";
            ?>>Programacion en Cliente</option>
            <option value="Despliegue" <?php
                if (isset($_POST["opcionsegundo"])&&$_POST["opcionsegundo"]=="Despliegue") echo "selected";
            ?>>Despliegue de Aplicaciones</option>
        </select>
        <br>
        <input type="submit" name="enviar2_4" value="Enviar"><br>
    </form>
    <?php
        if (isset($_POST["enviar2_4"])&&(isset($_POST["2_4"]))){
            $curso = $_POST["2_4"];
            
            if($curso=="primero"){
                //Enviame la asignatura seleccionada de primero
                ejercicio4($_POST["opcionprimero"]);
            }else{
                //Lo mismo pero con segundo
                ejercicio4($_POST["opcionsegundo"]);
            }

        }else{
            echo "<strong>Selecciona al menos un curso</strong>";
        }
    ?>
    <h3>Ejercicio 5</h3>
    <p>Introduce una hora</p>
    <p><strong>Ejemplo 22:15</strong></p>
    <form action="index.php" method="post">
        <label for="2_5">Introduce la Hora</label>
        <input type="text" name="2_5" value="<?php
            if (isset($_POST["enviar2_5"])&&strlen($_POST["2_5"])>5) echo $_POST["2_5"];
        
        ?>">
        <br>
        <input type="submit" value="Enviar" name="enviar2_5">
    </form>
    <?php
        if (isset($_POST["enviar2_5"])){
            if (strlen($_POST["2_5"])==5){
                $string = $_POST["2_5"];
                ejercicio5($string);


            }else{
                echo "Has introducido una fecha erronea";
            }

        }
    
    ?>
    <h3>Ejercicio 6</h3>
    <p>Selecciona una Zona Horaria</p>
    <form action="index.php" method="post">
        <select name="zonahoraria" id="">
            <option value="0" <?php
                if(isset($_POST["enviar2_6"])&&$_POST["zonahoraria"]=="0") echo "selected";
            ?>>GTM 0</option>
            <option value="1" <?php
                if(isset($_POST["enviar2_6"])&&$_POST["zonahoraria"]=="1") echo "selected";
            ?>>GTM 1</option>
            <option value="2" <?php
                if(isset($_POST["enviar2_6"])&&$_POST["zonahoraria"]=="2") echo "selected";
            ?>>GTM 2</option>
            <option value="3" <?php
                if(isset($_POST["enviar2_6"])&&$_POST["zonahoraria"]=="3") echo "selected";
            ?>>GTM 3</option>
            <option value="4" <?php
                if(isset($_POST["enviar2_6"])&&$_POST["zonahoraria"]=="4") echo "selected";
            ?>>GTM 4</option>
            <option value="5" <?php
                if(isset($_POST["enviar2_6"])&&$_POST["zonahoraria"]=="5") echo "selected";
            ?>>GTM 5</option>
            <option value="6" <?php
                if(isset($_POST["enviar2_6"])&&$_POST["zonahoraria"]=="6") echo "selected";
            ?>>GTM 6</option>
            <option value="7" <?php
                if(isset($_POST["enviar2_6"])&&$_POST["zonahoraria"]=="7") echo "selected";
            ?>>GTM 7</option>
            <option value="8" <?php
                if(isset($_POST["enviar2_6"])&&$_POST["zonahoraria"]=="8") echo "selected";
            ?>>GTM 8</option>
            <option value="9" <?php
                if(isset($_POST["enviar2_6"])&&$_POST["zonahoraria"]=="9") echo "selected";
            ?>>GTM 9</option>
            <option value="10" <?php
                if(isset($_POST["enviar2_6"])&&$_POST["zonahoraria"]=="10") echo "selected";
            ?>>GTM -3</option>
        </select>
        <input type="submit" value="Enviar" name="enviar2_6">
    </form>
    <?php
        if(isset($_POST["enviar2_6"])){
            ejercicio6($_POST["zonahoraria"]);



        }
    ?>
    <h3>Ejercicio 7</h3>
    <p>¿Quieres recibir información en tu correo electronico?</p>

    <form action="index.php" method="post">
        <label for="2_7">Introduce tu email</label>
        <input type="text" name="2_7" value="<?php 
        //Si le das al boton de enviar y el correo es valido, guardame el valor que tenga el input
        //Si le das a borrar dejame el campo vacio
        if (isset($_POST["enviar2_7"])&&filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo $_POST["2_7"];
        }else if (isset($_POST["borrar2_7"])){

        }
         ?>"><br>
        <input type="checkbox" name="publi[]" value="publi" id="">
        <label for="publi">Quiero recibir publicidad en el correo</label><br>
        <input type="submit" name="enviar2_7" value="Enviar">
        <input type="submit" name="borrar2_7"value="Borrar">
    </form>
    <?php
        if (isset($_POST["enviar2_7"])){
            $email = $_POST["2_7"];
            //Validame el email y muestra mensajes en consecuencia
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "<strong>Has introducido un email invalido</strong>";
            }else if (!empty($_POST["publi"])){
                echo "Gracias, te mantendremos al dia con nuestras ofertas";
            }else{
                echo "No recibirás publicidad";
            }
        }
    
    ?>
    <h4>Miguel Ángel Pérez Jiménez</h4>


    
</body>
</html>