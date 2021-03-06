<?php
    include_once '../../vendor/autoload.php';

    include_once '../process/LoginStatus.php';

    include_once '../process/id_validation_fetch.php';

    $business_id = $data->business_id;

        //get service info
    $businessdata = $User->GetBusinessData($business_id);

    $businemanager_id = $businessdata->manager_id;

    $GetManagerData = $User->GetUserData($businemanager_id, $User::USER_TYPE_MANAGER);

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
    <link rel="stylesheet" href="/../public/css/user_style.css?v=11">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="/../public/js/operate.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://kit.fontawesome.com/a66db60870.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <title>Traveler - Add bucketlist</title>
</head>
<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bgnav shadow-sm p-3 mb-5 rounded">
        <?php
            include '../_UI/header_2.php';
            include '../_UI/modal.php';
            echo $deleteallnotif;
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
                       Update Bucketlist
                    </p>
                    <form id="submitForm">
                        <div class="form-container-user">
                        <?php
                                date_default_timezone_set('Asia/Manila');
                            ?>
                            <input type="hidden" id="token_update_bucketlist" name="token_update_bucketlist" value="<?php echo password_hash(Date('Y-m-d').'token-ps', PASSWORD_BCRYPT); ?>">
                            <input type="hidden" id="bucketlist_id" name="bucketlist_id" value="<?php echo $_GET['bucketlist_id']; ?>">
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
                                        <p>Business Owner</p>
                                </div>
                                <div id="idcontent">
                                        <p><?php echo ucwords($GetManagerData->first_name.' '.$GetManagerData->last_name); ?></p>
                                </div>
                            </div>
                            <div class="rowss">
                                    <div id="id_div">
                                            <p>Contact</p>
                                    </div>
                                    <div id="idcontent">
                                            <p><?php echo ucwords($GetManagerData->phone); ?></p>
                                    </div>
                            </div>
                            <div class="rowss">
                                <div id="id_div">
                                        <p>Schedule Date <span style="color:red;">*</span></p>
                                </div>
                                <div id="idcontent">
                                        <input type="text" id="date" name="date" value="<?php echo date("Y-m-d", strtotime($data->date)); ?>" required class="focusinput" placeholder="-------">
                                </div>
                            </div>
                            <div class="rowss">
                                <div id="id_div">
                                        <p>Remarks <span style="color:red;">*</span></p>
                                </div>
                                <div id="idcontent">
                                <textarea name="description" id="description" required class="focusinput"><?php echo $data->remarks; ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="button-add-emp">
                           <a href="../view/bucketlist-data?bucketlist_id=<?php echo $_GET['bucketlist_id']; ?>" id="cancel">Cancel</a>
                            <button type="submit" id="buttonss" name="button">
                                <span id="spansubmit">Add To Bucketlist</span>
                                <div class="center-loading-2">
                                    <div class="span5load"></div>
                                    <div class="span6load"></div>
                                    <div class="span7load"></div>
                                </div>
                            </button>
                        </div>
                    </form>
                <br>
                <br>
                <br>
            </main>
        </div>
    </div>
    <script src="../js/update-bucketlist.js?v=1"></script>
    <script src="../js/notificaiton_2.js?v=15"></script>
    <script src="../js/global-search_2.js?v=5"></script>
</body>
</html>
