<!DOCTYPE html>
<html>
<head>
    <title>Корзина товаров</title>
    <style>
        .cart-container {
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            max-width: 300px;
            margin: 20px auto;
            text-align: center;
        }

        #cart {
            font-size: 24px;
            color: #e74c3c;
            margin: 10px 0;
        }

        button {
            background: #3498db;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<div class="cart-container">
    <h3>Товаров в корзине:</h3>
    <div id="cart">0</div>
    <button id="addToCart">Добавить товар</button>
</div>

<script>
    // Функция-конструктор корзины
    function Accumulator(startingValue) {
        this.value = startingValue;

        this.read = function() {
            const input = prompt('Введите количество товара для добавления в корзину:', '0');
            const number = parseFloat(input);

            if (!isNaN(number)) {
                this.value += number;
                this.updateDisplay();
            } else {
                alert('Ошибка! Введите корректное число.');
            }
        };

        this.updateDisplay = function() {
            if (this.displayElement) {
                this.displayElement.textContent = this.value;
            }
        };

        this.setDisplayElement = function(element) {
            this.displayElement = element;
            this.updateDisplay();
        };
    }

    // Создание экземпляра корзины с начальным значением
    const cartAccumulator = new Accumulator(0);

    // Инициализация после загрузки DOM
    document.addEventListener('DOMContentLoaded', function() {
        const cartElement = document.getElementById('cart');
        const addButton = document.getElementById('addToCart');

        if (cartElement && addButton) {
            cartAccumulator.setDisplayElement(cartElement);

            addButton.addEventListener('click', function() {
                cartAccumulator.read();
            });
        }
    });
</script>
</body>
</html>