import './bootstrap';

// Анимация текста на главной странице

// Добавляем кнопку в переменную
const text = document.getElementById('welcome-text');

// Массив из текстов, кторые будут меняться
const welcomeTextParts = [
    'Glad to see y',
    'Glad to see yo',
    'Glad to see you .',
    'Glad to see you . .',
    'Glad to see you . . .'
];

// Здесь добаляем анимацию к тексту на главной странице
text.classList.add('animate-color');

// Создаем счетчик, чтобы благодаря нему итерироваться по массиву
let counter = 0;

// Меняем текст в диве через интервал
setInterval(() => {
    if (counter < welcomeTextParts.length) {
        text.innerText = welcomeTextParts[counter];
        counter++;
    } else {
        counter = 0;
    }
}, 1000);
