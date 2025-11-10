<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход на сайт</title>
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
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
</body>
</html>