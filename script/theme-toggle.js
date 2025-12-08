//document.addEventListener('DOMContentLoaded', function() {
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
    themeToggle.checked = theme === 'light' ? false : true;
    sunIcon.style.display = themeToggle.checked ? 'none' : 'block';
    moonIcon.style.display = themeToggle.checked ? 'block' : 'none';

    themeToggle.addEventListener('click', function() {
        let theme = this.checked ? 'dark' : 'light';
        sunIcon.style.display = this.checked ? 'none' : 'block';
        moonIcon.style.display = this.checked ? 'block' : 'none';

        document.documentElement.setAttribute('data-theme', theme);
        document.cookie = 'theme=' + theme + ';max-age=86400';
    });
//});