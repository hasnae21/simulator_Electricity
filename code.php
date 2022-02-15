<!DOCTYPE html>
<html>

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
        <label for="Index1">Entrer L'index du mois dérnier: </label>
        <input type="number" name="Index1" id="Index1" >
        <br>
        <label for="Index2">Entrer L'index du ce mois:</label>
        <input type="number" name="Index2" id="Index2" >
        <br>
        <label for="1">Entrer le Calibre: 5-10</label>
        <input type="radio" name="v" id="1">
        <label for="2">15-20</label>
        <input type="radio" name="v" id="2">
        <label for="3"> >30</label>
        <input type="radio" name="v" id="3">
        <br>
        <input type="submit" name="valider" value="Calculer">
    </form>
    <!-- colspan=3 -->
    <?php
    if (isset($_POST['valider'])) {
        $Index1 = $_POST['Index1'];
        $Index2 = $_POST['Index2'];
        $calibre = $_POST['v'];
    }
    include("functions.php");
    $consommation = Substraction($Index1, $Index2);

    ?>
    
    <section>
    <div class="inputs">
        <div class="box">
            <?php
            echo "Ancien index:     " . $Index1;
            ?>
        </div>
        <div class="box">
            <?php
            echo 'Nouvel index::      ' . $Index2;
            ?>
        </div>
        <div class="box">
            <?php
            echo 'Consommation:       ' . $consommation . ' kWh';
            ?>
        </div>
    </div>

    <caption>Votre facture provisoire:</caption>
    <table>
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">مفوتر <br>Facturé</th>
                <th scope="col">س.و <br> P.U</th>
                <th scope="col">المبلغ د.إ.ر <br> Montant HT</th>
                <th scope="col">ض.ق.م <br>Taux TVA</th>
                <th scope="col">مبلغ الرسوم <br> Montant Taxes</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>CONSOMMATION ELECTRICITE</th>
                <td colspan=5></td>
                <th>إستھلاك الكھرباء</th>
            </tr>
            <tr>
                <th>
                    <?php echo  $consommation; ?>
                </th>
                <td>
                    <?php echo  $consommation; ?>
                </td>
                <td>
                    <?php
                    echo $consommation;
                    ?>
                </td>
                <td>
                    <?php
                    echo  $consommation;
                    ?>
                </td>
                <td>14%</td>
                <td>
                    <?php
                    echo  $consommation;
                    ?>
                </td>
                <th>
                    <?php echo  $consommation; ?>
                </th>
            </tr>
            <tr>
                <th>
                    <?php echo  $consommation; ?>
                </th>
                <td>
                    <?php echo  $consommation; ?>
                </td>
                <td>
                    <?php echo  $consommation; ?>
                </td>
                <td>
                    <?php echo  $consommation; ?>
                </td>
                <td>14%</td>
                <td>
                    <?php echo  $consommation; ?>
                </td>
                <th>
                    <?php echo  $consommation; ?>
                </th>
            </tr>
            <tr>
                <th>REDEVANCE FIXE ELECTRICITE</th>
                <td colspan=2></td>
                <td>
                    <?php
                    echo $consommation;
                    ?>
                </td>
                <td>14%</td>
                <td>
                    <?php
                    echo $consommation;
                    ?>
                </td>
                <th>إثاوة ثابتة الكھرباء </th>
            </tr>

            <tr>
                <th>TAXES POUR LE COMPTE DE L’ETAT</th>
                <td colspan=5></td>
                <th>الرسوم المؤداة لفائدة الدولة </th>
            </tr>

            <tr>
                <th>TOTAL TVA</th>
                <td colspan=4></td>
                <td>
                    <?php
                    echo  $consommation;
                    ?>
                </td>
                <th>مجموع ض.ق.م</th>
            </tr>

            <tr>
                <th>TIMBRE</th>
                <td colspan=4></td>
                <td>0.45</td>
                <th>الطابع</th>
            </tr>

            <tr>
                <th>SOUS-TOTAL</th>
                <td colspan=4>
                    <?php
                    echo  $consommation;
                    ?></td>
                <td>
                    <?php
                    echo $consommation;
                    ?>
                </td>
                <th>المجموع الجزئي</th>
            </tr>

        </tbody>
    </table>

    <div class="outputs">
        <div>
            <h4>ÉLECTRICITÉ</h4>
        </div>
        <div>
            <?php
            echo  $consommation;
            ?>
        </div>
        <div>
            <h4>مجموع الكھرباء </h4>
        </div>
    </div>
    </section>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>