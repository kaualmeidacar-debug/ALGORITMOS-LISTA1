<?php 
/**Escreva um algoritmo que leia o nome de um vendedor, seu salário fixo e o total
de vendas efetuadas no mês. Sabendo que ele ganha 15% de comissão sobre as
vendas, informe o nome, o salário fixo e o salário final do mês.
Resultado esperado: João, com salário fixo de R$ 1.500,00 e vendas de R$
4.000,00, receberá comissão de R$ 600,00 e salário final de R$ 2.100,00.
 */
$funcionario = "Carlos";
$salFixo = 2000;
$valVendas = 4000;
$comissao = $valVendas * 15/100;
$salFinal = $salFixo + $comissao


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Atividade 18</h3>
    <p><?php echo("Vendedor: " . $funcionario); ?></p>
    <p><?php echo("Salario fixo: R$" . $salFixo); ?></p>
    <p><?php echo("Valor em vendas : R$" . $valVendas); ?></p>
    <p><?php echo("Comissão de 15%: R$" . $comissao); ?></p>
    <p><?php echo("Salario final: R$" . $salFinal) ?></p>
</body>
</html>