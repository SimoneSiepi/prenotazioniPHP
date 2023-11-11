<?php session_start(); ?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lista prenotazioni</title>
</head>

<body>
    <h1>Lista prenotazioni</h1>

    <?php
    $_totale = 0;
    $_max = 0;
    $_eventoPopolare;

    foreach ($_SESSION["prenotazioni"] as $evento => $posti) {
        echo $evento . " posti " . $posti . "<br>";
        $_totale += $posti;
        if ($posti > $_max) {
            $_max = $posti;
            $_eventoPopolare = $evento;
        }
    }
    echo "ci sono un totale di " . $_totale . " posti prenotati </br>";
    echo "l'evento con piu' prenotazioni e' " . $_eventoPopolare . " con " . $_max . " posti prenotati</br>";

    session_unset();
    ?>
    <br>
    <a href="./form.html">nuova prenotazione</a><br>
    <a href="../index.html">home principale</a>
</body>

</html>