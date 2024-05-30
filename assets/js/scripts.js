$(document).ready(function () {

    var header = $(".headroom");

    header.headroom({

        "tolerance": 5,

        "offset": 55,

        "classes": {

            "initial": "animated",

            "pinned": "slideDown",

            "unpinned": "slideUp"

        }

    });

});




























//  code ancien perdue ///
// ////************carrusel de code pen */



// const slider = document.querySelector('.slider');

// function activate(e) {
//     const items = document.querySelectorAll('.item');
//     e.target.matches('.next') && slider.append(items[0])
//     e.target.matches('.prev') && slider.prepend(items[items.length - 1]);

// }

// document.addEventListener('click', activate, false);






// // **********menu burguer***********/

// const burgerMenuButton = document.querySelector('.burger-menu-button')
// const burgerMenuButtonIcon = document.querySelector('.burger-menu-button i')
// const burgerMenu = document.querySelector('.burquer-menu')
// /**
//  * funtion qui ouvre le menu burguer
//  */
// burgerMenuButton.onclick = function () {
//     burgerMenu.classList.toggle('open')
//     const isOpen = burgerMenu.classList.contains('open')
//     burgerMenuButtonIcon.classList = isOpen ? 'fa-solid fa-xmark' : 'fa-solid fa-bars';

// }




// **************nav barre scroll *************/


// const navbar1 = document.querySelector('.nav-main');
// console.log(navbar1);

// window.addEventListener('scroll', () => {
//     if (window.scrollY > 136) {
//         navbar1.classList.add('sticky');
//         sidebar.style.position = "fixed";
//         // btn.styl e.top = "30px";
//     } else {
//         navbar1.classList.remove('sticky');
//         // btn.style.top = "60px";
//     }
// });

// Fonction pour afficher ou cacher le mot de passe

function showPass() {
    let mdp = document.getElementById("mdp");
    let confirmMdp = document.getElementById("confirmMdp");

    if (mdp.type === "password") {
        mdp.type = "text";
        confirmMdp.type = "text";
    } else {
        mdp.type = "password";
        confirmMdp.type = "password";
    }
}
