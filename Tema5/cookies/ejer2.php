<?php
//Miguel Angel Perez Jimenez 2do DAW



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Ejercicio 2</h1>
    <h3>Miguel Ángel Pérez</h3>
<form action="ejer2.php" method="post">
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
    
</body>
</html>
    <?php
        if (!isset($_COOKIE["num1"])&&!isset($_COOKIE["num2"])&&!isset($_COOKIE["operacion"])){

            if (isset($_POST["2_4"])){
                setcookie("num1",$_POST["1_num1"],time()+60,"/");
                setcookie("num2",$_POST["1_num2"],time()+60,"/");
                setcookie("operacion",$_POST["operacion"],time()+60,"/");
                opera($_POST["1_num1"],$_POST["1_num2"],$_POST["operacion"]);

            }


        }else{

            if(isset($_POST["2_4"])){

                echo "La operacion anterior era: ";
            opera($_COOKIE["num1"],$_COOKIE["num2"],$_COOKIE["operacion"]);
            echo "<br> La operacion actual es: ";
            opera($_POST["1_num1"],$_POST["1_num2"],$_POST["operacion"]);
            }

            
            
        }

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

    
    ?>

    
