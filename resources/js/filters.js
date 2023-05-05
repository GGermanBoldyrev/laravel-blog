import './bootstrap';
import {open, close} from "./export/openCloseFunc";

// Задаем переменные для фильтров
const filterOpen = document.getElementById('filter-open');
const filterSection = document.getElementById('filter-section');
const filterClose = document.getElementById('filter-close');

// Открыть
filterOpen.addEventListener('click', () => open(filterOpen, filterSection));
// Закрыть
filterClose.addEventListener('click', () => close(filterSection, filterOpen));
