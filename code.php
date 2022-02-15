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
        <p>Entrer L'index de consommation du ce mois:</p>
        <input type="number" name="Index2">
        <br><br>
        <button name="valider">Facture provisoire</button>
</form>

<?php
        if (isset($_POST['valider'])) {
            $Index1 = $_POST['Index1'];
            $Index2 = $_POST['Index2'];
        }
        include("functions.php");
        $consommation = Substraction($Index1, $Index2);
?>

<div class="inputs">
    <div class="box">
            <?php 
            echo "Ancien index:     " . $Index1;
            ?>
    </div>
    <div class="box">
            <?php 
            echo 'Nouvel index::      ' . $Index2 ;
            ?>
    </div>
    <div class="box">
            <?php 
            echo 'Consommation:       ' . $consommation . ' kWh (Kilowattheure)';
            ?>
    </div>
</div>
    
<table border>
        <caption>Votre facture provisoire:</caption>
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">i</th>
                <th scope="col">i</th>
                <th scope="col">i</th>
                <th scope="col">i</th>
                <th scope="col">i</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th >1</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <th >1</th>
            </tr>
            <tr>
                <th >2</th>
                <td>           
                        <?php echo  $consommation ; ?>
                </td>
                <td></td>
                <td></td>
                <td>14%</td>
                <td></td>
                <th >2</th>
            </tr>

            <tr>
                <th>3</th>
                <td>?</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <th>3</th>
            </tr>

            <tr>
            <th >4</th>
                <td></td>
                <td></td>
                <td></td>
                <td>14%</td>
                <td></td>
            <th >4</th>
            </tr>

            <tr>
            <th>5</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <th >5</th>
            </tr>

            <tr>
            <th>6</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <th >6</th>
            </tr>

            <tr>
            <th>7</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>0.45</td>
            <th >7</th>
            </tr>

            <tr>
            <th >8</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <th >8</th>
            </tr>

        </tbody>
    </table>

<div class="outputs">
    <div></div>
    <div></div>
    <div></div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>