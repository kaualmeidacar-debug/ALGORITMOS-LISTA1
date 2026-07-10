<?php
$buffet = 8500;
$decoracao = 2800;
$sonorizacao = 3200;

$valorGasto = $buffet + $decoracao + $sonorizacao;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Atividade 6</h3>
    <P>Uma empresa de eventos contratou três fornecedores. O buffet custou
        R$ 8.500,00, a decoração R$ 2.800,00 e a sonorização R$ 3.200,00. Calcule o
        valor total gasto.</P>
    <h4>Serviços e seus valores:</h4>
    <?php echo ("Buffet: R$" . $buffet . "<br>"); ?>
    <?php echo ("Decoração: R$" . $decoracao . "<br>"); ?>
    <?php echo ("Sonorização: R$" . $sonorizacao . "<br>"); ?>

    <H4><?php echo ("Total de gastos: R$" . $valorGasto); ?></H4>



</body>

</html>