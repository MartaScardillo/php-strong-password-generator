<?php
function passwordGenerator($password_length)
{
    // creo stringhe con caratteri tra cui scegliere
    $numbers = '0123456789';
    $letterLower = 'abcdefghijklmnopqrstuvwxyz';
    $letterUpper = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $symbols = "!@#$%^&*()-_'";

    $characters = $numbers . $letterLower . $letterUpper . $symbols;


    // conto i caratteri nelle stringhe per poi creare un limite per il numero random
    $numbersLength = strlen($numbers);
    $letterLowerLength = strlen($letterLower);
    $letterUpperLength = strlen($letterUpper);
    $symbolsLength = strlen($symbols);
    $charactersLength = strlen($characters);

    // creo la stringa in cui verrà messa la password
    $password = '';

    // mi assicuro che la password abbia un carattere di ogni tipo
    $password .= $numbers[rand(0, $numbersLength - 1)];
    $password .= $letterLower[rand(0, $letterLowerLength - 1)];
    $password .= $letterUpper[rand(0, $letterUpperLength - 1)];
    $password .= $symbols[rand(0, $symbolsLength - 1)];



    // genero il resto dei caratteri random
    for ($i = 4; $i < $password_length; $i++) {
        $password .= $characters[rand(0, $charactersLength - 1)];
    }

    // mescolo i caratteri della password per evitare il pattern iniziale
    $password = str_shuffle($password);
    return $password;

}


?>