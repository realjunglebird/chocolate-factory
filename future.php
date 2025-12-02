<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Шоколадная фабрика | Будущее</title>
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/future.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <?php include("./template/header.php"); ?>

    <main>
        <div class="future-card-container">
            <div class="future-card-wrapper">
                <div class="future-card">
                    <div class="future-square"></div>
                    <div class="future-square"></div>
                    <div class="future-square"></div>
                    <div class="future-square"></div>
                    <h1>Печенье</h1>
                    <p>Золотистое, ароматное, с карамельной ноткой. Тот самый случай, когда невозможно остановиться на одной штучке! Отличный способ сделать паузу сладкой.</p>
                </div>
                <div class="future-neon-rect-wrapper">
                    <div class="future-neon-rect" id="future-neon-rect-1"></div>
                </div>
            </div>
        </div>

        <div class="future-card-container">
            <div class="future-card-wrapper">
                <div class="future-card">
                    <div class="future-square"></div>
                    <div class="future-square"></div>
                    <div class="future-square"></div>
                    <div class="future-square"></div>
                    <h1>Торт</h1>
                    <p>Взрыв вкуса и эмоций! Сочные коржи, воздушный крем, яркие акценты фруктов или шоколада. Создадим торт вашей мечты для любого повода.</p>
                </div>
                <div class="future-neon-rect-wrapper">
                    <div class="future-neon-rect" id="future-neon-rect-2"></div>
                </div>
            </div>
        </div>

        <div class="future-card-container">
            <div class="future-card-wrapper">
                <div class="future-card">
                    <div class="future-square"></div>
                    <div class="future-square"></div>
                    <div class="future-square"></div>
                    <div class="future-square"></div>
                    <h1>Мороженое</h1>
                    <p>Шелковистая прохлада и чистый вкус. Бодрит, заряжает радостью и дарит ощущение лета, даже если за окном дождь. Выберите свой любимый вкус!</p>
                </div>
                <div class="future-neon-rect-wrapper">
                    <div class="future-neon-rect" id="future-neon-rect-3"></div>
                </div>
            </div>
        </div>

        <div class="cards-container">
            <div class="card card-1">
                <div class="card-content">
                    <i class="fas fa-cookie-bite card-icon"></i>
                    <h2 class="card-title">Печенье</h2>
                    <p class="card-description">Хрустящее снаружи, мягкое внутри. Наше печенье ручной работы приготовлено из натурального сливочного масла и отборных ингредиентов. Идеально к чаю или кофе для мгновения наслаждения.</p>
                    <button class="card-button">Узнать больше</button>
                </div>
            </div>

            <div class="card card-2">
                <div class="card-content">
                    <i class="fas fa-cake-candles card-icon"></i>
                    <h2 class="card-title">Торты</h2>
                    <p class="card-description">Настоящий праздник в каждом кусочке! Нежные бисквитные коржи, пропитанные изысканным кремом, создают гармонию вкуса. Исполните свою мечту о совершенном десерте.</p>
                    <button class="card-button">Узнать больше</button>
                </div>
            </div>

            <div class="card card-3">
                <div class="card-content">
                    <i class="fas fa-ice-cream card-icon"></i>
                    <h2 class="card-title">Мороженое</h2>
                    <p class="card-description">Нежная тающая текстура и насыщенный вкус настоящих сливок и спелых ягод. Наше мороженое вернет вас в детство и подарит свежесть в любой день.</p>
                    <button class="card-button">Узнать больше</button>
                </div>
            </div>
        </div>

        <div class="future-social-container">
            <a href="#" class="future-social-button youtube">
                <i class="fab fa-youtube"></i>
                <span class="future-social-caption">Youtube</span>
            </a>

            <a href="#" class="future-social-button vk">
                <i class="fab fa-vk"></i>
                <span class="future-social-caption">VK</span>
            </a>

            <a href="#" class="future-social-button telegram">
                <i class="fab fa-telegram"></i>
                <span class="future-social-caption">Telegram</span>
            </a>
        </div>
    </main>


    <?php include("./template/footer.php"); ?>

    <?php include("./template/elements/notifications-button.php"); ?>
    <?php include("./template/elements/burger-button.php"); ?>
    <?php include("./template/elements/scroll-to-top-button.php"); ?>
    <?php include("./template/elements/theme-toggle.php"); ?>

</body>
</html>