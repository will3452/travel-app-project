<?php
    include_once '../../vendor/autoload.php';

    include_once '../process/LoginStatus.php';

    include_once '../process/id_validation_fetch.php';

    $business_id = $data->business_id;
                                                //get service info
    $businessdata = $User->GetBusinessData($business_id);

    if(!isset($_GET['bucketlist_id'])){

        header("location:../host-list.php");

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../public/css/default.css?v=7">
    <link rel="stylesheet" href="/../public/css/user_style.css?v=9">
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
                        View Bucketlist
                    </p>
                    <a href="../bucketlist"><button id="backpage_color"><i class="fas fa-arrow-circle-left"></i></button></a>
                    <br>
                    <div class="form-container-user">
                        <div class="rowss">
                                <div id="id_div">

                                </div>
                                <div id="idcontent" class="imgviews">
                                    <img src="/../user/assets/logo/<?php echo $businessdata->logo; ?>" alt="">
                                </div>
                        </div>
                        <div class="rowss">
                                <div id="id_div">
                                        <p>Business Name</p>
                                </div>
                                <div id="idcontent">
                                        <p><a href="host-list-data?host_id=<?php echo $businessdata->id?>"><?php echo ucwords($businessdata->name); ?></a></p>
                                </div>
                        </div>
                        <div class="rowss">
                                <div id="id_div">
                                        <p>Date</p>
                                </div>
                                <div id="idcontent">
                                        <p><?php echo date("Y-m-d", strtotime($data->date)); ?></p>
                                </div>
                        </div>
                        <div class="rowss">
                                <div id="id_div">
                                        <p>Remarks</p>
                                </div>
                                <div id="idcontent">
                                        <p><?php echo $data->remarks; ?></p>
                                </div>
                        </div>
                    </div>
                    <br>
                    <div class="button-add-emp-3">
                    <a href="../update/update-bucketlist?bucketlist_id=<?php echo $_GET['bucketlist_id']; ?>"> <button id="addbtnuser"><i class="far fa-edit btns text-white" id="updateuser"></i></button></a>
                    </div>
                <br>
            </main>
        </div>
    </div>
</body>
</html>
