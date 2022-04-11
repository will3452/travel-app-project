<?php

// echo 'Current PHP version: ' . phpversion();
$date = date("Y-m-d");
$d = strtotime("+1 months",strtotime($date));
echo   date("Y-m-d",$d); // This will print **2015-06-25** 