<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Шоколадная фабрика | Будущее</title>
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="css/future.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <?php include("./template/navbar.php"); ?>

    <main>
        <div class="future-card-container">
            <div class="future-card-wrapper">
                <div class="future-card">
                    <div class="future-square"></div>
                    <div class="future-square"></div>
                    <div class="future-square"></div>
                    <div class="future-square"></div>
                    <h1>Название</h1>
                    <p>Описание</p>
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
                    <h1>Название</h1>
                    <p>Описание</p>
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
                    <h1>Название</h1>
                    <p>Описание</p>
                </div>
                <div class="future-neon-rect-wrapper">
                    <div class="future-neon-rect" id="future-neon-rect-3"></div>
                </div>
            </div>
        </div>

        <div class="cards-container">
            <div class="card card-1">
                <div class="card-content">
                    <i class="fas fa-code card-icon"></i>
                    <h2 class="card-title">Веб-разработка</h2>
                    <p class="card-description">Создание современных адаптивных веб-сайтов с использованием HTML5, CSS3 и JavaScript. Интеграция с API и базами данных для полнофункциональных веб-приложений.</p>
                    <button class="card-button">Узнать больше</button>
                </div>
            </div>

            <div class="card card-2">
                <div class="card-content">
                    <i class="fas fa-mobile-alt card-icon"></i>
                    <h2 class="card-title">Мобильные приложения</h2>
                    <p class="card-description">Разработка кроссплатформенных мобильных приложений с нативным пользовательским интерфейсом. Оптимизация производительности и удобства использования.</p>
                    <button class="card-button">Узнать больше</button>
                </div>
            </div>

            <div class="card card-3">
                <div class="card-content">
                    <i class="fas fa-palette card-icon"></i>
                    <h2 class="card-title">UI/UX Дизайн</h2>
                    <p class="card-description">Создание интуитивно понятных и визуально привлекательных интерфейсов. Прототипирование, тестирование пользовательского опыта и проектирование взаимодействия.</p>
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