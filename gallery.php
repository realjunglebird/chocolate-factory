<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Шоколадная фабрика | Галерея</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon.ico"/>
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <?php include("./template/navbar.php"); ?>

    <main>
        <div class="gallery">
            <?php
                $dir = './media/images/gallery/';
                $data_raw = file_get_contents($dir . 'data.json');
                $data = json_decode($data_raw);
                $images = glob($dir . '/*.{jpg,png,webp,gif}', GLOB_BRACE);
                $captions = file($dir . 'captions.txt');
                $index = 0;

                foreach ($data->images as $item) {
                    $image_path = $dir . $item->img;
                    $title = $item->title;
                    $caption = $item->caption;

                    echo "
                        <a class=\"gallery-image\">
                            <img src=\"$image_path\" alt=\"$title\">
                            <div class=\"gallery-image-caption-container\">
                                <div class=\"gallery-image-caption\">
                                    <h1>$title</h1>
                                    <p>$caption</p>
                                </div>
                            </div>
                        </a>
                    ";
                }
            ?>
        </div>
    </main>

    <?php include("./template/footer-old.php"); ?>
    <?php include("./template/elements/notifications-button.php"); ?>
    <?php include("./template/elements/burger-button.php"); ?>
    <?php include("./template/elements/scroll-to-top-button.php"); ?>
</body>
</html>
