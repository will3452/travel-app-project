<?php
     include_once '../../vendor/autoload.php';

     include_once '../process/LoginStatus.php';

     include_once '../process/id_validation_fetch.php';

     if(!isset($_GET['notif_id'])){

        header("location:../dashboard");

    }

    $userid = $datanotif->user_id;

    $getuser = $User->GetUserData($userid, $User::USER_TYPE_TRAVELER);

    if(!$getuser){

        $getuser = $User->GetUserData($userid, $User::USER_TYPE_MANAGER);

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../public/css/default.css?v=7">
    <link rel="stylesheet" href="/../public/css/user_style.css?v=22">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="/../public/js/operate.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://kit.fontawesome.com/a66db60870.js" crossorigin="anonymous"></script>
    <title>Admin - Notification</title>
</head>
<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bgnav shadow-sm p-3 mb-5 rounded">
        <?php
            include '../_UI/header_2.php';
            include '../_UI/modal.php';
            echo $deleteallnotif;
            echo $deletenotif;
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
                    <p class="mt-4 edit-title">View Notification</p>
                    <a href="#"><button id="backpage_color" onclick="history.go(-1);"><i class="fas fa-arrow-circle-left"></i></button></a>
                    <br>
                    <br>
                    <br>
                    <div class="form-container-user">
                        <div class="header-profile">
                                <div class="circular--landscape2">
                                    <img src="/../images/users/<?php echo $getuser->image; ?>" alt="">
                                </div>
                        </div>
                        <div class="rowss">
                                <div id="id_div">
                                        <p>Name</p>
                                </div>
                                <div id="idcontent">
                                        <p><?php echo ucwords($getuser->first_name.' '.$getuser->middle_name.' '.$getuser->last_name);  ?></p>
                                </div>
                        </div>
                        <div class="rowss">
                                <div id="id_div">
                                        <p>Email</p>
                                </div>
                                <div id="idcontent">
                                    <?php if($getuser->type==$User::USER_TYPE_TRAVELER): ?>
                                        <a href="traveler-data?traveler_id=<?php echo $getuser->id; ?>"><p><?php echo ucwords($getuser->email); ?></p></a>
                                    <?php else: ?>
                                        <a href="manager-data?manager_id=<?php echo $getuser->id; ?>"><p><?php echo ucwords($getuser->email); ?></p></a>
                                    <?php endif; ?>
                                </div>
                        </div>
                        <div class="rowss">
                                <div id="id_div">
                                        <p>Content</p>
                                </div>
                                <div id="idcontent">
                                    <p><?php echo $datanotif->message; ?></p>
                                </div>
                        </div>
                        <div class="rowss">
                                <div id="id_div">
                                        <p>Date Created</p>
                                </div>
                                <div id="idcontent">
                                    <p><?php echo date("Y-m-d h:i A", strtotime($datanotif->date_created)); ?></p>
                                </div>
                        </div>
                        <div class="rowss">
                                <div id="id_div">
                                        <p>Read At</p>
                                </div>
                                <div id="idcontent">
                                    <p><?php echo $datanotif->read_at; ?></p>
                                </div>
                        </div>
                        <div class="rowss-operation">
                                <div class="button-add-emp-66">
                                      <button id="addbtnuser" data-id="<?php echo $_GET['notif_id']; ?>">Delete</button>
                                </div>
                        </div>
                    </div>
                    <br>
                </div>
                <br>
                <br>
                <br>
            </main>
        </div>
    </div>
    <script src="../js/notification_2.js?v=15"></script>
    <script src="../js/view-notification.js"></script>
</body>
</html>
