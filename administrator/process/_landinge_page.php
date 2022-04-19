<?php
    include_once '../../vendor/autoload.php';
    
    $Branding = new Branding;

    $Validator = new Validator;


    if(isset($_POST['token_systemabout'])){

        $token = $_POST['token_systemabout'];

        $titlelandingdesc = $_POST['titlelandingdesc'];

        $description = $_POST['description'];

        $ValidateToken = $Validator->ValidateToken($token);

        if($ValidateToken==1){

            $ValidateFields = $Validator->ValidateFields($token, $titlelandingdesc, $description);

            if($ValidateFields==1){

                $LandinageAbout = $Branding->LandinageAbout($titlelandingdesc, $description);

                if($LandinageAbout==1){

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
    elseif(isset($_POST['token_footer'])){

        $token = $_POST['token_footer'];

        $contact = $_POST['contact'];

        $facebook = $_POST['facebook'];

        $twitter = $_POST['twitter'];

        $instagram = $_POST['instagram'];

        $ValidateToken = $Validator->ValidateToken($token);

        if($ValidateToken==1){

            $LandinageFooter = $Branding->LandinageFooter($contact, $facebook, $twitter, $instagram);

            if($LandinageFooter==1){

                echo "success";
            }else{

                echo "error -> process failed";
            }

        }else{

            echo "error -> process error";
        }
    }