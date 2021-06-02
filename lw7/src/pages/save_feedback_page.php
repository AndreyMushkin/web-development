<?php

define('EMAIL_ERR_MSG', 'Некорректный адрес электронной почты');
define('NAME_ERR_MSG', 'Имя должно содержать только буквы русского или латинского алфавита');
define('EMPTY_ERR_MSG', 'Пожалуйста, заполните обязательные поля.');
define('SUCCESS_MSG', 'Ваше сообщение отправлено.');

function validateFormFields(string $name, $email, $message): array
{
    $invalidName = false;
    $invalidEmail = true;
    $emailErrMsg = $nameErrMsg = $emptyErrMsg = null;
    $errorArr = [];

    if (!empty($name) && !empty($email) && !empty($message))
    {
        for ($i = 0; $i < strlen($name) && !$invalidName; $i++)
        {
            if(ctype_digit($name[$i]) or ctype_punct($name[$i]))
            {
                $invalidName = true;
                $errorArr[] = NAME_ERR_MSG;
            }
        }

        if (stripos($email, '@'))
        {
            strtok($email, '@');
            $emailDomen = strtok('@');
            if (stripos($emailDomen, '.'))
                {
                if (ctype_alpha(strtok($emailDomen, '.')) && ctype_alpha(strtok('.')))
                {
                    $invalidEmail = false;
                }       
            }
        }

        if ($invalidEmail)
        {
            $errorArr[] = EMAIL_ERR_MSG;
        }
    }
    else
    {
        $errorArr[] = EMPTY_ERR_MSG;
    }

    return $errorArr;
}

function saveFeedbackPage(): void
{
    $name = getPOSTParameter('name');
    $email = getPOSTParameter('email');
    $message = getPOSTParameter('message');

    $dataArr = [
                'name' => $name, 
                'email' => $email,
                'country' => getPOSTParameter('country'),
                'gender' => getPOSTParameter('gender'),
                'message' => $message,
                ];

    $errorArr = validateFormFields($name, $email, $message);

    if (empty($errorArr))
    {
        if(!file_exists('../data'))
        {
            mkdir('../data');
        }

        $emailLow = strtolower($email);
        $file = fopen("../data/{$emailLow}.txt", 'w');

        foreach ($dataArr as $key => $value) 
        {
            fwrite($file, "{$key}={$value}\r\n");
        }

        renderTemplate('main.tpl.php', []);
    }
    else
    {
        renderTemplate('main.tpl.php', $errorArr);
    }
}
