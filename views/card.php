<?php

use app\Models\Track;

foreach ($tracks as $track) 
    {echo '
    
        <div class="karta">
            <div class="kartaImg"></div>
            <p class="kartaText">' . $track['From']." - ".$track['To'] . '</p>
        </div>
    
    ';
    }
        ?>
