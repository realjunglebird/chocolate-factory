<input type="checkbox" id="theme-toggle" <?php

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


<script type="text/javascript">
    // Функция для получения значения куки по имени
    function getCookie(name) {
        const value = `; ${document.cookie}`;
        const parts = value.split(`; ${name}=`);
        if (parts.length === 2) return parts.pop().split(';').shift();
    }

    // Установка темы при загрузке страницы
    document.addEventListener('DOMContentLoaded', function() {
        const theme = getCookie('theme') || 'light';
        document.documentElement.setAttribute('data-theme', theme);
    });

    document.getElementById("theme-toggle").addEventListener('click', function() {
        let theme = this.checked ? 'dark' : 'light';
        document.documentElement.setAttribute('data-theme', theme);
        document.cookie = 'theme=' + theme + ';max-age=86400';
    });
</script>