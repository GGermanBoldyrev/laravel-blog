import './bootstrap';

// Задаем переменные для чата
const chatOpen = document.getElementById('chat-open');
const chatClose = document.getElementById('chat-close');
const chatSection = document.getElementById('chat-section');
// Задаем переменные для фильтров
const filterOpen = document.getElementById('filter-open');
const filterSection = document.getElementById('filter-section');
const filterClose = document.getElementById('filter-close');

// Изначально чат и фильтры скрыты
chatSection.classList.add('hidden');
//filterSection.classList.add ('hidden');
filterOpen.classList.add('hidden');

// Открыть чат
chatOpen.addEventListener('click', () => open(chatOpen, chatSection))

// Закрыть чат
chatClose.addEventListener('click', () => close(chatOpen, chatSection))

// Открыть фильтры
filterOpen.addEventListener('click', () => open(filterOpen, filterSection))

// Закрыть фильтры
filterClose.addEventListener('click', () => close(filterOpen, filterSection))


// Функция для открытия элеманта (с анимацией)
function open(buttonToHide, sectionToShow) {
    // Скрываем кнопку
    buttonToHide.classList.add('hidden');
    // Показываем блок
    sectionToShow.classList.remove('hidden');
    // Добавляем анимацию открытия
    sectionToShow.classList.add('open');
}
// Функция для закрытия элеманта
function close(buttonToShow, sectionToHide) {
    // Закрываем секцию
    sectionToHide.classList.add('hidden');
    // Показываем кнопку
    buttonToShow.classList.remove('hidden');
}
