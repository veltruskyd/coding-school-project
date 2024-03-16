console.log('OK');

let popOverlay = document.getElementById("popRoute");

let btn = document.getElementById("buttonLink");

btn.onclick = function () {
    popRoute.style.display = "flex";
}

window.onclick = function(event) {
    if (event.target == popOverlay) {
        popOverlay.style.display = "none";
    }
}