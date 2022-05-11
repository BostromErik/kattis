<?php
    $namesArray = [];
     
    while( $name = fgets(STDIN) ){
        $name = trim($name);
        if($name === '***') break;
        if(!array_key_exists($name, $namesArray)){
            $namesArray[$name] = 1;
        }else{
            $namesArray[$name]++;
        }
    }
   
    $result = [];
    $maxValue = max($namesArray);
    $occurences = 0;
    foreach($namesArray as $name => $value){
        if( $maxValue === $value ){
            $occurences++;
        }
    }

    $result = $occurences > 1 ?  $result = "Runoff!" : array_search($maxValue, $namesArray);
    fprintf(STDOUT, "%s\n", $result);