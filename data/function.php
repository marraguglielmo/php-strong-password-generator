<?php


function getRandomPass($password_length, $symbols, $lettersMin, $lettersMai, $numbers)
{
    $password = false;

    if (isset($password_length) && $password_length > 5 && $password_length <= 25) {
        $password = true;
        $allCharacters = array_merge($symbols, $lettersMin, $lettersMai, $numbers);
        $randPassword = [];
        for ($i = 0; $i <= $password_length; $i++) {
            $randPassword = array_rand($allCharacters, 1);
        }
        var_dump($allCharacters[$randPassword]);
    }

    return $password;
}
