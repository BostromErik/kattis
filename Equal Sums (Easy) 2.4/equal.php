<?php 
    fscanf(STDIN, "%d", $rows);

    while($i < $rows)
    {
        if($i === $rows) break;
        fscanf(STDIN, "%s", $case);
        $case = array_shift(explode(' ', $case));
        $step = 1;
        $subset = 0;
        while($j < count($case))
        {
            while($k < count($case))
            {
                $subset = $subset + ($case[$j] + $case[$j + $step]);
                if($subset < $case[$j + $step])
                {

                }
            }
            
        }
        $i++;
    }