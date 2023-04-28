import '../bootstrap';

// В этом файле описаны функции для открытия и закрытия частей приложения

// Функция для открытия (с анимацией)
export function open(partToClose, partToShow) {
    // Скрываем кнопку
    partToClose.classList.add('hidden');
    // Показываем блок
    partToShow.classList.remove('hidden');
    // Добавляем анимацию открытия
    partToShow.classList.add('open');
}

// Функция для закрытия
export function close(partToHide, partToShow) {
    // Закрываем секцию
    partToHide.classList.add('hidden');
    // Показываем кнопку
    partToShow.classList.remove('hidden');
}
