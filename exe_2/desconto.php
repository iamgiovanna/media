<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Back-end calculo de desconto</title>
</head>
<body>
    <br/>
    <?php
    $preco = $_POST['txtnum'];
    $desconto = $_POST['txtnum1'];
    $valorfinal;

    $valorfinal = ($preco*$desconto)/100;

    echo "Prezado(a) cliente seu valor de desconto é " .$valorfinal;  
    ?>
</body>
</html>