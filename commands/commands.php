<?php

if(!isset($_POST['cmd']) || !isset($_POST['args'])){
    echo "Error: Unsupported command";
    return;
}

$cmd = $_POST['cmd'];
$args = $_POST['args'];

//New Commands can be easily added here
switch ($cmd){
    case "add":
        include("add.php");
        break;
    case "sort-asc":
        include("sort-asc.php");
        break;
    case "repo-desc":
        include("repo-desc.php");
        break;
    default:
        echo "Error: Unsupported command";
        break;
}