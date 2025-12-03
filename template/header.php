<header class="header">
    <div class="header-container">
        <a href="index.php" class="logo">
            <span class="logo-text">Шоколадная<span class="logo-highlight">Фабрика</span></span>
        </a>

        <nav>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="index.php" class="nav-link">Главная</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">О нас</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Услуги</a>
                </li>
                <li class="nav-item">
                    <a href="shop.php" class="nav-link">Продукция</a>
                </li>
                <li class="nav-item">
                    <a href="contact.php" class="nav-link">Контакты</a>
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