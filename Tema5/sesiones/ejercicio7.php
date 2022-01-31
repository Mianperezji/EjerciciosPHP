<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Ejercicio 7 Miguel Ángel Pérez Jiménez</title>
</head>
<body>
    <h2>Ejercicio 7</h2>
    <h3>Miguel Ángel Pérez Jiménez</h3>
    <?php
        //Cuando este todo validado valdra true;

        session_start()
        
    ?>

<form action="ejercicio7.php" method="post">
    <input type="text" name="usuario" value="<?php
    //Rellena el usuario
        if (isset($_POST["validar"])&&userOK($_POST["usuario"])){
            echo $_POST["usuario"];
        }
    
    ?>">Usuario <br><br>
    <input type="password" name="password" value="<?php
    //Rellena el password
        if (isset($_POST["validar"])&&passwordOK($_POST["password"])){
            echo $_POST["password"];
        }
    
    ?>">Contrasenya <br><br>
    <input type="text" name="nombre" value="<?php
    //Rellena la nombre
        if (isset($_POST["validar"])&&nombreOK($_POST["nombre"])){
            echo $_POST["nombre"];
        }
    
    ?>">Nombre <br><br>
    <input type="text" name="email" value ="<?php
    //Rellena el email
        if (isset($_POST["validar"])&&filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
            echo $_POST["email"];
        }
    
    
    ?>">Email <br><br>
    <input type="text" name="fijo" value="<?php
        //Rellena el télefono
        if (isset($_POST["validar"])&&tlfOK($_POST["fijo"])){
            echo $_POST["fijo"];
        }
    
    ?>">Tel.Fijo <br><br>
    <input type="text" name="movil" value="<?php
        //Rellena el móvul
        if (isset($_POST["validar"])&&tlfOK($_POST["movil"])){
            echo $_POST["fijo"];
        }
    
    ?>">Tel.Movil <br><br>
    <input type="text" name="direccion" value="<?php
        if (isset($_POST["validar"])&&direccionOK($_POST["direccion"])){
            echo $_POST["direccion"];
        }
    ?>"> Dirección <br><br>
    <input type="text" name="cp" value="<?php
        if (isset($_POST["validar"])&&cpOK($_POST["cp"])){
            echo $_POST["cp"];
        }
    ?>"> Código Postal <br><br> Tipo de usuario
    <select name="tipouser">
        <option value="nuevo" <?php
            if (isset($_POST["validar"])){
                if ($_POST["tipouser"]=="nuevo"){
                    echo "selected";
                }
            }
        ?>>Nuevo</option>
        <option value="registrado" <?php
            if (isset($_POST["validar"])){
                if ($_POST["tipouser"]=="registrado"){
                    echo "selected";
                }
            }
        ?>>Ya Registrado</option>
    </select>  <br> <br>
    <input type="checkbox" name="LOGPD[]" value="logpd" <?php
        //De aqui para adelante si han seleccionado una opcion la dejo seleccionada
            if (isset($_POST["validar"])&&!empty($_POST["LOGPD"])){
                if (in_array("logpd",$_POST["LOGPD"])){
                    echo "checked";
                }
            }
        ?> >Acepto la Ley Oficial de protección de datos. <br> <br> <br> Tipo de Inmueble
    <input type="checkbox" name="alojamiento[]" value="chalet" <?php
        //De aqui para adelante si han seleccionado una opcion la dejo seleccionada
            if (isset($_POST["validar"])&&!empty($_POST["alojamiento"])){
                if (in_array("chalet",$_POST["alojamiento"])){
                    echo "checked";
                }
            }
        ?>> Chalet
    <input type="checkbox" name="alojamiento[]" value="piso" <?php
        //De aqui para adelante si han seleccionado una opcion la dejo seleccionada
            if (isset($_POST["validar"])&&!empty($_POST["alojamiento"])){
                if (in_array("piso",$_POST["alojamiento"])){
                    echo "checked";
                }
            }
        ?>> Piso
    <input type="checkbox" name="alojamiento[]" value="apartamento" <?php
        //De aqui para adelante si han seleccionado una opcion la dejo seleccionada
            if (isset($_POST["validar"])&&!empty($_POST["alojamiento"])){
                if (in_array("apartamento",$_POST["alojamiento"])){
                    echo "checked";
                }
            }
        ?>>Apartamento
    <input type="checkbox" name="alojamiento[]" value="cabanya" <?php
        //De aqui para adelante si han seleccionado una opcion la dejo seleccionada
            if (isset($_POST["validar"])&&!empty($_POST["alojamiento"])){
                if (in_array("cabanya",$_POST["alojamiento"])){
                    echo "checked";
                }
            }
        ?>> Cabaña
    <input type="checkbox" name="alojamiento[]" value="rural" <?php
        //De aqui para adelante si han seleccionado una opcion la dejo seleccionada
            if (isset($_POST["validar"])&&!empty($_POST["alojamiento"])){
                if (in_array("rural",$_POST["alojamiento"])){
                    echo "checked";
                }
            }
        ?>>Casa Rural <br> <br> <br> Servicios Asociados
        

    <input type="checkbox" name="servicios[]" value="comercial" <?php
        //De aqui para adelante si han seleccionado una opcion la dejo seleccionada
            if (isset($_POST["validar"])&&!empty($_POST["servicios"])){
                if (in_array("comercial",$_POST["servicios"])){
                    echo "checked";
                }
            }
        ?>> Zona Comercial 
    <input type="checkbox" name="servicios[]" value="piscina" <?php
        //De aqui para adelante si han seleccionado una opcion la dejo seleccionada
            if (isset($_POST["validar"])&&!empty($_POST["servicios"])){
                if (in_array("piscina",$_POST["servicios"])){
                    echo "checked";
                }
            }
        ?>>  Piscina
    <input type="checkbox" name="servicios[]" value="parking" <?php
        //De aqui para adelante si han seleccionado una opcion la dejo seleccionada
            if (isset($_POST["validar"])&&!empty($_POST["servicios"])){
                if (in_array("parking",$_POST["servicios"])){
                    echo "checked";
                }
            }
        ?>>  Parking
    <input type="checkbox" name="servicios[]" value="parque" <?php
        //De aqui para adelante si han seleccionado una opcion la dejo seleccionada
            if (isset($_POST["validar"])&&!empty($_POST["servicios"])){
                if (in_array("parque",$_POST["servicios"])){
                    echo "checked";
                }
            }
        ?>>   Parque Infantil
    <input type="checkbox" name="servicios[]"value ="publico" <?php
        //De aqui para adelante si han seleccionado una opcion la dejo seleccionada
            if (isset($_POST["validar"])&&!empty($_POST["servicios"])){
                if (in_array("publico",$_POST["servicios"])){
                    echo "checked";
                }
            }
        ?>> Transporte Publico
    <input type="checkbox" name="servicios[]"value ="amueblado"<?php
        //De aqui para adelante si han seleccionado una opcion la dejo seleccionada
            if (isset($_POST["validar"])&&!empty($_POST["servicios"])){
                if (in_array("amueblado",$_POST["servicios"])){
                    echo "checked";
                }
            }
        ?> > Amueblado <br> <br> <br>

    
    Duración de Alquiler:
    <select name="tiempo">
        <option value="dias" <?php
            if (isset($_POST["validar"])){
                if ($_POST["tiempo"]=="dias"){
                    echo "selected";
                }
            }
        ?>>Dias</option>
        <option value="semanas"<?php
            if (isset($_POST["validar"])){
                if ($_POST["tiempo"]=="semanas"){
                    echo "selected";
                }
            }
        ?>>Semanas</option>
        <option value="meses" <?php
            if (isset($_POST["validar"])){
                if ($_POST["tiempo"]=="meses"){
                    echo "selected";
                }
            }
        ?>>Meses</option>
    </select>
    <br><br>
    <input type="submit" value="validar" name="validar">
    <input type="submit" value="borrar" name="borrar"><br><br><br>
    <input type="submit" value="enviar" name="enviar">



