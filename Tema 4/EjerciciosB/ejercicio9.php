<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    
    <title>Ejercicio 9</title>
</head>
<body>
    <?php 
        //Aqui tengo todas las funciones
        require_once "dependencias.php";
    ?>
    <h1>Miguel Ángel Pérez Jiménez</h1>
    <h2>Ejercicio 9</h2><br>

    <form action="ejercicio9.php" method="post" enctype="multipart/form-data">
        <input type="text" name="nombre" id="" value="<?php
        //Mantiene el valor si es correcto
            if (isset($_POST["enviar"])&&validaNombre($_POST["nombre"])){
                echo $_POST["nombre"];
            }
        ?>">
        <label for="nombre">Nombre completo</label><br><br>
        <input type="password" name="contrasenya" value ="<?php
        //Mantiene el valor si es correcto
            if (isset($_POST["enviar"])&&validaContrasenya($_POST["contrasenya"])){
                echo $_POST["contrasenya"];
            }
        
        
        ?>">
        <label for="contrasenya">Contraseña</label><br><br>
        <label for="estudios">Nivel de estudios</label>
        <select name="estudios" id="">
            <option value="sinestudios"<?php
            //Mantiene seleccionada la opcion que elijas
                if (isset($_POST["estudios"])&&$_POST["estudios"]=="sinestudios"){
                    echo "selected";
                }
            ?> >Sin Estudios</option>
            <option value="eso" <?php
                if (isset($_POST["estudios"])&&$_POST["estudios"]=="eso"){
                    echo "selected";
                }
            ?>>Educacion Secundaria Obligatoria</option>
            <option value="bachiller" <?php
                if (isset($_POST["estudios"])&&$_POST["estudios"]=="bachiller"){
                    echo "selected";
                }
            ?>>Bachillerato</option>
            <option value="fp" <?php
                if (isset($_POST["estudios"])&&$_POST["estudios"]=="fp"){
                    echo "selected";
                }
            ?>>Formación Profesional</option>
            <option value="universidad" <?php
                if (isset($_POST["estudios"])&&$_POST["estudios"]=="universidad"){
                    echo "selected";
                }
            ?>>Estudios Universitarios</option>
        </select><br><br>
        <label for="nacionalidad">Nacionalidad</label>
        <input type="radio" name="nacionalidad" value="espanyola" <?php
        //Mantiene el valor escogido
        if (isset($_POST["nacionalidad"])&&$_POST["nacionalidad"]=="espanyola") echo "checked";
        ?>>
        <label for="">Española</label>
        <input type="radio" name="nacionalidad" value="otra" <?php
        //Mantiene el valor escogido
        if (isset($_POST["nacionalidad"])&&$_POST["nacionalidad"]=="otra") echo "checked";
        ?>>
        <label for="">Otra</label><br><br>
        <p>Idiomas</p>
        <input type="checkbox" name="idiomas[]" value="espanyol" <?php
        //De aqui para adelante si han seleccionado una opcion la dejo seleccionada
            if (isset($_POST["enviar"])&&!empty($_POST["idiomas"])){
                if (in_array("espanyol",$_POST["idiomas"])){
                    echo "checked";
                }
            }
        ?>>
        <label for="">Español</label>
        <input type="checkbox" name="idiomas[]" value="ingles" <?php
        //De aqui para adelante si han seleccionado una opcion la dejo seleccionada
            if (isset($_POST["enviar"])&&!empty($_POST["idiomas"])){
                if (in_array("ingles",$_POST["idiomas"])){
                    echo "checked";
                }
            }
        ?>>
        <label for="">Inglés</label>
        <input type="checkbox" name="idiomas[]" value="aleman" <?php
        //De aqui para adelante si han seleccionado una opcion la dejo seleccionada
            if (isset($_POST["enviar"])&&!empty($_POST["idiomas"])){
                if (in_array("aleman",$_POST["idiomas"])){
                    echo "checked";
                }
            }
        ?>>
        <label for="">Aleman</label>
        <input type="checkbox" name="idiomas[]" value="italiano" <?php
        //De aqui para adelante si han seleccionado una opcion la dejo seleccionada
            if (isset($_POST["enviar"])&&!empty($_POST["idiomas"])){
                if (in_array("italiano",$_POST["idiomas"])){
                    echo "checked";
                }
            }
        ?>>
        <label for="">Italiano</label>
        <input type="checkbox" name="idiomas[]" value="frances" <?php
        //De aqui para adelante si han seleccionado una opcion la dejo seleccionada
            if (isset($_POST["enviar"])&&!empty($_POST["idiomas"])){
                if (in_array("frances",$_POST["idiomas"])){
                    echo "checked";
                }
            }
        ?>>
        <label for="">Francés</label><br><br>
        <input type="text" name="email" value="<?php
            if (isset($_POST["enviar"])&&filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
                echo $_POST["email"];
            }
        ?>">
        <label for="">Email</label><br><br>
        <label for="archivo">Foto adjunta</label>
        <input type="file" name="foto" id=""><br><br>
        <input type="submit" name="enviar" value="Enviar">

    </form>
    <?php
        if (isset($_POST["enviar"])){

            //Imprime mensaje de error si un campo falla
            if (!validaNombre($_POST["nombre"])){
                echo "<strong>El nombre es incorrecto, no puede contener numeros ni estar vacio o tener menos de dos letras </strong> <br>";
            }

            if (!validaContrasenya($_POST["contrasenya"])){
                echo "<strong> La contraseña no puede estar vacia ni tener menos de 6 caracteres </strong> <br>";    
            }
            //Si el array del post esta vacio dale a la variable el valor 0 para usarla mas tarde
            if (empty($_POST["nacionalidad"])){
                $nacionalidad=0;
            }else{
                $nacionalidad=$_POST["nacionalidad"];
            }
            //Valida la nacionalidad, si $nacionalidad vale 0 dara falso y reproducira el mensaje
            if (!validaNacionalidad($nacionalidad)){
                echo "<strong>Selecciona alguna nacionalidad</strong> <br>";
            }

            if (empty($_POST["idiomas"])){
                echo "<strong>Selecciona al menos un idioma</strong><br>";
            }

            if ($_POST["email"]==""){
                echo "<strong>Tienes que rellenar el campo del email</strong><br>";
            }else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){ 
                echo "<strong>Has introducido un email no valido</strong><br>";
            }


            if (isset($_POST["enviar"])){
                $nombre = $_FILES["foto"]["name"];
                $size = $_FILES["foto"]["size"];
                $tempname = $_FILES["foto"]["tmp_name"];
                $error = $_FILES["foto"]["error"];
                $tiposPermitidos= array("jpg", "jpeg","gif","png");
                //Variable que tiene el valor de la extension de la imagen
                $tipo = $_FILES["foto"]["type"];
                $tipo=explode("/", $tipo);
                $tipo=end($tipo);
                
                //Valida la foto, si no se sube nada no hace nada
                if (!is_uploaded_file($tempname)){

                }else if ($size>51200){
                    echo "<strong>El archivo es demasiado grande</strong>";
                }else if (!in_array($tipo,$tiposPermitidos)){
                    echo $tipo;
                    echo "<strong>El tipo de archivo no está permitido</strong>";
                }else if(is_uploaded_file($tempname)){
                    $directorio = "imagenes/";
                    if (is_dir($directorio)){
                        $id=time();
                        $nombreFichero =$id."-".$nombre;
                        $nombreFinal= $directorio.$nombreFichero;
                        move_uploaded_file($tempname,$nombreFinal);
                        echo "Se ha subido el fichero con el nombre $nombreFichero";
                    }else{
                        echo "Error de directorio";
                    }
                }else{
                    echo "Error al subir el fichero";
                }
            }
        }

        if(isset($_POST["enviar"])&& validaNombre($_POST["nombre"])&&validaContrasenya($_POST["contrasenya"])&&validaNacionalidad($_POST["nacionalidad"])
            && !empty($_POST["idiomas"])&& filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
                header("location:validacion2.php");
        }
    
    
    ?>
    
</body>
</html>