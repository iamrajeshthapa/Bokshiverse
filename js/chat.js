let form = document.querySelector(".messageInputWrapper"),
message = document.querySelector("#message"),
sendButton = document.querySelector("button");
let chatArea = document.querySelector(".chatArea");

form.onsubmit = (e)=>{
    e.preventDefault();
}

sendButton.onclick = ()=>{
    let xhr = new XMLHttpRequest;
    xhr.open("POST", "php/insert-chat.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                message.value = "";
            }
        }
    }
    let formData = new FormData(form)
    xhr.send(formData);
}

setInterval(()=>{
    let xhr = new XMLHttpRequest;
    xhr.open("POST", "php/get-chat.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
               let data = xhr.response;
               chatArea.innerHTML = data;
               
               let scroll = 0;
               window.onscroll = function (e) {  
                scroll = 1;
                } 

                if(scroll == 0){
                    chatArea.scrollTo(0, document.body.scrollHeight);
                }
            }
        }
    }
    let formData = new FormData(form)
    xhr.send(formData);
}, 500);