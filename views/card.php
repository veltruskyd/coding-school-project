<?php

use app\Models\Track;


$sortingParam = isset($sortingParam) ? $sortingParam : 'default'; // Nastavení výchozího řazení, pokud není uvedeno žádné
$sortedTracks = [];

if ($sortingParam === 'best') {
    $sortedTracks = $tracks;
foreach ($tracks as $track) 
    {echo '
    
        <div class="karta">
            <div class="kartaImg">
            <img class="trackImg" src="'.$track['Img'].'" alt="">
            </div>
            <p class="kartaText">' . $track['From']." - ".$track['To'] . '</p>
        </div>
    
    ';
    }
}
        ?>
