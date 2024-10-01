const dropdown = document.querySelector('.drop-adv');
const toggle = document.querySelector('.toggle-switch');
const html = document.querySelector('html');

toggle.addEventListener('click', function () {
    toggle.checked ? html.classList.add('dark') : html.classList.remove('dark');
 });

dropdown.addEventListener('click', () => {
    dropdown.classList.toggle('active');
});