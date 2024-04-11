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
            <a class="card_detail" href="'.$track['Mapy_Link']. '" target="_blank">Jdi na MAPY.CZ</a>
            <p class="card_detail">Počet Liků: ' . $track['Like'] . '</p>
            <div class="like">
                <div>
                    <form action="" method="post">
                        <button type="submit" role="button" name="getlike" id="minus" class="like" value=-1>-</button>
                    </form>
                </div>
                <div></div>
                <div>
                    <form action="" method="post">
                        <button type="submit" role="button" name="getlike" id="plus" class="like" value=1>+</button>
                    </form>
                </div>
            </div>
        </div>'
;} 
?>
</main>

<?php View::render('footer'); ?>

</body> 


</html> 

<div></div>