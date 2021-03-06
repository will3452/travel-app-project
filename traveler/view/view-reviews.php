<?php
    include_once '../../vendor/autoload.php';

    include_once '../process/LoginStatus.php';

    include_once '../process/id_validation_fetch.php';

    $Service = new Service;

    $businemanager_id = $data->manager_id;

    $businename = $data->name;

    $businelogo = $data->logo;

    $businetype = $data->type;

    $bsid = $_GET['host_id'];

    $GetManagerData = $User->GetUserData($businemanager_id, $User::USER_TYPE_MANAGER);

    if(!isset($_GET['host_id'])){

        header("location:../host-list.php");

    }
    if($GetManagerData->block_status == $User::BLOCK_STATUS_TEMPORARY){

        header("location:host_status?host_id=$bsid");
        
    }
    if($GetManagerData->block_status == $User::BLOCK_STATUS_PERMANENTLY){

        header("location:host_status?host_id=$bsid");
        
    }
    $GetCategory = $Service->GetCategory($_GET['host_id']);
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
                        <?php
                          $parts = explode(' ', $businetype);
                          $sliced = array_slice($parts, 0, -1); // array ( 1,2 )
                          foreach ($sliced as $result) {
                               echo $result .' ';
                          }
                        ?>
                    </p>
                    <a href="host-list-data?host_id=<?php echo $_GET['host_id']; ?>"><button id="backpage_color"><i class="fas fa-arrow-circle-left"></i></button></a>
                    <br>
                    <div class="form-container-user">
                        <div class="rowss">
                                <div id="id_div">

                                </div>
                                <div id="idcontent" class="imgviews">
                                    <img src="/../user/assets/logo/<?php echo $businelogo; ?>" alt="">
                                </div>
                        </div>
                        <div class="rowss">
                                <div id="id_div">
                                        <p>Business Name</p>
                                </div>
                                <div id="idcontent">
                                        <p><?php echo ucwords($businename); ?></p>
                                </div>
                        </div>
                        <div class="rowss">
                                <div id="id_div">
                                        <p>Business Owner</p>
                                </div>
                                <div id="idcontent">
                                        <p><?php echo ucwords($GetManagerData->first_name.' '.$GetManagerData->last_name); ?></p>
                                </div>
                        </div>
                        <div class="rowss">
                                <div id="id_div">
                                        <p>Contact</p>
                                </div>
                                <div id="idcontent">
                                        <p><?php echo ucwords($GetManagerData->phone); ?></p>
                                </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <!--loading here !-->
                    <div class="loadingforallcontent">
                        <div class="loading-icon">
                            <div class="center">
                                <div class="span1load"></div>
                                <div class="span2load"></div>
                                <div class="span3load"></div>
                            </div>
                        </div>
                    </div>
                    <div class="hide-dash">
                          <div class="review-title">
                              <p>Reviews</p>
                          </div>
                          <?php 
                            include '../_TABLE_UI/review_fetch.php';
                          ?>
                         
                    </div>
                </div>
                <br>
                <br>
                <br>
            </main>
        </div>
    </div>
    <script src="../js/load.js?v=5"></script>
    <script src="../js/notificaiton_2.js?v=15"></script>
    <script src="../js/global-search_2.js?v=5"></script>
</body>
</html>
