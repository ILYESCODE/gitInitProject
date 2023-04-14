// Selelction des elements
let testdiv1 = document.querySelector('#testdiv1');

if (testdiv1 != null && typeof testdiv1 != 'undefined') {
    testdiv1.addEventListener('click', function () {

        if (this.style.background == 'yellow') {
            this.style.background = 'green';
        } else {
            this.style.background = 'yellow';
        }
    })
}

// Menu Dynamique methode 1

// 1- Selection des elements
let btnNav = document.querySelector('#btnNav'),
    nav = document.querySelector('#nav');

let btnGrid = document.querySelector('#btnGrid'),
    btnBlock = document.querySelector('#btnBlock'),
    divArticles = document.querySelectorAll('.article');



// console.log(divArticles)
// 2- Declaration des fonctions de traitements
const navAnimate = function (element){
    if(element.style.left == '0%') element.style.left = "-"+element.offsetWidth+"px";
    else element.style.left = '0%'
}

const changeFormat = function (className){
    for(let i = 0; i< divArticles.length; i++){
        // divArticles[i].className= className;
        console.log('la valeur de i ',i)
        divArticles[i].style.background = 'blue';

        if(i==2) divArticles[i].style.background = 'red';

    }
}

if (btnGrid != null && typeof btnGrid != 'undefined' && btnBlock != null && typeof btnBlock != 'undefined') {
    btnGrid.addEventListener('click', function () {
        changeFormat("article2")
    })
    btnBlock.addEventListener('click', function () {
        changeFormat("article")
    })
}

// 3- Declaration des evenements
if (btnNav != null && typeof btnNav != undefined && nav != null && typeof nav != undefined) {
    btnNav.addEventListener('click', function () {
        navAnimate(nav)
    })
    nav.addEventListener('mouseover', function () {
        navAnimate(this)
    })
    nav.addEventListener('mouseout', function () {
        navAnimate(this)
    })
}
