const dropdown = document.querySelector('.drop-adv');
const gerigi = document.querySelector('.gerigi');

dropdown.addEventListener('click', () => {
    dropdown.classList.toggle('active');
});

document.addEventListener('scroll', function(){
    let value = window.scrollY
    gerigi.style.rotate = value + 'px'
}) 