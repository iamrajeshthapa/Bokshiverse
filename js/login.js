let form = document.querySelector("form");
let submit = document.querySelector("#submit");
let error = document.querySelector(".error");

form.onsubmit = (e)=>{
    e.preventDefault();
}

submit.onclick = ()=>{
    let xhr = new XMLHttpRequest;
    xhr.open("POST", "php/login.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                if(data == "success"){
                    location.href = "home.php"
                }else{
                    error.style.display = "flex";
                    error.innerText = data;
                }
            }
        }
    }
    let formData = new FormData(form)
    xhr.send(formData);
}