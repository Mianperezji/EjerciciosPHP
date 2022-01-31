<?php
//Miguel Ángel Pérez Jiménez
//2º DAW


function ejercicio1($numero,$operacion){
    $result=0;
    //No se puede operar un solo numero
    if ($numero>1){
        //Si es una suma recorre todos los impares y sumalos al resultado
        if($operacion=="suma"){
            for ($i=1;$i<$numero*2;$i+=2){
                $result+=$i;
            }
            echo "<strong> El resultado de la suma de los primeros $numero numeros impares es $result</strong>";
            //Si es la opcion de producto recorre todos los impares y sumalos al resultado
        }else{
            $result=1;
            for ($i = 1; $i < $numero*2; $i+=2){
                $result*=$i;
            }
            echo "<strong> El resultado de multiplicar los primeros $numero numeros impares es $result </strong>";
        }
    }else{
        //Si solo ha introducido un numero da mensaje de error
                echo "<strong> Introduce un numero mayor que 1</strong>";
    }
}



function ejercicio2($nombre, $accion){
    if ($accion=="saludo"){
        echo "<strong>Saludos $nombre.</strong>";
    }else{
        echo "<strong> Hasta luego $nombre.</strong>";
    }

}

function ejercicio3($array,$opcion){
    //Separo el String y lo convierto en un array
    $array = explode(",",$array);
    $media=0;
    $moda;
    $mediana;
    //Recorro el array para sumar sus valores a la media
    foreach ($array as $valor){
        if (!ctype_digit($valor)){
             echo "<strong>Has introducido mal los datos, recuerda que tienes que introducir numeros separados por ',' <br> Ejemplo 22,44,55,33,12,56,37,9 </strong>";
             //Me salgo del metodo
             return 0;
        }
        $media+=$valor;
    
    }
    //Cuento el numero de valores y lo paso a un array
    $contador=array_count_values($array);
    //Ordeno de mayor a menor
    arsort($contador);
    $moda=array_keys($contador);
    $media = $media/count($array);

    if($opcion=="media"){
        echo "<strong>La media es ".round($media,2)."<s/trong>";
    }else if ($opcion=="moda"){
        echo "<strong>La moda es ".$moda[0]."</strong>";
    }else if ($opcion=="mediana"){
        //total numeros de arra
        $total = count($array);
         //Encuentro el valor medio
        $valormedio = floor(($total-1)/2); 

        if($total % 2) { 
            $median = $array[$valormedio];
        } else { 
            //Si es impar sumo los dos del medio y lo divido entre 2
            $bajo = $array[$valormedio];
            $alto = $array[$valormedio+1];
            $median = (($low+$high)/2);
        }
        echo "<strong>La mediana es $median </strong>";
    }

}

//Funcion que recibe la asignatura del select y crea la tabla a partir de ahi
function ejercicio4($asignatura){
    echo "<table border=1>";
    switch ($asignatura){
        case "BBDD":
            echo "<strong>Has escogido Base de Datos</strong><br>";
            echo "<tr><td>Lunes</td><td>Viernes</td></tr>";
            echo "<tr><td>17:15-19:00></td><td>15:00-17:00</td></tr>";
            break;
        case "Programacion":
            echo "<strong>Has escogido Programación</strong><br>";
            echo "<tr><td>Lunes</td><td>Miércoles</td><td>Jueves</td></tr>";
            echo "<tr><td>19:00-20:45></td><td>15:00-18:00</td><td>17:15-20:45</td></tr>";
            break;
        case "LMarcas":
            echo "<strong>Has escogido Lenguaje de marcas</strong><br>";
            echo "<tr><td>Martes</td></tr>";
            echo "<tr><td>14:00-17:00</td></tr>";
            break;
        case "Sistemas":
            echo "<strong>Has escogido Sistemas Informáticos</strong><br>";
            echo "<tr><td>Lunes</td><td>Miércoles</td><td>Viernes</td></tr>";
            echo "<tr><td>19:00-20:45</td><td>17:00-20:00</td><td>17:00-19:00</td></tr>";
            break;
        case "Ingles":
            echo "<strong>Has escogido Inglés</strong><br>";
            echo "<tr><td>Lunes</td><td>Miércoles</td><td>Viernes</td></tr>";
            echo "<tr><td>14:00-15:00</td><td>14:00-15:00</td><td>14:00-15:00</td></tr>";
            break;
        case "Disenyo":
            echo "<strong>Has escogido Diseño de Interfaces</strong><br>";
            echo "<tr><td>Miércoles</td><td>Jueves</td><td>Viernes</td></tr>";
            echo "<tr><td>17:15-19:05</td><td>17:15-19:05</td><td>17:15-19:05</td></tr>";
            break;
        case "Server":
            echo "<strong>Has escogido Desarrollo en entorno Servidor</strong><br>";
            echo "<tr><td>Lunes</td><td>Martes</td><td>Miércoles</td><td>Jueves</td></tr>";
            echo "<tr><td>17:15-18:00</td><td>15:05-18:00</td><td>15:05-16:55</td><td>19:15-20:55</td></tr>";
            break;
        case "Client":
            echo "<strong>Has escogido Desarrollo en entorno Cliente</strong><br>";
            echo "<tr><td>Lunes</td><td>Martes</td><td>Jueves</td></tr>";
            echo "<tr><td>15:05-16:55</td><td>18:10-20:55</td><td>15:00-16:55</td></tr>";
            break;
        case "Despliegue":
            echo "<strong>Has escogido Despliegue de aplicaciones</strong><br>";
            echo "<tr><td>Lunes</td><td>Miércoles</td><td>Viernes</td></tr>";
            echo "<tr><td>19:05-20:55</td><td>19:05-20:55</td><td>15:05-16:55</td></tr>";
            break;
            
        default:
        echo "<strong>Ha habido un error inesperado</strong>";





    }

    echo "</table>";

}

