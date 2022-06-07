<?php 
    fscanf(STDIN, "%d", $rows);
    $i = 0;
    $case = "";
    while( $i < $rows )
    {
        if( $i === $rows ) break;
        fscanf( STDIN, "%[^\n]", $case );
        $case = explode(' ', $case);
        array_shift( $case );
       
       
        $j = 0;
        //because we have 20 numbers
        //all added numbers together cant be a unique match
        $maxNumSteps = 19;
        $step = 0;
        $sum = 0;
        $sum_array = array();
        $originalCases[] = $case;
        
        while( $j < count($case) )
        {   
            $k = $j + 1;
            while( $k < (count($case)) ) 
            {
                
                $sum = intval($case[$j]) + intval($case[$k]);
                $sum_array[] = array($j, $k, $sum); 
                $k++;
            
            }
            $j++;
        }
        $i++;
    }

    print_r($sum_array);