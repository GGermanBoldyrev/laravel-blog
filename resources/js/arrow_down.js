import './bootstrap';

// Анимация стрелки вниз на главной странице

// Присваиваем стрелку в переменнную
const arrowDown = document.getElementById('arrow-down')
// Присваеваем блок к которому будет scroll
const elementToScroll = document.getElementById('home-content')

// Добавляем класс с анимацией через setInterval
setInterval(() => {
    arrowDown.classList.toggle('animate-down')
}, 2000)

// Скролл до нужного элемента
arrowDown.addEventListener('click', () => {
    elementToScroll.scrollIntoView({behavior: 'smooth'});
})
