<?php
//not done
    $namesArray = [];

    $fp = fopen('test0.in', 'r');   
    while( $name = fgets($fp) ){
        $name = trim($name);
        
        if($name === '***') break;
        if(!array_key_exists($name, $namesArray)){
            $namesArray[$name] = 1;
        }else{
            $namesArray[$name]++;
        }
        
    }
    var_dump($namesArray);
    $result = [];
    $maxValue = max($namesArray);
    foreach($namesArray as $name => $value){
        if($value === $maxValue){
            $result = "Runoff!";
            break;
        }else{
            $result = array_search($maxValue, $namesArray);
        }
    }

    fprintf(STDOUT, "%s\n", $result);
    
    fclose($fp);