<?php include "./objects/header.php"; ?>
  
<body> 
    
<div id="popRoute">
    <form action="/coding-school-project/" class="formContainer" method="post">
        <h3>Přidat novou trasu</h3>
        <label for="addRoute--start">Cesta odkud:</label>
        <input class="form" type="text" name="addRoute--start" required>
        <label for="addRoute--end">Cesta kam:</label>
        <input class="form" type="text" name="addRoute--end"  required>
        <label for="addRoute--maps">Odkaz Mapy.CZ:</label>
        <input class="form" type="text" name="addRoute--maps"  required>
        <button class="addRoute--Button" type="submit">Přidat</button>
    </form>
</div>

<nav>
    <div id="navigace1"><img src="./images/menu.svg" alt="menu">
        <div class="dropdown-content">
        <a class="dropdownItem" href="./index.html">Domů</a><br>
        <a class="dropdownItem" href="./new.html">Nejnovější</a><br>
        <a class="dropdownItem" href="./best.html">Nejlepší</a><br>
        <a class="dropdownItem" href="./views/login.html">Přihlásit</a><br>
        <a class="dropdownItem" href="./views/register.html">Registrovat</a>
        </div>
    </div>
    <div id="navigace2"></div>
    <div id="navigace3"><a href="./views/register.html" title="Registrace"><img src="./images/register.svg" alt="register"></a></div>
    <div id="navigace4"><a href="./views/login.html" title="Přihlášení"><img src="./images/login.svg" alt="login"></a></div>
    <div id="navigace5"></div>
</nav>

<header>
    <h1>C</h1>
    <h2>Cyklistika pohodlně</h2>
    <button id="buttonLink">Přidej trasu</button>
</header>

<main>
<h3>Nejlepší trasy</h3>
<section id="best">
    <div class="karta">
        <div class="kartaImg"></div>
        <p class="kartaText">Kladno - Lány</p>
    </div>
    <div class="karta">
        <div class="kartaImg"></div>
        <p class="kartaText">Kladno - Letiště Václava Havla</p>
    </div>
    <div class="karta">
        <div class="kartaImg"></div>
        <p class="kartaText">Praha Dejvice - Hl. nádraží</p>
    </div>
    <div class="karta">
        <div class="kartaImg"></div>
        <p class="kartaText">TOTO JE ČTVRTÝ DIV</p>
    </div>
    <div class="karta">
        <div class="kartaImg"></div>
        <p class="kartaText">TOTO JE PÁTÝ DIV</p>
    </div>
    <div class="karta">
        <div class="kartaImg"></div>
        <p class="kartaText">TOTO JE ŠESTÝ DIV</p>
    </div>
</section>

<h3>Nejnovější trasy</h3>
<section id="new">
    <div class="karta">
        <div class="kartaImg"></div>
        <p class="kartaText">Kladno - Lány</p>
    </div>
    <div class="karta">
        <div class="kartaImg"></div>
        <p class="kartaText">Kladno - Letiště Václava Havla</p>
    </div>
    <div class="karta">
        <div class="kartaImg"></div>
        <p class="kartaText">Praha Dejvice - Hl. nádraží</p>
    </div>
    <div class="karta">
        <div class="kartaImg"></div>
        <p class="kartaText">TOTO JE ČTVRTÝ DIV</p>
    </div>
    <div class="karta">
        <div class="kartaImg"></div>
        <p class="kartaText">TOTO JE PÁTÝ DIV</p>
    </div>
    <div class="karta">
        <div class="kartaImg"></div>
        <p class="kartaText">TOTO JE ŠESTÝ DIV</p>
    </div>
</section>
</main>

<footer>
    <div class="footerKontakt">
        <a href="mailto:daniel.veltrusky@gmail.com">Napište nám</a>
    </div>
    <div class="footerAbout">
    Cyklistika pohodlně je web zaměřený na sdílení pohodlných a bezpečných cyklostezek pro pohyb mezi městy a uvnitř nich.
    </div>
</footer>

<script src="./script/btnClick.js"></script>
</body> 
  
</html> 