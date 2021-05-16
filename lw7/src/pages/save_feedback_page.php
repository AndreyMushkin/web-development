<?php

require_once(__DIR__ . '\..\utils\request.php');

define('EMAIL_ERR_MSG', 'Некорректный адрес электронной почты');
define('NAME_ERR_MSG', 'Имя должно содержать только буквы русского или латинского алфавита');
define('EMPTY_ERR_MSG', 'Пожалуйста, заполните обязательные поля.');
define('SUCCESS_MSG', 'Ваше сообщение отправлено.');

function saveFeedbackPage(): void
{
    $invalidName = false;
    $invalidEmail = true;
    $status = 'error';
    $emailErrMsg = $nameErrMsg = $emptyErrMsg = null;

    $name = getPOSTParameter('name');
    $email = getPOSTParameter('email');
    $message = getPOSTParameter('gender');

    if (!empty($name) && !empty($email) && !empty($message))
    {
        for ($i = 0; $i < strlen($name); $i++)
        {
            if(ctype_digit($name[$i]) or ctype_punct($name[$i]))
            {
                $invalidName = true;
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
            $emailErrMsg = EMAIL_ERR_MSG;
        }

        if ($invalidName)
        {
            $nameErrMsg = NAME_ERR_MSG;
        }

        if (!($invalidEmail || $invalidName))
        {
            $status = 'ok';

            if(!file_exists('../data'))
            {
                mkdir('../data');
            }
            $emailLow = strtolower($email);
            $file = fopen("../data/{$emailLow}.txt", 'w');
            foreach ($_POST as $key => $value) 
            {
                fwrite($file, "{$key}={$value}\r\n");
            }
        }
    }
    else
    {
        $emptyErrMsg = EMPTY_ERR_MSG;
    }

    renderTemplate('main.tpl.php', [
        $emailErrMsg,
        $nameErrMsg,
        $emptyErrMsg,
    ], $status);
}
