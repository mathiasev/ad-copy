import { JSONEditor } from '@json-editor/json-editor';
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


window.JSONEditor = JSONEditor;

const editors = document.querySelectorAll('.json-editor');
if (editors) {
    editors.forEach(editor => {

        window['editor' + editor.id] = new JSONEditor(editor, {
            theme: "tailwind",
            schema: JSON.parse(editor.dataset.schema),
        });

        window['editor' + editor.id].on('change', () => {
            let data = window['editor' + editor.id].getValue();
            document.getElementById(editor.dataset.for).value = JSON.stringify(data);
        });
    });
}