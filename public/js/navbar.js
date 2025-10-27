const accountButton = document.getElementById("account");
const accountBox = document.getElementById("acccountBox");
let isOpen = false;

accountButton.addEventListener("click", () => {
    accountBox.classList.toggle('hidden');
})