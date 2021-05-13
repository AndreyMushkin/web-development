<?php

// чет не пашет
// function ptrTranslate(string $ptr): string
// {
//     $translate = [
//         'male' => 'Мужской',
//         'female' => 'Женский',
//         'Russia' => 'Россия',
//         'China' => 'Китай',
//         'Germany' => 'Германия',
//         'USA' => 'США',
//         'Brazil' => 'Бразилия',
//     ];

//     if (isset($translate[$ptr]))
//     {
//         return $translate[$ptr];
//     }
//     else
//     {
//         return $ptr;
//     }
    
// }

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
                    // $country = ptrTranslate($country);
                    break;

                case 'gender':
                    $gender = strtok('=');
                    // $gender = ptrTranslate($gender);
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
            'status' => 'ok',
        ]);
    }
    else
    {
        renderTemplate('feedbacks.tpl.php', [
            'Email' => $email,
            'status' => 'error',
        ]);
    }
}
