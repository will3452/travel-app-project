<?php
    include_once '../../vendor/autoload.php';

    include_once '../process/LoginStatus.php';

    include_once '../process/id_validation_fetch.php';

    $userid = $data->user_id;

    $travelerdata = $User->GetUserData($userid, $User::USER_TYPE_TRAVELER);

    if(!isset($_GET['rs_id'])){

        header("location:../dashboard.php");

    }
    if($data->status==$User::STATUS_PENDING || $data->status==$User::STATUS_APPROVED){

        header("location:../dashboard.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../public/css/default.css?v=7">
    <link rel="stylesheet" href="/../public/css/user_style.css?v=23">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="/../public/js/operate.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://kit.fontawesome.com/a66db60870.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <title>Manager - Update Reservation Service Acquired</title>
</head>
<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bgnav shadow-sm p-3 mb-5 rounded">
        <?php
            include '../_UI/header_2.php';
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
                    <p class="mt-4 edit-title">Update Reservation Service Acquired</p>
                    <br>
                    <form id="submitForm">
                        <div class="form-container-user">
                            <div class="header-profile">
                                <div class="circular--landscape2">
                                    <img src="/../images/users/<?php echo $travelerdata->image; ?>" alt="">
                                </div>
                            </div>
                            <div class="rowss">
                                <div id="id_div">
                                        <p style="font-size:20px;">Reservation Service Acquired Form</p>
                                </div>
                            </div>
                            <?php
                                date_default_timezone_set('Asia/Manila');
                            ?>
                            <input type="hidden" id="token_update_reservation_service_aquired" name="token_update_reservation_service_aquired" value="<?php echo password_hash(Date('Y-m-d').'token-ps', PASSWORD_BCRYPT); ?>">
                            <input type="hidden" id="rs_id" name="rs_id" value="<?php echo $_GET['rs_id']; ?>">
                            <div class="rowss">
                                    <div id="id_div">
                                            <p>Name</p>
                                    </div>
                                    <div id="idcontent">
                                            <p><?php echo ucwords($travelerdata->first_name. ' '. $travelerdata->last_name); ?></p>
                                    </div>
                            </div>
                            <div class="rowss">
                                    <div id="id_div">
                                            <p>Email</p>
                                    </div>
                                    <div id="idcontent">
                                            <p><a href="traveler-data?traveler_id=<?php echo $travelerdata->id; ?>"><?php echo $travelerdata->email; ?></a></p>
                                    </div>
                            </div>
                            <div class="rowss">
                                <div id="id_div">
                                        <p>Schedule Date</p>
                                </div>
                                <div id="idcontent">
                                        <p><?php echo $data->reserved_at; ?></p>
                                </div>
                            </div>
                            <div class="rowss">
                                <div id="id_div">
                                        <p>Time </p>
                                </div>
                                <div id="idcontent">
                                    <p><?php echo date("h:i a", strtotime($data->time)); ?></p>
                                </div>
                            </div>
                            <div class="rowss">
                                <div id="id_div">
                                        <p>Total Cost <span style="color:red;">*</span></p>
                                </div>
                                <div id="idcontent">
                                    <input type="number" name="totalprice" id="totalprice" class="focusinput" value="<?php echo $data->total; ?>">
                                </div>
                            </div>
                            <div class="rowss">
                                <div id="id_div">
                                        <p>Packages <span style="color:red;">*</span></p>
                                </div>
                                <div id="id_div">
                                    <?php  $GetServiceManager = $Service->GetServiceManager($businessid); ?>

                                    <?php foreach($GetServiceManager as $displays):
                                        $dataid = $displays['id'];
                                        $dataname = $displays['name']; 
                                    ?>
                                    <div class="packages_data form-check">
                                        <input class="form-check-input" name="packages[]" type="checkbox" <?php 
                                            $CheckReservationService = $Reservation->CheckReservationService($_GET['rs_id'], $dataid);

                                            if($CheckReservationService){

                                                echo "checked";
                                            }else{
                                                echo '';
                                            }
                                        ?> value='<?php echo $dataid; ?>' id="flexCheckChecked">
                                        <label class="form-check-label" for="flexCheckChecked">
                                                          <?php echo $dataname; ?>
                                        </label>
                                    
                                    </div>
                                    <?php endforeach;?>
                            </div>
                        </div>
                        <div class="button-add-emp">
                           <a href="../view/reservation-data?rs_id=<?php echo $_GET['rs_id']; ?>" id="cancel">Cancel</a>
                            <button type="submit" id="buttonss" name="button">
                                <span id="spansubmit">Update Reservation</span>
                                <div class="center-loading-2">
                                    <div class="span5load"></div>
                                    <div class="span6load"></div>
                                    <div class="span7load"></div>
                                </div>
                            </button>
                        </div>
                    </form>

                </div>
                <br>
            </main>
        </div>
    </div>
    <script src="../js/update-reservation-data.js"></script>
    <script src="../js/notificaiton_2.js?v=10"></script>
</body>
</html>
