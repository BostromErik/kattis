<?php
    fscanf(STDIN, "%d %d", $x, $maxNumber);
    fscanf(STDIN, "%[^\n]", $numbers);
    $numbers = explode(" ", $numbers);
    $numbers = array_map(function($x){
        return intval($x);
    }, $numbers);
    $result = array();
    var_dump($numbers);
    foreach($numbers as $num)
    {   
        if(array_key_exists($num, $result)){ 
            $result[$num] = $result[$num] + 1;
        }else{
            $result[$num] = 1;
        }
    }

    foreach($result as $singleNumber)
    {

    }

    print_r($result);