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
    <link rel="stylesheet" href="/public/css/default.css?v=5">
    <link rel="stylesheet" href="/public/css/user_style.css?v=14">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="/public/js/operate.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://kit.fontawesome.com/a66db60870.js" crossorigin="anonymous"></script>
    <title>Traveler - Host List</title>
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
                    <p class="mt-4 edit-title">Host List</p>
                    <div class="search-container">
                        <div class="dropdown-per-page">
                            <button class="btn titleperpage-bn dropdown-toggle sortwidth" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Category
                            </button>
                            <div class="dropdown-menu" id="dropdown" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item sort" href="host-list">All</a></li>
                                <li><a class="dropdown-item sort" href="?category=Resort">Resort</a></li>
                                <li><a class="dropdown-item sort" href="?category=Bed and breakfast">Bed and breakfast</a></li>
                                <li><a class="dropdown-item sort" href="?category=Rental vehicle">Rental vehicle</a></li>
                                <li><a class="dropdown-item sort" href="?category=Tourist attraction">Tourist attraction</a></li>
                                <li><a class="dropdown-item sort" href="?category=Resto and cafe">Resto and cafe</a></li>
                            </div>
                            <input type="hidden" id="categoryval" value="<?php if(isset($_GET['category'])){ echo $_GET['category']; } else{ echo "";}?>">
                        </div>
                        <div class="search-view-list">
                            <span class="clearable">
                                <i class="fas fa-search search_icon2"></i>
                                <input class="form-control mr-sm-2" type="text" id="search_2" placeholder="Search"
                                value="<?php if(isset($_GET['search'])){echo $_GET['search'];} ?>"
                                aria-label="Search">
                                <?php if(isset($_GET['search'])): ?>
                                    <i class="clearable__clear_search">&times;</i>
                                <?php else: ?>
                                    <i class="clearable__clear">&times;</i>
                                <?php endif; ?>
                            </span>
                        </div>
                    </div>

                    <div class="hide-dash">
                        <?php
                            include_once '_TABLE_UI/business-table.php'
                        ?>
                    </div>
                    <br>
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
                </div>
                <br>
                <br>
            </main>
        </div>
    </div>
    <script src="js/load.js?v=5"></script>
    <script src="js/host-list.js?v=5"></script>
</body>
</html>
