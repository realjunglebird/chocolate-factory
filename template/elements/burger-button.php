<button class="burger-button" aria-expanded="false"></button>
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', () => {
        const burger = document.querySelector('.burger-button');
        const menu = document.querySelector('.navbar');

        burger.addEventListener('click', function() {
            const isOpen = burger.getAttribute('aria-expanded') === 'true';

            burger.setAttribute('aria-expanded', String(!isOpen));
            //menu.setAttribute('aria-hidden', String(isOpen));
            menu.classList.toggle('active');

            document.body.style.overflow = isOpen ? '' : 'hidden';
        });

        menu.addEventListener('click', function() {
            menu.classList.remove('active')
        });
    });
</script>