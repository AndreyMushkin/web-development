<?php

$identifier = $_GET['identifier'];
$isIdentifier = true;
$index = 0;

header('Content-Type: text/plain');

//проверка на пустую строку
if (strlen($identifier) == 0)
{
    $isIdentifier = false;
    echo 'No, empty string.';
}

//проверка на цифру в первой позиции
if (is_numeric($identifier[$index]))
{
    $isIdentifier = false;
    echo 'No, digit is in first position.';
    ++$index;    
}

//проверка на недопустимые символы
while (($index <= strlen($identifier)) and $isIdentifier)
{
    //если символ не(буква или цифра) 
    if (!(ctype_alpha($identifier[$index].'a') or is_numeric($identifier[$index])))
    {
        $isIdentifier = false;
        echo 'No, string contains invalid characters.';    
    }
    ++$index;
}

if ($isIdentifier)
{
    echo 'Yes.';
}