<?php
     include_once '../../vendor/autoload.php';

     include_once '../process/LoginStatus.php';

     include_once '../process/id_validation_fetch.php';

     if(!isset($_GET['traveler_id'])){

        header("location:../dashboard");

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../public/css/default.css?v=7">
    <link rel="stylesheet" href="/../public/css/user_style.css?v=7">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="/../public/js/operate.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://kit.fontawesome.com/a66db60870.js" crossorigin="anonymous"></script>
    <title>Admin - Traveler</title>
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
                    <p class="mt-4 edit-title">View Traveler</p>
                    <a href="../traveler"><button id="backpage_color"><i class="fas fa-arrow-circle-left"></i></button></a>
                    <br>
                    <br>
                    <br>
                    <div class="form-container-user">
                        <div class="header-profile">
                                <div class="circular--landscape2">
                                    <img src="/../images/users/<?php echo $userdata->image; ?>" alt="">
                                </div>
                        </div>
                         <div class="rowss">
                                <div id="id_div">
                                        <p>ID</p>
                                </div>
                                <div id="idcontent">
                                        <p><?php echo sprintf('%06d',$_GET['traveler_id']); ?></p>
                                        <input type="hidden" id="traveler_id" value="<?php echo $_GET['traveler_id'] ?>">
                                </div>
                        </div>


                        <div class="rowss">
                                <div id="id_div">
                                        <p>Name</p>
                                </div>
                                <div id="idcontent">
                                        <p><?php echo ucwords($userdata->first_name.' '.$userdata->middle_name.' '.$userdata->last_name);  ?></p>
                                </div>
                        </div>
                        <div class="rowss">
                                <div id="id_div">
                                        <p>Email</p>
                                </div>
                                <div id="idcontent">
                                    <p><?php echo ucwords($userdata->email); ?></p>
                                </div>
                        </div>
                        <div class="rowss">
                                <div id="id_div">
                                        <p>Contact</p>
                                </div>
                                <div id="idcontent">
                                    <p><?php echo $userdata->phone; ?></p>
                                </div>
                        </div>
                        <div class="rowss">
                                <div id="id_div">
                                        <p>Status Account</p>
                                </div>
                                <div id="idcontent">
                                    <p><?php
                                        echo $userdata->status;
                                    ?></p>
                                </div>
                        </div>
                        <div class="rowss">
                                <div id="id_div">
                                        <p>Date Registered</p>
                                </div>
                                <div id="idcontent">
                                    <p><?php
                                        if($userdata->subcribed_at==''){
                                            echo "------------";
                                        }else{
                                            echo $userdata->subcribed_at;
                                        }
                                    ?></p>
                                </div>
                        </div>
                        <div class="rowss">
                                <div id="id_div">
                                        <p>Status Ban</p>
                                </div>
                                <div id="idcontent">
                                    <p><?php
                                        if($userdata->block_status==$User::BLOCK_STATUS_TEMPORARY){
                                            echo "TEMPORARY BAN";
                                        }elseif($userdata->block_status==$User::BLOCK_STATUS_PERMANENTLY){
                                            echo "PERMANENTLY BAN";
                                        }else{
                                            echo "------------";
                                        }
                                    ?></p>
                                </div>
                        </div>
                    </div>
                    <br>
                    <div class="button-add-emp-3">
                        <a href="../update/update-traveler?traveler_id=<?php echo $_GET['traveler_id']; ?>"> <button id="addbtnuser"><i class="far fa-edit btns text-white" id="updateuser"></i></button></a>
                    </div>
                </div>
                <br>
                <br>
                <br>
            </main>
        </div>
    </div>
    <script src="../js/notification_2.js?v=7"></script>
    <script src="../js/notification_2.js?v=15"></script>
    <script src="../js/global-search_2.js?v=5"></script>
</body>
</html>
