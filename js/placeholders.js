window.onload = function(){
    let inputs = document.querySelectorAll(".form__input");
    let placeholders = document.querySelectorAll(".form__placeholder");
    for(let i = 0; i < inputs.length; i++){
        inputs[i].oninput = function(){
            if(inputs[i].value != ""){
                placeholders[i].classList.add("form__placeholder__mini");
            }
            else{
                placeholders[i].classList.remove("form__placeholder__mini");
            }
        }
    }
}