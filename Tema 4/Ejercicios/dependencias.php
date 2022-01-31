<?php

    //Funcion Ejercicio4 UD 2
    function opera($numero1,$numero2,$operacion){

        if (is_numeric($numero1)&&is_numeric($numero2)){

            if($operacion=="sumar"){
                $resultado=$numero1+$numero2;
                echo "$numero1 + $numero2 = $resultado <br>";
            }else if($operacion=="restar"){
                $resultado=$numero1-$numero2;
                echo "$numero1 - $numero2 = $resultado <br>";
            }else if($operacion=="multiplicar"){
                $resultado=$numero1*$numero2;
                echo "$numero1 x $numero2 = $resultado <br>";
            }else if($operacion=="dividir"){
                $resultado=$numero1/$numero2;
                echo "$numero1 / $numero2 = $resultado <br>";
            }
        }else{
            echo "No has introducido dos numeros";
        }
    }

    function dimeDia($day){
        if(is_numeric($day)&&$day>0&&$day<=31){
            if ($day<=15){
                echo "<strong>Primera quincena</strong>";
            }else{
                echo "<strong>Segunda quincena</strong>";
            }
        }else{
            echo "<strong>Dia no valido</strong>";
        }
    }

    function traduce($array){
        $completo= array('Manzana' => "Apple",'Lunes' => "Monday",'Dia' => "Day",'Pelota' => "Ball",'Nombre' => "Name",'Suelo' => "Floor", 'Almohada' => "Pillow",'Fuente' => "Fountain",'Lampara' => "Lamp",'Chimenea' => "Fireplace");
        echo "<table border=1>";
        foreach($array as $valor){
            
            foreach ($completo as $clave => $valor2){

                if($valor==$valor2){
                    echo "<tr><td>$valor</td><td>$clave</td></tr>";
                    
                }
            }
        }
        echo "</table>";
    }

    //Euros es un booleano que toma valor dependiendo de que opcion elijas
    function convierte($euros,$cantidad){

        if($euros){
            $cantidad*=166;
            echo "<strong>Son $cantidad pesetas</strong>";
        }else{
            $cantidad/=166;
            echo "<strong>Son $cantidad euros</strong>";
        }
    }


    function tipoCaracter($char){
        if(ctype_upper($char)){
            echo "<strong>Es una letra mayuscula</strong>";
        }else if (ctype_lower($char)){
            echo "<strong>Es una letra minuscula</strong>";
        }else if (ctype_digit($char)){
            echo "<strong>Es un numero</strong>";
        }else if (ctype_space($char)){
            echo "<strong>Es un espacio en blanco</strong>";

        }else if(ctype_punct($char)){
            echo "<strong>Es un caracter de puntuacion</strong>";
        }else{
            echo "<strong>Es un caracter especial</strong>";
        }
    }

    //funcion que crea un objeto date, en caso de que no se pueda crear por fecha incorrecta devuelve falso
    function isValidDate(string $date, string $format = 'Y-m-d'): bool{
        $dateObj = DateTime::createFromFormat($format, $date);
        return $dateObj && $dateObj->format($format) == $date;
    }

    //Si los datos de las 5 llamadas son correctos devuelve verdadero
    function datos_llamada_correctos($llam1,$llam2,$llam3,$llam4,$llam5){
        //Si todas son digitos devuelve true
        return ctype_digit($llam1)&& ctype_digit($llam2)&& ctype_digit($llam3)&& ctype_digit($llam4)&& ctype_digit($llam5);
    }

    function coste_llamada($minutos){
        if ($minutos<3){
            return 0.10;
        }else{
            return (($minutos-3)*0.05)+0.10;
        }

    }

    //Creo dos dates con ese formato y calculo la diferencia
    function dimeDiferencia($fecha1,$fecha2){
        $fecha1=date_create_from_format("d:m:Y H:i:s",$fecha1);
        $fecha2=date_create_from_format("d:m:Y H:i:s",$fecha2);
        $diferencia= date_diff($fecha1,$fecha2);
        
        echo $diferencia->format("<strong> Hay una diferencia de %a dias, %H horas, %i minutos y %s segundos</strong>");

    }

    function creaTabla($num){
        echo "<table border=1>";

        for ($i=1;$i<11;$i++){
            echo "<tr><td> $num </td><td>X</td><td>$i</td><td>=</td><td>". $num*$i ."</td>";
        }
        echo "</table>";
    }


    function salario_maximo($array){
        return max($array);
    }
    function salario_minimo($array){
        return min($array);
    }
    //sumamelos y dividemelos entre el total y redondea a dos decimales
    function salario_medio($array){
        return round(array_sum($array)/count($array),2);
    }

    function aumento_sueldo($array,$aumento){
        echo "<br><br>";

        foreach ($array as $key => $value){
            $incremento=(($value*$aumento)/100)+$value;
            echo "Sueldo $key = $value brutos anuales <br>";
            echo "Sueldo $key incrementado = $incremento brutos anuales<br><br>";
        }
        
    }













?>