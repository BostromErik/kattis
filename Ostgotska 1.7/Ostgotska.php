<?php
    fscanf(STDIN, "%[^\]",  $sentance);
  
    $sentanceArr = explode(' ', trim($sentance));
    $numberOfOstgotskaWords = 0;
    $letters = [];
 
    foreach($sentanceArr as $word){

        $letters = str_split($word);
        for($i = 0; $i < strlen($word) - 1; ++$i){
            if($letters[$i] === 'a' && $letters[$i + 1] === 'e'){
                $numberOfOstgotskaWords++;
                break;
            }
        }
      
    }
    if((($numberOfOstgotskaWords / count($sentanceArr)) * 100) >= 40){
        fprintf(STDOUT, "%s", "dae ae ju traeligt va");
    }else{
        fprintf(STDOUT, "%s", "haer talar vi rikssvenska");
    }

?> 