<?php

/**Desenvolva um algoritmo que leia 4 notas e calcule a média, apresentando o
resultado na tela. (Pesquise a fórmula)
Resultado esperado: as notas 7, 8, 6 e 9 resultam em média 7,5.
 */
$notaA = 9;
$notaB = 10;
$notaC = 11;
$notaD = 12;

$soma = $notaA + $notaB + $notaC + $notaD;
$media = $soma / 4;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Atividade 12</h3>
    <?php echo("NOTA1: " . $notaA . "<br>"); ?>
    <?php echo("NOTA2: " . $notaB . "<br>"); ?>
    <?php echo("NOTA3: " . $notaC . "<br>"); ?>
    <?php echo("NOTA4: " . $notaD . "<br>"); ?>
    <p><?php echo("Media: " . $media); ?></p>
</body>
</html>