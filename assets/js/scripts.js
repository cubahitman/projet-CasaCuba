const burgerMenuButton = document.querySelector('.burger-menu-button')
const burgerMenuButtonIcon = document.querySelector('.burger-menu-button i')
const burgerMenu = document.querySelector('.burquer-menu')
/**
 * funtion qui ouvre le menu burguer
 */
burgerMenuButton.onclick = function () {
    burgerMenu.classList.toggle('open')
    const isOpen = burgerMenu.classList.contains('open')
    burgerMenuButtonIcon.classList = isOpen ? 'fa-solid fa-xmark' : 'fa-solid fa-bars';
}


////************carrusel de code pen */



const slider = document.querySelector('.slider');

function activate(e) {
    const items = document.querySelectorAll('.item');
    e.target.matches('.next') && slider.append(items[0])
    e.target.matches('.prev') && slider.prepend(items[items.length - 1]);
}

document.addEventListener('click', activate, false);


// **************nav barre scroll *************/


// const navbar = document.querySelector('.nav-main');
// // console.log(navbar);

// window.addEventListener('scroll', () => {
//     if (window.scrollY > 136) {
//         navbar.classList.add('sticky');
//         sidebar.style.position = "fixed";
//         btn.style.top = "30px";
//     } else {
//         navbar.classList.remove('sticky');
//         btn.style.top = "60px";
//     }
// });
