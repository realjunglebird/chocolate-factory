<!DOCTYPE html>
<html>
<head>
    <title>Капча</title>
    <style>
        .container {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .captcha-container {
            margin: 15px 0;
            padding: 10px;
            background: #f5f5f5;
            border-radius: 4px;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            box-sizing: border-box;
        }
        button {
            background: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
        }
        button:disabled {
            background: #cccccc;
            cursor: not-allowed;
        }
        .error {
            color: #ff0000;
            margin: 10px 0;
        }
        .success {
            color: #008000;
            margin: 10px 0;
        }
    </style>
</head>
<body>
<div class="container">
    <form id="captchaForm">
        <div class="captcha-container">
            <div id="captchaQuestion"></div>
            <input type="text" id="userInput" placeholder="Введите ответ">
            <button type="submit" id="submitBtn">Проверить и отправить</button>
        </div>
        <div id="message"></div>
    </form>
</div>

<script>
    // Элементы DOM
    const captchaQuestion = document.getElementById('captchaQuestion');
    const userInput = document.getElementById('userInput');
    const submitBtn = document.getElementById('submitBtn');
    const message = document.getElementById('message');
    const form = document.getElementById('captchaForm');

    // Состояние капчи
    let currentCaptcha = null;
    let isFirstStage = true;

    // Функция проверки на пустоту
    function isEmpty(obj) {
        if (typeof obj === 'string') return obj.trim().length === 0;
        if (typeof obj === 'object') return Object.keys(obj).length === 0;
        return false;
    }

    // Генерация буквенной капчи
    function generateLetterCaptcha() {
        const length = 6;
        const chars = 'AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz';
        let result = '';
        for (let i = 0; i < length; i++) {
            result += chars.charAt(Math.floor(Math.random() * chars.length));
        }
        return {
            type: 'letters',
            value: result,
            question: `Введите следующие символы: ${result}`
        };
    }

    // Генерация числовой капчи
    function generateMathCaptcha() {
        const num1 = Math.floor(Math.random() * 10) + 1;
        const num2 = Math.floor(Math.random() * 10) + 1;
        return {
            type: 'math',
            value: num1 + num2,
            question: `Решите пример: ${num1} + ${num2} = ?`
        };
    }

    // Показать капчу
    function showCaptcha() {
        currentCaptcha = isFirstStage
            ? generateLetterCaptcha()
            : generateMathCaptcha();

        captchaQuestion.textContent = currentCaptcha.question;
        userInput.value = '';
        message.textContent = '';
    }

    // Проверка капчи
    function checkCaptcha() {
        const inputValue = userInput.value;

        // Проверка на пустой ввод
        if (isEmpty(inputValue)) {
            message.textContent = 'Ошибка: поле не может быть пустым!';
            message.className = 'error';
            return false;
        }

        let isValid = false;

        if (currentCaptcha.type === 'letters') {
            isValid = inputValue === currentCaptcha.value;
        } else {
            isValid = parseInt(inputValue) === currentCaptcha.value;
        }

        if (isValid) {
            message.textContent = 'Капча пройдена! Форма отправлена.';
            message.className = 'success';
            return true;
        } else {
            message.textContent = 'Ошибка! Неправильный ответ.';
            message.className = 'error';

            // Переход на математическую капчу при ошибке на первом этапе
            if (isFirstStage) {
                isFirstStage = false;
                setTimeout(() => {
                    showCaptcha();
                    message.textContent = 'Попробуйте решить пример:';
                }, 1500);
            } else {
                // Обновление математической капчи при повторной ошибке
                setTimeout(() => {
                    showCaptcha();
                }, 1500);
            }
            return false;
        }
    }

    // Обработчики событий
    form.addEventListener('submit', (e) => {
        e.preventDefault();
        if (checkCaptcha()) {
            // Здесь обычно отправка данных на сервер
            console.log('Форма успешно отправлена!');

            // Сброс состояния для новой проверки
            setTimeout(() => {
                isFirstStage = true;
                showCaptcha();
            }, 2000);
        }
    });

    // Инициализация
    showCaptcha();
</script>
</body>
</html>