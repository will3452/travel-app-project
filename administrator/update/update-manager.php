<?php
     include_once '../../vendor/autoload.php';

     include_once '../process/LoginStatus.php';

     include_once '../process/id_validation_fetch.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../public/css/default.css?v=7">
    <link rel="stylesheet" href="/../public/css/user_style.css?v=7">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="/../public/js/operate.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://kit.fontawesome.com/a66db60870.js" crossorigin="anonymous"></script>
    <title>Admin - Update Manager</title>
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
                    <p class="mt-4 edit-title">Update Manager</p>
                    <br>
                    <form id="submitForm_profile">
                        <?php
                        date_default_timezone_set('Asia/Manila');
                        ?>
                        <input type="hidden" id="token_profile" name="token_profile" value="<?php echo password_hash(Date('Y-m-d').'token-ps', PASSWORD_BCRYPT); ?>">
                            <div class="form-container-user">
                            <div class="header-profile">
                                <div class="circular--landscape2">
                                    <img src="/../images/users/<?php echo $userdata->image;  ?>" alt="">
                                </div>
                            </div>
                            <input type="hidden" id="manager_id" name="manager_id" value="<?php echo $_GET['manager_id']; ?>">
                            <div class="rowss">
                                <div id="id_div">
                                        <p>First Name <span style="color:red;">*</span></p>
                                </div>
                                <div id="idcontent">
                                    <input type="text" id="fname" name="fname" required value="<?php echo $userdata->first_name; ?>">
                                </div>
                            </div>
                            <div class="rowss">
                                <div id="id_div">
                                        <p>Middle Name <span style="color:red;">*</span></p>
                                </div>
                                <div id="idcontent">
                                        <input type="text" id="mname" name="mname" required value="<?php  echo $userdata->middle_name; ?>">
                                </div>
                            </div>
                            <div class="rowss">
                                <div id="id_div">
                                     <p>Last Name <span style="color:red;">*</span></p>
                                </div>
                                <div id="idcontent">
                                        <input type="text" id="lname" name="lname" required value="<?php echo $userdata->last_name;  ?>">
                                </div>
                            </div>
                            <div class="rowss">
                                <div id="id_div">
                                        <p>Email</p>
                                </div>
                                <div id="idcontent">
                                    <p><?php
                                      echo $userdata->email;
                                    ?></p>
                                </div>
                            </div>
                            <div class="rowss">
                                <div id="id_div">
                                        <p>Manager Type</p>
                                </div>
                                <div id="idcontent">
                                    <p><?php
                                      echo $userdata->maneger_type;
                                    ?></p>
                                </div>
                            </div>
                            <div class="rowss">
                                <div id="id_div">
                                        <p>Contact <span style="color:red;">*</span></p>
                                </div>
                                <div id="idcontent">
                                   <input type="contact" id="contact" placeholder="09*********" name="contact" required  value="<?php echo $userdata->phone; ?>">
                                </div>
                            </div>
                            <div class="rowss">
                                <div id="id_div">
                                        <p>Password (optional)</span></p>
                                        <p style="color:red;">Password Must Uppercase, Special Character and Number</p>
                                </div>
                                <div id="idcontent">
                                    <input type="password" id="password" name="password" placeholder="********">
                                </div>
                                </div>
                            </div>

                            <div class="button-add-emp">
                                <a href="../traveler" id="cancel">Cancel</a>
                                    <button type="submit" id="buttonss">
                                            <span id="spansubmit2">Update</span>
                                            <div class="center-loading-3">
                                                <div class="span5load2"></div>
                                                <div class="span6load2"></div>
                                                <div class="span7load2"></div>
                                            </div>
                                    </button>
                            </div>
                        </form>
                </div>
                <br>
                <br>
                <br>
            </main>
        </div>
    </div>
    <script src="../js/notification_2.js?v=7"></script>
    <script src="../js/update-manager.js?V=1"></script>
    <script src="../js/notification_2.js?v=15"></script>
</body>
</html>
