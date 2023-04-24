import './bootstrap';

// Задаем переменные
const chatButton  = document.getElementById('chat-button');
const closeButton = document.getElementById('chat-close');
const chatBlock = document.getElementById('chat-block');

// Изначально чат скрыт
// chatBlock.classList.add('hidden')

// Открываем чат на нажатие кнопки
chatButton.addEventListener('click', () => {
    chatButton.classList.add('hidden')
    chatBlock.classList.remove('hidden')
})

// Скрываем чат на нажатие кнопки
closeButton.addEventListener('click', () => {
    chatButton.classList.remove('hidden')
    chatBlock.classList.add('hidden')
})
