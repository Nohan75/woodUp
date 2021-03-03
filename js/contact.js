const telChoice = document.querySelector("input#tel");
const telInput = document.querySelector("input#show-tel");

const mailChoice = document.querySelector("input#mail");
const mailInput = document.querySelector("input#show-mail");

telChoice.addEventListener("change", () => {
    telInput.setAttribute("hidden", "");
    // telInput.removeAttribute("hidden");
});

mailChoice.addEventListener("change", () => {
    mailInput.removeAttribute("hidden");
});