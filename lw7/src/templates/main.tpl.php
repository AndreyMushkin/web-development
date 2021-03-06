<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Profile Page</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="shell">
      <header class="top-menu">
        <div class="top-menu__item-container">
          <div class="top-menu__item top-menu__item_selected">
            <img class="top-menu__item-icon" src="img/about_me_icon.png" alt="About Me" />Обо мне 
          </div>
          <div class="top-menu__item">
            <img class="top-menu__item-icon" src="img/hobby_icon.png" alt="Hobby" />Мое хобби
          </div>
          <div class="top-menu__item">
            <img class="top-menu__item-icon" src="img/video_icon.png" alt="Favorite films" />Любимые фильмы
          </div>
        </div>
      </header>
      <div class="content">
        <div class="content__left-content-sidebar">
          <img class="profile-photo" src="img/profile_photo.png" alt="profile photo" />
          <div class="person-name_mobile">
            <h1 class="person-name__name">Jane Doe</h1>
            <div class="person-name__line"></div>
          </div>
          <div class="favorite-list">
            <div class="favorite-list__list-title">Любимые писатели:</div>
            <ul class="favorite-list__list">
              <li class="favorite-list__item">Айзек Азимов</li>
              <li class="favorite-list__item">Говард Лавкрафт</li>
              <li class="favorite-list__item">Дмитрий Глуховский</li>
              <li class="favorite-list__item">Чак Паланик</li>
            </ul>
            <div class="favorite-list__list-title">Любимые фильмы:</div>
            <ol class="favorite-list__list">
              <li class="favorite-list__item favorite-list__item_moved">Шоу Трумэна</li>
              <li class="favorite-list__item">Малхолланд Драйв</li>
              <li class="favorite-list__item">Семь жизней</li>
              <li class="favorite-list__item">Гравитация</li>
            </ol>
          </div>
        </div>
        <div class="content__right-content-sidebar">
          <div class="quote-container">
            <img class="quote-container__quote-icon" src="img/quotes-alpha.png" alt="quotes" />
            <p class="quote-container__quote-text">
              Мы берем на себя много, потому что мало чего боимся
            </p>
            <p class="quote-container__quote-author">
              ― Том Демарко. Deadline
            </p>
          </div>
          <article class="content-text">
            <div class="person-name_widescreen">
              <h1 class="person-name__name">Jane Doe</h1>
              <div class="person-name__line"></div>
            </div>
            <p class="content-text__text">
              В 1930-е годы прошлого века физик Джордж Гамоу из университета штата Колорадо начал публиковать мини-сериал рассказов о неком мистере Томпкинсе, банковском клерке средних лет. Мистер Томпкинс, как явствовало из этих историй, интересовался современной наукой.
            </p>
            <h2 class="content-text__title content-text__title_h2">Мое хобби</h2>
            <p class="content-text__text">
              Он регулярно посещал вечерние лекции местного профессора и, разумеется, всегда засыпал на самом интересном месте. А когда просыпался, то обнаруживал себя в каком-нибудь параллельном мире, где один из основных законов физики действовал не так, как в его мире.
            </p>
            <a class="content-text__contact-me" href=""><u>Напиши мне</u></a>
          </article>
        </div>
      </div>
      <div class="favorite-films">
        <div class="favorite-films__title">Любимые фильмы</div>
        <div class="favorite-films__container">
          <div class="favorite-films__item">
            <img class="favorite-films__img" src="img/shawshank.png" alt="Побег из Шоушенка">
            <div class="favorite-films__name">Побег из Шоушенка</div>
            <div class="favorite-films__description">
              Успешный банкир Энди Дюфрейн обвинен в убийстве собственной жены и ее любовника. Оказавшись в тюрьме под названием Шоушенк, он сталкивается с жестокостью и беззаконием, царящими по обе стороны решетки. Каждый, кто попадает в эти стены, становится их рабом до конца жизни. Но Энди, вооруженный живым умом и доброй душой, отказывается мириться с приговором судьбы и начинает разрабатывать невероятно дерзкий план своего освобождения.
            </div>
          </div>
          <div class="favorite-films__item">
            <img class="favorite-films__img" src="img/anesthesia.png" alt="Наркоз">
            <div class="favorite-films__name">Наркоз</div>
            <div class="favorite-films__description">
              Клай Бересфорд вынужден лечь под нож. Однако в процессе операции на сердце он неожиданно приходит в себя. Находясь в парализованном состоянии, будучи не в силах пошевелить ни рукой, ни ногой, он, тем не менее, чувствует каждое касание скальпеля к своей плоти…
            </div>
          </div>
          <div class="favorite-films__item">
            <img class="favorite-films__img" src="img/astral.png" alt="Астрал">
            <div class="favorite-films__name favorite-films__name_moved">Астрал</div>
            <div class="favorite-films__description">
              Джош и Рене переезжают со своими детьми в новый дом, но не успевают толком распаковать вещи, как начинаются странные события. Необъяснимо перемещаются предметы, в детской звучат странные звуки… Но в настоящий ужас приходят родители, когда их десятилетний сын Далтон впадает в кому. Все усилия врачей в больнице помочь мальчику безуспешны.
            </div>
          </div>
          <div class="favorite-films__item">
            <img class="favorite-films__img" src="img/gravity.png" alt="Гравитация">
            <div class="favorite-films__name">Гравитация</div>
            <div class="favorite-films__description">
              Доктор Райан Стоун, блестящий специалист в области медицинского инжиниринга, отправляется в свою первую космическую миссию под командованием ветерана астронавтики Мэтта Ковальски, для которого этот полет — последний перед отставкой. Но во время, казалось бы, рутинной работы за бортом случается катастрофа. 
              Шаттл уничтожен, а Стоун и Ковальски остаются совершенно одни; они находятся в связке друг с другом, и все, что они могут, — это двигаться по орбите в абсолютно черном пространстве без всякой связи с Землей и какой-либо надежды на спасение.
            </div>
          </div>
        </div>
        <button class="button more-button">Все фильмы</button>
      </div>
      <form class="contact-me-form" method="POST">
        <div class="contact-me-form__title">НАПИШИ МНЕ</div>
        <div class="contact-me-form__items-container">
          <div class="contact-me-form__item-title contact-me-form__item-title_required">Ваше имя</div>
          <input type="text" class="contact-me-form__item" name="name" maxlength="255" required="required" />
          <div class="contact-me-form__item-title contact-me-form__item-title_required">Ваш email</div>
          <input type="text" class="contact-me-form__item" name="email" maxlength="255" required="required" />
          <div class="contact-me-form__item-title">Откуда вы?</div>
          <select class="contact-me-form__item contact-me-form__item_selector" name="country">
            <option class="contact-me-form__country-item" value="Russia">Россия</option>
            <option class="contact-me-form__country-item" value="China">Китай</option>
            <option class="contact-me-form__country-item" value="USA">США</option>
            <option class="contact-me-form__country-item" value="Germany">Германия</option>
            <option class="contact-me-form__country-item" value="Brazil">Бразилия</option>
          </select>
          <div class="contact-me-form__item-title">Ваш пол</div>
          <div class="contact-me-form__radio-item-container">
            <input class="contact-me-form__radio-item" type="radio" name="gender" id="genderMale" value="male"/>
            <label class="contact-me-form__item-title contact-me-form__radio-item-label" for="genderMale">Мужской</label>
          </div>
          <div class="contact-me-form__radio-item-container">
            <input class="contact-me-form__radio-item" type="radio" name="gender" id="genderFemale" value="female"/>
            <label class="contact-me-form__item-title contact-me-form__radio-item-label" for="genderFemale">Женский</label>
          </div>
          <div class="contact-me-form__item-title contact-me-form__item-title_required">Ваше сообщение</div>
          <textarea class="contact-me-form__item contact-me-form__message" name="message" cols="30" rows="10" required="required" maxlength="65536"></textarea>
          <button type="submit" class="button submit-button">Отправить</button>
          <ul class="favorite-list__list">
            <?php
                if (getRequestMethod() === 'POST')
                { 
                    if (!empty($args))
                    {
                        foreach ($args as $arg)
                        {
                            if ($arg)
                            {
                              ?><li class="list__item_error"><?php echo $arg; ?></li><?php
                            }
                        }
                    }
                    else
                    {
                      ?><li class="list__item_success"><?php echo SUCCESS_MSG; ?></li><?php
                    }
                }
            ?>
          </ul>          
        </div>
      </form>
      <footer class="copyright-footer">
        © 2006-2018 Поволжский государственный технологический университет, ФГБОУ ВО «ПГТУ»
      </footer>
    </div>
  </body>
</html>