<?php
session_start();
include("./partials/functions.php");
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
    // mi assicuro che parta la funzione passwordGenerator solo se i dati sono corretti e se sono stati inviati
    if (isset($_GET['submit'])) {
        $password_length = $_GET['password_input'];
        if ($password_length <= 4) {
            echo '<h2> Errore! Inserire un numero maggiore di 4 </h2>';
        } else {
            $_SESSION['generated_password'] = passwordGenerator($password_length);
            header('Location:' . 'password.php');
        }
    }
    ;
    ?>
</body>

</html>