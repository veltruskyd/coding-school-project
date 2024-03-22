let textNeshoda = document.getElementById("repw--confirm");
const pwc = document.getElementById("loginPW");
const repwc = document.getElementById("repwConf");

function confirm() {

    if (pwc.value != repwc.value) {
        textNeshoda.style.display = "block";
    }else{
        textNeshoda.style.display = "none";
    }};