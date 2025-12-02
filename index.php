<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Шоколадная фабрика</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon.ico"/>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <?php include("./template/navbar.php"); ?>

    <main>
        <h1>Наша история</h1>

        <p>С 1897 года наша фабрика создает <strong>настоящее шоколадное искусство</strong>.
            Каждая плитка — это не просто десерт, а <em>тщательно выверенная композиция</em> вкуса,
            аромата и текстуры. Мы соединяем многовековые традиции <u>бельгийских мастеров</u>
            с инновациями и любовью к своему делу.</p>
        <p>Наш девиз: <cite>"Искусство, которое можно съесть!"</cite></p>
        <p>Химическая формула теобромина, одного из главных алкалоидов в какао, вызывающего чувство радости: C<sub>7</sub>H<sub>8</sub>N<sub>4</sub>O<sub>2</sub>. А энергетическая ценность измеряется в ккал<sup>1</sup>.</p>

        <div class="image-gallery">
            <img class="picture" src="media/images/photo-1.jpg" alt="Фотография конвейера с продукцией"/>
            <img class="picture" src="media/images/photo-2.jpg" alt="Фотография конвейера с продукцией"/>
            <img class="picture" src="media/images/photo-3.jpg" alt="Фотография конвейера с продукцией"/>
        </div>

        <h2 id="philosophy">Наша философия: Искусство в деталях</h2>

        <p><blockquote>"Шоколад — это не просто ингредиенты, это настроение, которое ты даришь людям." — Основатель фабрики, Пьер Дюшан.</blockquote></p>

        <aside>
            <p>Мы используем только <abbr title="Organic Certified">ORG</abbr> сертифицированные какао-бобы и тщательно контролируем весь процесс — от <i>фермы до упаковки</i>.</p>

        </aside>

        <h2>Ассортимент, который вас удивит</h2>

        <p>Мы гордимся нашим разнообразием. Узнать больше о тонкостях производства вы можете на авторитетном ресурсе <a href="https://www.finechocolateindustry.org" target="_blank">Fine Chocolate Industry Association</a>.</p>

        <ol type="I" start="1">
            <li>Классические плитки
                <ul type="square">
                    <li>Молочный шоколад с миндалем</li>
                    <li>Горький шоколад 85%</li>
                    <li>Темный шоколад с апельсином</li>
                </ul>
            </li>
            <li>Авторские коллекции
                <ul type="square">
                    <li>«Морская соль и карамель»</li>
                    <li>«Перец чили и маракуйя»</li>
                    <li>«Лаванда и мед»</li>
                </ul>
            </li>
            <li>Шоколадные фигуры и подарки</li>
        </ol>

        <div id="container-candymap">
            <map name="candymap">
                <area
                    shape="circle"
                    coords="111, 111, 95"
                    href="https://developer.mozilla.org/docs/Web/HTML" alt="c"/>
                <area
                    shape="rect"
                    coords="345, 25, 630, 170"
                    href="https://developer.mozilla.org/docs/Web/JS" alt="b"/>
                <area
                    shape="poly"
                    coords="
                    200, 165,
                    335, 165,
                    335, 385
                    200, 385"
                    href="https://developer.mozilla.org/docs/Web/CSS" alt="a"/>
            </map>
            <img usemap="#candymap" src="media/images/candymap.png">
        </div>

        <h3>Шоколадный словарь гурмана</h3>
        <dl>
            <dt>Темперирование</dt>
            <dd>Процесс контролируемого нагревания и охлаждения шоколада для придания ему идеального блеска и хруста.</dd>
            <dd>Альтернативное описание: Самый важный и магический этап в создании идеального шоколада.</dd>

            <dt>Какао-тертое</dt>
            <dd>Перемолотые ядра какао-бобов, основа любого шоколада.</dd>

            <dt>Конширование</dt>
            <dd>Длительный процесс вымешивания шоколадной массы в коншах для придания ей нежной текстуры и сглаживания вкуса.</dd>

            <dt>Бобы Криолло</dt>
            <dd>Редкий и благородный сорт какао-бобов с мягким и сложным вкусо-ароматическим профилем.</dd>
            <dd>Альтернативное описание: "Шампанское" среди какао-бобов.</dd>

            <dt>Какавелла</dt>
            <dd>Шелуха какао-боба, отделяемая при обжарке. Не используется в производстве качественного шоколада, но часто применяется в качестве удобрения или топлива.</dd>
        </dl>
    </main>

    <?php include("./template/footer-old.php"); ?>

    <?php include("./template/elements/scroll-to-top-button.php"); ?>
    <?php include("./template/elements/burger-button.php"); ?>
</body>
</html>