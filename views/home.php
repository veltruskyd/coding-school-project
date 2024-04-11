<?php 

use Core\View;
use Core\router;


View::render('header'); ?>
  
<body> 

<div id="popRoute">
    <form action="/coding-school-project/" class="formContainer" method="post">
        <h3>Přidat novou trasu</h3>
        <label for="addRouteStart">Cesta odkud:</label>
        <input class="form" type="text" name="addRouteStart" required>
        <label for="addRouteEnd">Cesta kam:</label>
        <input class="form" type="text" name="addRouteEnd"  required>
        <label for="addRouteMaps">Odkaz Mapy.CZ:</label>
        <input class="form" type="text" name="addRouteMaps"  required>
        <label for="addRouteImg">Titulní obrázek:</label>
        <input class="form" type="file" name="addRouteImg" type="image">
        <button class="addRoute--Button" type="submit">Přidat</button>
    </form>
</div>

<?php View::render('nav'); ?>

<header>
    <h1>C</h1>
    <h2>Cyklistika pohodlně</h2>
    <button id="buttonLink">Přidej trasu</button>
</header>

<main>
<?php
echo"<h3>$title</h3>";
?>

<section id="best">

<?php
foreach($tracks as $track){
    View::render('card',['track'=>$track]);
}
?>
</section>

</main>

<?php View::render('footer'); ?>

<script src="./script/btnClick.js"></script>
</body> 
  
</html> 
