<?php 

use Core\View;


View::render('header'); ?>
  
<body> 

<?php View::render('nav'); ?>

<main>

    <div id="divLogin">
        <form action="/coding-school-project/" class="formContainer" method="post">
            <h3>Hic Sunt Leones</h3>
            
        </form>
    </div>

</main>
<h3>Podobné trasy</h3>
<section id="best">
<?php
foreach($tracks as $track) {
    View::render('card', ['track'=>$track]);
}
?>
</section>

<?php View::render('footer'); ?>

</body> 
  
</html> 