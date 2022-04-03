<?php
    include_once '../../../vendor/autoload.php';
    $Branding = new Branding;
    $Validator = new Validator;
    if(isset($_POST['token_brand_submit'])){
        $token_brand_submit = $_POST['token_brand_submit'];
        $brand = $_POST['brand'];
        $description = $_POST['description'];
        $ValidateToken = $Validator->ValidateToken($token_brand_submit);
        if($ValidateToken==1){
            $ValidateFields = $Validator->ValidateFields($brand, $description, $token_brand_submit);
            if($ValidateFields==1){
                $BrandingProcess = $Branding->BrandingProcess($brand, $description);
                if($BrandingProcess==1){
                    echo "success";
                }else{
                    echo "error";
                }
            }else{
                echo "empty";
            }
        }else{
            echo "invalidtoken";
        }
    }