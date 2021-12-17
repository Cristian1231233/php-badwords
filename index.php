<!-- Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall’utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito 
con tre asterischi (***) tutte le occorrenze della parola da censurare. -->

<?php 



$p = 'La parola visualizzata è : ciao';

$parola = $_GET['parola'];

$pConParolaUtente = $parola;


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>

    
    <p><?php echo $p ?> ed è lunga <?php echo strlen($p); ?></p>
    <p> <?php echo $p ?> ed è lunga <?php echo strlen($p); ?> <?php echo str_replace($parola, '***', $pConParolaUtente); ?></p>

</body>
</html>