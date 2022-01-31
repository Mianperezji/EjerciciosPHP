<?php
//Miguel Ángel Pérez Jiménez
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Roles Miguel Ángel Pérez Jiménez</title>
</head>
<body>
    <h3>Ejercicio 8</h3>
    <h4>Miguel Ángel Pérez Jiménez</h4>

    <form action="ejercicio8.php" method="post">
    <p>Introduce tu nombre</p>
    <input type="text" name="nombre"><br><br>
    <label for="puesto">Puesto de Trabajo</label><br>
    <input type="radio" name="puesto" value="Responsable de nominas" checked id="">
    <label for="Responsable de nominas">Responsable de nominas</label> <br>
    <input type="radio" name="puesto" value="Sindicalista" id="">
    <label for="Sindicalista">Sindicalista</label><br>
    <input type="radio" name="puesto" value="Gerente" id="">
    <label for="Gerente">Gerente</label> <br><br>


    <input type="submit" name="enviar"/>
    </form>
    
</body>
</html>


<?php





if (isset($_POST["enviar"])){
    $trabajadores=array("Pedro"=>16000,"Marcos"=>20000,"Alberto"=>12000,"Francisco"=>25000,"David"=>18000);
    $puesto = $_POST["puesto"];
    $nombre=$_POST["nombre"] ?? null;
    //El puesto viene por defecto checked, por lo que no habra que comprobar si esta seleccionado o no pues siempre estara seleccionado
    if ($nombre==null){
        echo "No has dicho tu nombre";

    }else if($puesto=="Responsable de nominas"){
        $_SESSION["salmin"]= salario_minimo($trabajadores);
        $_SESSION["salmax"]= salario_maximo($trabajadores);
        $_SESSION["nombre"]=$nombre;
        $_SESSION["trabajadores"]=$trabajadores;

        header("Location:nominas.php");
    }else if ($puesto=="Sindicalista"){
        $_SESSION["salmed"]=salario_medio($trabajadores);
        $_SESSION["nombre"]=$nombre;
        $_SESSION["trabajadores"]=$trabajadores;

        header("Location:sindicalista.php");

    }else if ($puesto=="Gerente"){
        $_SESSION["salmin"]= salario_minimo($trabajadores);
        $_SESSION["salmax"]= salario_maximo($trabajadores);
        $_SESSION["salmed"]=salario_medio($trabajadores);
        $_SESSION["nombre"]=$nombre;
        $_SESSION["trabajadores"]=$trabajadores;
        header("Location:gerente.php");

    }
    

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

?>