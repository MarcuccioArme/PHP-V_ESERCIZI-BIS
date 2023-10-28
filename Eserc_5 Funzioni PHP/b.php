<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcola il fattoriale</title>
</head>
<body>
    
    <h1>Calcola il fattoriale</h1>

    <form action="<?php echo($_SERVER["PHP_SELF"]) ?>" method="POST">

        <input type="number" id="numero" name="numero" required>
        <input type="submit" name="submit" value="Calcola il Fattoriale"><br><br>

    </form>

</body>
</html>

<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $numero = $_POST["numero"];

        if ($numero >= 1 && $numero <= 100) {
            $fattoriale = CalcolaFattoriale($numero);
            echo "Il fattoriale del numero $numero è: $fattoriale";
        } else {
            echo "Errore: Il numero deve essere compreso tra 1 e 100.";
        }

    }

    function CalcolaFattoriale($numero) {
        $res = 1;
        for ($i=1; $i<=$numero; $i++) $res=$res*$i;
        return $res;
    }

?>