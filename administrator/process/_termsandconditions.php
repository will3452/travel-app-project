<?php
    include_once '../../vendor/autoload.php';
    
    $Branding = new Branding;

    $Validator = new Validator;

    if(isset($_POST['token_tmd'])){

        $token = $_POST['token_tmd'];

        $titlet = $_POST['titlet'];

        $descriptiont = $_POST['descriptiont'];

        $titlec = $_POST['titlec'];

        $descriptionc = $_POST['descriptionc'];

        $ValidateToken = $Validator->ValidateToken($token);

        if($ValidateToken==1){

            $ValidateFields = $Validator->ValidateFields($token, $titlet, $descriptiont, $titlec, $descriptionc);

            if($ValidateFields==1){

                $TermsAndConProcess = $Branding->TermsAndConProcess($titlet, $descriptiont, $titlec, $descriptionc);

                if($TermsAndConProcess==1){

                    echo "success";
                }else{

                    echo "error -> process failed";
                }

            }else{

                echo "error -> empty fields";
            }

        }else{

            echo "error -> process error";
        }
    }