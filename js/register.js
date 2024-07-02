let form = document.querySelector("form");
let submit = document.querySelector("#submit");
let folderClick = document.querySelector(".folderClick");
let profilePictureInput = document.querySelector("#profilePictureInput");

folderClick.onclick = ()=>{
    profilePictureInput.click();
}

form.onsubmit = (e)=>{
    e.preventDefault();
}

submit.onclick = ()=>{
    let xhr = new XMLHttpRequest;
    xhr.open("POST", "php/register.php", true);
    xhr.onload = ()=>{

    }
    let formData = new FormData(form)
    xhr.send(formData);
}