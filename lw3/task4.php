<?php

//** Survey Saver **//

header('Content-Type: text/plain');

function getQueryStringParameter(string $name): string
{
    return isset($_GET[$name]) ? $_GET[$name] : '';
}

$email = getQueryStringParameter('email');

if (!file_exists('data'))
{
    mkdir('data');
}

if ($email)
{
    $file = fopen("data/{$email}.txt", 'w');
    
    fwrite($file, 'first_name=' . getQueryStringParameter('first_name') . PHP_EOL . 
    'last_name=' . getQueryStringParameter('last_name') . PHP_EOL . 
    'email=' . getQueryStringParameter('email') . PHP_EOL . 
    'age=' . getQueryStringParameter('age') . PHP_EOL
    );

    fclose($file);
}
else
{
    echo 'Required email value';
}
