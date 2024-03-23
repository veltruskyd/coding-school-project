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

<?php include "./objects/nav.php"; ?>

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

<?php include "../coding-school-project/objects/footer.php"; ?>

<script src="./script/btnClick.js"></script>
</body> 
  
</html> 