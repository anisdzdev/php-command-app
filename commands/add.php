<?php

$clean_args = preg_replace('!\s+!', ' ', $args);
$list_to_add = explode(" ", trim($clean_args));

if(count($list_to_add)==0){
    echo "Error: Wrong number of arguments";
}
else if(count($list_to_add)==1){
    echo trim($clean_args);
}
else{
    $result = 0;
    foreach ($list_to_add as $num){
        if(!is_numeric($num)) {
            echo "Error: please provide valid arguments";
            return;
        }
        $result += $num;
    }
    echo $result;
}