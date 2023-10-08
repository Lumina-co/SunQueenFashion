import "./bootstrap";
document.getElementById("button").onclick = function () {
    document.getElementById("menu").classList.toggle("hidden");

    document.getElementById("open").classList.toggle("hidden");
    document.getElementById("close").classList.toggle("hidden");
};

// Sélectionne le bouton de retour en haut par son ID
const scrollToTopBtn = document.getElementById("scrollToTop");

// Sélectionne l'élément racine <html> du document
const rootElement = document.documentElement;

// fonction qui gère les événements de défilement
function handleScroll() {
    if (window.scrollY > 1000) {
        // Si la position de défilement est supérieure à 1000 pixels,
        scrollToTopBtn.style.display = "block"; //affiche le bouton de retour en haut
    } else {
        // Sinon, masque le bouton de retour en haut
        scrollToTopBtn.style.display = "none";
    }
}

// Fonction pour déplacer la page vers le haut
function scrollToTop() {
    rootElement.scrollTo({
        top: 0, // Déplace la page au sommet
        behavior: "smooth", // Ajoute un effet de défilement doux
    });
}

// Ajoute un écouteur d'événements au bouton. Au click, déplace la page vers le haut
scrollToTopBtn.addEventListener("click", scrollToTop);

// Ajoute un écouteur d'événements au scroll à toute la page.
document.addEventListener("scroll", handleScroll);
// Appelle la fonction handleScroll (condition d'affichage du bouton) à chaque scroll
