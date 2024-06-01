<?php 

namespace Core;

class Zapujcka {
    public int $daily_rate;


    public function pujcka($b_count, $d_count)
    { 
        $b_count = $_POST[$b_count];
        $d_count = $_POST[$d_count];

        if ($d_count < 7) {
            var_dump($b_count * $d_count * $this->daily_rate);

        } elseif ($d_count > 6) {
            var_dump($b_count * $d_count * ($this->daily_rate + 1000));

        }

        
    
    }


}