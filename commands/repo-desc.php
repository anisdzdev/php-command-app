<?php

$clean_args = preg_replace('!\s+!', ' ', $args);
$args = explode(" ", trim($clean_args));

if(count($args)!=2){
    echo "Error: Wrong number of arguments";
}
else{
    $url = "https://api.github.com/repos/$args[0]/$args[1]";
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        'user-agent: php',
    ));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_TIMEOUT, 120);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
    $response = curl_exec($curl);
    if(strlen($response) == 0){
        echo "Error: Repo not found";
        return;
    }else{
        $result = json_decode($response);
        if(isset($result->description))
            echo $result->description;
        else
            echo "Error: " . $result->message;
    }
    curl_close($curl);

}