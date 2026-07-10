<?php
$arrecadado = 42000;
$bonus = 5 / 100;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Atividade 9</h3>
    <p>Uma empresa de eventos oferece um bônus de 5% sobre o valor arrecadado para
        o gerente responsável. O evento arrecadou R$ 42.000,00. Calcule o valor do
        bônus.</p>
    <?php echo ("Valor arrecadado: R$" . $arrecadado . "<br>"); ?>
    <?php echo ("Bonus de 5%: R$" . $arrecadado * $bonus); ?>
</body>

</html>