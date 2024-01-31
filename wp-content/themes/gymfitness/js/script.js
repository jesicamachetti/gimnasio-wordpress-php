function gymWordPress() {
if(document.querySelector('.swiper')) {
    const opciones = {
loop: true, //si me posiciono en el ultimo elemento vuelve al del principio 
autoplay: {
    delay: 3000
}
    }
    new Swiper('.swiper', opciones);
}
var textWrapper = document.querySelector('.ml2');

if(textWrapper) {
    textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml2 .letter',
    scale: [4,1],
    opacity: [0,1],
    translateZ: 0,
    easing: "easeOutExpo",
    duration: 950,
    delay: (el, i) => 70*i
  }).add({
    targets: '.ml2',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });
}
const hamburguer = document.querySelector('.hamburguer-menu svg')
hamburguer.addEventListener('click', function() {
  const menuPrincipal = document.querySelector('.contenedor-menu');
  menuPrincipal.classList.toggle('mostrar');/**el toggle lo que hace es que cada vez que presione ahi  */
})

}

//cuando damos scroll registra de abajo h
document.addEventListener('DOMContentLoaded', gymWordPress)

window.onscroll = function() {
  const scroll = window.scrollY;

  const barraNav = document.querySelector('.barra-navegacion')

  if(scroll > 300) {
    barraNav.classList.add('fixed-top');
  } else {
    barraNav.classList.remove('fixed-top')
  }
}