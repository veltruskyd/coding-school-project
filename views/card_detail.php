<?php 

use Core\View;


View::render('header'); ?>
  
<body> 

<?php View::render('nav'); ?>

<main id="card_detail_main">
<?php foreach($tracks as $track) { echo
        '<div  id="card_detail_container">
            <h3>' . $track['From'] . ' - ' . $track['To'] . '</h3>
            <img class="card_detail" src="' . $track['img'] . '" alt="">
            <button id="buttonLink"><a href="'.$track['Mapy_Link']. '"></a></button>
            <p class="card_detail">Počet Liků: ' . $track['Like'] . '</p>
        </div>'
;} 
?>
</main>

<?php View::render('footer'); ?>

</body> 
  
</html> 