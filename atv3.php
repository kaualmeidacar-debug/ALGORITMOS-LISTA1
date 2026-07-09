<?php
$servico = 2500;
$entrada = 1000;

$faltando = $servico - $entrada;


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Atividade 3</h3>
    <p>Uma empresa de decoração cobra R$ 2.500,00 pelo serviço completo. O cliente
        pagou uma entrada de R$ 1.000,00. Calcule quanto ainda falta pagar.</p>

    <?php echo ("Valor da decoração: R$" . $servico . "<br>"); ?>
    <?php echo ("Valor pago de entrada: R$" . $entrada . "<br>"); ?>
    <?php echo("Valor que falta a ser pago: R$" . $faltando); ?>
</body>

</html>