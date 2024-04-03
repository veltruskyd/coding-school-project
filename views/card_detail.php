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

<section>
<?php
include "views/card.php";
?>
</section>

<?php View::render('footer'); ?>

</body> 
  
</html> 