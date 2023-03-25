<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Back-end soma dos quadrados</title>
</head>
    <?php
    
    $num1 = $_POST['txtnum1'];
    $num2 = $_POST['txtnum2'];
    $num3 = $_POST['txtnum3'];

    //variaveis para guardar o valor do dobro 

    $dob1;
    $dob2;
    $dob3;
    $soma;

    //calculando o dobro

    $dob1 = $num1 * $num1;
    $dob2 = $num2 * $num2;
    $dob3 = $num3 * $num3;

    //somando os três valores

    $soma =  $dob1 + $dob2 + $dob3;
    
    echo "A soma dos valores dos 3 quadrados é " .$soma;
    ?>
</body>
</html>