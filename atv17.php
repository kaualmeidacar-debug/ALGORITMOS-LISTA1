<?php 
/**O custo ao consumidor de um carro novo é a soma do custo de fábrica com os
impostos e a porcentagem do distribuidor. Primeiro, aplique 45% de impostos
sobre o custo de fábrica e depois aplique 28% do distribuidor sobre o resultado.
Escreva um algoritmo que leia o custo de fábrica e informe o custo final ao
consumidor.
Resultado esperado: um carro com custo de fábrica de R$ 50.000,00 terá valor
com impostos de R$ 72.500,00 e custo final ao consumidor de R$ 92.800,00. */

$fabric = 90000;

$imposto = $fabric * 45/100;
$valorImp = $fabric + $imposto;

$distr = $valorImp * 28/100;
$valorCons = $valorImp + $distr;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Atividade 17</h3>
    <p><?php echo("Preço de Fábrica: R$" . $fabric); ?></p>
    <p><?php echo("Preço com Imposto: R$" . $valorImp); ?></p>
    <p><?php echo("Valor final para consumidor: R$" . $valorCons); ?></p>
</body>
</html>