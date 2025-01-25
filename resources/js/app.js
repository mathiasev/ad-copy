import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();



// On page load or when changing themes, best to add inline in `head` to avoid FOUC
addEventListener('load', () => {
    if (localStorage.currentTheme) {
        document.documentElement.classList.add(localStorage.currentTheme);
    } else {
        localStorage.currentTheme = document.documentElement.classList.contains('dark') ? 'dark' : 'light';
    }
});


// // Whenever the user explicitly chooses light mode
// localStorage.currentTheme = "light";
// // Whenever the user explicitly chooses dark mode
// localStorage.currentTheme = "dark";
// // Whenever the user explicitly chooses to respect the OS preference
// localStorage.removeItem("theme");