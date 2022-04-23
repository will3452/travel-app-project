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
    <link rel="stylesheet" href="/public/css/default.css?v=3">
    <link rel="stylesheet" href="/public/css/user_style.css?v=20">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="/public/js/operate.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://kit.fontawesome.com/a66db60870.js" crossorigin="anonymous"></script>
    <title>Admin - Subscription</title>
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
                    <p class="mt-4 edit-title">Subscription</p>
                    <!--loading here !-->
                    <!--nav table -->
                    <div class="overflowtables div-navs">
                        <div class="locate-nav">
                            <div class="locate-div">
                                <?php if(isset($_GET['tab'])): ?>
                                    <?php if($_GET['tab']=='ads_sub'): ?>
                                        <a href="subscription"><button>Account</button></a>
                                        <a href="#"><button id="activenav">Adverstisement</button></a>
                                        <input type="hidden" id="usersearch" value="searchads">
                                    <?php else: ?>
                                        <a href="#"><button id="activenav">Account</button></a>
                                        <a href="?tab=ads_sub"><button>Adverstisement</button></a>
                                        <input type="hidden" id="usersearch" value="none">
                                    <?php endif; ?>
                                <?php else: ?>
                                    <a href="#"><button id="activenav">Account</button></a>
                                    <a href="?tab=ads_sub"><button>Adverstisement</button></a>
                                    <input type="hidden" id="usersearch" value="none">
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <br>
                    <?php
                        if(isset($_GET['tab'])){
                            if($_GET['tab']=='ads_sub'){
                                include '_UI/modal.php';
                                echo $acceptadssubs;
                                echo $doneadssubs;
                                echo $deleteadssubs;
                                include '_TABLE_UI/ads-subs-table.php';
                            }else{
                                include '_UI/modal.php';
                                echo $acceptsubs;
                                echo $deletesubs;
                                echo $donesubs;
                                include '_TABLE_UI/account-subs-table.php';
                            }
                        }else{
                            include '_UI/modal.php';
                            echo $acceptsubs;
                            echo $deletesubs;
                            echo $donesubs;
                            include '_TABLE_UI/account-subs-table.php';
                        }
                    ?>
                </div>
            </main>
        </div>
    </div>
    <script src="js/subscription.js?v=13"></script>
    <script src="js/notification.js?v=15"></script>
</body>
</html>
