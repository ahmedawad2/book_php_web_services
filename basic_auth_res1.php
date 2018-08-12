<?php

if (strtolower($_SERVER['REQUEST_METHOD']) == 'post') {
    print_r($_SERVER);
} elsE {
    echo 'not valid verb!';
}