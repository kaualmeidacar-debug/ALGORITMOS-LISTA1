<?php 
/**Uma loja vende seus produtos em 5 prestações sem juros. Faça um algoritmo
que receba o nome e o valor de 3 produtos, calcule o valor total da compra e
mostre o valor de cada prestação.
Resultado esperado: uma compra com camiseta de R$ 50,00, calça de R$ 120,00
e tênis de R$ 230,00 terá total de R$ 400,00 e 5 prestações de R$ 80,00. */

$produto1 = "Camisa";
$produto2 = "Calça";
$produto3 = "Tênis";

$valor1 = 40;
$valor2 = 30;
$valor3 = 50;

$totalValor = $valor1 + $valor2 + $valor3;
$prestacao = $totalValor / 5;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Atividade 13</h3>
    <p><?php echo ($produto1 . ": R$" . $valor1); ?></p>
    <p><?php echo ($produto2 . ": R$" . $valor2); ?></p>
    <p><?php echo ($produto3 . ": R$" . $valor3); ?></p>

    <b><?php echo("Valor total: R$" . $totalValor . "<br>5 Prestações de: R$" . $prestacao); ?></b>
</body>
</html>