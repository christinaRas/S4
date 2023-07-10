<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <input type="number" name="Poids" placeholder="poids actuel" id="">
        <input type="number" name="Taille" placeholder="taille actuel" id="">
        <select name="genre" id="">
            <?php foreach ($genres as $genre): ?>
                <option value=""><?php echo $genre->nom_genre; ?></option>
            <?php endforeach; ?>
        </select>
        <select name="choix" id="">
            <?php foreach ($choix as $c): ?>
                <option value=""><?php echo $c->nom_choix; ?></option>
            <?php endforeach; ?>
        </select>
    </form>
</body>
</html>