<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Текстовая карточка</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
        }

        .container {
            display: grid;
            gap: 20px;
        }

        textarea {
            width: 100%;
            height: 120px;
            padding: 12px;
            border: 2px solid #e1e1e1;
            border-radius: 8px;
            resize: vertical;
            font-size: 16px;
        }

        .card {
            padding: 20px;
            background: #f9f9f9;
            border-radius: 12px;
            border: 2px solid #e1e1e1;
            min-height: 60px;
            word-wrap: break-word;
        }

        .counter {
            color: #666;
            font-size: 14px;
            text-align: right;
        }
    </style>
</head>
<body>
<div class="container">
        <textarea
            id="textInput"
            placeholder="Введите текст здесь..."></textarea>
    <div class="counter">
        <span id="charCount">0</span>/100
    </div>
    <div class="card" id="textCard">
        Текст появится здесь...
    </div>
</div>

<script>
    function truncate(str, maxlength) {
        return (str.length > maxlength)
            ? str.slice(0, maxlength - 1) + '…'
            : str;
    }

    const textInput = document.getElementById('textInput');
    const textCard = document.getElementById('textCard');
    const charCount = document.getElementById('charCount');
    const MAX_LENGTH = 100;

    function updateCard() {
        const text = textInput.value;
        charCount.textContent = text.length;
        textCard.textContent = truncate(text, MAX_LENGTH);
    }

    textInput.addEventListener('input', updateCard);
    updateCard(); // Инициализация при загрузке
</script>
</body>
</html><?php
