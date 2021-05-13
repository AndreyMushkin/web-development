<?php

require_once(__DIR__ . '\..\utils\request.php');

function saveFeedbackPage(): void
{
    $invalidName = false;
    $invalidEmail = true;

    $name = getPOSTParameter('name');
    $email = getPOSTParameter('email');
    $country = getPOSTParameter('country');
    $gender = getPOSTParameter('gender');
    $message = getPOSTParameter('gender');

    if (!(empty($name) || empty($email) || empty($message)))
    {
        for ($i = 0; $i < strlen($name); $i++)
        {
            if(ctype_digit($name[$i]))
            {
                $invalidName = true;
            }
        }

        for ($i = 0; $i < strlen($email); $i++)
        {
            if ($email[$i] === '@')
            {
                $invalidEmail = false;
            }
        }

        if ($invalidEmail)
        {
            $email_err_msg = 'Некорректный адрес электронной почты';
        }

        if ($invalidName)
        {
            $name_err_msg = 'Некорректное имя';
        }

        if (!($invalidEmail || $invalidName))
        {
            $success = 'Ваше сообщение отправлено.';

            if(!file_exists('../data'))
            {
                mkdir('../data');
            }
            $email = strtolower($email);
            $file = fopen("../data/{$email}.txt", 'w');
            foreach ($_POST as $key => $value) 
            {
                fwrite($file, "{$key}={$value}\r\n");
            }
        }
    }
    else
    {
        $empty_err_msg = 'Пожалуйста, заполните обязательные поля.';
    }

    renderTemplate('main.tpl.php', [
        'email_err_msg' => $email_err_msg,
        'name_err_msg' => $name_err_msg,
        'empty_err_msg' => $empty_err_msg,
        'success' => $success,
    ]);
}
