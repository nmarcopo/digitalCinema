// Set up files with NavBar and Modal Inserts
$(function () {
    var path = window.location.pathname;
    var page = path.split("/").pop();
    var pageName = page.split(".")[0];
    $("#navBarInsert").load("res/nav.html");
});