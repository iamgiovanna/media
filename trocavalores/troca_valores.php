<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Back-end troca valores</title>
</head>
<body>
    <?php
    
    $valA = $_POST['txtvalA'];
    $valB = $_POST['txtvalB'];
  
    echo "Antes da troca 
        Valor A: " .$valA. " Valor B: " .$valB;

        //troca de valores

        $troca = $valA;
        $valA = $valB;
        $valB = $troca;

        echo " Depois da troca 
        
        Valor A: " .$valA. " Valor B: " .$valB;
    ?>
</body>
</html>