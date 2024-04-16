<?php


function getRandomPass($password_length, $symbols, $lettersMin, $lettersMai, $numbers)
{
    $password = false;
    $randPassword = '';

    if (isset($password_length) && $password_length > 5 && $password_length <= 25) {
        $password = true;
        $allCharacters = array_merge($symbols, $lettersMin, $lettersMai, $numbers);
        for ($i = 1; $i <= $password_length; $i++) {
            // estraggo l'indice casuale
            $randIndex = array_rand($allCharacters);
            var_dump($randIndex);
            $randPassword .= $allCharacters[$randIndex];
        }
        var_dump($randPassword);
    }

    return $password ? $randPassword : false;
}
