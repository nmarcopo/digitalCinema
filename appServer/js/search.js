$(document).ready(function () {
    var searchbox = document.getElementById("search");
    searchbox.onkeyup = function () {
        var videos = document.getElementsByClassName("videoListItem");
        Array.from(videos).forEach(element => {
            if(element.innerText.includes(searchbox.innerText)){
                console.log(searchbox.innerText);
            }
        });
    }
})