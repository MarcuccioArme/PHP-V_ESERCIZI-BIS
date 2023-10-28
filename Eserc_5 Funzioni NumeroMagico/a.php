<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numero magico</title>
</head>
<body>

    <h1>Numero magico</h1>

    <form action="<?php echo($_SERVER["PHP_SELF"]) ?>" method="POST">
        <input type="submit" name="submit" value="Gioca">
    </form>
    
</body>
</html>

<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numeroCasuale = GeneraNumeroCasuale();
        VerificaNumeroMagico($numeroCasuale);
    }

    function GeneraNumeroCasuale() {
        return rand(1,1000);
    }

    function VerificaNumeroMagico($numeroCasuale) {
        if ($numeroCasuale % 2 == 0 && $numeroCasuale % 3 == 0 && $numeroCasuale % 5 == 0) {
            echo '<br><br><h1>Hai trovato il numero magico!</h1>';
            echo '<img src="applausi.gif" alt="BRAVOOO!!">';
        } else {
            echo '<p>Il numero ' . $numeroCasuale . ' non è magico.</p>';
        }
    }

?>