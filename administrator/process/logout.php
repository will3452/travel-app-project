<?php

include_once '../../vendor/autoload.php';

session_start();

$Authentication = new Authentication;

if($Authentication->UserLogoutAdmin()){

    $protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,strpos( $_SERVER["SERVER_PROTOCOL"],'/'))).'://';

    $links = $_SERVER['HTTP_HOST'];

    header("location:$protocol$links");
    
}