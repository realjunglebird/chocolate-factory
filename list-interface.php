<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Интерфейс для списка</title>
</head>

<body>
    <ul id="list">
    </ul>

<script>

    document.addEventListener('DOMContentLoaded', () => {
        const list = document.getElementById('list');

        while (true) {
            let elementContent = prompt("Введите следующий элемент списка:");

            if (elementContent === null || elementContent === "") {
                break;
            }

            let element = document.createElement('li');
            element.textContent = elementContent;
            list.appendChild(element);
        }
    });

</script>

</body>
</html>