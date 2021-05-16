<?php

function feedbacksListPage(): void
{

    $email = getPOSTParameter('email');

    if (file_exists("../data/{$email}.txt"))
    {
        $file = fopen("../data/{$email}.txt", 'r');
        while (!feof($file))
        {
            $ptrString = fgets($file);
            switch (strtok($ptrString, '=')) 
            {
                case 'name':
                    $name = strtok('=');
                    break;

                case 'email':
                    $email = strtok('=');
                    break;

                case 'country':
                    $country = strtok('=');
                    break;

                case 'gender':
                    $gender = strtok('=');
                    break;

                case 'message':
                    $message = strtok('=');
                    break;
            }
        }
        fclose($file);

        renderTemplate('feedbacks.tpl.php', [
            'Имя' => $name,
            'Email' => $email,
            'Страна' => $country,
            'Пол' => $gender,
            'Сообщение' => $message,
        ], 'ok');
    }
    else
    {
        renderTemplate('feedbacks.tpl.php', [
            'Email' => $email,
        ], 'error');
    }
}
