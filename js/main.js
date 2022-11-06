let registrationInputs;
let registrationPlaceholders;
let registrationCheckbox;
let registrationSubmitButton;

window.onload = function () {
    registrationInputs = document.querySelectorAll(".registration__form__input");
    registrationPlaceholders = document.querySelectorAll(".registration__placeholder");
    registrationCheckbox = document.querySelector(".agree__checkbox");
    registrationSubmitButton = document.querySelector(".registration__submit")

    for (let i = 0; i < registrationInputs.length; i++) {
        registrationInputs[i].oninput = function () {
            if (registrationInputs[i].value != "") {
                registrationPlaceholders[i].classList.add("form__placeholder__mini");
                registrationInputs[i].parentNode.parentNode.classList.add("registration__not-empty");
            }
            else {
                registrationPlaceholders[i].classList.remove("form__placeholder__mini");
                registrationInputs[i].parentNode.parentNode.classList.remove("registration__not-empty");
            }

            checkRegistrationFields();
        }
    }

    registrationCheckbox.onclick = checkRegistrationFields;
}


function checkRegistrationFields() {
    if (registrationCheckbox.checked == false) {
        registrationSubmitButton.disabled = true;
        registrationSubmitButton.classList.add("submit__unactive");
        return;
    }
    ;
    for (let i = 0; i < registrationInputs.length; i++) {
        if (registrationInputs[i].value == "") {
            registrationSubmitButton.disabled = true;
            registrationSubmitButton.classList.add("submit__unactive");
            return;
        }
    }
    registrationSubmitButton.disabled = false;
    registrationSubmitButton.classList.remove("submit__unactive");
}