<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo '<h2> Password: ' . $_SESSION['generated_password'] . '</h2>';
    session_unset();
    session_destroy();
    ?>
</body>

</html>