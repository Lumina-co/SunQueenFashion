import './bootstrap';
document.getElementById("button").onclick = function(){
    document.getElementById("menu").classList.toggle("hidden");

    document.getElementById("open").classList.toggle("hidden");
    document.getElementById("close").classList.toggle("hidden")
};

var scrollToTopBtn = document.getElementById("navBar");

// ajoute un écouteur d'événements sur le défilement de la fenêtre (scroll)
window.addEventListener("scroll", function() {
  if (window.pageYOffset > 3000) {
    scrollToTopBtn.classList.remove("hidden");
  } else {
    scrollToTopBtn.classList.add("hidden");
  }
});
// Si la position est supérieure à 3000 pixels,
// il rend visible le bouton (ou élément) avec l'ID scrollToTopBtn en lui retirant la classe "hidden"
// Sinon, s'il est en dessous de 3000 pixels, il ajoute la classe "hidden", le cachant ainsi.











