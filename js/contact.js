const telChoice = document.querySelector("input#tel");
const telInput = document.querySelector("input#show-tel");

const mailChoice = document.querySelector("input#mail");
const mailInput = document.querySelector("input#show-mail");

const openingChoice = document.querySelector('input#openingtime');
const openingTab = document.querySelector('.opening');

/**
 * Évènements qui permettent d'afficher les numéros de téléphone, email, et les horaires d'ouverture
 * Ajoute et enlève l'attribut hidden
 */
telChoice.addEventListener("change", () => {
    telInput.toggleAttribute("hidden");
});

mailChoice.addEventListener("change", () => {
    mailInput.toggleAttribute("hidden");
});

openingChoice.addEventListener("change", () => {
    openingTab.classList.toggle("hidden");
});