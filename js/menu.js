var menu = document.querySelector("ul.submenu")
var feed = document.querySelector("ul.feedback")

function showMenu() {
    if (menu.style.visibility == "visible" | menu.style.opacity == 1) {
        menu.style.visibility = "hidden";
        menu.style.opacity = 0;
    } else {
        menu.style.visibility = "visible";
        menu.style.opacity = 1;
    }
}

function showFeed() {
    if (feed.style.visibility == "visible" | feed.style.opacity == 1) {
        feed.style.visibility = "hidden";
        feed.style.opacity = 0;
    } else {
        feed.style.visibility = "visible";
        feed.style.opacity = 1;
    }
}