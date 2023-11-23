<?php
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
    if (isset($_GET['submit'])) {
        $password_length = $_GET['password_input'];
        echo '<h2> Password: ' . passwordGenerator($password_length) . '</h2>';
    }
    ;
    ?>
</body>

</html>