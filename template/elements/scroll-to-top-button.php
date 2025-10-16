<button id="scroll-to-top-button" type="button">
    &#8593;
</button>
<script type="text/javascript">
    let button = document.getElementById('scroll-to-top-button');

    window.onscroll = function() {
        if(document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            button.style.display = 'block';
        } else {
            button.style.display = 'none';
        }
    }

    button.onclick = function() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
