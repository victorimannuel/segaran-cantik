passwordToggle = document.querySelectorAll(".password-toggle")

let visibilityToggle = ()=>{
    passwordField = document.querySelectorAll("input[name='password']")[0]
    if(passwordField.getAttribute('type') === 'password'){
        passwordField.setAttribute('type', 'text')
    } else{
        passwordField.setAttribute('type', 'password')
    }
    
    for(let i = 0; i < passwordToggle.length; i++){
        if(passwordToggle[i].hasAttribute('hidden')){
            passwordToggle[i].removeAttribute('hidden')
        } else{
            passwordToggle[i].setAttribute('hidden', '')
        }
    }
}

for(let i = 0; i < passwordToggle.length; i++){
    passwordToggle[i].addEventListener("click", visibilityToggle)
}
