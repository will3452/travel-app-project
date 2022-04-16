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
    <link rel="stylesheet" href="/public/css/user_style.css?v=23">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="/public/js/operate.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://kit.fontawesome.com/a66db60870.js" crossorigin="anonymous"></script>
    <title>Manager - Payment History</title>
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
                    <p class="mt-4 edit-title">Payment History</p>
                    <div class="button-add-emp-g">
                        <a href="create/pay-account-renewal"> <button id="addbtnuser">Pay Account Renewal</button></a>
                    </div>
                    <?php
                        include '_TABLE_UI/payment-table.php';
                    ?>
                </div>
            </main>
        </div>
    </div>
    <script src="js/payment-history.js"></script>
    <script src="js/notification.js"></script>
</body>
</html>
