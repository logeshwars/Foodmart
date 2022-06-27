let menu = false;
let navbar = document.querySelector("#navbar");

function showmenu() {
    if (menu) {
        navbar.style.display = "none"
        menu = false
    } else {
        navbar.style.display = "flex"
        menu = true
    }
}

function cutString(str) {
    if (str.length === 30)
        return str;
    else
        return str.slice(0, 30);
}