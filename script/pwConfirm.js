const pw = document.getElementById("loginPW");
const repw = document.getElementById("repwConf");
let textKratky = document.getElementById("pw--short");
textKratky.style.display = "none";

pw.addEventListener("keyup", (event) => {
    let value = event.target.value;
    if (value.length < 6) {
        textKratky.style.display = "block";
    }else{
        textKratky.style.display = "none";
    }
});

