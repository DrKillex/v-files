const elimina = document.querySelectorAll(".bottone-elimina");
const popup = document.querySelectorAll('.popup');
const chiudi = document.querySelectorAll('.chiudi');
const form = document.getElementById("form");
let tmp;

elimina.forEach(element => {
    element.addEventListener("click", function () {
        popup.forEach(popupElement => {
            if (popupElement.id === "popup" + element.id) {
                popupElement.classList.remove("d-none");
                popupElement.classList.add("d-flex");
                tmp = popupElement.id;
            }
        });
    });
});

chiudi.forEach(element => {
    element.addEventListener('click', function () {
        popup.forEach(popupElement => {
            if (popupElement.id === tmp) {
                popupElement.classList.remove("d-flex");
                popupElement.classList.add("d-none");
                tmp = "";
            }
        });
    });
});

