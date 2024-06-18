<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Контакты</title>
    <meta name='viewport' content='width=device-width, user initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='assets\css\normalize.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='assets\css\main.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='assets\css\contacts.css'>

</head>

<body>
    <?php include 'assets/php/header.php'; ?>

    <div class="banner">
        <div class="container">
            <div class="bannerText">
                <h1>Контакты</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <h3>ООО «ПК РОКОС»</h3>
        <div class="contactsRow">
            <div class="block">
                <p><b>Офисы продаж Воронеж:</b></p>
                <p>ул. Ленинградская, д. 114, пом. 3</p>
                <p>тел: <a href="tel:+7(473)258-89-88">+7 (473) 258 89-88</a></p>
                <p>моб.тел: <a href="tel:+7-910-746-89-88">+7 (910) 746 89-88</a></p>
                <p>График работы: ПН-ПТ с 8:00 до 18:00</p>
                <iframe src="https://yandex.ru/map-widget/v1/?lang=ru_RU&amp;scroll=true&amp;source=constructor-api&amp;um=constructor%3A64da2e4e2af50c60ab8ccf43d01034f2689e0d5db82675f32921a5af668a703a" frameborder="0" allowfullscreen="true" width="100%" height="360px" style="display: flex;"></iframe>
            </div>

            <div class="block">
                <p><b>Офис продаж Старый Оскол:</b></p>
                <p>Старый оскол, мкр. Олимпийский,<br>
                    дом 62 (бизнес центр), эт. 3, оф. 315</p>
                <p>моб.тел: <a href="tel:+7-915-540-13-65">+7 (915) 540 13-65</a></p>
                <p>моб.тел: <a href="tel:+7-910-746-89-88">+7 (910) 746 89-88</a></p>
                <p>График работы: ПН-ПТ с 8:00 до 18:00</p>
                <iframe src="https://yandex.ru/map-widget/v1/?lang=ru_RU&amp;scroll=true&amp;source=constructor-api&amp;um=constructor%3Aaa532587480972b75b9b1f20f022c88863ebc3646ef1cd091e2ed5bc455d0f40" frameborder="0" allowfullscreen="true" width="100%" height="360px" style="display: flex;"></iframe>
            </div>
        </div>
        <div class="contactsRow">
            <div class="block">
                <p><b>Производство:</b></p>
                <p>ул. Лебедева, дом 10«В», офис 1<br>
                    График работы склада: ПН-ПТ с 8:00 до 17:00</p>
                <p><b>Дилерам и оптовым клиентам:</b></p>
                <p>Телефон <a href="tel:+7-473-258-85-85">+7-473-258-85-85</a></p>
                <p>E-mail <a href="mailto:zakaz@pk-rokos.ru">zakaz@pk-rokos.ru</a></p>
                <p><b>Социальные сети:</b></p>
                <a class="social__link" href="https://vk.com/rokos36"><img alt="Логотип социальной сети Вконтакте" src="images/vk.jpg"> </a>
            </div>

            <div class="block">
                <form action="assets/php/contact_table.php" id="obratnaj" method="post">
                    <div class="zag">Остались вопросы?<br>Заполните форму, и мы с Вами свяжемся!</div>
                    <div class="formRow">
                        <input type="text" name="name" placeholder="Ваше имя">

                    </div>
                    <div class="formRow">
                        <input type="text" name="email" placeholder="Ваш e-mail" required>
                        <input type="text" name="phone" placeholder="Ваш телефон" required>
                    </div>
                    <div class="formRow">
                        <textarea name="text" rows="4" placeholder="Текст сообщения" ></textarea>
                    </div>
                    <div class="formRow">
                        <p id="form-caption">Нажимая на кнопку вы соглашаетесь на <a download="" href="/files/polytic.pdf">обработку персональных данных</a></p>
                    </div>

                    <div class="formRow">
                        <button class="button">Отправить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php include 'assets/php/footer.php'; ?>

</body>

</html>