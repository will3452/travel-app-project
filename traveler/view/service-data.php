<?php
    include_once '../../vendor/autoload.php';

    include_once '../process/LoginStatus.php';

    include_once '../process/id_validation_fetch.php';

    $bsid = $_GET['host_view'];

    $business_ids = $data->business_id;

    $GetBusinessData = $User->GetBusinessData($business_ids);

    $businemanager_id = $GetBusinessData->manager_id;

    $GetManagerData = $User->GetUserData($businemanager_id, $User::USER_TYPE_MANAGER);

    if(!isset($_GET['service_id']) || !isset($_GET['host_view'])){

        header("location:../host-list.php");

    }
    if($GetManagerData->block_status == $User::BLOCK_STATUS_TEMPORARY){

        header("location:../view/host_status?host_id=$bsid");
        
    }
    if($GetManagerData->block_status == $User::BLOCK_STATUS_PERMANENTLY){

        header("location:../view/host_status?host_id=$bsid");
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../public/css/default.css?v=7">
    <link rel="stylesheet" href="/../public/css/user_style.css?v=11">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="/../public/js/operate.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://kit.fontawesome.com/a66db60870.js" crossorigin="anonymous"></script>
    <title>Traveler - </title>
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
                    <p class="mt-4 edit-title">
                        View Service
                    </p>
                    <a href="host-list-data?host_id=<?php echo $_GET['host_view']; ?>"><button id="backpage_color"><i class="fas fa-arrow-circle-left"></i></button></a>
                    <br>
                    <div class="form-container-user">
                        <div class="rowss">
                                <div id="id_div">

                                </div>
                                <div id="idcontent" class="imgviews">
                                    <img src="/../images/services/<?php echo $data->image; ?>" alt="">
                                </div>
                        </div>
                        <div class="rowss">
                                <div id="id_div">
                                        <p>Service Name</p>
                                </div>
                                <div id="idcontent">
                                        <p><?php echo ucwords( $data->name); ?></p>
                                </div>
                        </div>
                        <div class="rowss">
                                <div id="id_div">
                                        <p>Service Description</p>
                                </div>
                                <div id="idcontent">
                                        <p><?php echo  $data->remarks; ?></p>
                                </div>
                        </div>
                        <div class="rowss">
                                <div id="id_div">
                                        <p>Price</p>
                                </div>
                                <div id="idcontent">
                                        <p>₱<?php echo $data->price; ?></p>
                                </div>
                        </div>
                    </div>
                <br>
                <br>
                <br>
            </main>
        </div>
    </div>
    <script src="../js/notificaiton_2.js?v=15"></script>
</body>
</html>
