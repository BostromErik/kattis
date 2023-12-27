<?php

$numberOfRuns = 0;
$recording = "";
fscanf(STDIN, "%d\n", $numberOfRuns);

$animalSounds = []; 
$results = [];
for( $i = 0; $i < $numberOfRuns; $i++ ) { 
    fscanf(STDIN, "%[^\]", $recording);

    while( $animal = fgets(STDIN) ){
        if( strtolower($animal) == "what does the fox say?\n")
            break;
        $animal_arr = explode(" ",$animal);
        $sliced_arr = array_slice($animal_arr, 2);
        $sound = implode(" ", $sliced_arr);
        array_push($animalSounds, trim($sound));
    }
    $recordingArr = explode(" ", $recording);
    foreach ( $recordingArr as $key => $value ) {
        if( in_array( trim($value), $animalSounds ) ) {
            unset($recordingArr[$key]);
        }
    }

    $recording = "";
    fprintf(STDOUT, "%s\n", implode(" ", $recordingArr));
}