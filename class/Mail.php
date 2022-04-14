<?php


class Mail extends User{

    Public function SendMailAcceptAccount($protocollinks, $title_mail, $headtitle, $message_content){

        return "<html lang='en'>
            <head>
            <meta charset='UTF-8'>
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <meta name='viewport' content='width=device-width, initial-scale=1.'>
            </head>

            <body style='padding:0;
            font-family: Arial, Helvetica, sans-serif;
            font-size:1rem;
            width:100%;
            margin:0;
            color:black;
            background: #0095a4;'>

            <div style='flex-direction:row;  background: #0095a4;
            color:white;
            z-index:98;
            padding:10px;
            text-align:center;
            box-shadow:0 0 3px rgba(0,0,0,.25);'>
            <h2>$headtitle</h2>
            </div>
            <div style='width:100%; background:white; margin:auto;'>
            <div style='width:100%;
            padding:10px 20px 10px 20px;'>
            <p style='font-size:25px; '>$title_mail</p>
            </div>
            <div style='width:100%;
            padding: 10px 20px;'>
                <p>Dear User</p>
                <p>$message_content </p>
                <p> Login Now!.</p>
                <a href='$protocollinks/user/login'>$protocollinks/user/login</a>
                <p>Thank You so much.! </p>
            </div>   

                </div> 
            </body>
            </html>";
    }

    Public function SendMailCancelAccount($protocollinks, $title_mail, $headtitle, $message_content){

        return "<html lang='en'>
            <head>
            <meta charset='UTF-8'>
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <meta name='viewport' content='width=device-width, initial-scale=1.'>
            </head>

            <body style='padding:0;
            font-family: Arial, Helvetica, sans-serif;
            font-size:1rem;
            width:100%;
            margin:0;
            color:black;
            background: #0095a4;'>

            <div style='flex-direction:row;  background: #0095a4;
            color:white;
            z-index:98;
            padding:10px;
            text-align:center;
            box-shadow:0 0 3px rgba(0,0,0,.25);'>
            <h2>$headtitle</h2>
            </div>
            <div style='width:100%; background:white; margin:auto;'>
            <div style='width:100%;
            padding:10px 20px 10px 20px;'>
            <p style='font-size:25px; '>$title_mail</p>
            </div>
            <div style='width:100%;
            padding: 10px 20px;'>
                <p>Dear User</p>
                <p>$message_content </p>
                <p> Sign Up Now!.</p>
                <a href='$protocollinks/user/register_manager'>$protocollinks/user/register_manager</a>
                <p>Thank You so much.! </p>
            </div>   

                </div> 
            </body>
            </html>";
    }
    public function SendMailAccDisabling($protocollinks, $title_mail, $headtitle, $message_content, $message_thanks){

            return "<html lang='en'>
            <head>
            <meta charset='UTF-8'>
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <meta name='viewport' content='width=device-width, initial-scale=1.'>
            </head>

            <body style='padding:0;
            font-family: Arial, Helvetica, sans-serif;
            font-size:1rem;
            width:100%;
            margin:0;
            color:black;
            background: #0095a4;'>

            <div style='flex-direction:row;  background: #0095a4;
            color:white;
            z-index:98;
            padding:10px;
            text-align:center;
            box-shadow:0 0 3px rgba(0,0,0,.25);'>
            <h2>$headtitle</h2>
            </div>
            <div style='width:100%; background:white; margin:auto;'>
            <div style='width:100%;
            padding:10px 20px 10px 20px;'>
            <p style='font-size:25px; '>$title_mail</p>
            </div>
            <div style='width:100%;
            padding: 10px 20px;'>
                <p>Dear User</p>
                <p>$message_content </p>
                <p>$message_thanks</p>
            </div>   

                </div> 
            </body>
            </html>";
    }
}