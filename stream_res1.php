<?php

if (strtolower($_SERVER['REQUEST_METHOD']) == 'post') {
    //getting the sent data from the request side
    $jsonData = file_get_contents("php://input");
    $jsonArray = json_decode($jsonData, true);
    //printing the S_SERVER in order to investigate the sent headers
    print_r(array_merge($jsonArray, $_SERVER));
} else {
    echo 'non valid';
}