<?php
fscanf(STDIN, "%d\n", $numberOfPasswords);

$i = 0;
$probabilities = array();
while( $password = fgets(STDIN) ){
   
    $passwords_prob = explode(' ', $password);
    array_push($probabilities, (float)$passwords_prob[1]);
    $i++;
    if($i === $numberOfPasswords) break;
}
usort($probabilities,function($x1, $x2){
    return $x1 < $x2 ? 1 : -1;
});
$attempt = 1;
$outcome = 0;
for($i = 0; $i < count($probabilities); $i++)
{   
    $outcome = $outcome + ($attempt * $probabilities[$i]);
    $attempt++; 
}

fprintf(STDOUT, "%.04f", round((float)$outcome, 4));