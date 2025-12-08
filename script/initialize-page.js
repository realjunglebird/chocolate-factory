document.addEventListener('DOMContentLoaded', async () => {
    await replaceElement('header-placeholder', './template/header.html');
    await replaceElement('footer-placeholder', './template/footer.html');

    await replaceElement('theme-toggle-placeholder', './template/elements/theme-toggle.html');
    await replaceElement('scroll-to-top-button-placeholder', './template/elements/scroll-to-top-button.html');
    await replaceElement('notifications-button-placeholder', './template/elements/notifications-button.html');

    addScript('./script/header.js');
    addScript('./script/scroll-to-top-button.js');
    addScript('./script/theme-toggle.js');
    addScript('./script/notifications.js');

    async function replaceElement(id, path) {
        const response = await fetch(path);
        const html = await response.text();

        const element = document.getElementById(id);
        element.outerHTML = html;
    }

    function addScript(path) {
        const script = document.createElement('script');
        script.src = path;
        document.body.appendChild(script);
    }
});