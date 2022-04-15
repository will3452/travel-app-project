<?php
    include_once '../vendor/autoload.php';

    include_once 'process/LoginStatus.php';

    $User = new User;

    $Service = new Service;

    $email = $_SESSION['manager'];

    $GetUserID = $User->GetUserID($email);

    $iduser = $GetUserID->id;

    $check = $User->GetBusinessManager($iduser);

    $businessid = $check->id;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/default.css?v=8">
    <link rel="stylesheet" href="/public/css/user_style.css?v=8">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="/public/js/operate.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://kit.fontawesome.com/a66db60870.js" crossorigin="anonymous"></script>
    <title>Manager - Reservation</title>
</head>
<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bgnav shadow-sm p-3 mb-5 rounded">
        <?php
            include '_UI/header_1.php';
        ?>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <?php
                include '_UI/sidebar.php';
                echo $sidebaroutside;
            ?>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                        <p class="mt-4 edit-title">Reservation</p>
                        <div class="button-add-emp-g">
                            <a href="create/create-reservation"> <button id="addbtnuser">Create Reservation</button></a>
                        </div>
                        <div class="locate-nav">
                            <div class="locate-div">
                           <?php if(isset($_GET['tab'])): ?>
                                <?php if($_GET['tab']=='pending'): ?>
                                    <a href="#"><button id="activenav">Pending</button></a>
                                    <a href="?tab=approved"><button>Approved</button></a>
                                    <a href="?tab=history"><button>History</button></a>
                                    <input type="hidden" id="booksearch" value="">
                                <?php elseif($_GET['tab']=='approved'): ?>
                                    <a href="reservation"><button>Pending</button></a>
                                    <a href="#"><button id="activenav">Approved</button></a>
                                    <a href="?tab=history"><button>History</button></a>
                                    <input type="hidden" id="booksearch" value="book2">
                                <?php elseif($_GET['tab']=='history'): ?>
                                    <a href="reservation"><button>Pending</button></a>
                                    <a href="?tab=approved"><button>Approved</button></a>
                                    <a href="#"><button id="activenav">History</button></a>
                                    <input type="hidden" id="booksearch" value="book3">
                                <?php else: ?>
                                    <a href="#"><button id="activenav">Pending</button></a>
                                    <a href="?tab=approved"><button>Approved</button></a>
                                    <a href="?tab=history"><button>History</button></a>
                                    <input type="hidden" id="booksearch" value="">
                                <?php endif; ?>
                            <?php else: ?>
                                <a href="#"><button id="activenav">Pending</button></a>
                                <a href="?tab=approved"><button>Approved</button></a>
                                <a href="?tab=history"><button>History</button></a>
                                <input type="hidden" id="booksearch" value="">
                            <?php endif; ?>
                            </div>
                        </div>
                        <br>
                        <br>
                        <?php
                            if(isset($_GET['tab'])){
                                if($_GET['tab']=='approved'){
                                    include '_UI/modal.php';
                                    echo $deletereservation;
                                    echo '<div class="modal donereservation" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog closemodal" role="document">
                                                    <form id="submitmodal_acc_res_done" class="modal-content">
                                                            <input type="hidden" id="token_donereservation_manager" name="token_donereservation_manager" value='.password_hash(Date('Y-m-d').'token-ps', PASSWORD_BCRYPT).'> 
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Done Reservation</h5>
                                                            <p class="close_modal">+</p>
                                                        </div>
                                                        <div class="modal-body packages_scroll">
                                                        <p id="name_title">Name: <span class="name_here"></span></p>
                                                        <input type="hidden" name="res_id_done" id="res_id_done" class="res_id_done">
                                                        <br>
                                                        <input type="number" name="totalprice" required id="totalprice" class="totalprice inputmodal" placeholder="Total Cost">
                                                        <p>Package:</p>';

                                            $GetServiceManager = $Service->GetServiceManager($businessid);

                                            foreach($GetServiceManager as $displays){
                                                    $dataid = $displays['id'];
                                                    $dataname = $displays['name'];
                                                echo '<div class="packages_div">
                                                        <div class="packages_data form-check">
                                                        <input class="form-check-input" name="packages[]" type="checkbox" value='.$dataid.' id="flexCheckChecked">
                                                        <label class="form-check-label" for="flexCheckChecked">
                                                            '.$dataname.'
                                                        </label>
                                                        </div>
                                                    </div>';

                                            }

                                            echo '</div>
                                            <div class="modal-footer">
                                                <button type="submit" id="resacc_btn_done" class="colorbtn width_btn">
                                                    <span class="span_modal">Process</span>
                                                    <div class="center-loading-3">
                                                                <div class="span5load2"></div>
                                                                <div class="span6load2"></div>
                                                                <div class="span7load2"></div>
                                                            </div>
                                                </button>
                                                </div>
                                            </div>
                                            </form>
                                        </div>';

                                    include '_TABLE_UI/reservation-approved-content.php';
                                }elseif($_GET['tab']=='history'){
                                    include '_TABLE_UI/reservation-history-content.php';
                                }
                                else{
                                    include '_UI/modal.php';
                                    echo $acceptreservation;
                                    echo $deletereservation;
                                    include '_TABLE_UI/reservation-pending-content.php';
                                }
                            }else{
                                include '_UI/modal.php';
                                echo $acceptreservation;
                                echo $deletereservation;
                                include '_TABLE_UI/reservation-pending-content.php';

                            }
                        ?>
                </div>
            </main>
        </div>
    </div>
    <script src="js/reservation.js?v=8"></script>
</body>
</html>
