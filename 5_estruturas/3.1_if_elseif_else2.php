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
        $nota1 = 5;
        $nota2 = 5;
        $nota3 = 4;
        $nota4 = 5;
        $media = ($nota1 + $nota2 + $nota3 + $nota4)/4;

        if($media >=8){
            echo "Parabéns, sua nota é $media, você está aprovado.";
        }elseif($media >= 5 && $media < 8){
            echo "Muito bem sua nota é $media, você foi aprovado";
        }else{
            echo "Sinto muito, você foi reprovado, sua nota é $media!";
        }
    ?>
    <p><h1>Notas:</h1></p>
    <p><h2>Português: </h2><? echo $nota1 ?></p>
    <p><h2>Matemática: </h2><? echo $nota2 ?></p>
    <p><h2>Inglês: </h2><? echo $nota3 ?></p>
    <p><h2>História: </h2><? echo $nota4 ?></p>
</body>
</html>