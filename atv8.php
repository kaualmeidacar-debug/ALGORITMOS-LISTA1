<?php
$brindes = 500;
$equipes = 25;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Atividade 8</h3>
    <p>Uma empresa pretende distribuir 500 brindes igualmente entre 25 equipes
participantes de uma competição. Calcule quantos brindes cada equipe
receberá.
</p>
<?php echo("Brindes: " . $brindes . "<br>"); ?>
<?php echo("Números de equipes: " . $equipes . "<br>"); ?>
<?php echo("Cada equipe vai receber: " . $brindes / $equipes); ?>

</body>

</html>