<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $n1 = $_POST['txtn1'];
    $n2 = $_POST['txtn2'];
    $n3 = $_POST['txtn3'];
    $n4 = $_POST['txtn4'];
    $nf;

    $nf = ($n1 + $n2 + $n3 + $n4)/4;

    if($nf>5){
        echo "Prezado(a) aluno(a), você foi aprovado com a média " .$nf;
    } else{
        echo "Prezado(a) aluno(a), você foi reprovado com a média " .$nf;
    }
    ?>
    
</body>
</html>