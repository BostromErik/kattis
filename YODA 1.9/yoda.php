<?php
    $value1 = fscanf(STDIN, '%s\n');
    $value2 = fscanf(STDIN, '%s\n');

    $value1 = $value1[0];
    $value2 = $value2[0];

    $length = strlen($value1) > strlen($value2) ? strlen($value1) : strlen($value2);   
   
    if(strlen($value1) > strlen($value2)){
        $zerosToAdd = strlen($value1) - strlen($value2);
        $zeros = str_repeat("0", $zerosToAdd);
        $value2 = $zeros.$value2;
    }else if(strlen($value1) < strlen($value2)){
        $zerosToAdd = strlen($value2) - strlen($value1);
        $zeros = str_repeat("0", $zerosToAdd);
        $value1 = $zeros.$value1;
    }
    $value1 = str_split($value1);
    $value2 = str_split($value2);
   
    for($i = $length - 1; $i >= 0; $i--){
        if(intval($value1[$i]) > intval($value2[$i])){
            $value2[$i] = ""; 
        }else if(intval($value2[$i]) > intval($value1[$i])){
            $value1[$i] = "";
        }  
    }
    
    $value1 = implode("", $value1); 
    $value2 = implode("", $value2); 

    if(empty($value1) && $value1 !== "0"){
        fprintf(STDOUT, "YODA\n");
    }else{
        fprintf(STDOUT, "%d\n", $value1);
    }
    if(empty($value2) && $value2 !== "0"){
        fprintf(STDOUT, "YODA\n");
    }else{
        fprintf(STDOUT, "%d\n", $value2);
    }