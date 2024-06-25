<?php

if(isset($_GET['home'])){
    echo "welcome\n";
}

if($_SERVER['REQUEST_METHOD'] == "GET" && !isset($_GET['home'])){
    echo "hy from hosted";
}