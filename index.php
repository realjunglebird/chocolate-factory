<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Шоколадная фабрика</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon.ico"/>
    <link rel="stylesheet" href="style/main.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        main {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .image-gallery {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-evenly;
            gap: 3rem;
        }

        .image-gallery img {
            width: 25rem;
            height: 18.75rem;
            border-radius: 2rem;
        }
    </style>
</head>
<body>
    <?php include("./template/header.php"); ?>

    <main style="margin-top: 3rem; margin-bottom: 3rem;">

        <section class="text-section">
            <h2>Наша история</h2>
            <p>С 1897 года наша фабрика создает <strong>настоящее шоколадное искусство</strong>.
                Каждая плитка — это не просто десерт, а <em>тщательно выверенная композиция</em> вкуса,
                аромата и текстуры. Мы соединяем многовековые традиции <u>бельгийских мастеров</u>
                с инновациями и любовью к своему делу.</p>
            <p>Наш девиз: <cite>"Искусство, которое можно съесть!"</cite></p>
        </section>

        <div class="image-gallery">
            <img src="media/images/photo-1.jpg" alt="Фотография конвейера с продукцией"/>
            <img src="media/images/photo-2.jpg" alt="Фотография конвейера с продукцией"/>
            <img src="media/images/photo-3.jpg" alt="Фотография конвейера с продукцией"/>
        </div>

        <section class="text-section">
            <h2 id="philosophy">Наша философия: Искусство в деталях</h2>
            <p><blockquote>"Шоколад — это не просто ингредиенты, это настроение, которое ты даришь людям." — Основатель фабрики, Пьер Дюшан.</blockquote></p>
            <aside>
                <p>Мы используем только <abbr title="Organic Certified">ORG</abbr> сертифицированные какао-бобы и тщательно контролируем весь процесс — от <i>фермы до упаковки</i>.</p>
            </aside>
        </section>

        <section class="text-section">
            <h2>Ассортимент, который вас удивит</h2>
            <p>Мы гордимся нашим разнообразием. Узнать больше о тонкостях производства вы можете на авторитетном ресурсе <a href="https://www.finechocolateindustry.org" target="_blank">Fine Chocolate Industry Association</a>.</p>
        </section>
    </main>

    <?php include("./template/footer.php"); ?>

    <?php include 'template/elements/theme-toggle.php' ?>
    <?php include 'template/elements/scroll-to-top-button.php' ?>
    <?php include 'template/elements/notifications-button.php' ?>
</body>
</html>