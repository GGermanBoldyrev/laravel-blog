import './bootstrap';
import {open, close} from "./export/openCloseFunc";

// Задаем переменные для чата
const chatOpen = document.getElementById('chat-open');
const chatClose = document.getElementById('chat-close');
const chatSection = document.getElementById('chat-section');

// Изначально чат скрыт
chatSection.classList.add('hidden');

// Открыть
chatOpen.addEventListener('click', () => open(chatOpen, chatSection));

// Закрыть
chatClose.addEventListener('click', () => close(chatSection, chatOpen));
