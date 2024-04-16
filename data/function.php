<?php
$symbols = ['!', '?', '&', "'", '%', '$', '<', '>', '^', '+', '-', '*', '/', '(', ')', '[', ']', '{', '}', '@', '#', '_', '='];

$lettersMin = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "u", "v", "w", "x", "y", "z"];

$lettersMai = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "U", "V", "W", "X", "Y", "Z"];

$numbers = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];

function getRandomPass($password_length)
{
    $password = false;

    if (isset($password_length) && $password_length > 5) {
        $password = true;
    }

    return $password;
}
