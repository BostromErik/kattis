<?php
    fscanf(STDIN, "%d %d", $x, $maxNumber);
    fscanf(STDIN, "%[^\n]", $numbers);
    $numbers = explode(" ", $numbers);
    $numbers = array_map(function($x){
        return intval($x);
    }, $numbers);
    $result = array();
    foreach($numbers as $num)
    {   
        if(array_key_exists($num, $result)){ 
            $result[$num] = $result[$num] + 1;
        }else{
            $result[$num] = 1;
        }
    }
    $sortedArray = [];
    $tempOccurence = 0;
    $i = 0;
    $tempResult = $result;
    while(count($result) !== $i){

        foreach($tempResult as $key => $numOccurence)
        {   
            if($numOccurence > $tempOccurence)
            {
                $tempOccurence = $numOccurence;
                $tempKey = $key;
            }
        }
        unset($tempResult[$tempKey]);
        $sortedArray[$tempKey] = $tempOccurence;
        $tempOccurence = 0;
        $i++;
    }
    $i=0;
    foreach($sortedArray as $key => $value)
    {
        while($i < $value){
            fprintf(STDOUT, "%s ", $key);
            $i++;
        }
        $i=0;    
    }