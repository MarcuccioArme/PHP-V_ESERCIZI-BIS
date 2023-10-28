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
                    
                </td>
            </tr>

            <tr>
                <td>Il tuo punteggio è:</td>
                <td height="50"></td>
            </tr>

        </table>

        <input type="submit" name="submit" value="Gioca">

    </form>
    
</body>
</html>

<?php

    $semi = ["Cuori", "Fiori", "Picche", "Quadri"];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numeroCarta = GeneraNumeroCarta();
        $semeCarta = GeneraSemeCarta($semi);

        $cartaEstratta = $numeroCarta . $semeCarta;

        echo $cartaEstratta;
    }

    function GeneraNumeroCarta() {
        $randNum = rand(1, 13);
        $numeroCarta;

        switch ($randNum) {
            case 1: $numeroCarta = "A";
                break;

            case 11: $numeroCarta = "J";
                break;

            case 12: $numeroCarta = "K";
                break;

            case 13: $numeroCarta = "Q";
                break;

            default: $numeroCarta = $randNum;
                break;
        }

        return $numeroCarta;
    }

    function GeneraSemeCarta($semi) {
        $randNum = rand(0, 3);
        return $semi[$randNum];
    }
?>