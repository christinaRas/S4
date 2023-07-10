<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <?php foreach ($genres as $genre): ?>
            <?php echo $genre->nom_genre; ?>
        <?php endforeach; ?>
    </form>
</body>
</html>