function ejercicio5($fecha){
    $fecha = explode(":",$fecha);
    //Solo importa la hora asi que cojo el primer caracter

    if ($fecha[0]>=6 && $fecha[0]<13){
        echo "<strong>Buenos dias</strong>";
    }else if ($fecha[0]>=13 &&$fecha[0]<21){
        echo "<strong>Buenas tardes</strong>";
    }else if ($fecha[0]>=21||$fecha[0]<6){
        echo "<strong>Buenas noches</strong>";
    }else{
        echo "<strong>Error inesperado</strong>";
    }

}

function ejercicio6($zona){
    echo "<strong>";

    
    switch ($zona){
        case 0:
            $date = new DateTime('now', new DateTimeZone('Europe/London'));
            echo $date->format('m/d/Y g:i:s A');
            break;
        case 1:
            $date = new DateTime('now', new DateTimeZone('Europe/Madrid'));
            echo $date->format('m/d/Y g:i:s A');
            break;
        case 2:
            $date = new DateTime('now', new DateTimeZone('Europe/Helsinki'));
            echo $date->format('m/d/Y g:i:s A');
            break;
        case 3:
            $date = new DateTime('now', new DateTimeZone('Asia/Baghdad'));
            echo $date->format('m/d/Y g:i:s A');
            break;
        case 4:
            $date = new DateTime('now', new DateTimeZone('Asia/Kabul'));
            echo $date->format('m/d/Y g:i:s A');
            break;
        case 5:
            $date = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
            echo $date->format('m/d/Y g:i:s A');
            break;
        case 6:
            $date = new DateTime('now', new DateTimeZone('Asia/Dhaka'));
            echo $date->format('m/d/Y g:i:s A');
            break;
        case 7:
            $date = new DateTime('now', new DateTimeZone('Asia/Bangkok'));
            echo $date->format('m/d/Y g:i:s A');
            break;
        case 8:
            $date = new DateTime('now', new DateTimeZone('Asia/Singapore'));
            echo $date->format('m/d/Y g:i:s A');
            break;
        case 9:
            $date = new DateTime('now', new DateTimeZone('Asia/Tokyo'));
            echo $date->format('m/d/Y g:i:s A');
            break;
        case 10:
            $date = new DateTime('now', new DateTimeZone('America/Sao_Paulo'));
            echo $date->format('m/d/Y g:i:s A');
            break;
    }
    echo "</strong>";
}


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
}

//Funcion que imprime el ejercicio 8
function ejercicio8($nombre, $apellidos, $edad, $peso, $sexo, $estadocivil, $aficiones){

    echo "<h1>Hola $nombre $apellidos, tienes $edad años, pesas $peso kg, eres de sexo $sexo estas $estadocivil y  ";
    if ($aficiones==""){
        echo "no tienes aficiones";
    }else{
        echo " y te interesa lo relacionado con $aficiones";
        
    }
    echo "</h1>";
}


//Funciones del ejercicio 9

function validaNombre($nombre){
    return ctype_alpha($nombre)&&$nombre!=""&&strlen($nombre)>2;
}

//Si la contraseña es menor que 6 devuelve falso
function validaContrasenya($contrasenya){

    return strlen($contrasenya)>=6;
}

//Si el array esta vacio la nacionalidad tendra el valor de 0 y dara falso, de lo contrario devolvera true
function validaNacionalidad($nation){

    return $nation!=0;
}

//Funcion que valida la foto subida
function validaFoto($foto){

    $tipo = $foto["type"];

    echo($tipo);

}



























?>