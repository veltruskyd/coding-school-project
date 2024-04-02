<?php

use app\utils\debug;
use app\Models\Track;


foreach ($tracks as $track) {
    

    echo '
    
        <div class="karta">
            <div class="kartaImg">
            <img class="trackImg" src="'.$track['img'].'" alt="">
            </div>
            <p class="kartaText">' . $track['From']." - ".$track['To'] . '</p>
        </div>

    
    ';
    }


        ?>