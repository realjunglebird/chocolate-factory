<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Шоколадная фабрика | Grid с анимацией</title>
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/main.css"/>
    <style>
        .grid-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-template-rows: repeat(3, 150px);
            gap: 15px;
            max-width: 800px;
            width: 100%;
            margin: 50px auto;
        }

        .grid-item {
            background: linear-gradient(45deg, #6a11cb, #2575fc);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-family: Arial, sans-serif;
            font-size: 24px;
            transition: all 0.5s ease;
            transform: scale(1);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        /* Особое размещение для 7 блоков */
        .grid-item:nth-child(1) {
            grid-column: 1 / 3;
        }
        .grid-item:nth-child(7) {
            grid-column: 2 / 4;
        }

        .grid-item:hover {
            background: linear-gradient(45deg, #ff6b6b, #ffa500);
            transform: scale(1.05) rotate(2deg);
            box-shadow: 0 10px 25px rgba(255,107,107,0.4);
        }
    </style>
</head>
<body>
    <?php include("./template/header.php"); ?>

    <div class="grid-container">
        <div class="grid-item">🍫</div>
        <div class="grid-item">🍭</div>
        <div class="grid-item">🍬</div>
        <div class="grid-item">☕</div>
        <div class="grid-item">🎂</div>
        <div class="grid-item">🍰</div>
        <div class="grid-item">🍥</div>
    </div>

    <?php include('template/footer.php'); ?>

    <?php include('template/elements/theme-toggle.php'); ?>
    <?php include('template/elements/notifications-button.php'); ?>
    <?php include("./template/elements/scroll-to-top-button.php"); ?>

</body>
</html>