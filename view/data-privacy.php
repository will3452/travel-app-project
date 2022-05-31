<?php
    include_once '../vendor/autoload.php';

    $Branding = new Branding;
     
    $GetSystemTMD = $Branding->GetSystemTMD();

    $GetBranding = $Branding->GetBranding();

    $termstitle = '';

    $termsdescription = '';

    $conditiontitle = '';

    $conditiondescription = '';

    if($GetSystemTMD){

       $termstitle = $GetSystemTMD->termstitle;

       $termsdescription = $GetSystemTMD->termsdescription;
       
       $conditiontitle = $GetSystemTMD->conditiontitle;

       $conditiondescription = $GetSystemTMD->conditiondescription;

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/default.css?v=39">
    <title><?php echo $GetBranding->name; ?></title>
    <style>
        .container-tmd{
            width: 100%;
            padding:10%;
            margin-bottom: 10%;
        }
        .container-tmd h1{
            letter-spacing: 1px;
            text-align: center;
            background-color: #fff;
            box-shadow:0px 0px 0px 1px rgba(233, 231, 231, 0.3);
            padding:5px 10px;
            border-radius: 5px;
        }
        .container-tmd div{
            background-color: #fff;
            margin-top: 30px;
            box-shadow:0px 0px 0px 1px rgba(233, 231, 231, 0.3);
            padding:20px;
            border-radius: 5px;
        }
        .container-tmd > .terms p{
           font-size:20px;
           letter-spacing: 1px;
        }
        .container-tmd > .conditions p{
           font-size:20px;
           letter-spacing: 1px;
        }
        @media (min-width:800px){
            .container-tmd h1{
                padding:20px;
            }
        }
        @media (min-width:1100px){
            .container-tmd{
                width: 100%;
                padding:10em;
                margin-bottom: 5em;
            }
        }
    </style>
</head>
<body>
<div class="container-tmd">
        <h1>Terms And Condition Privacy Act</h1>
        <div class="terms">
            <p><?php echo ucwords($termstitle); ?></p>
            <span><?php echo $termsdescription; ?></span>
        </div>
        <br>
        <div class="conditions">
            <p><?php echo ucwords($conditiontitle); ?></p>
            <span><?php echo $conditiondescription ?></span>
        </div>
    </div>

    
</body>
</html>