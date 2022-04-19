<?php

    include_once '../../vendor/autoload.php';
    
    $Payment = new Payment;

    $Validator = new Validator;

    if(isset($_POST['token_generate_report'])){

        $token = $_POST['token_generate_report'];

        $datefrom = $_POST['datefrom'];

        $dateto = $_POST['dateto'];

        $ValidateToken = $Validator->ValidateToken($token);

        if($ValidateToken==1){

            $ValidateFields = $Validator->ValidateFields($token, $datefrom, $dateto);

            if($ValidateFields==1){

                if($datefrom<$dateto){

                    if($Validator->ValidateDate($datefrom) && $Validator->ValidateDate($dateto)){

                        //generate report

                        $generate = $Payment->GenerateReport($datefrom, $dateto);

                        if(!$generate){

                            header("location:../generate-report?error=noreport");
                            
                        }
                    }else{

                       header("location:../generate-report?error=processfailed");
                    }
                    
                }else{

                    header("location:../generate-report?error=invaliddate");
                }

            }else{

                header("location:../generate-report?error=processfailed");
            }

        }else{

            header("location:../generate-report?error=processfailed");
        }
    }
