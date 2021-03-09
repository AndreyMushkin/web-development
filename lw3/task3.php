<?php

//** Password Strength **//

header('Content-Type: text/plain');

$password = $_GET['password'];
$passwordLength = strlen($password);
$passwordStrength = 4 * $passwordLength;

$digitNumber = 0;
$upperLetterNumber = 0;
$lowerLetterNumber = 0;

$i = 0;
while ($i < $passwordLength)
{
	if (is_numeric($password[$i]))
	{
		++$digitNumber;
		$passwordStrength += 4;
	}
	else
	{
		if (ctype_upper($password[$i]))
		{
			++$upperLetterNumber;
		}
		else
		{
			++$lowerLetterNumber;
		}
	}
	++$i;
}

if ($upperLetterNumber > 0)
{
	$passwordStrength += ($passwordLength - $upperLetterNumber) * 2;
}

if ($lowerLetterNumber > 0)
{
	$passwordStrength += ($passwordLength - $lowerLetterNumber) * 2;
}

//if only digits
if ($digitNumber === $passwordLength)
{
	$passwordStrength -= $passwordLength;
}

//if only letters
if ($digitNumber === 0)
{
	$passwordStrength -= $passwordLength;
}

$countedPassword = array_count_values(str_split($password));  //array with counts of each character

for($i = 0; $i <= count($countedPassword); ++$i)
{
	if ($countedPassword[$i] > 1)
	{
		$passwordStrength -= $countedPassword[$i];
	}
}

echo 'Password strength is '. $passwordStrength;