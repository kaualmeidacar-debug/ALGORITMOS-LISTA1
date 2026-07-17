<?php 
/**Faça um algoritmo que receba o preço de custo de um produto e mostre o valor
de venda. O usuário deve informar em quanto por cento deseja aumentar o valor
do produto.
Resultado esperado: um produto com custo de R$ 100,00 e aumento de 30% terá
valor de venda de R$ 130,00.
 */

 $base = 200;
 $aumento = $base * 30/100;
 $precoVenda = $base + $aumento;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Atividade 16</h3>
    <p><?php echo("Custo do produto: R$" . $base) ?></p>
    <p><?php echo("30% de aumento: R$" . $aumento) ?></p>
    <p><?php echo("Valor de venda: R$" . $precoVenda) ?></p>
</body>
</html>