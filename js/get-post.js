let feed = document.querySelector(".feed");

(() => {
    let xhr = new XMLHttpRequest;
    xhr.open("GET", "php/get-post.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                feed.innerHTML = data
                // Get all <video> elements.
                const videos = document.querySelectorAll('video');

                // Pause all <video> elements except for the one that started playing.
                function pauseOtherVideos({ target }) {
                    for (const video of videos) {
                        if (video !== target) {
                            video.pause();
                        }
                    }
                }

                // Listen for the 'play' event on all the <video> elements.
                for (const video of videos) {
                    video.addEventListener('play', pauseOtherVideos);
                }
            }
        }
    }
    xhr.send();
})()

