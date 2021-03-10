<?php

//** Survey Saver **//

header('Content-Type: text/plain');

function getQueryStringParameter (string $name): ?string
{
	return isset($_GET[$name]) ? $_GET[$name] : ' ';
}

$email = getQueryStringParameter('email');

if (!file_exists('data'))
{
	mkdir('data');
}

$file = fopen('data/' . $email . '.txt', 'w');

fwrite($file, 'first_name=' . getQueryStringParameter('first_name') . '
last_name=' . getQueryStringParameter('last_name') . '
email=' . getQueryStringParameter('email') . '
age=' . getQueryStringParameter('age') . '
');

fclose($file);