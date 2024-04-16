<?php


function getRandomPass($password_length, $symbols, $lettersMin, $lettersMai, $numbers)
{
    $password = false;

    if (isset($password_length) && $password_length > 5 && $password_length <= 25) {
        $password = true;
        $allCharacters = array_merge($symbols, $lettersMin, $lettersMai, $numbers);
    }

    return $password;
}
