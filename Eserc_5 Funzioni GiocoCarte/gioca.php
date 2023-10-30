<?php

    $semi = ["Cuori", "Fiori", "Picche", "Quadri"];
    $cartaEstratta = "ACuori";  //Carta predefinita di base

    $punteggio = 0;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        if (isset($_POST["gioca"])) {
            $valoreCarta = GeneraValoreCarta();
            $semeCarta = GeneraSemeCarta($semi);

            $cartaEstratta = $valoreCarta . $semeCarta;    
        }

    }

    function GeneraValoreCarta() {
        $randNum = rand(1, 13);
        $valoreCarta;

        switch ($randNum) {
            case 1: $valoreCarta = "A";
                break;

            case 11: $valoreCarta = "J";
                break;

            case 12: $valoreCarta = "K";
                break;

            case 13: $valoreCarta = "Q";
                break;

            default: $valoreCarta = $randNum;
                break;
        }

        return $valoreCarta;
    }

    function GeneraSemeCarta($semi) {
        $randNum = rand(0, 3);
        return $semi[$randNum];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Un gioco con le "carte"</title>
</head>
<body>

    <h1>Un gioco con le "carte"</h1>

    <form action="<?php echo($_SERVER["PHP_SELF"]) ?>" method="POST">

        <table border=1>

            <tr>
                <td width="150">La tua carta è:</td>
                <td width="218" height="300">
                    <?php echo '<img src="Carte/' . $cartaEstratta . '.jpg" alt="La carta" width="218" height="300">'; ?>
                </td>
            </tr>

            <tr>
                <td>Il tuo punteggio è:</td>
                <td height="50" align="center">
                    <?php echo $punteggio; ?>
                </td>
            </tr>

        </table>

        <br><input type="submit" name="gioca" value="Gioca">

    </form>

    <h2>Indovina la carta</h2>

    <form action="<?php echo($_SERVER["PHP_SELF"]) ?>" method="POST">

        <table border=1>

            <tr>
                <td width="75" align="center">
                    <h4>Valore</h4>
                </td>
                <td width="75" align="center">
                    <h4>Seme</h4>
                </td>
            </tr>

            <tr>
                <td>
                    <select name="valoreSelected" id="valoreSelected">
                        <option value="A">A</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="J">J</option>
                        <option value="K">K</option>
                        <option value="Q">Q</option>
                    </select>
                </td>
                <td>
                    <select name="semeSelected" id="semeSelected">
                        <option value="Cuori">Cuori</option>
                        <option value="Fiori">Fiori</option>
                        <option value="Picche">Picche</option>
                        <option value="Quadri">Quadri</option>
                    </select>
                </td>
            </tr>

        </table>

        <br><input type="submit" name="indovina" value="Indovina">

    </form>
    
</body>
</html>

<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (isset($_POST["indovina"])) {
            $valoreSelected = $_POST["valoreSelected"];
            $semeSelected = $_POST["semeSelected"];

            $selezione = $valoreSelected.$semeSelected;
        }

    }

?>