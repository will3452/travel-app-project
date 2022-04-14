<?php 
    include_once '../../vendor/autoload.php';

    include_once '../process/LoginStatus.php';

    include_once '../process/id_validation_fetch.php';

    $userid = $data->user_id;

    $travelerdata = $User->GetUserData($userid, $User::USER_TYPE_TRAVELER);

    if(!isset($_GET['rs_id'])){
        
        header("location:../dashboard.php");

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/default.css?v=7">
    <link rel="stylesheet" href="../../public/css/user_style.css?v=9">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="../../public/js/operate.js"></script> 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://kit.fontawesome.com/a66db60870.js" crossorigin="anonymous"></script>
    <title>Manager - Reservation</title>
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
                    <p class="mt-4 edit-title">
                        View Reservation
                    </p>
                    <a href="../reservation"><button id="backpage_color"><i class="fas fa-arrow-circle-left"></i></button></a>
                    <br>
                    <div class="form-container-user">
                        <div class="header-profile">
                                <div class="circular--landscape2"> 
                                    <img src="../../images/users/<?php echo $travelerdata->image; ?>" alt="">
                                </div>
                        </div>
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
                                        <p>Date</p>
                                </div>
                                <div id="idcontent">
                                        <p><?php echo $data->reserved_at; ?></p>
                                </div>
                        </div>
                        <div class="rowss">
                                <div id="id_div">
                                        <p>Time</p>
                                </div>
                                <div id="idcontent">
                                        <p><?php echo date("h:i a", strtotime($data->time)); ?></p>
                                </div>
                        </div>
                        <div class="rowss">
                                <div id="id_div">
                                        <p>Note</p>
                                </div>
                                <div id="idcontent">
                                        <p><?php echo $data->notes; ?></p>
                                </div>
                        </div>
                        <div class="rowss">
                                <div id="id_div">
                                        <p>Remarks</p>
                                </div>
                                <div id="idcontent">
                                        <?php if($data->remarks): ?>
                                                <?php if($data->remarks==$User::STATUS_DONE): ?>
                                                        <p style="color:#0095a4; font-weight:700;"><?php echo strtoupper($data->remarks); ?></p>
                                                <?php else: ?>
                                                        <p style="color:red; font-weight:700;"><?php echo strtoupper($data->remarks); ?></p>
                                                <?php endif; ?>
                                        <?php else: ?>
                                                <p style="color:#0095a4; font-weight:700;"><?php echo strtoupper("no remarks"); ?></p>
                                        <?php endif; ?> 
                                </div>
                        </div>
                    </div>
                    <br>
                    <?php if($data->status==$User::STATUS_HISTORY): ?>

                    <?php else: ?>
                        <div class="button-add-emp-3">
                        <a href="../update/update-reservation?rs_id=<?php echo $_GET['rs_id']; ?>"> <button id="addbtnuser"><i class="far fa-edit btns text-white" id="updateuser"></i></button></a>
                        </div>
                    <?php endif; ?>
                <br>
            </main>
        </div>
    </div>
</body>
</html>