<?php
$recebido = 18000;
$gasto = 12750;

$dinheiroRestante = $recebido - $gasto;


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
    <p>Um organizador recebeu R$ 18.000,00 para realizar um evento e gastou R$
        12.750,00 com fornecedores. Calcule quanto dinheiro ainda restou.
    </p>
    <?php echo ("Dinheiro recebido pelo organizador: R$" . $recebido . "<br>"); ?>
    <?php echo ("Dinheiro gasto pelo organizador: R$" . $gasto . "<br>"); ?>
    <?php echo ("Dinheiro que sobrou: R$" . $dinheiroRestante ); ?>
</body>

</html>