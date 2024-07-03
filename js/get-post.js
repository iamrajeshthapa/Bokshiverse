let feed = document.querySelector(".feed");

setInterval(()=>{
    let xhr = new XMLHttpRequest;
    xhr.open("GET", "php/get-post.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                feed.innerHTML = data
            }
        }
    }
    xhr.send();
}, 500);