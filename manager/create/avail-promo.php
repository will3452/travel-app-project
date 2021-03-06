<?php
     include_once '../../vendor/autoload.php';
     include_once '../process/LoginStatus.php';
     include_once '../process/id_validation_fetch.php';
     if(!isset($_GET['promo_id'])){
        header("location:../promotion");
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
    <title>Manager - Avail Promo Ads</title>
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
                    <p class="mt-4 edit-title">Avail Promo Ads</p>
                    <form id="submitForm">
                        <div class="form-container-user">
                            <div class="rowss">
                                <div id="id_div">
                                        <p style="font-size:20px;">Avail Promo Ads Form</p>
                                </div>
                            </div>
                            <?php
                                date_default_timezone_set('Asia/Manila');
                            ?>
                            <input type="hidden" id="token_create_promo" name="token_create_promo" value="<?php echo password_hash(Date('Y-m-d').'token-ps', PASSWORD_BCRYPT); ?>">
                            <input type="hidden" id="promo_id" name="promo_id" value="<?php echo $_GET['promo_id']; ?>">
                            <div class="rowss">
                                <div id="id_div">
                                        <p>Package Name</p>
                                </div>
                                <div id="idcontent">
                                        <p><?php echo ucwords($data->name); ?></p>
                                </div>
                                </div>
                                <div class="rowss">
                                        <div id="id_div">
                                                <p>Description</p>
                                        </div>
                                        <div id="idcontent">
                                            <p><?php echo $data->description; ?></p>
                                        </div>
                                </div>
                                <div class="rowss">
                                        <div id="id_div">
                                                <p>Price</p>
                                        </div>
                                        <div id="idcontent">
                                            <p>???<?php echo $data->price; ?></p>
                                        </div>
                                </div>
                                <div class="rowss">
                                    <div id="id_div">
                                                <p>Days</p>
                                    </div>
                                    <div id="idcontent">
                                    <p><?php echo $data->days; ?></p>
                                    </div>
                                </div>
                            <div class="rowss">
                                <div id="id_div">
                                        <p>Image Ads <span style="color:red;">*</span></p>
                                        <p style="color:red;">Note: Image Ads must have dimensions 770 x 600</p>
                                </div>
                                <div id="idcontent">
                                        <input type="file" id="image" name="image" required class="focusinput" placeholder="-------">
                                </div>
                            </div>
                            <div class="rowss">
                                <div id="id_div">
                                        <p>Proof of Payment <span style="color:red;">*</span></p>
                                </div>
                                <div id="idcontent">
                                        <input type="file" id="imagepop" name="imagepop" required class="focusinput" placeholder="-------">
                                </div>
                            </div>
                            <div class="rowss">
                                <div id="id_div">
                                        <p>Schedule Date <span style="color:red;">*</span></p>
                                </div>
                                <div id="idcontent">
                                        <input type="text" id="date" name="date" required class="focusinput" placeholder="-------">
                                </div>
                            </div>
                        </div>
                        <div class="button-add-emp">
                           <a href="../services" id="cancel">Cancel</a>
                            <button type="submit" id="buttonss" name="button">
                                <span id="spansubmit">Avail</span>
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
    <script src="../js/avail-promo.js?v=5"></script>
    <script src="../js/notificaiton_2.js?v=12"></script>
    <script src="../js/global-search_2.js?v=5"></script>
</body>
</html>
