let userList = document.querySelector("#userLIst");
let search = document.querySelector("#search");

search.onkeyup = ()=>{
    let searchTerm = search.value;

    if(searchTerm !== ""){
        search.classList.add("active");
    }else{
        search.classList.remove("active");
    }

    let xhr = new XMLHttpRequest;
    xhr.open("POST", "php/search.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                userList.innerHTML = data;
            }
        }
    }
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("searchTerm=" + searchTerm);
}

setInterval(()=>{
    let xhr = new XMLHttpRequest;
    xhr.open("GET", "php/user.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                if(!search.classList.contains("active")){
                    userList.innerHTML = data;
                }
            }
        }
    }
    xhr.send();
}, 500);