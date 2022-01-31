<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta author="Miguel Ángel Pérez Jiménez">
    <title>Miguel Ángel Tema 4</title>
</head>
<body>
    <?php
    //Importo el archivo donde tengo todas las funciones
    include_once "dependencias.php";
    ?>
    <h1>Miguel Ángel Pérez Jiménez 2º DAW</h1>
    <h2>Unidad 2</h2>
    <h3>Ejercicio 4</h3>
    <p>Introduce dos números para operar</p>
    <form action="index.php" method="post">
        Numero 1<input name="1_num1" type="text" value="<?php if(isset($_POST['2_4'])&&is_numeric($_POST["1_num1"])){echo $_POST["1_num1"];}?>">
        Numero 2 <input name="1_num2" type="text" value="<?php if(isset($_POST['2_4'])&&is_numeric($_POST["1_num2"])){echo $_POST["1_num2"];}?>">
        <select name="operacion" id="cars">
            <option value="sumar">Sumar</option>
            <option value="restar">Restar</option>
            <option value="multiplicar">Multiplicar</option>
            <option value="dividir">Dividir</option>
        </select>
        <br>
        <input type="submit" name="2_4">
    </form>
    <?php
        if(isset($_POST["2_4"])){
            $num=$_POST["1_num1"];
            $num2=$_POST["1_num2"];
            $operacion=$_POST["operacion"];
            opera($num,$num2,$operacion);
                    
        }
    ?>
    <br>
    <h3>Ejercicio 11</h3>
    <p>Introduce un dia</p>
    <form action="index.php" method="post">
        Dia: <input type="text" name="quincena" value="<?php if(isset($_POST['2_11'])&&is_numeric($_POST["quincena"])){echo $_POST["quincena"];}?>">
        <br>
        <input type="submit" name="2_11">
    </form>
    <?php
    if(isset($_POST["2_11"])){
        dimeDia($_POST["quincena"]);
    }
    
    ?>
    <br>
    <h3>Ejercicio 15</h3>
    <p>Selecciona palabras a traducir</p>
    <form action="index.php"method="post">
    Car <input type="checkbox">
    &nbsp;&nbsp;&nbsp;&nbsp;Apple <input type="checkbox" name="traducir[]" value="Apple">
    &nbsp;&nbsp;&nbsp;&nbsp; Monday <input type="checkbox"l name="traducir[]" value="Monday">
    &nbsp;&nbsp;&nbsp;&nbsp;Day<input type="checkbox" name="traducir[]" value="Day">
    &nbsp;&nbsp;&nbsp;&nbsp;Ball<input type="checkbox" name="traducir[]" value="Ball">
    &nbsp;&nbsp;&nbsp;&nbsp; Name <input type="checkbox" name="traducir[]" value="Name">
    &nbsp;&nbsp;&nbsp;&nbsp; Floor <input type="checkbox" name="traducir[]" value="Floor">
    &nbsp;&nbsp;&nbsp;&nbsp;Pillow<input type="checkbox" name="traducir[]" value="Pillow">
    &nbsp;&nbsp;&nbsp;&nbsp;Fountain <input type="checkbox" name="traducir[]" value="Fountain">
    &nbsp;&nbsp;&nbsp;&nbsp;Lamp <input type="checkbox"name="traducir[]" value="Lamp">
    &nbsp;&nbsp;&nbsp;&nbsp;Fireplace<input type="checkbox" name="traducir[]" value="Fireplace">
    <input type="submit" name="traduccion">

    </form>
    <?php
    if(isset($_POST["traduccion"])){
        if(empty($_POST["traducir"])){
            echo"<strong>No has seleccionado nada</strong>";
        }else{
            traduce($_POST["traducir"]);
        }
    }
    ?>
    <br>

    <br>
    <h3>Ejercicio 16 y 17</h3>
    
    <p>Introduce una cantidad para pasar a euros o pesetas</p>
    <form action="index.php" method="post">
        <input type="text" name="valor16" value="<?php if(isset($_POST['2_1617'])&&is_numeric($_POST["valor16"])){echo $_POST["valor16"];}?>">
    <select name="calc" id="">
        <option  value="euros">Euros a Pesetas</option>
        <option  value="pesetas">Pesetas a Euros</option>
    </select>
    <br>
    <input type="submit" name="2_1617">
    </form>
    <?php
        if(isset($_POST["2_1617"])){
            $euros=true;
            if(is_numeric($_POST["valor16"])){
                if($_POST["calc"]=="euros"){
                    convierte($euros,$_POST["valor16"]);
                }else{
                    $euros=false;
                    convierte($euros,$_POST["valor16"]);
                }
            }else{
                echo "<strong>No has introducido una cifra</strong>";
            }
        }
    ?>
    <br><br>
    <h2>UD 3</h2>
    
    <h3>Ejercicio1</h3>
    <br>
    <form action="index.php" method="post">
        Introduce un carácter para evaluarlo: <br>
        <input type="text" name="caracter">
        <input type="submit" name="3_1">
    </form>
    <?php
        if(isset($_POST["3_1"])){

            if(strlen($_POST["caracter"])==1){

                tipoCaracter($_POST["caracter"]);
                
            }else{
                echo "<strong>Introduce solo un caracter, por favor</strong>";
            }
        }
    ?>
    <h3>Ejercicio4</h3>
    <br>
    <p>Introduce una hora,minutos y segundos</p>
    <p>Ejemplos hora validas</p>
    <p>23:40:30</p>
    <p>13:24:14</p>
    <p>Ejemplos horas no validas</p>
    <p>43:23:90</p>
    <p>23;40.89</p>
    <br>
    <form action="index.php" method="post">
        <input type="text" name="hour">
        <input type="submit" name="3_4">
    </form>
    <?php
        if(isset($_POST["3_4"])){

            if(isValidDate($_POST["hour"],'H:i:s')){
                echo "<strong>Es una hora valida</strong>";  
            }else{
                echo "<strong>No es una hora valida</strong>";
            }
        }
    ?>
    <h3>Ejercicio 5</h3>
    <p>Introduce la duracion de las llamadas en minutos</p>
    <form action="index.php" method="post">
        <p>Duración llamada 1</p>
        <input type="text" name="llamada1" value="<?php if(isset($_POST['3_5'])&&is_numeric($_POST["llamada1"])){echo $_POST["llamada1"];}?>">
        <p>Duración llamada 2</p>
        <input type="text" name="llamada2" value="<?php if(isset($_POST['3_5'])&&is_numeric($_POST["llamada2"])){echo $_POST["llamada2"];}?>">
        <p>Duración llamada 3</p>
        <input type="text" name="llamada3" value="<?php if(isset($_POST['3_5'])&&is_numeric($_POST["llamada3"])){echo $_POST["llamada3"];}?>">
        <p>Duración llamada 4</p>
        <input type="text" name="llamada4" value="<?php if(isset($_POST['3_5'])&&is_numeric($_POST["llamada4"])){echo $_POST["llamada4"];}?>">
        <p>Duración llamada 5</p>
        <input type="text" name="llamada5" value="<?php if(isset($_POST['3_5'])&&is_numeric($_POST["llamada4"])){echo $_POST["llamada5"];}?>">
        <input type="submit" name="3_5">
    </form>
    <?php
        if(isset($_POST["3_5"])){
            //Evaluo si lo introducido en los 5 campos son digitos
            if (datos_llamada_correctos($_POST["llamada1"],$_POST["llamada2"],$_POST["llamada3"],$_POST["llamada4"],$_POST["llamada5"])){
                $total=0;
                $total+=coste_llamada($_POST["llamada1"]);
                $total+=coste_llamada($_POST["llamada2"]);
                $total+=coste_llamada($_POST["llamada3"]);
                $total+=coste_llamada($_POST["llamada4"]);
                $total+=coste_llamada($_POST["llamada5"]);
                echo "<strong> Las 5 llamadas tienen un coste total de $total €";
            }else{
                echo "<strong>Datos erroneos</strong>";
            }
        }
    ?>
    <h3>Ejercicio 7</h3>
    <p>Introduce 2 fechas para comparar</p>
    <p>Sigue el siguiente formato:  dia:mes:año  hora:minutos:segundos</p>
    <p>Ejemplos</p>
    <p>Dia => 01:01:2000</p>
    <p>Hora => 00:05:59</p>
    <form action="index.php" method="post">
        <p><strong>Fecha 1</strong></p>
        Dia:Mes:Año
        <input type="text" name="fecha1">
        Hora:Minutos:segundos
        <input type="text" name="hora1">
        <p><strong>Fecha 2</strong></p>
        Dia:Mes:Año
        <input type="text" name="fecha2">
        Hora:Minutos:segundos
        <input type="text" name="hora2">
        <input type="submit"name="3_7">
    </form>
    <?php
        if(isset($_POST["3_7"])){
            $fecha1=$_POST["fecha1"]." ". $_POST["hora1"];
            $fecha2=$_POST["fecha2"]." ". $_POST["hora2"];
            $formato= "d:m:Y H:i:s";
            if(isValidDate($fecha1,$formato)&&isValidDate($fecha2,$formato)){
                dimeDiferencia($fecha1,$fecha2);
            }else{
                echo "<strong>Fechas introducidas no validas </strong>";
            }
        }
    ?>
    <h3>Ejercicio 8</h3>
    <p>Introduce un numero para crear su tabla de multiplicar</p>
    <form action="index.php" method="post">
        <input type="text" name="tabla">
        <input type="submit" name="3_8">
    </form>
    
    <?php
        if (isset($_POST["3_8"])){
            if(ctype_digit($_POST["tabla"])&&intval($_POST["tabla"])>0&&intval($_POST["tabla"])<11){
                creaTabla($_POST["tabla"]);

            }else{
                echo "<strong> Datos erroneos</strong>";
            }
        }
    ?>

    <h3>Ejercicio 17 y 18</h3>
    <p>Selecciona los trabajadores para calcular su salario e introduce el aumento en % </p>

    <form action="index.php" method="post">
    <input type="checkbox" name="trabajadores[Paco]" value="12000" />Paco &nbsp;&nbsp;&nbsp;&nbsp;
    <input type="checkbox" name="trabajadores[Martina]" value="13500" />Martina &nbsp;&nbsp;&nbsp;&nbsp;
    <input type="checkbox" name="trabajadores[Pepe]" value="35000" />Pepe &nbsp;&nbsp;&nbsp;&nbsp;
    <input type="checkbox" name="trabajadores[Mariano]" value="12900" />Mariano &nbsp;&nbsp;&nbsp;&nbsp;
    <input type="checkbox" name="trabajadores[Antonia]" value="16070" />Antonia &nbsp;&nbsp;&nbsp;&nbsp;
    <input type="checkbox" name="trabajadores[Julia]" value="12300" />Julia &nbsp;&nbsp;&nbsp;&nbsp;
    <input type="checkbox" name="trabajadores[Fernando]" value="18000" />Fernando &nbsp;&nbsp;&nbsp;&nbsp;
    <input type="checkbox" name="trabajadores[Alba]" value="15000" />Alba <br /><br />
    <p>Introduce el aumento en % sobre 100</p>
    <input type="text" name="aumento">

    <input type="submit" name="3_17"/>
    </form>

    <?php
    // No hemos dado el ?? , pero hace que si el array no existe o es nulo no me salte el error y tome el valor de falso.
        $array=$_POST["trabajadores"] ?? false;
        $aumento = $_POST["aumento"] ?? false;
        if(isset($_POST["3_17"])){  
            if(!$array||!$aumento){
                echo "<strong>Selecciona almenos 1 trabajador y un aumento</strong>";
            }else{
                if(ctype_digit($aumento)){
                    echo "<strong>Salarios: Maximo=". salario_maximo($array). "  Minimo=". salario_minimo($array). "  Medio=". salario_medio($array);
                    echo aumento_sueldo($array,$_POST["aumento"]);
                }else{
                    echo "<strong>No has introducido un aumento valido</strong>";
                }
            }
        }
    
    
    ?>

        

</body>
</html>


