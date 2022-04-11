<?php 
     include_once '../../../vendor/autoload.php';

     include_once '../process/LoginStatus.php';

     $User = new User;
  
     $Service = new Service;
     
     $GetUserID = $User->GetUserID($email);

     $iduser = $GetUserID->id;

     $check = $User->GetBusinessManager($iduser);

     $businessid = $check->id;

     $GetCategory = $Service->GetCategory($businessid);
    
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
    <title>Manager - Create Service</title>
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
                    <p class="mt-4 edit-title">Create Service</p>
                    <form id="submitForm">  
                        <div class="form-container-user">
                            <div class="rowss">
                                <div id="id_div">
                                        <p style="font-size:20px;">Service Form</p>
                                </div>
                            </div>
                            <?php 
                                date_default_timezone_set('Asia/Manila'); 
                            ?> 
                            <input type="hidden" id="token_create_service" name="token_create_service" value="<?php echo password_hash(Date('Y-m-d').'token-ps', PASSWORD_BCRYPT); ?>"> 
                            <div class="rowss">
                                <div id="id_div">
                                        <p>Category <span style="color:red;">*</span></p>
                                </div>
                                <div id="idcontent">
                                    <select name="category" id="category" required>
                                        <option val="">-------</option>
                                            <?php  foreach($GetCategory as $Fetchs): ?>
                                                <option value="<?php echo $Fetchs['name']; ?>"><?php echo ucwords($Fetchs['name']); ?></option>
                                            <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="rowss">
                                <div id="id_div">
                                        <p>Image <span style="color:red;">*</span></p>
                                </div>
                                <div id="idcontent">
                                        <input type="file" id="image" name="image" required class="focusinput" placeholder="-------">
                                </div>
                            </div>
                            <div class="rowss">
                                <div id="id_div">
                                        <p>Service Name <span style="color:red;">*</span></p>
                                </div>
                                <div id="idcontent">
                                        <input type="text" id="name" name="name" required class="focusinput" placeholder="-------">
                                </div>
                            </div>
                            <div class="rowss">
                                <div id="id_div">
                                        <p>Service Price <span style="color:red;">*</span></p>
                                </div>
                                <div id="idcontent">
                                        <input type="number" id="price" name="price" required class="focusinput" placeholder="-------">
                                </div>
                            </div>
                            <div class="rowss">
                                <div id="id_div">
                                        <p>Service Description <span style="color:red;">*</span></p>
                                </div>
                                <div id="idcontent">
                                <textarea name="description" id="description" required class="focusinput"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="button-add-emp">
                           <a href="../services" id="cancel">Cancel</a>
                            <button type="submit" id="buttonss" name="button">
                                <span id="spansubmit">Create Service</span>
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
    <script src="../js/create-service.js?v=3"></script>
</body>
</html>