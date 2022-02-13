<?php 
    fscanf(STDIN, "%[^\]", $rhyme);
    
    fscanf(STDIN, "%d", $numberOfKids);

    $kids = [];
    for($i = 0; $i < $numberOfKids; $i++){
        fscanf(STDIN, "%s", $kid);
        $kids[] = $kid;
    }
    $rhymeArr = explode(" ", $rhyme);

    $team1 = [];
    $team2 = [];
    
    $rhymeStop = count($rhymeArr);
    //$kidsCount = count($kids);

    $kidsCounter = -1;
    $rhyme = -1;
    $round = 0;

    while(!empty($kids)){
        
        $kidsCounter++;
        $rhyme++;
        
        if($rhyme === count($rhymeArr) - 1){
            
            if($round % 2 === 0){
                $team1[] = $kids[$kidsCounter];
            }else{
                $team2[] = $kids[$kidsCounter];
            }

            unset($kids[$kidsCounter]);
            $kids = array_values($kids);
            
            $kidsCounter--;
            $rhyme=-1;
            $round++;
            
        }
        
        if($kidsCounter >= count($kids) - 1){
            $kidsCounter = -1; 
       
        }
    }

    fprintf(STDOUT, "%d\n", count($team1));
    foreach($team1 as $teammate){
        fprintf(STDOUT, "%s\n", $teammate);
    }
    fprintf(STDOUT, "%d\n", count($team2));
    foreach($team2 as $teammate){
        fprintf(STDOUT, "%s\n", $teammate);
    }

?>