<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facture</title>
</head>
<body>
    <div class="container-fluid">
    <table border="1" class="table  table-primary">
        <th>Numero de facture</th>
        <th>Date emmission</th>
        <th class="imprimer">Imprimer</th>
        <?php foreach ($facture as $factures) {  ?>
            <tr>
                <td><?php echo $factures->Numero_facture; ?></td>
                <td><?php echo $factures-> Date_emission ?></td>
                <td><button class="btn btn-success btn-block" value="<?php echo $clients->Numero_facture; ?>">PDF</button></td>
            </tr>
        <?php    } ?>
    </table>
    </div>
</body>
</html>