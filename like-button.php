<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Кнопка "Нравится" и рисование</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
            padding: 20px;
            background-color: #f5f5f5;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
        }

        .like-btn {
            padding: 12px 24px;
            font-size: 16px;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            background-color: #e0e0e0;
            color: #333;
            transition: all 0.3s ease;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .like-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.15);
        }

        .like-btn.liked {
            background-color: #ff4757;
            color: white;
        }

        .draw-btn {
            padding: 12px 24px;
            font-size: 16px;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            background-color: #3498db;
            color: white;
            transition: all 0.3s ease;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .draw-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.15);
        }

        .draw-btn.active {
            background-color: #2ecc71;
        }

        .drawing-element {
            position: absolute;
            border-radius: 50%;
            pointer-events: none;
            z-index: -1;
        }

        .instructions {
            margin-top: 20px;
            text-align: center;
            color: #666;
            max-width: 400px;
        }
    </style>
</head>
<body>
<div class="container">
    <button id="likeBtn" class="like-btn">Нравится</button>
    <button id="drawBtn" class="draw-btn">Включить рисование</button>

    <div class="instructions">
        <p>Нажмите кнопку "Включить рисование", затем перемещайте курсор для создания элементов.</p>
        <p>Повторное нажатие отключит режим рисования.</p>
    </div>
</div>

<script>
    // Элементы DOM
    const likeBtn = document.getElementById('likeBtn');
    const drawBtn = document.getElementById('drawBtn');

    // Переменные состояния
    let isDrawing = false;

    // Обработчик для кнопки "Нравится"
    likeBtn.addEventListener('click', function() {
        this.classList.toggle('liked');
        this.textContent = this.classList.contains('liked') ? 'Вам нравится' : 'Нравится';
    });

    // Обработчик для кнопки рисования
    drawBtn.addEventListener('click', function() {
        isDrawing = !isDrawing;
        this.classList.toggle('active');
        this.textContent = isDrawing ? 'Выключить рисование' : 'Включить рисование';

        // Удаляем старые элементы при выключении рисования
        if (!isDrawing) {
            document.querySelectorAll('.drawing-element').forEach(el => {
                setTimeout(() => {
                    el.remove();
                }, 2000);
            });
        }
    });

    // Обработчик движения мыши для создания элементов
    document.addEventListener('mousemove', function(e) {
        if (isDrawing) {
            createDrawingElement(e.clientX, e.clientY);
        }
    });

    // Функция создания элемента рисования
    function createDrawingElement(x, y) {
        const element = document.createElement('div');
        element.classList.add('drawing-element');

        // Случайный размер и цвет
        const size = Math.floor(Math.random() * 20) + 10;
        const colors = [
            '#ff6b6b', '#ff9ff3', '#feca57', '#48dbfb',
            '#1dd1a1', '#ff9f43', '#54a0ff', '#5f27cd'
        ];
        const color = colors[Math.floor(Math.random() * colors.length)];

        // Позиционирование и стилизация
        element.style.width = `${size}px`;
        element.style.height = `${size}px`;
        element.style.backgroundColor = color;
        element.style.left = `${x - size/2}px`;
        element.style.top = `${y - size/2}px`;

        // Добавление на страницу
        document.body.appendChild(element);

        // Автоматическое удаление через некоторое время
        setTimeout(() => {
            if (element.parentNode) {
                element.remove();
            }
        }, 2000);
    }
</script>
</body>
</html>