const japanese_button = document.getElementById('langJa');
const english_button = document.getElementById('langEn');

japanese_button.addEventListener('click', () => {
    html_lang = document.getElementsByTagName('html')[0];
    html_lang.setAttribute('lang', 'ja');
});

english_button.addEventListener('click', () => {
    html_lang = document.getElementsByTagName('html')[0];
    html_lang.setAttribute('lang', 'en');
});