<?php
    include_once '../../../vendor/autoload.php';
    $Logo = new Logo;
    $Validator = new Validator;
    if(isset($_POST['token_logo_submit'])){
        $token_logo_submit = $_POST['token_logo_submit'];
        $logofile = $_FILES['logofilename'];
        $ValidateToken = $Validator->ValidateToken($token_logo_submit);
        if($ValidateToken==1){
            $ValidateImage = $Validator->ValidateImage($logofile);
            if($Validator->ValidateImage($logofile)==='emp'){
                echo "EMP";
            }elseif($Validator->ValidateImage($logofile)==='fileexterror'){
                echo "FNA";
            }
            elseif($Validator->ValidateImage($logofile)==='fileeror'){
                echo "FE";
            }elseif($Validator->ValidateImage($logofile)==='fileoversize'){
                echo "FOS";
            }else{
                $LogoProcess = $Logo->LogoProcess($logofile);
                if($LogoProcess==1){
                    echo "success";
                }else{
                    echo "error";
                }
            }
        }else{
            echo "invalidtoken";
        }
    }
    