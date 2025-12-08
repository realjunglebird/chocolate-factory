//document.addEventListener('DOMContentLoaded', () => {

    const button = document.getElementById('scroll-to-top-button');

    window.onscroll = function() {
        if(document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            button.style.display = 'block';
        } else {
            button.style.display = 'none';
        }
    }

    button.addEventListener('click', () => {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    });

//});