<?php 
/**Faça um algoritmo que receba o valor de um produto, calcule um desconto de
9,5% e apresente o novo valor com desconto.
Resultado esperado: um produto de R$ 200,00 com desconto de 9,5% terá
desconto de R$ 19,00 e valor final de R$ 181,00. */

$produto = 200;
$desconto = $produto * 9.5/100;
$valorDesc = $desconto;
$valorFinal = $produto - $desconto;




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Atividade 14</h3>
    <p><?php echo("Valor produto: R$" . $produto); ?></p>
    <p><?php echo("Desconto de 9,5%: R$" . $desconto); ?></p>
    <p><?php echo("Valor final: R$" . $valorFinal); ?></p>
</body>
</html>