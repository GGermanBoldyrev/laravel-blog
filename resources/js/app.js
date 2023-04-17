import './bootstrap';

const text = document.getElementById('welcome-text');

const welcomeTextParts = [
    'Glad to see y',
    'Glad to see yo',
    'Glad to see you .',
    'Glad to see you . .',
    'Glad to see you . . .'
];

/* Here we add css styles because I don't to spoil Tailwind */
text.classList.add('animate-color');

let counter = 0;

setInterval(() => {
    if (counter < welcomeTextParts.length) {
        text.innerText = welcomeTextParts[counter];
        counter++;
    } else {
        counter = 0;
    }
}, 1000);
