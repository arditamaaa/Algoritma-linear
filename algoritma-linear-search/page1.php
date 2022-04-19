<?php
    $array = [114, 110, 77, 112, 65, 80, 80, 90, 113, 109, 110, 86, 108, 85, 87, 65,90, 95, 109];
    $input = 77;
    $index = -1;
    for ($i=0; $i < count($array) ; $i++) {
        $search = $array[$i];
        if ($search == $input) {
            $index = $i;
            echo $index;
        }
        // echo $array[$i]." ";
    }
    if ($index == -1) {
        echo 'Nilai '.'tidak ditemukan';
    } else {
        echo 'Nilai '.$input.'ditemukan pada index'.$index ;
    }
    
?>