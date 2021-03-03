const telChoice = document.querySelector("input#tel");
const telInput = document.querySelector("input#show-tel");

const mailChoice = document.querySelector("input#mail");
const mailInput = document.querySelector("input#show-mail");

const openingChoice = document.querySelector('input#openingtime');
const openingTab = document.querySelector('.opening');

telChoice.addEventListener("change", () => {
    // telInput.setAttribute("hidden", "");
    // telInput.removeAttribute("hidden");
    telInput.toggleAttribute("hidden");
});

mailChoice.addEventListener("change", () => {
    // mailInput.removeAttribute("hidden");
    mailInput.toggleAttribute("hidden");
});

openingChoice.addEventListener("change", () => {
    openingTab.classList.toggle("hidden");
});