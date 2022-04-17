<?php
     include_once '../vendor/autoload.php';
     include_once 'process/LoginStatus.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/default.css?v=23">
    <link rel="stylesheet" href="/public/css/user_style.css?v=5">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="/public/js/operate.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://kit.fontawesome.com/a66db60870.js" crossorigin="anonymous"></script>
    <title>Traveler - Booking</title>
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
                    <p class="mt-4 edit-title">My Booking</p>
                    <!--loading here !-->
                    <div class="locate-nav">
                            <div class="locate-div">
                           <?php if(isset($_GET['tab'])): ?>
                                <?php if($_GET['tab']=='pending'): ?>
                                    <a href="#"><button id="activenav">Pending</button></a>
                                    <a href="?tab=approved"><button>Approved</button></a>
                                    <a href="?tab=history"><button>History</button></a>
                                    <input type="hidden" id="booksearch" value="">
                                <?php elseif($_GET['tab']=='approved'): ?>
                                    <a href="booking"><button>Pending</button></a>
                                    <a href="#"><button id="activenav">Approved</button></a>
                                    <a href="?tab=history"><button>History</button></a>
                                    <input type="hidden" id="booksearch" value="book2">
                                <?php elseif($_GET['tab']=='history'): ?>
                                    <a href="booking"><button>Pending</button></a>
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
                                    include '_TABLE_UI/booking-approved-content.php';
                                }elseif($_GET['tab']=='history'){
                                    include '_TABLE_UI/booking-history-content.php';
                                }
                                else{
                                    include '_TABLE_UI/booking-pending-content.php';
                                }
                            }else{
                                include '_UI/modal.php';
                                echo $deletereservation;
                                include '_TABLE_UI/booking-pending-content.php';

                            }
                        ?>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="js/booking.js?v=8"></script>
    <script src="js/notification.js?v=5"></script>
</body>
</html>
