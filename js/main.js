let registrationInputs;
let registrationPlaceholders;
let registrationCheckbox;
let registrationSubmitButton;

let loginInputs;
let loginPlaceholders;
let loginSubmitButton;


window.onload = function () {
    registrationInputs = document.querySelectorAll(".registration__form__input");
    registrationPlaceholders = document.querySelectorAll(".registration__placeholder");
    registrationCheckbox = document.querySelector(".agree__checkbox");
    registrationSubmitButton = document.querySelector(".registration__submit")

    for (let i = 0; i < registrationInputs.length; i++) {
        if (registrationInputs[i].value != "") {
            registrationPlaceholders[i].classList.add("form__placeholder__mini");
            registrationInputs[i].parentNode.parentNode.classList.add("registration__not-empty");
        }
        else {
            registrationPlaceholders[i].classList.remove("form__placeholder__mini");
            registrationInputs[i].parentNode.parentNode.classList.remove("registration__not-empty");
        }

        checkRegistrationFields();


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



    loginInputs = document.querySelectorAll(".login__form__input");
    loginPlaceholders = document.querySelectorAll(".login__placeholder");
    loginSubmitButton = document.querySelector(".login__submit");

    for (let i = 0; i < loginInputs.length; i++) {
        if (loginInputs[i].value != "") {
            loginPlaceholders[i].classList.add("form__placeholder__mini");
            loginInputs[i].parentNode.parentNode.classList.add("login__not-empty");
        }
        else {
            loginPlaceholders[i].classList.remove("form__placeholder__mini");
            loginInputs[i].parentNode.parentNode.classList.remove("login__not-empty");
        }

        checkLoginFields();


        loginInputs[i].oninput = function () {
            if (loginInputs[i].value != "") {
                loginPlaceholders[i].classList.add("form__placeholder__mini");
                loginInputs[i].parentNode.parentNode.classList.add("login__not-empty");
            }
            else {
                loginPlaceholders[i].classList.remove("form__placeholder__mini");
                loginInputs[i].parentNode.parentNode.classList.remove("login__not-empty");
            }

            checkLoginFields();
        }
    }




    let registrationModeButton = document.querySelector(".change-mode__button__registration");
    let loginModeButton = document.querySelector(".change-mode__button__autorization");
    let registrationButton = document.querySelector(".header__registration");
    let loginButton = document.querySelector(".header__login");
    registrationModeButton.onclick = function () {
        showRegistrationForm();
        registrationModeButton.classList.add("change-mode__button__active");
        loginModeButton.classList.remove("change-mode__button__active");
    }
    loginModeButton.onclick = function () {
        showLoginForm();
        registrationModeButton.classList.remove("change-mode__button__active");
        loginModeButton.classList.add("change-mode__button__active");
    }
    registrationButton.onclick = function () {
        showRegistrationForm();
        registrationModeButton.classList.add("change-mode__button__active");
        loginModeButton.classList.remove("change-mode__button__active");
    }
    loginButton.onclick = function () {
        showLoginForm();
        registrationModeButton.classList.remove("change-mode__button__active");
        loginModeButton.classList.add("change-mode__button__active");
    }



    let formBackground = document.querySelector(".form__background");
    formBackground.onclick = function () {
        let form = document.querySelector(".form");
        form.style.display = "none";
    }
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


function checkLoginFields() {
    for (let i = 0; i < loginInputs.length; i++) {
        if (loginInputs[i].value == "") {
            loginSubmitButton.disabled = true;
            loginSubmitButton.classList.add("submit__unactive");
            return;
        }
    }
    loginSubmitButton.disabled = false;
    loginSubmitButton.classList.remove("submit__unactive");
}


function showRegistrationForm() {
    let form = document.querySelector(".form");
    form.style.display = "block";
    let registrationFields = document.querySelector(".registration__form");
    let loginFields = document.querySelector(".login__form");
    registrationFields.style.display = "block";
    loginFields.style.display = "none";
}

function showLoginForm() {
    let form = document.querySelector(".form");
    form.style.display = "block";
    let registrationFields = document.querySelector(".registration__form");
    let loginFields = document.querySelector(".login__form");
    registrationFields.style.display = "none";
    loginFields.style.display = "block";
}