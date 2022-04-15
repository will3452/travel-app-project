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
    <link rel="stylesheet" href="/public/css/default.css?v=4">
    <link rel="stylesheet" href="/public/css/user_style.css?v=20">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="/public/js/operate.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://kit.fontawesome.com/a66db60870.js" crossorigin="anonymous"></script>
    <title>Admin - T&D</title>
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
                    <p class="mt-4 edit-title">Terms And Conditions</p>
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

                    <!--tmd content -->
                    <div class="hide-dash">
                        <div class="form-container-user">
                            <div class="rowss">
                                    <div id="id_div">
                                    <p style="font-size:20px;">For Terms</p>
                                    </div>
                            </div>
                            <form id="submitFormheader">
                                <div class="rowss">
                                    <div id="id_div">
                                        <p>Title<span style="color:red;">*</span></p>
                                    </div>
                                    <div id="idcontent">
                                            <input type="text" name="titleterms"  id="titleterms" placeholder="----- ---"  class="focusinput">
                                    </div>
                                </div>
                                <div class="rowss">
                                    <div id="id_div">
                                            <p>Description <span style="color:red;">*</span></p>
                                    </div>
                                    <div id="idcontent">
                                        <textarea name="description" id="description" placeholder="----- --- ------ --- ---" class="focusinput"></textarea>
                                    </div>
                                </div>
                                <div class="button-add-emp" id="logo-btn">
                                    <button type="submit" id="buttonss">
                                            <span id="spansubmit">Submit</span>
                                            <div class="center-loading-2">
                                                <div class="span5load"></div>
                                                <div class="span6load"></div>
                                                <div class="span7load"></div>
                                            </div>
                                    </button>
                                </div>
                            </form>
                        </div>

                        <div class="form-container-user">
                            <div class="rowss">
                                    <div id="id_div">
                                    <p style="font-size:20px;">For Condition</p>
                                    </div>
                            </div>
                            <form id="submitFormheader">
                                <div class="rowss">
                                    <div id="id_div">
                                        <p>Title<span style="color:red;">*</span></p>
                                    </div>
                                    <div id="idcontent">
                                            <input type="text" name="titleterms"  id="titleterms" placeholder="----- ---"  class="focusinput">
                                    </div>
                                </div>
                                <div class="rowss">
                                    <div id="id_div">
                                            <p>Description <span style="color:red;">*</span></p>
                                    </div>
                                    <div id="idcontent">
                                        <textarea name="description" id="description" placeholder="----- --- ------ --- ---" class="focusinput"></textarea>
                                    </div>
                                </div>
                                <div class="button-add-emp" id="logo-btn">
                                    <button type="submit" id="buttonss">
                                            <span id="spansubmit2">Submit</span>
                                            <div class="center-loading-3">
                                                <div class="span5load2"></div>
                                                <div class="span6load2"></div>
                                                <div class="span7load2"></div>
                                            </div>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <br>
                    <br>
                </div>
            </main>
        </div>
    </div>
    <script src="js/load.js"></script>
    <script src="js/notification_outside.js?v=7"></script>
</body>
</html>
