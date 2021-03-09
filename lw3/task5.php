<?php

//** Survey Info **//

header('Content-Type: text/plain');

function getQueryStringParameter (string $name): ?string
{
	return isset($_GET[$name]) ? $_GET[$name] : ' ';
}

$email = getQueryStringParameter('email');

$file = fopen('data/' . $email . '.txt', 'r');

while (!feof($file))
{
	$parameterString = fgets($file);
	switch (strtok($parameterString, '=')) 
	{
		case 'first_name':
			echo 'First Name: ' . strtok('=');
			break;

		case 'last_name':
			echo 'Last Name: ' . strtok('=');
			break;

		case 'age':
			echo 'Age: ' . strtok('=');
			break;

		case 'email':
			echo 'Email: ' . strtok('=');
			break;
	}
}
