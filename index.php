<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Main Page</title>
    <meta name='viewport' content='width=device-width, user initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='assets\css\normalize.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='assets\css\main.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='assets\css\mainPage.css'>
</head>

<body style="background-image: url(images/bg.jpg) ; background-attachment: fixed; ">
    <?php include 'header.php'; ?>
    <div class="banner"><img src="images/banner.jpg" alt="">

    </div>
    <div class="catalogg">
        <div class="container">
            <div class="catalogWrap">
                <h1 class="text-center">Окна и двери <span class="red">от производителя</span></h1>
                <div class="catalogContainer">
                    <div class="left">
                        <div class="block" style="background-image: url(images/catalog-omg/product1.jpg)"></div>
                        <div class="sub-blocks">
                            <div class="block" style="background-image: url(images/catalog-omg/product2.jpg)"></div>
                            <div class="block" style="background-image: url(images/catalog-omg/product3.jpg)"></div>
                        </div>
                    </div>
                    <div class="right">
                        <div class="block" style="background-image: url(images/catalog-omg/product4.jpg)"></div>
                        <div class="block" style="background-image: url(images/catalog-omg/product5.jpg)"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form id="formred" action="/submit/order" method="POST">
        <div class="container">
            <div class="formcenter">
                <h2>Заказать бесплатный замер</h2>
                <div class="formWrapper">
                    <div class="reddiv">Как Вас зовут?<br>
                        <input type="text" name="name" required="required">
                    </div>
                    <div class="reddiv">Ваш телефон:<br>
                        <input type="text" name="phone" required="required" placeholder="+7 999 999-9999">
                    </div>
                    <div class="but">
                        <button class="button" onclick="">Отправить</button>
                    </div>
                </div>
                <p class="smalltext">Нажимая кнопку «Заказать», Вы даете свое согласие на <a href="/files/polytic.pdf">обработку персональных данных</a></p>
            </div>
        </div>
    </form>

    <div class="description">
        <div class="container">
            <div class="descriptionWrap">
                <div class="textAbout">
                    <h2>Наше производство</h2>
                    <p>ПК Рокос – воронежский производитель светопрозрачных пластиковых конструкций для остекления
                        частных,
                        многоквартирных домов, офисных,
                        коммерческих, административных зданий. Предлагаем полный цикл услуг – от проектирования до
                        монтажа. Продукция компании изготавливается на собственном предприятии.
                        Для заказа доступны входные, межкомнатные, балконные двери распашного и раздвижного типа,
                        а также оконные конструкции, в том числе изделия нестандартных цветов и конфигураций.
                        Мы используем современные материалы и новые технологии производства, которые гарантируют высокий
                        уровень качества.
                        В нашем каталоге огромное количество моделей, что является возможностью подстроиться под любые
                        размеры проемов и дизайн помещений.
                        Если вам нужны подоконники нестандартной ширины или любые другие индивидуальные задачи, то наш
                        замерщик, в удобное для вас время,
                        произведет точные замеры, которые помогут рассчитать все характеристики.
                    </p>
                </div>
                <img src="images/about.jpg" alt="" class="imgAbout">
            </div>
        </div>
    </div>
    <div class="advantages">
        <div class="container">
            <div class="advantages_wrap">
                <div class="advantages__item">
                    <img src="images/icons/1.png" alt="" class="advantages__ico">
                    <div class="advantages__content">
                        <p class="advantages__subtitle">Индивидуальный подход</p>
                        <p class="advantages__text">Учитываем желания каждого клиента</p>
                    </div>
                </div>
                <div class="advantages__item">
                    <img src="images/icons/2.png" alt="" class="advantages__ico">
                    <div class="advantages__content">
                        <p class="advantages__subtitle">Индивидуальный подход</p>
                        <p class="advantages__text">Учитываем желания каждого клиента</p>
                    </div>
                </div>
                <div class="advantages__item">
                    <img src="images/icons/3.png" alt="" class="advantages__ico">
                    <div class="advantages__content">
                        <p class="advantages__subtitle">Индивидуальный подход</p>
                        <p class="advantages__text">Учитываем желания каждого клиента</p>
                    </div>
                </div>
                <div class="advantages__item">
                    <img src="images/icons/4.png" alt="" class="advantages__ico">
                    <div class="advantages__content">
                        <p class="advantages__subtitle">Индивидуальный подход</p>
                        <p class="advantages__text">Учитываем желания каждого клиента</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ourProjects">
        <div class="container">
            <div class="projectsWrap">
                <h2>Наши <span class="red">работы</span></h2>
                <div class="projectsWrapper">
                    <div class="projectItem">
                        <div class="itemImg"><img src="images/projects/1.jpg" alt=""></div>
                        <div class="itemDescr"><span>Детский сад на 220 мест по ул. Ягодная в с. Ямное</span></div>
                    </div>
                    <div class="projectItem">
                        <div class="itemImg"><img src="images/projects/2.jpg" alt=""></div>
                        <div class="itemDescr"><span>Спортивный комплекс в г.Лиски Воронежской области</span></div>
                    </div>
                    <div class="projectItem">
                        <div class="itemImg"><img src="images/projects/3.jpg" alt=""></div>
                        <div class="itemDescr"><span>Детский сад на 340 мест микрорайон «Ольха» в с.Новая Усмань</span>
                        </div>
                    </div>
                </div>
                <div class="projectBtn"><a href="" class="button">Ещё фото работ</a></div>
            </div>
        </div>
    </div>
    <div class="recentNews">
        <div class="container">
            <div class="newsWrap">
                <h2>Последние <span class="red">новости</span></h2>
                <div class="newsWrapper">
                    <div class="newsItem">
                        <div class="newsImg"><img src="images/blog/1.jpg" alt=""></div>
                        <div class="newsDescr">
                            <span class="cardTitle">Советы по выбору балконных пластиковых дверей</span>
                            <span class="cardText">Пластиковые балконные двери органично вписываются в любой стиль
                                оформления интерьера,
                                не боятся интенсивной эксплуатации, имеют долгий срок службы в течении многих лет и
                                являются отличной защитой от пыли и уличного мусора.</span>
                        </div>
                    </div>
                    <div class="newsItem">
                        <div class="newsImg"><img src="images/blog/2.jpg" alt=""></div>
                        <div class="newsDescr">
                            <span class="cardTitle">Алюминиевые окна: преимущества и недостатки</span>
                            <span class="cardText">Алюминиевые окна покупатели выбирают реже пластиковых из-за их
                                высокой стоимости.
                                Но они имеют несколько существенных преимуществ, которых нельзя достичь при
                                использовании пластика и
                                древесины. </span>
                        </div>
                    </div>
                    <div class="newsItem">
                        <div class="newsImg"><img src="images/blog/3.jpg" alt=""></div>
                        <div class="newsDescr">
                            <span class="cardTitle">Популярные виды пластиковых окон</span>
                            <span class="cardText">Окна ПВХ - классификация по типу механизма, рамы и стеклопакета.
                                Специальные разновидности для дач, детских и т.д. Где приобрести надежные,
                                красивые и комфортные пластиковые окна? </span>
                        </div>
                    </div>
                </div>
                <div class="projectBtn"><a href="" class="button">Смотреть еще</a></div>
            </div>
        </div>
    </div>

    <div class="reviews">
        <div class="container">
            <div class="reviewsWrap">
                <h2>Отзывы <span class="red">наших клиентов</span></h2>
                <div class="reviewCardWrap">
                    <div class="reviewCard">
                        <a class="otzyv" href="https://yandex.ru/maps/-/CCUQj8S9XA" target="_blank" title="Смотреть весь отзыв на карте">
                            <div class="stars"><span>Василий</span> <span style="color: #D10016 ;">&#9733;&#9733;&#9733;&#9733;<span style="color: #313131;">&#9733;</span></span></div>
                            <p>Компания рокос занималась остеклением моего балкона. Нужно было сделать теплый балкон,
                                подобрали с менеджером оптимальный вариант 70 профиль и теплопакет. Балкон на стадии
                                ремонта, но уже сейчас понятно , что результат есть, он стал намного теплее.</p>
                            <div class="otzyvBottom">
                                <div>18-01-2021</div> <img src="images/ymaps.png" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="reviewCard">
                        <a class="otzyv" href="https://yandex.ru/maps/-/CCUQj8S9XA" target="_blank" title="Смотреть весь отзыв на карте">
                            <div class="stars"><span>Василий</span> <span style="color: #D10016 ;">&#9733;&#9733;&#9733;&#9733;<span style="color: #313131;">&#9733;</span></span></div>
                            <p>Компания рокос занималась остеклением моего балкона. Нужно было сделать теплый балкон,
                                подобрали с менеджером оптимальный вариант 70 профиль и теплопакет. Балкон на стадии
                                ремонта, но уже сейчас понятно , что результат есть, он стал намного теплее.</p>
                            <div class="otzyvBottom">
                                <div>18-01-2021</div> <img src="images/ymaps.png" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="reviewCard">
                        <a class="otzyv" href="https://yandex.ru/maps/-/CCUQj8S9XA" target="_blank" title="Смотреть весь отзыв на карте">
                            <div class="stars"><span>Василий</span> <span style="color: #D10016 ;">&#9733;&#9733;&#9733;&#9733;<span style="color: #313131;">&#9733;</span></span></div>
                            <p>Компания рокос занималась остеклением моего балкона. Нужно было сделать теплый балкон,
                                подобрали с менеджером оптимальный вариант 70 профиль и теплопакет. Балкон на стадии
                                ремонта, но уже сейчас понятно , что результат есть, он стал намного теплее.</p>
                            <div class="otzyvBottom">
                                <div>18-01-2021</div> <img src="images/ymaps.png" alt="">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>

    <script src="assets\js\code.js"></script>
</body>

</html>