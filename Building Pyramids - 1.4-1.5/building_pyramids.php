<?php

    fscanf(STDIN, '%d', $number);

    $i = 1;
    $height = 0;
    $totValue = 0;

    while(true){

        $totValue += $i * $i;
        if( $totValue <= $number){
            $i += 2; 
        }else if( $totValue === $number || $totValue > $number ){
            fprintf(STDOUT, "%d", $height);
            break;
        }
        $height++;
    }

?> 