$(document).ready(function () {
    var searchbox = document.getElementById("search");
    searchbox.onkeyup = function () {
        var videos = document.getElementsByClassName("videoListItem");
        Array.from(videos).forEach(element => {
            if (!element.innerText.includes(searchbox.value)) {
                // if the search result is not in one of the strings of videos, hide it
                $(element).addClass("d-none");
            } else {
                // if it is, show it
                $(element).removeClass("d-none");
            }
        });
    }
})