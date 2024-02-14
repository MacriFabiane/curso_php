<?php

    $arr= range(1,20);

    print_r(array_chunk($arr,4));//vai dividir o array em arrays de 4 elementos
    echo "<br>";
    print_r(array_chunk($arr, 6));
    
?>