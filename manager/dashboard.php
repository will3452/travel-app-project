<?php
    include_once '../vendor/autoload.php';

    include_once 'process/LoginStatus.php';

    $User = new User;

    $Reservation = new Reservation;

    $Service = new Service;

    $GetUserID = $User->GetUserID($email);

    $iduser = $GetUserID->id;

    $check = $User->GetBusinessManager($iduser);

    $businessid = '';
                    
    if($check){

        $businessid = $check->id;

    }

    $CountTotalAccount = $User->UserPageSort($User::USER_TYPE_TRAVELER, $User::STATUS_ACTIVE);

    $CountReservationPending = $Reservation->ReservationPageSortManager($businessid, $User::STATUS_PENDING);

    $CountReservationApproved = $Reservation->ReservationPageSortManager($businessid, $User::STATUS_APPROVED);

    $CountService = $Service->ServicePageSort($businessid);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/default.css?v=3">
    <link rel="stylesheet" href="/public/css/user_style.css?v=23">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="/public/js/operate.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://kit.fontawesome.com/a66db60870.js" crossorigin="anonymous"></script>
    <title>Manager - Dashboard</title>
    <style>
        .hide-dash .row div{
            cursor:pointer;
        }
    </style>
</head>
<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bgnav shadow-sm p-3 mb-5 rounded">
        <?php
            include '_UI/header_1.php';
            include '_UI/modal.php';
            echo $deleteallnotif;
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
                    <p class="mt-4 edit-title">Dashboard</p>
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
                        <div class="row">   
                            <div class="col-xl-4 col-md-6 mb-4">
                                    <div class="card shadow h-100 py-2">
                                        <div class="card-body overflowtables">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2 fetchhererev">
                                                <div class="text-xs h6 font-weight-bold text-scolors  mb-1"
                                                style="
                                                font-size:20px;
                                                color:#2a8a99;
                                                "
                                                >
                                                    Date
                                                </div>
                                                <div class="mb-0 font-weight-bold text-gray-800"
                                                style="
                                                font-size:16px;
                                                color:#2a8a99;
                                                "
                                                >
                                                    <?php 
                                                    date_default_timezone_set('Asia/Manila');
                                                    echo date("M d, Y"); ?>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 mb-4">
                                    <div class="card shadow h-100 py-2">
                                        <div class="card-body overflowtables">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2 fetchhererev">
                                                <div class="text-xs h6 font-weight-bold text-scolors  mb-1"
                                                style="
                                                font-size:20px;
                                                color:#2a8a99;
                                                "
                                                >
                                                    Time
                                                </div>
                                                <div class="mb-0 font-weight-bold text-gray-800"
                                                style="
                                                font-size:16px;
                                                color:#2a8a99;
                                                "
                                                >
                                                <div id="clock"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 mb-4" id="travelertotal">
                                    <div class="card shadow h-100 py-2">
                                        <div class="card-body overflowtables">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2 fetchhererev">
                                                <div class="text-xs h6 font-weight-bold text-scolors  mb-1"
                                                style="
                                                font-size:20px;
                                                color:#2a8a99;
                                                "
                                                >
                                                Traveler Account
                                                </div>
                                                <div class="mb-0 font-weight-bold text-gray-800"
                                                style="
                                                 font-size:25px;
                                                color:#203d51;
                                                "
                                                >
                                                <?php 
                                                    // get total client
                                                   echo $CountTotalAccount;
                                                ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 mb-4" id="pendingtotal">
                                    <div class="card shadow h-100 py-2">
                                        <div class="card-body overflowtables">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2 fetchhererev">
                                                <div class="text-xs h6 font-weight-bold text-scolors  mb-1"
                                                style="
                                                font-size:20px;
                                                color:#2a8a99;
                                                "
                                                >
                                                Pending Reservation
                                                </div>
                                                <div class="mb-0 font-weight-bold text-gray-800"
                                                style="
                                                 font-size:25px;
                                                color:#203d51;
                                                "
                                                >
                                                <?php 
                                                    // get total reservation pending
                                                   echo $CountReservationPending;
                                                ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 mb-4" id="approvedtotal">
                                    <div class="card shadow h-100 py-2">
                                        <div class="card-body overflowtables">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2 fetchhererev">
                                                <div class="text-xs h6 font-weight-bold text-scolors  mb-1"
                                                style="
                                                font-size:20px;
                                                color:#2a8a99;
                                                "
                                                >
                                                Approved Reservation
                                                </div>
                                                <div class="mb-0 font-weight-bold text-gray-800"
                                                style="
                                                 font-size:25px;
                                                color:#203d51;
                                                "
                                                >
                                                <?php 
                                                    // get total reservation approved
                                                   echo $CountReservationApproved;
                                                ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 mb-4" id="servicetotal">
                                    <div class="card shadow h-100 py-2">
                                        <div class="card-body overflowtables">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2 fetchhererev">
                                                <div class="text-xs h6 font-weight-bold text-scolors  mb-1"
                                                style="
                                                font-size:20px;
                                                color:#2a8a99;
                                                "
                                                >
                                                Total Services
                                                </div>
                                                <div class="mb-0 font-weight-bold text-gray-800"
                                                style="
                                                 font-size:25px;
                                                color:#203d51;
                                                "
                                                >
                                                <?php 
                                                    // get total serivce
                                                   echo $CountService;
                                                ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="js/load.js?v=5"></script>
    <script src="js/notification.js?v=12"></script>
    <script>
        $(document).ready(function(){
            setInterval('updateClock()', 1000);
        });
        function updateClock (){
                var currentTime = new Date ( );
                var currentHours = currentTime.getHours ( );
                var currentMinutes = currentTime.getMinutes ( );
                var currentSeconds = currentTime.getSeconds ( );

                // Pad the minutes and seconds with leading zeros, if required
                currentMinutes = ( currentMinutes < 10 ? "0" : "" ) + currentMinutes;
                currentSeconds = ( currentSeconds < 10 ? "0" : "" ) + currentSeconds;

                // Choose either "AM" or "PM" as appropriate
                var timeOfDay = ( currentHours < 12 ) ? "AM" : "PM";

                // Convert the hours component to 12-hour format if needed
                currentHours = ( currentHours > 12 ) ? currentHours - 12 : currentHours;

                // Convert an hours component of "0" to "12"
                currentHours = ( currentHours == 0 ) ? 12 : currentHours;

                // Compose the string for display
                var currentTimeString = currentHours + ":" + currentMinutes + ":" + currentSeconds + " " + timeOfDay;
                
                
                $("#clock").html(currentTimeString);	  	
        }
        $(document).on('click','#servicetotal',function(){
            window.location.href="services";
        });
        $(document).on('click','#pendingtotal',function(){
            window.location.href="reservation";
        });
        $(document).on('click','#approvedtotal',function(){
            window.location.href="reservation?tab=approved";
        });
        $(document).on('click','#travelertotal',function(){
            window.location.href="traveler";
        });
    </script>
</body>
</html>
