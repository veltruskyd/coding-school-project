const pw = document.getElementById('loginPW');
const repw = document.getElementById("repwConf");
let textKratky = document.getElementById("pw--short");
let textShoda = document.getElementById("repw--confirm");

pw.addEventListener("keyup", (event) => {
    const value = event.target.value;
    const charCount = value.length;
    if (charCount > 0 && charCount < 6) {
        textKratky.style.display = "block";
    }else{
        textKratky.style.display = "none";
    }

    repw.addEventListener("keyup", (event) => {
        const reValue = event.target.value;
        
        if (value === reValue) {
            textShoda.style.display = "none";
        }else{
            textShoda.style.display = "block";
        }
    });
});


