<?php

$clean_args = preg_replace('!\s+!', ' ', $args);
$list_to_sort = explode(" ", trim($clean_args));

if(count($list_to_sort)==0){
    echo "Error: Wrong number of arguments";
}
else if(count($list_to_sort)==1){
    echo trim($clean_args);
}
else{
    sort($list_to_sort);
    $string = rtrim(implode(',', $list_to_sort), ',');
    echo $string;
}