<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Estilos.css">
</head>
<body>
    <form class="caja" action="Calculadora.php" method="get">
    
    <h1>Calculadora</h1>
            <input type="text" name="numero1" value ="" placeholder = "ingrese un numero" autocomplete="off">    
            <input type="text" name="numero2" value =""  placeholder = "ingrese otro numero"  autocomplete="off">    
    <input type="submit" name="" value="Resultado" >
    <output type="number" name="0">
  
    </form>
</body>
</html>

<?php 

if( 
    isset($_GET['numero1'])
    && isset($_GET['numero2'])
    && is_numeric($_GET['numero1'])
    && is_numeric($_GET['numero2'])
);

{
    
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    $Resultado1 =  $numero1 + $numero2;
    $Resultado2 =  $numero1 - $numero2;
    $Resultado3 =  $numero1 * $numero2;
    $Resultado4 =  $numero1 / $numero2;

    echo "Suma = $Resultado1 <br/>";
    echo "Resta = $Resultado2 <br/>";
    echo "Multiplicación = $Resultado3 <br/>";
    echo "Divición = $Resultado4 <br/>";
   
    
}


?>