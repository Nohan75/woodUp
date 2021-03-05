const toggleButton = document.querySelector("#toggler");
const menu = document.querySelector(".menu");

/**
 * Évènement qui permet d'écouter au clic du bouton menu qui permet d'ajouter et d'enlever une classe sur un element
 * Permet d'afficher le menu sur mobile
 */
toggleButton.addEventListener("click", () => {
    // if(toggleButton.checked){

    // }
    menu.classList.toggle("show-menu");
});