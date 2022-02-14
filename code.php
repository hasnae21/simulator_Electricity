<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>SOLIDAO</title>
</head>
<body align="center">

    <h1>Welcome to SOLIDAO</h1>
    <h2>Simuler votre consommation d'électricité mensuelle</h2>
    <form action="code.php" method="post" name="données">
        <p>Entrer L'index de consommation du mois dérnier: </p>
        <input type="number" name="Index1">
        <br>
        <p>Entrer L'index de consommation du ce mois: </p>
        <input type="number" name="Index2">
        <br><br>
        <button name="valider">Facture provisoire</button>
    </form>

    <table class="table caption-top">
        <caption>Votre facture provisoire:</caption>
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
            </tr>
        </tbody>
    </table>
<?php
    include("index.php");
    if (isset($_POST['valider'])) {
        $Index1 = $_POST['Index1'];
        $Index2 = $_POST['Index2'];
    }
    echo 'L\'index de ce mois est:  ' . $Index2 . '<br>';
    $consommation = Substraction($Index1, $Index2);
    echo 'Votre consommation mensuelle est de:   ' . $consommation . ' kWh (Kilowattheure)';
    ?>
<div class="donner">
    <div class="index1">
        <?php 
        echo "L'index du mois dérnier était:  " . $Index1 . '<br>';
        ?>
    </div>
    <div class="index2">

    </div>
    <div class="consommation">

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>