<?php

$string = $_GET['text'];
$index = 0;
$resultString = '';

header("Content-Type: text/plain");

while ($string[$index] === ' ')
{
    $index += 1;
}

while (($string[$index] !== ' ') and ($index <= strlen($string)))
{
    $resultString .= $string[$index];
    $index += 1;
    if ($string[$index] === ' ')
    {
        $resultString .= ' ';
        while ($string[$index] === ' ')
	{
	    $index += 1;
	}
    }
}

echo $resultString;		