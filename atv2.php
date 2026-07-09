<?php
$pessoa = 85.00;
$convidados = 120.00;

$orçamento = $pessoa * $convidados;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Atividade 2</h3>
    <p>Um buffet cobra R$ 85,00 por pessoa para fornecer alimentação durante um
        evento. Crie variáveis para armazenar a quantidade de convidados e calcule o
        valor total do buffet.
    </p>
    <?php echo ("Valor cobrado por pessoa: R$" . $pessoa . ",00<br>"); ?>
    <?php echo ("Número de convidados: " . $convidados . "<br>"); ?>
    <?php echo ("Valor valor arrecadado pelo buffet: R$" . $orçamento . ",00<br>"); ?>

</body>

</html>