</form>

<?php
    
    if (isset($_POST["validar"])){

        validaUser($_POST["usuario"]);
        validaPassword($_POST["password"]);
        

        validaNombre($_POST["nombre"]);
        validaEmail($_POST["email"]);
        validaFijo($_POST["fijo"]);
        validaMovil($_POST["movil"]);
        validaDireccion($_POST["direccion"]);
        validaCP($_POST["cp"]);

        if (empty($_POST["alojamiento"])){
            echo "<p style=color:red;> Selecciona al menos un tipo de alojamiento</p>";
        }
        if (empty($_POST["servicios"])){
            echo "<p style=color:red;> Selecciona algun tipo de servicio</p>";

        }


        if (nombreOK($_POST["nombre"])&&userOK($_POST["usuario"])&&passwordOK($_POST["password"])&&tlfOK($_POST["fijo"])&&tlfOK($_POST["movil"])
            && direccionOK($_POST["direccion"])&&cpOK($_POST["cp"])&&!empty($_POST["alojamiento"])&&!empty($_POST["servicios"])){
            $_SESSION["validado"]=true;
            $_SESSION["nombre"]=$_POST["nombre"];
            $_SESSION["usuario"]=$_POST["usuario"];
            $_SESSION["password"]=$_POST["password"];
            $_SESSION["fijo"]=$_POST["fijo"];
            $_SESSION["movil"]=$_POST["movil"];
            $_SESSION["direccion"]=$_POST["direccion"];
            $_SESSION["cp"]=$_POST["cp"];
            $_SESSION["alojamiento"]=$_POST["alojamiento"];
            $_SESSION["servicios"]=$_POST["servicios"];

            
            echo "<p style=color:blue;> El formulario está listo para enviar</p>";
        }else{
            $_SESSION["validado"]=false;
        }


    }

    if(isset($_POST["enviar"])){
        if ($_SESSION["validado"]){

            header('Location:validacion7.php');
            $_SESSION["validado"]=false;
            exit();
        }
    }



    function validaNombre($nombre){

        if ($nombre==""){
            echo "<p style=color:red;>El nombre no puede estar vacio</p>";
        }else if (!ctype_alpha($nombre)){
            echo "<p style=color:red;>El nombre no puede tener cáracteres especiales ni numeros</p>";
    
        }
    }
    //Devuelve True si el Nombre es correcto
    function nombreOK($nombre){
        return ctype_alpha($nombre)&&$nombre!="";
    }
    
    //Entiendo que un nombre de usuario puede contener numeros y simbolos
    function validaUser($usuario){
    
        if ($usuario==""){
            echo "<p style=color:red;>El usuario no puede estar vacio</p>";
        }else if (strlen($usuario)<2){
            echo "<p style=color:red;>El usuario tiene que tener al menos 3 carácters</p>";
        }
        
    
    }
    //Devuelve True si el nombre es correcto
    function userOK($user){
        return !$user="" &&strlen($user)>2;
    }
    
    
    
    //Muestra errores de Password
    function validaPassword($password){
    
        if ($password == ""){
            echo "<p style=color:red;>La contraseña no puede estar vacia</p>";
        }else if (strlen($password)<6){
            echo "<p style=color:red;>La contraseña no puede tener menos de 6 cáracteres</p>";
        }else if (ctype_alpha($password)||ctype_digit($password)){
            echo "<p style=color:red;>La contraseña tiene que contener números y letras</p>";
    
        }
    }
    //Devuelve True si el password es correcto
    function passwordOK($password){
        return $password!=""&&strlen($password)>5&&!ctype_alpha($password)&&!ctype_digit($password);
    }
    //Muestra errores del email
    function validaEmail($email){
        if ($email==""){
            echo "<p style=color:red;>El email no puede estar vacio</p>";
    
        }else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "<p style=color:red;>El formato de el email es incorrecto</p>";
        }
    }
    
    //Valida el fijo
    
    function validaFijo($tlf){
    
        if ($tlf==""){
            echo "<p style=color:red;>El teléfono fijo no puede estar sin rellenar</p>";
        }else if (strlen($tlf)!=9){
            echo "<p style=color:red;>El teléfono fijo tiene que tener 9 dígitos</p>";
        }else if (!ctype_digit($tlf)){
            echo "<p style=color:red;>El teléfono solo puede contener numeros</p>";
        }
    }
    
    function tlfOK($tlf){
        return $tlf!=""&&strlen($tlf)==9&&ctype_digit($tlf);
    }
    
    
    function validaMovil($tlf){
        if ($tlf==""){
            echo "<p style=color:red;>El teléfono móvil no puede estar sin rellenar</p>";
        }else if (strlen($tlf)!=9){
            echo "<p style=color:red;>El teléfono móvil tiene que tener 9 dígitos</p>";
        }else if (!ctype_digit($tlf)){
            echo "<p style=color:red;>El teléfono móvil solo puede contener numeros</p>";
        }
    }
    
    function validaDireccion($direc){
    
        if ($direc == ""){
            echo "<p style=color:red;> La dirección no puede estar vacía</p>";
    
        }else if (ctype_alpha($direc)||ctype_digit($direc)){
            echo "<p style=color:red;> La dirección debe contener la calle y el número</p>";
    
        }
    }
    
    function direccionOK($direc){
    
        return $direc!=""&&!ctype_digit($direc)&&!ctype_alpha($direc);
    }
    
    
    function validaCP($cp){
    
        if ($cp==""){
            echo "<p style=color:red;> El código postal no puede estar vacío</p>";
        }else if (!ctype_digit($cp)){
            echo "<p style=color:red;> El código postal solo puede incluir numeros</p>";
        }else if (strlen($cp)!=5){
            echo "<p style=color:red;> El código postal tiene 5 números</p>";
    
        }
    }
    
    function cpOK($cp){
        return $cp!=""&&ctype_digit($cp)&&strlen($cp)==5;
    }



?>
    
</body>
</html>