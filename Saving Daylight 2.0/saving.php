<?php

    $fh = fopen('sample.in', 'r');
    while( $line = fgets($fh) ){
        $singleLine = explode(' ', $line);
        $time1 = new DateTime($singleLine[3]);
        $time2 = new DateTime($singleLine[4]);
        $timeDiff = $time1->diff($time2);
        fprintf(STDOUT, "%s\n", "$singleLine[0] $singleLine[1] $singleLine[2] ".$timeDiff->h.' hours '.$timeDiff->i.' minutes'); 
    }
    fclose($fh);