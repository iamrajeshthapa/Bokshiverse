let form = document.querySelector("form");
let submit = document.querySelector("#submit");

form.onsubmit = (e)=>{
    e.preventDefault();
}

submit.onclick = ()=>{
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
                }
            }
        }
    }
    let formData = new FormData(form)
    xhr.send(formData);
}