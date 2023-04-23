import './bootstrap';

// Задаем переменные
const chatButton  = document.getElementById('chat-button');
const chatBlock = document.getElementById('chat-block');
const closeButton = document.getElementById('chat-close');

// Изначатьно чат будет скрыт, и отображаться на странице будет только кнопка
chatBlock.hidden = false;
chatButton.hidden = true;

// Добавляем открытие чата на клик по кнопке
chatButton.addEventListener('click', () => {
    // Скрываем кнопку чата
    chatButton.hidden = true;
    // Показываем блок с чатом
    chatBlock.hidden = false;
});

// Закрываем чат на клик по крестику
closeButton.addEventListener('click', () => {
    chatBlock.hidden = true;
    chatButton.hidden = false;
})
