<?php
    $Authentication = new Authentication;
    $Authentication->session();
    $email = $_SESSION['traveler'];
    if($Authentication->UserLoginStatus($email)){
        $protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,strpos( $_SERVER["SERVER_PROTOCOL"],'/'))).'://';
        $links = $_SERVER['HTTP_HOST'];
        header("location:$protocol$links/src/");
    }
    