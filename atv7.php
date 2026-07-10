<?php
$aSerPago = 3800;
$qntFoiPago = 5000;

$Trocado = $qntFoiPago - $aSerPago;



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Atividade 7</h3>
    <p>Um organizador comprou um notebook por R$ 3.800,00 e pagou com
        R$ 5.000,00. Calcule o valor do troco.
    </p>
    <?php echo ("Valor do notebool: R$" . $aSerPago . "<br>"); ?>
    <?php echo ("Valor pago: R$" . $qntFoiPago . "<br>"); ?>
    <?php echo ("Troco: R$" . $Trocado ); ?>
</body>

</html>