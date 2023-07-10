<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo base_url('../Landing/savediet'); ?>" method="post">
        <input type="number" name="poids" placeholder="poids actuel" id="">
        <input type="number" name="taille" placeholder="taille actuel" id="">
        <select name="genre" id="">
            <?php foreach ($genres as $genre): ?>
                <option value="<?php echo $genre->id_genre; ?>"><?php echo $genre->nom_genre; ?></option>
            <?php endforeach; ?>
        </select>
        <select name="choix" id="">
            <?php foreach ($choix as $c): ?>
                <option value="<?php echo $c->id_choix; ?>"><?php echo $c->nom_choix; ?></option>
            <?php endforeach; ?>
        </select>
        <input type="submit" value="valider">
    </form>
</body>
</html>