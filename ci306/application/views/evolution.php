<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo base_url('../Evolutionuser/save'); ?>" method="post">
    <input type="date" name="date" id="">
    <input type="number" name="newpoids" placeholder="Votre nouveau poids">
    <input type="submit" value="valider">
    </form>
</body>
</html>