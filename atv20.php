<?php 
/**Faça um algoritmo que leia um número inteiro e imprima seu sucessor e seu
antecessor.
Resultado esperado: o número 15 terá antecessor 14 e sucessor 16 */

$atual = 20;
$anterior = $atual - 1;
$sucessor = $atual + 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Atividade 20</h3>
    <p><?php echo("Numero Atual: " . $atual); ?></p>
    <p><?php echo("Numero Anterior: " . $anterior); ?></p>
    <p><?php echo("Numero Sucessor: " . $sucessor); ?></p>
</body>
</html>