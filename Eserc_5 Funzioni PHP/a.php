<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Sentinella</title>
</head>
<body>

    <h1>La Sentinella</h1>

    <form action="<?php echo($_SERVER["PHP_SELF"]) ?>" method="POST">
        <input type="submit" name="submit" value="Genera">
    </form>

</body>
</html>

<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $sentinella = rand(1,100);
        $contatore = 0;
    
        echo "<br>La sentinella è: $sentinella <br><br>";
    
        while ($contatore < 10) {
    
            $randNum = rand(1,100);
            echo "Il numero casuale è: $randNum <br>";
    
            if ($randNum > $sentinella) {
                $contatore++;
            }
        }
    
        echo "<br>Hai trovato 10 numeri maggiori della sentinella!";

    }

?>