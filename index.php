<?php




function passwordGenerator($password_length)
{
    // creo una stringa con numeri e lettere tra cui scegliere
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()-_';

    // conto i caratteri nella stringa per poi creare un limite per il numero random
    $charactersLength = strlen($characters);

    // creo la stringa in cui verrà messa la password
    $password = '';

    // creo con il ciclo for la password utilizzando la lunghezza di charaters come limite massimo del generatore random
    for ($i = 0; $i < $password_length; $i++) {
        $password .= $characters[rand(0, $charactersLength - 1)];
    }
    return $password;

}


?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="GET" name="form">
        <input type="number" name="password_input" id="password_input">
        <input type="submit" value="Genera" name='submit'>
    </form>
    <?php
    if (isset($_GET['submit'])) {
        $password_length = $_GET['password_input'];
        echo '<h2> Password: ' . passwordGenerator($password_length) . '</h2>';
    }
    ;
    ?>
</body>

</html>