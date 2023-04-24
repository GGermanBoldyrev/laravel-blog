import './bootstrap';

// Задаем переменные
const chatButton  = document.getElementById('chat-button');
const closeButton = document.getElementById('chat-close');
const chatBlock = document.getElementById('chat-block');

// Изначально чат скрыт
chatBlock.classList.add('hidden');

// Открываем чат на нажатие кнопки
chatButton.addEventListener('click', () => {
    // Скрываем кнотку
    chatButton.classList.add('hidden');
    // Открываем чат
    chatBlock.classList.remove('hidden');
    // Добавляем анимацию открытия чата
    chatBlock.classList.add('open');
})

// Скрываем чат на нажатие кнопки
closeButton.addEventListener('click', () => {
    // Закрываем чат
    chatBlock.classList.add('hidden');
    // Показываем кнотку
    chatButton.classList.remove('hidden');
});
