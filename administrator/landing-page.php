<?php
     include_once '../vendor/autoload.php';

     include_once 'process/LoginStatus.php';

     $Branding = new Branding;

     $GetSystemAbout = $Branding->GetSystemAbout();

     $systemabouttitle = '';

     $systemaboutdesciption = '';

     if($GetSystemAbout){

        $systemabouttitle = $GetSystemAbout->title;

        $systemaboutdesciption = $GetSystemAbout->description;

     }



     $GetSystemFooter = $Branding->GetSystemFooter();

     $contactfooter = '';

     $facebookfooter = '';

     $twitterfooter = '';

     $instagramfooter = '';

     if($GetSystemFooter){

        $contactfooter = $GetSystemFooter->contact;

        $facebookfooter = $GetSystemFooter->facebook;
        
        $twitterfooter = $GetSystemFooter->twitter;

        $instagramfooter = $GetSystemFooter->instagram;

     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/default.css?v=3">
    <link rel="stylesheet" href="/public/css/user_style.css?v=20">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="/public/js/operate.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://kit.fontawesome.com/a66db60870.js" crossorigin="anonymous"></script>
    <title>Admin - Landinge Page</title>
</head>
<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bgnav shadow-sm p-3 mb-5 rounded">
        <?php
            include '_UI/header_1.php';
            include '_UI/modal.php';
            echo $deleteallnotif;
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
                    <p class="mt-4 edit-title">Landinge Page</p>
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
                    <div class="hide-dash">
                        <div class="form-container-user">
                            <form id="submitdsystemabout">
                                <?php
                                    date_default_timezone_set('Asia/Manila');
                                ?>
                                <input type="hidden" id="token_systemabout" name="token_systemabout" value="<?php echo password_hash(Date('Y-m-d').'token-ps', PASSWORD_BCRYPT); ?>">
                                <div class="rowss">
                                        <div id="id_div">
                                            <p style="font-size:20px;">System About</p>
                                        </div>
                                </div>
                                <div class="rowss">
                                    <div id="id_div">
                                        <?php if($GetSystemAbout): ?>
                                            <p>Update Title <span style="color:red;">*</span></p>
                                        <?php else: ?>
                                            <p>Title <span style="color:red;">*</span></p>
                                        <?php endif; ?>
                                    </div>
                                    <div id="idcontent">
                                        <input type="text" name="titlelandingdesc"  value="<?php echo $systemabouttitle; ?>" required id="titlelandingdesc" class="focusinput">
                                    </div>
                                </div>
                                <div class="rowss">
                                    <div id="id_div">
                                        <?php if($GetSystemAbout): ?>
                                            <p>Update Description <span style="color:red;">*</span></p>
                                        <?php else: ?>
                                            <p>Description <span style="color:red;">*</span></p>
                                        <?php endif; ?>
                                    </div>
                                    <div id="idcontent">
                                        <textarea name="description" id="description" required class="description"><?php echo $systemaboutdesciption; ?></textarea>
                                    </div>
                                </div>
                                <div class="button-add-emp" id="logo-btn">
                                    <button type="submit" id="buttonss">
                                        <?php if($GetSystemAbout): ?>
                                            <span id="spansubmit">Update</span>
                                        <?php else: ?>
                                            <span id="spansubmit">Submit</span>
                                        <?php endif; ?>
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
                                    <p style="font-size:20px;">For Footer</p>
                                </div>
                            </div>
                            <form id="submitfooter"> 
                                <?php
                                    date_default_timezone_set('Asia/Manila');
                                ?>
                                <input type="hidden" id="token_footer" name="token_footer" value="<?php echo password_hash(Date('Y-m-d').'token-ps', PASSWORD_BCRYPT); ?>"> 
                                <div class="rowss">
                                    <div id="id_div">
                                        <?php if($GetSystemFooter): ?>
                                            <p>Update Contact<span> (optional)</span></p>
                                        <?php else: ?>
                                            <p>Contact<span> (optional)</span></p>
                                        <?php endif; ?>
                                    </div>
                                    <div id="idcontent">
                                        <input type="text" name="contact" value="<?php echo $contactfooter; ?>"  id="contact" placeholder="ex: 0999#######"  class="focusinput">
                                    </div>
                                </div>
                                <div class="rowss">
                                    <div id="id_div">
                                        <?php if($GetSystemFooter): ?>
                                            <p>Update Facebook<span> (optional)</span></p>
                                        <?php else: ?>
                                            <p>Facebook<span> (optional)</span></p>
                                        <?php endif; ?>
                                    </div>
                                    <div id="idcontent">
                                        <input type="text" name="facebook"  id="facebook" value="<?php echo $facebookfooter; ?>" placeholder="ex: https://www.facebook.com/"  class="focusinput">
                                    </div>
                                </div>
                                <div class="rowss">
                                    <div id="id_div">
                                        <?php if($GetSystemFooter): ?>
                                            <p>Update twitter<span> (optional)</span></p>
                                        <?php else: ?>
                                            <p>twitter<span> (optional)</span></p>
                                        <?php endif; ?>
                                    </div>
                                    <div id="idcontent">
                                        <input type="text" name="twitter"  id="twitter" value="<?php echo $twitterfooter; ?>" placeholder="ex: https://www.twitter.com/"  class="focusinput">
                                    </div>
                                </div>
                                <div class="rowss">
                                    <div id="id_div">
                                        <?php if($GetSystemFooter): ?>
                                            <p>Update Instagram<span> (optional)</span></p>
                                        <?php else: ?>
                                            <p>Instagram<span> (optional)</span></p>
                                        <?php endif; ?>
                                    </div>
                                    <div id="idcontent">
                                        <input type="text" name="instagram"  id="instagram" value="<?php echo $instagramfooter; ?>" placeholder="ex: https://www.instagram.com/"  class="focusinput">
                                    </div>
                                </div>
                                <div class="button-add-emp" id="logo-btn">
                                    <button type="submit" id="buttonss">
                                            <?php if($GetSystemFooter): ?>
                                                <span id="spansubmit2">Update</span>
                                            <?php else: ?>
                                                <span id="spansubmit2">Submit</span>
                                            <?php endif; ?>
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
    <script src="js/notification.js?v=15"></script>
    <script src="js/landing-page.js"></script>
    <script src="js/global-search.js?v=5"></script>
</body>
</html>
