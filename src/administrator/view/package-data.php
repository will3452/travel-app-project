<?php 
     include_once '../../../vendor/autoload.php';

     include_once '../process/LoginStatus.php';

     include_once '../process/id_validation_fetch.php';

     if(!isset($_GET['pack_id'])){

         header("location:../dashboard");

     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/default.css?v=7">
    <link rel="stylesheet" href="../../public/css/user_style.css?v=7">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="../../public/js/operate.js"></script> 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://kit.fontawesome.com/a66db60870.js" crossorigin="anonymous"></script>
    <title>Admin - View Package</title>
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
                    <p class="mt-4 edit-title">View Package</p>
                    <a href="../package"><button id="backpage_color"><i class="fas fa-arrow-circle-left"></i></button></a>
                
                    <div class="form-container-user">
                        <div class="rowss">
                                <div id="id_div">
                                        <p>ID</p>
                                </div>
                                <div id="idcontent">
                                        <p><?php echo sprintf('%06d',$_GET['pack_id']); ?></p>
                                        <input type="hidden" id="pack_id" value="<?php echo $_GET['pack_id'] ?>">
                                </div>
                        </div>
                        <div class="rowss">
                                <div id="id_div">
                                        <p>Package Name</p>
                                </div>
                                <div id="idcontent">
                                        <p><?php echo $promodata->name; ?></p>
                                </div>
                        </div>
                        <div class="rowss">
                                <div id="id_div">
                                        <p>Days</p>
                                </div>
                                <div id="idcontent">
                                        <p><?php echo $promodata->days; ?></p>
                                </div>
                        </div>
                        <div class="rowss">
                                <div id="id_div">
                                        <p>Price</p>
                                </div>
                                <div id="idcontent">
                                        <p><?php echo $promodata->price; ?></p>
                                </div>
                        </div>
                        <div class="rowss">
                                <div id="id_div">
                                        <p>Type Payment</p>
                                </div>
                                <div id="idcontent">
                                        <p><?php echo $promodata->description; ?></p>
                                </div>
                        </div>
                    </div>
                    <br>
                    <div class="button-add-emp-3">
                        <a href="../update/update-pakcage?pack_id=<?php echo $_GET['pack_id']; ?>"> <button id="addbtnuser"><i class="far fa-edit btns text-white" id="updateuser"></i></button></a>
                    </div>
                </div>
                <br>
                <br>
                <br>
            </main>
        </div>
    </div>
</body>
</html>