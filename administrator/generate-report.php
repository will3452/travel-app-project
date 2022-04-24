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
    <link rel="stylesheet" href="/public/css/user_style.css?v=3">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="/public/js/operate.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://kit.fontawesome.com/a66db60870.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <title>Admin - Generate Report</title>
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
                    <p class="mt-4 edit-title">Generate Report</p>
                    <!--loading here !-->
                    <form method="POST" action="process/_generate_report.php">
                        <div class="form-container-user">
                            <?php
                                date_default_timezone_set('Asia/Manila');
                            ?>
                            <input type="hidden" id="token_generate_report" name="token_generate_report" value="<?php echo password_hash(Date('Y-m-d').'token-ps', PASSWORD_BCRYPT); ?>">
                            <div class="rowss">
                                <div id="id_div">
                                        <p>Date From <span style="color:red;">*</span></p>
                                </div>
                                <div id="idcontent">
                                    <input type="text" id="datefrom" name="datefrom" required placeholder="0000-00-00">
                                </div>
                            </div>
                            <div class="rowss">
                                <div id="id_div">
                                        <p>Date To <span style="color:red;">*</span></p>
                                </div>
                                <div id="idcontent">
                                    <input type="text" id="dateto" name="dateto" required placeholder="0000-00-00">
                                </div>
                            </div>
                            <div class="button-add-emp" id="logo-btn">
                                <button type="submit" id="buttonss">
                                        <span id="spansubmit2">Generate & Download</span>
                                        <div class="center-loading-3">
                                            <div class="span5load2"></div>
                                            <div class="span6load2"></div>
                                            <div class="span7load2"></div>
                                        </div>
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </main>
        </div>
    </div>
    <script src="js/notification.js?v=15"></script>
    <script src="js/generate-report.js?v=5"></script>
    <script src="js/global-search.js?v=5"></script>
</body>
</html>
