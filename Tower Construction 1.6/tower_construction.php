<?php
    $totTowers = 0;
    $tower = 0;
    $towers = [];

    fscanf(STDIN, "%d\n", $totTowers);
    $towers = fscanf(STDIN, str_repeat("%d", $totTowers));
    
    $numberOfTowers = 0;
    $previousTower = 0;

    foreach($towers as $tower){
        if($tower > $previousTower) $numberOfTowers++;
        $previousTower = $tower;
    }
    fprintf(STDOUT, "%d", $numberOfTowers);
?> 