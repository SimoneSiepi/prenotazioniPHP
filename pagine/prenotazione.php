<?php session_start(); ?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prenotazione inserita</title>
</head>

<body>

    <h1>Evento prenotato</h1>
    <?php
    if (isset($_POST["evento"]) && isset($_POST["posti"])) {
        $evento = $_POST["evento"];
        $posti = $_POST["posti"];
        if ($evento <= 0 || $posti <= 0) {
            echo "Il numero di partecipanti e posti deve essere maggiore di 0<br>";
        } else {
            $evento=$_POST["evento"];
            if (!isset($_SESSION["prenotazioni"][$evento])) {
                $_SESSION["prenotazioni"][$evento]=0;
            }
            $_SESSION["prenotazioni"][$evento] += $_POST["posti"];
            echo "<p>hai prenotato per  " . $evento . "  un numero di posti pari a:  " . $_POST["posti"] . "</p>";
            echo "<p>totale prenotazioni= " . $_SESSION["prenotazioni"][$evento] . "</p>";
        }
    } else {
        echo "i dati del form non sono stati inseriti correttamente<br>";
    }
    ?>

    <a href="./form.html">nuova prenotazione</a><br>
    <a href="./listaPrenotazioni.php">lista prenotazioni</a><br>
</body>

</html>