let form = document.querySelector("form");
let submit = document.querySelector("#submit");
let postMediaInput = document.querySelector(".add input");
let mediaButton = document.querySelector("#mediaButton");
let update = document.querySelector(".update");
let load = document.querySelector("#load");

form.onsubmit = (e)=>{
    e.preventDefault();
}

mediaButton.onclick = ()=>{
    postMediaInput.click();
    setInterval(()=>{
        if(postMediaInput.files.length !== 0){
            update.style.display = "flex";
        }
    },100);
}


submit.onclick = ()=>{
    load.innerHTML = "<i class=\"fa-solid fa-gear fa-spin\"></i>";
    submit.disabled = true;
    submit.style.backgroundColor = "rgb(150, 150, 150)"
    let xhr = new XMLHttpRequest;
    xhr.open("POST", "php/post.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                if(data == "success"){
                    location.href = "home.php";
                }else{
                    alert(data);
                    window.location.href = "home.php";
                }
            }
        }
    }
    let formData = new FormData(form)
    xhr.send(formData);
}