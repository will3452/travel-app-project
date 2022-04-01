<?php 
     include_once '../../vendor/autoload.php';
     include_once 'process/LoginStatus.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/default.css?v=3">
    <link rel="stylesheet" href="../public/css/user_style.css?v=3">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="../public/js/operate.js"></script> 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://kit.fontawesome.com/a66db60870.js" crossorigin="anonymous"></script>
    <title>Admin - Manager</title>
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
                    <p class="mt-4 edit-title">Manager</p>
                    <!--nav table -->
                    <div class="overflowtables div-navs">
                        <div class="locate-nav">    
                            <div class="locate-div">
                                <?php if(isset($_GET['tab'])): ?>
                                    <?php if($_GET['tab']=='pending'): ?>
                                        <a href="?tab=approved"><button>Approved</button></a>
                                        <a href="#"><button id="activenav">Pending</button></a>
                                    <?php elseif($_GET['tab']=='approved'): ?>
                                        <a href="#"><button id="activenav">Approved</button></a>
                                        <a href="?tab=pending"><button>Pending</button></a>
                                    <?php else: ?>
                                        <a href="#"><button id="activenav">Approved</button></a>
                                        <a href="?tab=pending"><button>Pending</button></a>
                                    <?php endif; ?>
                                <?php else: ?>
                                    <a href="#"><button id="activenav">Approved</button></a>
                                    <a href="?tab=pending"><button>Pending</button></a>
                                <?php endif; ?>
                            </div>    
                        </div>
                    </div>
                    <br>
                    <!-- search -->
                    <span class="clearable">
                        <i class="fas fa-search search_icon"></i>
                        <input class="form-control mr-sm-2" type="text" id="search" placeholder="Search"
                            value=""
                            aria-label="Search">
                        <i class="clearable__clear">&times;</i>
                    </span>  
                    <!-- table -->
                    <div class="card mb-4">
                        <div class="card-header">
                            <div>Approved Manager</div>
                            <div class="dropdown-per-page">
                                <button class="btn titleperpage-bn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <div class="dropdown-menu" id="dropdown" aria-labelledby="dropdownMenuButton1">
                                        <p class="titleperpage">Per Page</p>
                                        <li><a class="dropdown-item sort" href="#">15</a></li>
                                        <li><a class="dropdown-item sort" href="#">25</a></li>
                                        <li><a class="dropdown-item sort" href="#">50</a></li>
                                        <li><a class="dropdown-item sort" href="#">75</a></li>
                                        <li><a class="dropdown-item sort" href="#">100</a></li>
                                </div>
                            </div>
                        </div>
                        <div class="card-body-table overflowtables">
                            <table class="tablenew">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <div class="d-flex">
                                                <span>ID </span>
                                                <div class="sorted-table">
                                                    <div><a href="#"><i class="fas fa-chevron-up"></i></a></div>
                                                    <div><a href="#"><i class="fas fa-chevron-down"></i></a></div>
                                                </div>
                                            </div>
                                        </th>
                                        <th scope="col">Profile</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">
                                            <div class="d-flex">
                                                <span>Date Registered</span>
                                                <div class="sorted-table">
                                                    <div><a href="#"><i class="fas fa-chevron-up"></i></a></div>
                                                    <div><a href="#"><i class="fas fa-chevron-down"></i></a></div>
                                                </div>
                                            </div>
                                        </th>
                                        <th scope="col">Account Status</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody class="hideafter">
                                    <tr>
                                        <td id="idss"><?php echo sprintf('%06d', 1)?></td>
                                        <td>
                                            <div class="circular--landscape"> 
                                                <img id="vievimage" src="#" alt="">
                                            </div>
                                        </td>
                                        <td data-target="name">sample@gmail.com</td>
                                        <td data-target="name">sample user</td>
                                        <td data-target="name">2022-03-31</td>
                                        <td data-target="name">Active</td>
                                        <td id="btn">
                                            <div class="d-flex">
                                                <i class="fa-solid fa-eye btns" id="showinfo"></i>
                                                <i class="far fa-edit btns" id="updateuser"></i>
                                                <i class="fa-solid fa-message btns" id="message"></i>
                                                <i class="fas fa-toggle-off btns"  id="blockuser"></i>
                                                <i class="fas fa-user-slash" id="deleteuser"></i>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td id="idss"><?php echo sprintf('%06d', 2)?></td>
                                        <td>
                                            <div class="circular--landscape"> 
                                                <img id="vievimage" src="#" alt="">
                                            </div>
                                        </td>
                                        <td data-target="name">sample2@gmail.com</td>
                                        <td data-target="name">sample user2</td>
                                        <td data-target="name">2022-03-31</td>
                                        <td data-target="name">Active</td>
                                        <td id="btn">
                                            <div class="d-flex">
                                                <i class="fa-solid fa-eye btns" id="showinfo"></i>
                                                <i class="far fa-edit btns" id="updateuser"></i>
                                                <i class="fa-solid fa-message btns" id="message"></i>
                                                <i class="fas fa-toggle-off btns"  id="blockuser"></i>
                                                <i class="fas fa-user-slash" id="deleteuser"></i>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- if table empty -->
                            <!-- <div id="emptyss"><i class="fa-solid fa-table-list"></i><p>No Data</p></div> -->

                            <!--table loading-->
                            <!-- <div class="loadingss">
                                <div class="center-table">
                                    <div class="span1load-table"></div>
                                    <div class="span2load-table"></div>
                                    <div class="span3load-table"></div>
                                </div>
                            </div>  -->
                            <div class='bottomtable overflowtables'>
                                <div class="pre-nex">
                                    <p class="nomore">Previous</p>
                                    <p>Page 1 - 1</p>
                                    <p class="nomore">Next</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
</html>