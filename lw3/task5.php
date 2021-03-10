<?php

//** Survey Info **//

header('Content-Type: text/plain');

function getQueryStringParameter (string $name): ?string
{
	return isset($_GET[$name]) ? $_GET[$name] : ' ';
}

$email = getQueryStringParameter('email');

if (file_exists("data/{$email}.txt"))
{
   	$file = fopen("data/{$email}.txt", 'r');
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
	fclose($file);
}
else
{
	echo "Email {$email} is not registered.";
}
