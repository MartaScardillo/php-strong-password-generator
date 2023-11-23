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