<div id="theme-toggle-container">
    <div id="theme-toggle-icons">
        <i id="sun-icon" class="fa-solid fa-sun"></i>
        <i id="moon-icon" class="fa-solid fa-moon" style="display: none"></i>
    </div>
    <input type="checkbox" id="theme-toggle" class="glass-effect-new round-button" <?php

        if (isset($_COOKIE["theme"]))
        {
            echo ($_COOKIE["theme"] == "light") ? "" : "checked=\"checked\"";
        }
        else
        {
            echo "";
        }
    ?>
    />
</div>



<script type="text/javascript">
    // Установка темы при загрузке страницы
    document.addEventListener('DOMContentLoaded', function() {
        // Функция для получения значения куки по имени
        function getCookie(name) {
            const value = `; ${document.cookie}`;
            const parts = value.split(`; ${name}=`);
            if (parts.length === 2) return parts.pop().split(';').shift();
        }

        const theme = getCookie('theme') || 'light';
        const themeToggle = document.getElementById("theme-toggle");
        const sunIcon = document.getElementById('sun-icon');
        const moonIcon = document.getElementById('moon-icon');
        document.documentElement.setAttribute('data-theme', theme);
        sunIcon.style.display = themeToggle.checked ? 'none' : 'block';
        moonIcon.style.display = themeToggle.checked ? 'block' : 'none';

        themeToggle.addEventListener('click', function() {
            let theme = this.checked ? 'dark' : 'light';
            sunIcon.style.display = this.checked ? 'none' : 'block';
            moonIcon.style.display = this.checked ? 'block' : 'none';

            document.documentElement.setAttribute('data-theme', theme);
            document.cookie = 'theme=' + theme + ';max-age=86400';
        });
    });

</script>