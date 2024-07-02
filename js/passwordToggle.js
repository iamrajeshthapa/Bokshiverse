let password = document.querySelector("#password");
let eye = document.querySelector("#eye");

eye.onclick = ()=>{
    if(password.type == 'password'){
        eye.classList.remove("fa-eye");
        eye.classList.add("fa-eye-slash");
        password.setAttribute('type', "text");
    }else{
        eye.classList.add("fa-eye");
        eye.classList.remove("fa-eye-slash");
        password.setAttribute('type', "password");
    }
}