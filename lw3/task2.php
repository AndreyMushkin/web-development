<?php

$identifier = $_GET['identifier'];
$isIdentifier = true;
$index = 0;

header('Content-Type: text/plain');

if (strlen($identifier) == 0)
{
    $isIdentifier = false;
    echo 'No, empty string.';
}

if (is_numeric($identifier[$index]))
{
    $isIdentifier = false;
    echo 'No, digit is in first position.';
    ++$index;    
}

while (($index <= strlen($identifier)) and $isIdentifier)
{
    //if not(letter or digit) 
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