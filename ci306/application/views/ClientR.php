<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultat de la Recherche</title>
</head>
<body>
<div class="container">
    <table border="1" class="table table-primary">
        <th>Numero de facture</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Produit</th>
        <th>Date d'emmission</th>

        <th class="imprimer">Imprimer</th>
        <form action="imprimer" method="post">
        <?php foreach ($client as $clients) {  ?>
            <tr>
                <td><?php echo $clients->Numero_facture; ?></td>
                <td><?php echo $clients->Nom; ?></td>
                <td><?php echo $clients->Prenom; ?></td>
                <td><?php echo $clients->produit; ?></td>

                <td><?php echo $clients->Date_emission ?></td>
                <td><button class="btn btn-success btn-block" name="facture" value="<?php echo $clients->Numero_facture; ?>">PDF</button></td>
            </tr>
        <?php    } ?>
        </form>
    </table>
    </div>
</body>
</html>