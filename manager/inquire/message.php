<?php
     include_once '../../vendor/autoload.php';

     include_once '../process/LoginStatus.php';

     include_once '../process/id_validation_fetch.php';

     if(!isset($_GET['traveler_id'])){

        header("location:../traveler");

     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../public/css/default.css?v=30">
    <link rel="stylesheet" href="/../public/css/user_style.css?v=30">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="/../public/js/operate.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://kit.fontawesome.com/a66db60870.js" crossorigin="anonymous"></script>
    <title>Manager - Inquire</title>
</head>
<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bgnav shadow-sm p-3 mb-5 rounded">
        <?php
            include '../_UI/header_2.php';
            include '../_UI/modal.php';
            echo $deleteallnotif;
        ?>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <?php
                include '../_UI/sidebar.php';
                echo $sidebarinside;
            ?>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <p class="mt-4 edit-title">Inquire</p>
                    <a href="../traveler"><button id="backpage_color"><i class="fas fa-arrow-circle-left"></i></button></a>
                    <form id="form_initialize_chat">
                        <input type="hidden" id="receiver" value="<?php  echo $data->email; ?>" placeholder="receiver">
                        <input type="hidden" id="sender" value="<?php echo $email; ?>"  placeholder="sender">
                    </form>
                    <div class="chat_main_container">
                        <div class="chat_main_header">
                            <div class="circular--landscape_message"> 
                                <img src="../../images/users/<?php echo $data->image ?>" alt="">
                            </div>
                            <p><?php echo $data->email; ?></p>
                        </div>
                        <div class="chat_main_body">
                            <div class="chat_content">
                                
                            </div>
                            <div class="loadingforallcontent_message">
                                <div class="loading-icon_message">
                                    <div class="center">
                                        <div class="span1load"></div>
                                        <div class="span2load"></div>
                                        <div class="span3load"></div>
                                    </div>
                                </div> 
                            </div>
                            <div class="chat_form">
                                <form id="submit_text">
                                    <input type="hidden" id="chatId">
                                    <input type="hidden" id="messageSender" value="<?php echo $email; ?>">
                                    <input type="text" id="message_" name="message_" class="message_" placeholder="Message Here....">
                                    <button><i class="fas fa-paper-plane"></i></button>
                                </form> 
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                </div>
            </main>
        </div>
    </div>
    <script src="../js/notificaiton_2.js?v=12"></script>
    <script>
        function myFunction() {
                var receiverEmail = $('#receiver').val();
                var senderEmail = $('#sender').val();
                $.get(`https://nuwang.tech/api/chat/init?members[0]=${receiverEmail}&members[1]=${senderEmail}`, function (data, status) {
                    let {id, messages} = data;
                    console.log(id);
                    $("#chatId").val(id);
                    let mItem = '';

                    messages.forEach(function (item) {
                    var classItem = 'chat_to';
                    if (item.sender != senderEmail) {
                        classItem = 'chat_from';
                    }
                    mItem += `<div class='${classItem}'> <span>${item.messages}</span> </div>`
                    })
                    $('.chat_content').html(mItem)
                    $(".chat_content").scrollTop( $(".chat_content")[0].scrollHeight);


            });
            }
            $(function () {

                myFunction();
            
                $('#submit_text').submit(function (e)  {
                    e.preventDefault();
                    $(".loading-icon_message").show();
                    if($("#message_").val()==''){
                        $(".loading-icon_message").hide();
                    }else{
                        $.post('https://nuwang.tech/api/chat/send-message/' + $('#chatId').val(), {messages: $('#message_').val(), sender: $('#messageSender').val()})
                        .done(function (data) {
                        
                        $("#message_").val("");

                        myFunction();
                        $(".loading-icon_message").hide();
                    })
                    }
                })
            });
            setInterval(function(){
                myFunction();
            }, 10000);
    </script>
</body>
</html>
