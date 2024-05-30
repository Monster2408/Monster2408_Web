const japanese_button = document.getElementById('langJa');
const english_button = document.getElementById('langEn');

japanese_button.addEventListener('click', () => {
    html_lang = document.getElementsByTagName('html')[0];
    html_lang.setAttribute('lang', 'ja');
    aTagList = document.getElementsByTagName('a');
    for (let i = 0; i < aTagList.length; i++) {
        if (aTagList[i].getAttribute('href').startsWith("https://monster2408.com/") && aTagList[i].getAttribute('href').startsWith("https://monster2408.com/blog") == false) {
            aTagList[i].setAttribute('href', aTagList[i].getAttribute('href') + "?lang=ja");
        }
    }
});

english_button.addEventListener('click', () => {
    html_lang = document.getElementsByTagName('html')[0];
    html_lang.setAttribute('lang', 'en');
    aTagList = document.getElementsByTagName('a');
    for (let i = 0; i < aTagList.length; i++) {
        if (aTagList[i].getAttribute('href').startsWith("https://monster2408.com/") && aTagList[i].getAttribute('href').startsWith("https://monster2408.com/blog") == false && aTagList[i].getAttribute('href').endsWith("?lang=ja") == true) {
            aTagList[i].setAttribute('href', aTagList[i].getAttribute('href').replace("?lang=ja", ""));
        }
    }
});