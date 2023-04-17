import './bootstrap';

// Код для кнопки "Наверх"

// Добавляем кнопку в переменную
const upButton = document.getElementById('up-button')

// На какой высоте от верха страницы в пикселях показывать кнопку
const pxScrolled = 500

// Изначально кнопка будет скрыта
upButton.hidden = true

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
  if (document.body.scrollTop > pxScrolled || document.documentElement.scrollTop > pxScrolled) {
    upButton.hidden = false
  } else {
    upButton.hidden = true
  }
}

// Функция для скрола наверх
function goTop() {
  window.scrollTo({ top: 0, behavior: 'smooth' })
}