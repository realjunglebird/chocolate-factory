<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Шоколадная фабрика | Связаться с нами</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon.ico"/>
    <link rel="stylesheet" href="css/main.css">
    <style>
        form {
            display: flex;
            flex-direction: column;
            width: 30%;
        }

    </style>
</head>
<body>
    <?php include("./template/navbar.php"); ?>

    <main style="display:flex; flex-direction: column; align-items: center">
        <div class="form-container">
            <h2>Вход на сайт:</h2>
            <fieldset>
                <legend>Авторизация</legend>
                <form>
                    <label for="login">Логин:</label>
                    <input id="login" type="email" placeholder="Введите ваш логин...">

                    <label for="password">Пароль:</label>
                    <input id="password" type="password" placeholder="Введите ваш пароль...">

                    <button style="margin-top: 15px" type="submit">Войти</button>
                </form>
            </fieldset>
        </div>

        <div class="form-container">
            <h2>Заказать обратный звонок:</h2>
            <fieldset>
                <legend>Обратный звонок</legend>
                <form>
                    <label for="phone">Ваш номер телефона:</label>
                    <input id="phone" type="tel" placeholder="+7-(___)-___-__-__">

                    <label for="call-date">Укажите время, когда вам будет удобно принять звонок:</label>
                    <input id="call-date" type="datetime-local">

                    <button style="margin-top: 15px" type="submit">Оставить заявку</button>
                </form>
            </fieldset>
        </div>

        <div class="form-container">
            <h2>Связаться с нами:</h2>
            <fieldset>
                <legend>Связь с нами</legend>
                <form>
                    <label for="sender-email">Ваш email:</label>
                    <input id="sender-email" type="email" placeholder="Введите ваш email...">

                    <label for="theme">Тема вашего сообщения:</label>
                    <input id="theme" type="text" placeholder="Введите тему сообщения...">

                    <label for="message">Ваше сообщение:</label>
                    <textarea id="message" rows="10" placeholder="Введите ваше сообщение..."></textarea>

                    <button style="margin-top: 15px" type="submit">Отправить</button>
                </form>
            </fieldset>
        </div>


        <div style="display: flex; flex-direction: row; gap: 50px">
            <div>
                <h2>Где нас найти?</h2>
                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A7531be3bd60c417eccb9e41af41e85ce653ae995b56ee52950e9c562ca52447c&amp;source=constructor" width="500" height="400" frameborder="0"></iframe>
            </div>

            <div>
                <h2>Видеоэкскурсия по нашей фабрике</h2>
                <iframe width="607" height="360" style="background-color: #000" src="https://www.youtube.com/embed/JVnsCA42ubM" allow="autoplay; encrypted-media; fullscreen; picture-in-picture; screen-wake-lock;" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </main>

    <?php include("./template/footer.php"); ?>

    <?php include("./template/elements/scroll-to-top-button.php"); ?>
    <?php include("./template/elements/burger-button.php"); ?>
</body>
</html>