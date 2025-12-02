<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Шоколадная фабрика | Вход на сайт</title>
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/main.css"/>
    <style>
        form {
            display: flex;
            flex-direction: column;
            width: 30%;
        }
    </style>
</head>

<body>
    <?php include('template/header.php'); ?>

    <main style="margin-top: 3rem; margin-bottom: 3rem; display:flex; flex-direction: column; align-items: center; gap: 2rem;">
        <div class="form-container">
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
    </main>

    <script>
        let answer = prompt("Желаете пройти регистрацию на сайте?");

        if (answer && answer.toLowerCase() === "да") {
            alert("Круто!");

            let login = prompt("Введите ваш логин:");

            if (login === "Админ") {
            let password = prompt("Введите пароль:");

            if (password === "Я главный") {
            alert("Здравствуйте!");
            } else if (password === null || password === "") {
                alert("Отменено");
            } else {
                alert("Неверный пароль");
            }
            } else if (login === null || login === "") {
                alert("Отменено");
            } else {
                alert("Я вас не знаю");
            }
        } else {
            alert("Попробуй ещё раз");
        }
    </script>



    <?php include('template/elements/theme-toggle.php'); ?>

    <?php include('template/footer.php'); ?>
</body>

</html>