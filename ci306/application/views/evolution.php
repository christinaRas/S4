<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

            form {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 50px;
        }

        input[type="date"],
        input[type="number"] {
        width: 300px;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        }

        input[type="submit"] {
        width: 200px;
        padding: 10px;
        background-color: orange;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition : 2s;
        }

        input[type="submit"]:hover {
        background-color: #45a049;
        }

    </style>

</head>
<body>
    <form action="<?php echo base_url('../Evolutionuser/save'); ?>" method="post">
    <input type="date" name="date" id="">
    <input type="number" name="newpoids" placeholder="Votre nouveau poids">
    <input type="submit" value="valider">
    </form>
</body>
</html>