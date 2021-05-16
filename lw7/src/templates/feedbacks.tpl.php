<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedbacks</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet" />
  </head>
  <body>
    <form class="contact-me-form" method="POST">
      <div class="contact-me-form__title">СООБЩЕНИЯ</div>
      <div class="contact-me-form__item-title contact-me-form__item-title_required">Введите email пользователя</div>
      <input class="contact-me-form__item" type="email" name="email" required="required" />
      <button type="submit" class="button submit-button">Отправить</button>
      <ul class="list">
        <?php
            if ($status === 'ok')
            {
                foreach ($args as $key => $value) 
                {
                    ?> <li><?php echo $key; ?>: <?php echo $value; ?></li><?php
                }
            }
            elseif ($status === 'error')
            {
                ?><li class="list__item_error">
                    Запись для почты <?php echo $args['Email']; ?> не найдена
                  </li><?php
            }
        ?>
      </ul>
    </form>
  </body>
</html>