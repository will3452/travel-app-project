
<?php 
$logo = new logo;
$Getlogo = $logo->Getlogo();
$logoimage = '';
if($Getlogo){
   $logoimage = $Getlogo->image;
}

?>
<a class="navbar-brand display-title-none" href="#">
    <?php if($logoimage): ?>
        <img src="../user/assets/logo/<?php echo $logoimage; ?>" alt="" id="logonav">
    <?php else: ?>
        <p style="margin-left:40px; margin-top:15px;">NO LOGO</p>
    <?php endif; ?>
</a>
<button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0 colortitlenav navbar-burger-size" id="sidebarToggle" href="#!"><i class="fas fa-bars colorblack"></i></button>
<div class="me-0 me-md-3 my-2 my-md-0 widthfor">
    <div class="input-group">
        <input type="text" id="searchglobal" class="form-control border-0 bg-light small" placeholder="Search for..."
                    aria-label="Search" aria-describedby="basic-addon2">
    </div>
    <div class="loading-content">
    <div class="loading-icon-main">
                        <div class="center">
                            <div class="span1load"></div>
                            <div class="span2load"></div>
                            <div class="span3load"></div>
                    </div>
            </div> 
    </div>
    <div class="dropdown-content" id="fetchglobalsearch">
    </div>
    <div class="noresult-content">
                <div class="bgserachtitle">
                        <p>Result</p>
                </div>
                <p id="body-not">No Result</p>
    </div>
</div>
<div class="ms-auto me-0 me-md-3 my-2 my-md-0 smallsearch">
    <div class="input-group">
         <div class="form-control bg-light border-0 small" id="iconsearch"><i class="fas fa-search"></i></div>
    </div>
    <div class="text-field-search">
        <div class="input-group">
            <input type="text" id="searchglobal-moba" class="form-control bg-light border-0 small" placeholder="Search for..."
                        aria-label="Search" aria-describedby="basic-addon2">
        </div>
    </div>
    <div class="loading-content-moba">
    <div class="loading-icon-main">
                        <div class="center">
                            <div class="span1load"></div>
                            <div class="span2load"></div>
                            <div class="span3load"></div>
                    </div>
            </div> 
    </div>
    <div class="dropdown-content-moba" id="fetchglobalsearch-moba">
    </div>
    <div class="noresult-content-moba">
                <div class="bgserachtitle-moba">
                        <p>Result</p>
                </div>
                <p id="body-not">No Result</p>
    </div>
</div>


<div class="d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0 displaynone">
 </div>
 <div class="notif-icon">
        <span class="countnum">0</span>
        <i class="fas fa-bell" id="notif_btn_open"></i>
    </div>

    <div class="loading-content-notification">
    <div class="loading-icon-main">
                        <div class="center">
                            <div class="span1load"></div>
                            <div class="span2load"></div>
                            <div class="span3load"></div>
                        </div>
            </div> 
    </div>
    <div class="dropdown-content-notification" id="fetchnotification">
            <div class="bgserachtitle-notif">
                <p><i class="fas fa-bell" id="notif_btn_open"></i> New / Un-Read Notification</p>
            </div>
            <a href="" class="loop_link_notif">
                        <div class="notif_loop">
                                <span><i class="fas fa-circle"></i><span id="titlenotifss">title notif</span></span><br>
                                <span id="notifmessage"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, rerum!</span>
                    </div>
            </a>
            
    </div>
    <div class="noresult-content-notif">
                <div class="bgserachtitle-notif">
                    <p><i class="fas fa-bell" id="notif_btn_open"></i> New / Un-Read Notification</p>
                </div>
                <p id="body-not">No Notification</p>
    </div>

 <div class="notif-message">
        <span class="countnum" id="loadcont">0</span>
        <i class="fa-solid fa-message" id="mess_btn_open"></i>
    </div>

    <div class="loading-content-message">
    <div class="loading-icon-main">
                        <div class="center">
                            <div class="span1load"></div>
                            <div class="span2load"></div>
                            <div class="span3load"></div>
                    </div>
            </div> 
    </div>
    <div class="dropdown-content-message" id="fetchmessage">
        <div class="bgserachtitle-notif">
            <p><i class="fa-solid fa-message" id="mess_btn_open"></i> New / Un-Read Messages</p>
        </div>
        <a href="view/message?id_cli='.$iduserun.'" class="loop_link_mess">
            <div class="mess_loop">
                <div class="_cont">
                    <div class="circular--landscape--mess"> 
                        <img id="vievimage" src="#" alt="">
                    </div>
                    <div class="head_mess">
                        <span id="name_heres">leo corpuz jr</span>
                    </div>
                </div>
                <div class="_cont">
                        <span id="notifmessage_mess"> <i class="fas fa-circle"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, obcaecati.</span>
                </div>
            </div>
        </a>     
    </div>
    <div class="noresult-content-mess">
                <div class="bgserachtitle-mess">
                    <p><i class="fa-solid fa-message" id="mess_btn_open"></i> New / Un-Read Message</p>
                </div>
                <p id="body-not">No Message</p>
    </div>
 <div class="vl"></div>
<ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
    <li class="nav-item dropdown">
        <a class="colorblack" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><span id="titlenamess">Manager User</span> <span><i class="fas fa-angle-down fa-fw mt-1"></i></span></a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="profile">Profile</a></li>
            <li><hr class="dropdown-divider" /></li>
            <li><a class="dropdown-item" href="process/logout">Logout</a></li>
        </ul>
    </li>
</ul>