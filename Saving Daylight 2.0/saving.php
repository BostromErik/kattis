<?php

    $counter = 0;
    $result = [];
    while( $line = fgets(STDIN) ){   
        $counter++;        
        $singleLine = explode(' ', $line);
        $time1 = new DateTime($singleLine[3]);
        $time2 = new DateTime($singleLine[4]);
        $timeDiff = $time1->diff($time2);
        $result = "$singleLine[0] $singleLine[1] $singleLine[2] ".$timeDiff->h.' hours '.$timeDiff->i.' minutes';
        fprintf(STDOUT, "%s\n", $result); 
    }
