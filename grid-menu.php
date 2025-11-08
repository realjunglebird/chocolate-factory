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
        html[data-theme="dark"] {
            /* Темная тема (по умолчанию) */
            --bg-primary: #1a1a1a50;
            --bg-secondary: #2d2d2d;
            --text-primary: #ffffff;
            --text-secondary: #cccccc;
            --accent-color: #fdbb2d;
            --border-color: #444444;
            --shadow: 0 5px 20px rgba(0,0,0,0.3);
        }

        html[data-theme="light"] {
            /* Светлая тема */
            --bg-primary: #ffffff3b;
            --bg-secondary: #f5f5f5;
            --text-primary: #262626;
            --text-secondary: #000;
            --accent-color: #e6a217;
            --border-color: #e0e0e0;
            --shadow: 0 5px 20px rgba(0,0,0,0.1);
        }

        /* Стили хедера */
        .header {
            background-color: var(--bg-primary);
            padding: 15px 20px;
            border-bottom: 3px solid var(--accent-color);
            box-shadow: var(--shadow);
            position: sticky;
            top: 0;
            z-index: 1000;
            background: transparent;
        }

        .header::before {
            content: "";
            position: absolute;
            inset: 0;
            background: var(--bg-primary);
            backdrop-filter: blur(10px);
            z-index: -1;
        }

        .header-container {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }

        .logo {
            display: flex;
            align-items: center;
            color: var(--text-primary);
            text-decoration: none;
            transition: all 0.4s ease;
            padding: 5px 10px;
            border-radius: 5px;
        }

        .logo:hover {
            transform: scale(1.05);
            color: var(--accent-color);
        }

        .logo-text {
            font-size: 1.8rem;
            font-weight: 700;
        }

        .logo-highlight {
            color: var(--accent-color);
        }

        .nav-menu {
            display: flex;
            list-style: none;
            gap: 25px;
        }

        .nav-link {
            color: var(--text-secondary);
            text-decoration: none;
            font-weight: 500;
            padding: 8px 15px;
            border-radius: 5px;
            transition: all 0.3s ease;
            position: relative;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--accent-color);
            transition: width 0.4s ease;
        }

        .nav-link:hover {
            color: var(--accent-color);
            transform: translateY(-3px);
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .burger {
            display: none;
            flex-direction: column;
            cursor: pointer;
            padding: 5px;
            transition: all 0.3s ease;
        }

        .burger:hover {
            transform: scale(1.1);
        }

        .burger-line {
            width: 25px;
            height: 3px;
            background: var(--accent-color);
            margin: 3px 0;
            transition: all 0.3s ease;
            border-radius: 2px;
        }

        .burger.active .burger-line:nth-child(1) {
            transform: rotate(45deg) translate(5px, 5px);
        }

        .burger.active .burger-line:nth-child(2) {
            opacity: 0;
        }

        .burger.active .burger-line:nth-child(3) {
            transform: rotate(-45deg) translate(7px, -6px);
        }

        @media (max-width: 768px) {
            .burger {
                display: flex;
            }

            .nav-menu {
                position: fixed;
                top: 96px;
                right: -100%;
                flex-direction: column;
                background-color: var(--bg-primary);
                backdrop-filter: blur(15px);
                width: 100%;
                text-align: center;
                padding: 30px 0;
                gap: 0;
                transition: all 0.5s ease;
                border-top: 2px solid var(--accent-color);
                box-shadow: var(--shadow);
                z-index: 999;
            }

            .nav-menu.active {
                right: 0;
            }

            .nav-item {
                margin: 15px 0;
            }

            .nav-link {
                display: block;
                padding: 15px;
                font-size: 1.2rem;
            }
        }

        /* Стили футера */
        .footer {
            background-color: var(--bg-primary);
            padding: 40px 20px;
            border-top: 3px solid var(--accent-color);
            box-shadow: 0 -5px 20px rgba(0,0,0,0.3);
            margin-top: auto;
            backdrop-filter: blur(10px);
        }

        .footer-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 30px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .footer-section {
            position: relative;
            padding: 20px;
            transition: all 0.4s ease;
            border-radius: 8px;
            overflow: hidden;
            color: var(--text-primary);
        }

        .footer-section h3 {
            color: var(--accent-color);
            margin-bottom: 15px;
            font-size: 1.4rem;
            position: relative;
            padding-bottom: 10px;
            transition: all 0.3s ease;
        }

        .footer-section h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--accent-color);
            transition: width 0.4s ease;
        }

        .footer-section:hover h3::after {
            width: 50px;
        }

        .footer-section:hover {
            transform: translateY(-10px);
            background-color: var(--bg-secondary);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }

        .footer-section ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-section ul li {
            margin-bottom: 10px;
            transition: all 0.3s ease;
        }

        .footer-section ul li a {
            color: var(--text-secondary);
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-block;
            position: relative;
        }

        .footer-section ul li a::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 1px;
            background: var(--accent-color);
            transition: width 0.3s ease;
        }

        .footer-section ul li a:hover {
            color: var(--accent-color);
            transform: translateX(5px);
        }

        .footer-section ul li a:hover::after {
            width: 100%;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 15px;
        }

        .social-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: var(--bg-secondary);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            text-decoration: none;
        }

        .social-icon i {
            color: var(--text-secondary);
            z-index: 1;
            position: relative;
            transition: all 0.3s ease;
        }

        .social-icon:hover {
            background-color: var(--accent-color);
        }

        .social-icon:hover i {
            color: var(--bg-primary);
            transform: rotate(360deg);
        }

        .copyright {
            text-align: center;
            margin-top: 40px;
            padding-top: 20px;
            border-top: 1px solid var(--border-color);
            color: var(--text-secondary);
            font-size: 0.9rem;
        }

        .footer-section p {
            color: var(--text-secondary);
            line-height: 1.6;
        }

        @media (max-width: 992px) {
            .footer-container {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 576px) {
            .footer-container {
                grid-template-columns: 1fr;
            }
        }


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

<header class="header">
    <div class="header-container">
        <a href="#" class="logo">
            <span class="logo-text">Шоколадная<span class="logo-highlight">Фабрика</span></span>
        </a>

        <nav>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="#" class="nav-link">Главная</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">О нас</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Услуги</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Портфолио</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Контакты</a>
                </li>
            </ul>
        </nav>

        <div class="burger">
            <div class="burger-line"></div>
            <div class="burger-line"></div>
            <div class="burger-line"></div>
        </div>
    </div>
</header>

<div class="grid-container">
    <div class="grid-item">🍫</div>
    <div class="grid-item">🍭</div>
    <div class="grid-item">🍬</div>
    <div class="grid-item">☕</div>
    <div class="grid-item">🎂</div>
    <div class="grid-item">🍰</div>
    <div class="grid-item">🍥</div>
</div>


<footer class="footer">
    <div class="footer-container">
        <div class="footer-section">
            <h3>О фабрике</h3>
            <p>С 1897 года наша фабрика создает настоящее шоколадное искусство. Каждая плитка — это не просто десерт, а тщательно выверенная композиция вкуса, аромата и текстуры. Мы соединяем многовековые традиции бельгийских мастеров с инновациями и любовью к своему делу.</p>
        </div>

        <div class="footer-section">
            <h3>Навигация</h3>
            <ul>
                <li><a href="#">Главная</a></li>
                <li><a href="#">О нас</a></li>
                <li><a href="#">Услуги</a></li>
                <li><a href="#">Продукция</a></li>
                <li><a href="#">Контакты</a></li>
            </ul>
        </div>

        <div class="footer-section">
            <h3>Контакты</h3>
            <ul>
                <li><i class="fas fa-map-marker-alt"></i> Москва, ул. Шоколадная, 123</li>
                <li><i class="fas fa-phone"></i> +7 (495) 123-45-67</li>
                <li><i class="fas fa-envelope"></i> info@example.com</li>
            </ul>
        </div>

        <div class="footer-section">
            <h3>Социальные сети</h3>
            <p>Подписывайтесь на нас в социальных сетях</p>
            <div class="social-links">
                <a href="#" class="social-icon">
                    <i class="fab fa-vk"></i>
                </a>
                <a href="#" class="social-icon">
                    <i class="fab fa-telegram"></i>
                </a>
                <a href="#" class="social-icon">
                    <i class="fab fa-youtube"></i>
                </a>
                <a href="#" class="social-icon">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="copyright">
        <p>&copy; 2025 Шоколадная фабрика. Все права защищены.</p>
    </div>
</footer>

    <?php include('template/elements/theme-toggle.php');?>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const burger = document.querySelector('.burger');
        const navMenu = document.querySelector('.nav-menu');

        burger.addEventListener('click', function() {
            burger.classList.toggle('active');
            navMenu.classList.toggle('active');
        });

        // Закрытие меню при клике на ссылку
        const navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                burger.classList.remove('active');
                navMenu.classList.remove('active');
            });
        });
    });
</script>
</body>
</html>