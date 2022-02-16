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
<body>
    <div id="imprimer_zone">
    <h2>Welcome to SOLIDAO</h2>
    
    <form action="code.php" method="post" name="données">
        <h4>Simuler votre consommation d'électricité mensuelle</h4>
        <div class="input-group mb-3 ">
            <span class="input-group-text" id="basic-addon1">Entrer L'index du mois dérnier: </span>
            <input type="number" name="Index1" id="Index1" class="form-control">
        </div>
        <div class="input-group mb-3 ">
            <span class="input-group-text" id="basic-addon1">Entrer L'index du ce mois: </span>
            <input type="number" name="Index2" id="Index2" class="form-control">
        </div>
        <div class="input-group mb-3 row">
            <label class="col">Entrer le calibre:</label>
            <div class="input-group col">
                <div class="input-group-text">
                    <input type="radio" name="v" id="1" value="5-10" class="form-check-input mt-0">
                </div>
                <label for="1" class="form-check-label" > 5-10</label>
            </div>
            <br>
            <div class="input-group col">
                <div class="input-group-text">
                    <input type="radio" name="v" id="2" value="15-20" class="form-check-input mt-0">
                </div>
                <label for="2" class="form-check-label">15-20</label>
            </div>
            <br>
            <div class="input-group col">
                <div class="input-group-text">
                    <input type="radio" name="v" id="3" value=">30" class="form-check-input mt-0">
                </div>
                <label for="3" class="form-check-label"> >30</label>
            </div>
        </div>

        <input type="submit" name="valider" class="btn-check" id="btn-check-outlined" autocomplete="off">
        <label class="btn btn-outline-primary" for="btn-check-outlined">Calculer</label>
    </form>

    <?php
    if (isset($_POST['valider'])) {
        $Index1 = $_POST['Index1'];
        $Index2 = $_POST['Index2'];
        $calibre = $_POST['v'];
    }
    include("Math.php");
    include("Functions.php");
     $consommation = Substraction($Index1, $Index2);
    ?>

    <div class="inputs">
        <div class="boxs">
            <?php
            echo "Ancien index: " . $Index1;
            ?>
        </div>
        <div class="boxs">
            <?php
            echo 'Nouvel index: ' . $Index2;
            ?>
        </div>
        <div class="boxs">
            <?php
            echo 'Consommation: ' . $consommation . ' kWh';
            ?>
        </div>
    </div>

</div>
<table class="table table-striped">
        <caption>Votre facture provisoire</caption>
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
                    <?php if ($consommation > 100 && $consommation <= 150) {
                        echo 'Tranche1';
                    } else
                        echo Tranches($consommation);
                    ?>
                </th>
                <td>
                    <?php if ($consommation > 100 && $consommation <= 150) {
                        echo '100';
                    } else  echo $consommation;
                    ?>
                </td>
                <td>
                    <?php if ($consommation > 100 && $consommation <= 150) {
                        echo "0,794";
                    } else {
                        echo $PU = TarifKWT($consommation);
                    }
                    ?>
                </td>
                <td>
                    <?php if ($consommation > 100 && $consommation <= 150) {
                        echo $HT0 = Multiplication(100, 0.794);
                    } else
                        echo $HT = Multiplication($consommation, $PU);
                    ?>
                </td>
                <td>14%</td>
                <td>
                    <?php if ($consommation > 100 && $consommation <= 150) {
                        echo $Taxes0 = Multiplication($HT0, 14 / 100);
                    } else
                        echo $Taxes = Multiplication($HT, 14 / 100);
                    ?>
                </td>
                <th>
                    <?php if ($consommation > 100 && $consommation <= 150) {
                        echo  "1الشطر";
                    } else echo اشطر($consommation);
                    ?>
                </th>
            </tr>
            <tr>
                <th>
                    <?php if ($consommation > 100 && $consommation <= 150) {
                        echo "Tranche 2";
                    }
                    ?>
                </th>
                <td>
                    <?php if ($consommation > 100 && $consommation <= 150) {
                        echo $rest = $consommation - 100;
                    }
                    ?>
                </td>
                <td>
                    <?php if ($consommation > 100 && $consommation <= 150) {
                        echo "0.883";
                    }
                    ?>
                </td>
                <td>
                    <?php if ($consommation > 100 && $consommation <= 150) {
                        echo $ht = Multiplication($rest, 0.883);
                    }
                    ?>
                </td>
                <td>
                    <?php if ($consommation > 100 && $consommation <= 150) {
                        echo "14%";
                    }
                    ?>
                </td>
                <td>
                    <?php if ($consommation > 100 && $consommation <= 150) {
                        echo $Otaxe = Multiplication($ht, 14 / 100);
                    }
                    ?>
                </td>
                <th>
                    <?php if ($consommation > 100 && $consommation <= 150) {
                        echo "2 الشطر";
                    }
                    ?>
                </th>
            </tr>
            <tr>
                <th>REDEVANCE FIXE ELECTRICITE</th>
                <td colspan=2></td>
                <td>
                    <?php echo $PHT = Montant_HT($calibre); ?>
                </td>
                <td>14%</td>
                <td>
                    <?php echo $PTaxes = Multiplication($PHT, 14 / 100); ?>
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
                    <?php if ($consommation > 100 && $consommation <= 150) {
                        echo $TVA = Addition($Otaxe, Addition($Taxes0, $PTaxes));
                    } else echo $TVA = Addition($Taxes, $PTaxes);
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
                    if ($consommation > 100 && $consommation <= 150) {
                        echo $Stotal1 = Addition($ht, Addition($HT0, $PHT));
                    } else echo $Stotal1 = Addition($PHT, $HT);
                    ?>
                </td>
                <td>
                    <?php echo $Stotal2 = Addition($TVA, 0.45); ?>
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
            <h2> <?php echo  $total = Addition($Stotal1, $Stotal2) . '  DH' ?> </h2>
        </div>
        <div>
            <h4>مجموع الكھرباء </h4>
        </div>
    </div>

    <button type="button" class="btn btn-primary" onclick="window.print();" id="imprimer_zone">Imprimer</button>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>