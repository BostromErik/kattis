<?php 

    fscanf(STDIN, '%d\n', $numberOf);
    fscanf(STDIN, '%s\n', $word);

    $i = $numberOf;
    while( $i !== 0 )
    {   

        $j = $i;
        if($i === 2) {
            $j--;
            fprintf(STDOUT, 
            "$i bottles of $word on the wall, $i bottles of $word.\nTake one down, pass it around, $j bottle of $word on the wall.\n\n");
        }elseif($i === 1){

            fprintf(STDOUT, 
            "$i bottle of $word on the wall, $i bottle of $word.\nTake it down, pass it around, no more bottles of $word.");
        }else{
            $j--;
            fprintf(STDOUT, 
            "$i bottles of $word on the wall, $i bottles of $word.\nTake one down, pass it around, $j bottles of $word on the wall.\n\n");
        }

        $i--;
    }