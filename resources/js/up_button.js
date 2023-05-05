import './bootstrap';

// Код для кнопки "Наверх"

// Добавляем кнопку в переменную
const upButton = document.getElementById('up-button')

// На какой высоте от верха страницы в пикселях показывать кнопку
const pxScrolled = 500

// Запускаем функцию scroll если пользователь прокрутил страницу вниз на pxScrolled
window.addEventListener('scroll', () => {
    scroll()
})

// Запускаем функцию goTop на клик по кнопке
upButton.addEventListener('click', () => {
    goTop()
})

// Функция для отображения/скрытия кнопки "Наверх"
function scroll() {
    upButton.hidden = !(document.body.scrollTop > pxScrolled || document.documentElement.scrollTop > pxScrolled);
}

// Функция для скрола наверх
function goTop() {
    window.scrollTo({top: 0, behavior: 'smooth'})
}
