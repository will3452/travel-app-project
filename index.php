
<?php
    include_once 'vendor/autoload.php';

    $Branding = new Branding;

    $Logo = new Logo;

    $User = new User;

    $GetBranding = $Branding->GetBranding();

    $GetSystemAbout = $Branding->GetSystemAbout();

    $GetSystemFooter = $Branding->GetSystemFooter();

    $GetLogo = $Logo->GetLogo();

    $businesslist = $User->BusinessFetctSortInLandingPage();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $GetBranding->name; ?></title>
    <link rel="stylesheet" href="public/css/default.css?v=31">
    <link rel="stylesheet" href="public/css/landing.css?v=31">
    <link rel="stylesheet" href="carousel/dist/assets/owl.carousel.css" />
    <link rel="stylesheet" href="carousel/dist/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="carousel/dist/assets/owl.theme.default.css" />
    <link rel="stylesheet" href="carousel/dist/assets/owl.theme.default.min.css" />
    <link rel="stylesheet" href="carousel/dist/assets/owl.theme.green.min.css" />
    <link rel="stylesheet" href="carousel/dist/assets/owl.theme.green.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://kit.fontawesome.com/a66db60870.js" crossorigin="anonymous"></script>
    <style>
        .dropdown {
            position: relative;
        }

        .hidden {
            visibility: hidden;
        }

        .dropdown>.dropdown-items {
            position: absolute;
            top: 3.5em;
            right:3em;
            width: 30vw;
            background: #0095A4;
            padding: 0.5em;
            text-align:center;
        }

        .dropdown>.dropdown-items::before {
            content:' ';
            position: absolute;
            top: -4px;
            right:2em;
            display: block;
            width: 15px;
            height: 15px;
            transform: rotate(-45deg);
            background: #0095A4;
            z-index: 0;
        }

        .dropdown-items>* {
            display: block;
            z-index: 4;
            padding:5px;
            color: #fff !important;
            font-size: 14px !important;
        }

    </style>
</head>
<body>

    <div class="loading-icon-landing">
        <div class="center">
             <div class="span1load"></div>
             <div class="span2load"></div>
             <div class="span3load"></div>
        </div>
    </div>
    <div class="load-body">
        <header class="headerssss" id="body-headersss">
            <nav class="navbarssss">
                <div class="titles">
                        <a href="#" class="nav-logos"><img id="logosss" src="user/assets/logo/<?php echo $GetLogo->image; ?>" alt=""> </a>
                        <a href="#home" id="title-texts"><?php echo $GetBranding->name; ?></a>
                </div>
                    <ul class="nav-menussss">
                        <li class="nav-itemss">
                            <a href="#host" class="nav-linkss">host</a>
                        </li>
                        <li class="nav-itemss">
                            <a href="#about" class="nav-linkss">about</a>
                        </li>
                        <li class="nav-itemss">
                            <a href="#contact" class="nav-linkss">contact</a>
                        </li>
                        <li class="nav-itemss">
                            <a href="user/login" class="nav-linkss">login</a>
                        </li>
                        <li class="nav-itemss dropdown">
                            <a href="#reg" class="nav-linkss">Register</a>
                            <div class="dropdown-items hidden">
                                <a href="user/register_manager">As Manager</a>
                                <a href="user/register_traveler" >As Traveler</a>
                            </div>
                        </li>
                    </ul>
                    <div class="hamburger">
                        <i class="fa fa-bars"></i>
                    </div>
                </nav>
        </header>
        <main>
            <section class="container-body hre body-cont1" id="home">
                <div class="container-div container-body1">
                    <div class="center-content">
                        <h1><?php echo $GetBranding->name; ?></h1>
                        <span><i><?php echo $GetBranding->description; ?></i></span><br>
                        <br>
                        <br>
                        <a href="#host"><i class="fa-solid fa-caret-down"></i></a>
                    </div>
                </div>
            </section>
            <section class="container-body hre body-cont2" id="host">
                <div class="container-div container-body2">
                    <div class="center-content2">
                    <h1>Host</h1>
                    <br>
                    <div class="owl-carousel owl-theme" id="hidefirst">
                        <?php if($businesslist): ?>

                            <?php foreach($businesslist as $businesdisplay):  
                                $businemanager_id = $businesdisplay['manager_id'];
                                $GetManagerData = $User->GetUserData($businemanager_id, $User::USER_TYPE_MANAGER);    
                            ?>
                                <?php if($GetManagerData->block_status == $User::BLOCK_STATUS_TEMPORARY || $GetManagerData->block_status == $User::BLOCK_STATUS_PERMANENTLY):?>
                                <?php else: ?>
                                    <div class="item"><img src="user/assets/logo/<?php echo $businesdisplay['logo']; ?>" class="imagehost" alt=""></div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        <?php else: ?>

                        <?php endif; ?>
                    </div>
                    </div>
            </section>
            <section class="container-body hre body-cont1" id="about">
                <div class="container-div container-body1">
                    <div class="center-content">
                        <h1><?php echo $GetSystemAbout->title; ?></h1>
                        <span><i><?php echo $GetSystemAbout->description; ?></i></span><br>
                        <br>
                        <br>
                    </div>
                </div>
            </section>
            <footer id="contact">
                <div class="footer-header">
                    <ul>
                        <li class="nav-itemss2">
                            <a href="#funerals" >Host</a>
                        </li>
                        <li class="nav-itemss2">
                            <a href="#home" class="nav-linkss" id="footertitle"><?php echo $GetBranding->name; ?></a>
                        </li>
                        <li class="nav-itemss2">
                            <a href="users/login" >login</a>
                        </li>
                    </ul>
                </div>
                <div class="footer-body" id="contact">
                    <h1>contact</h1>
                    <div class="contact-cont">
                        <a href="tel:<?php echo $GetSystemFooter->contact; ?>" style="text-decoration:underline;"><?php echo $GetSystemFooter->contact; ?></a>
                    </div>
                    <div class="contact-cont">
                        <a href="<?php echo $GetSystemFooter->facebook; ?>"><i class="fa fa-facebook"></i></a>
                        <a href="<?php echo $GetSystemFooter->instagram; ?>"><i class="fa fa-instagram"></i></a>
                        <a href="<?php echo $GetSystemFooter->twitter; ?>"><i class="fa fa-twitter"></i></a>
                    </div>
                    <br>
                    <div class="policy">
                        <p>&copy; Copyright 2022 <?php echo $GetBranding->name; ?></p>
                        <a href="view/data-privacy" target='_blank'>PRIVACY POLICY</a>
                    </div>
                </div>
            </footer>
        </main>
    </div>
    <script src="carousel/dist/owl.carousel.js"></script>
    <script src="carousel/dist/owl.carousel.min.js"></script>

    <script>
        const hamburger = document.querySelector(".hamburger");
        const navMenu = document.querySelector(".nav-menussss");

        hamburger.addEventListener("click", mobileMenu);

        function mobileMenu() {
            hamburger.classList.toggle("active");
            navMenu.classList.toggle("active");
        }
        $(document).on('click','.container-body',function(){
            $(".nav-menussss").removeClass('active');
        });
         window.addEventListener("load", function(){
            $(".loading-icon-landing").fadeOut();

            setTimeout(function(){
            $(".load-body").show();
            }, 1000);

        });

        var scrollnum = 0;
        window.addEventListener("scroll",function(){
            var scrolltop = window.pageYOffset || document.documentElement.scrollTop;

            if(scrolltop > scrollnum){
                $(".nav-menu").removeClass('active');
            }else{
                $(".nav-menu").removeClass('active');
            }
            scrollnum = scrolltop;
        });
        //smoth
        $(".nav-menu a").on('click',function(e){
            if(this.hash !==''){
                e.preventDefault();

                const hash = this.hash;

                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                },200
                );
            }
        });
    </script>

    <script>
        var _hide = true;
        $('.dropdown').click(function () {
            if (_hide) {
                $(this).children('.dropdown-items').removeClass('hidden');
            } else {
                $(this).children('.dropdown-items').addClass('hidden');
            }
            _hide = ! _hide;
        })
    </script>
    <script>
       $('.owl-carousel').owlCarousel({
            items:1,
            margin:10,
            loop:true,
            autoHeight:true,
            autoplay:true,
            autoplayTimeout:1500,
            autoplayHoverPause:true
        });
        
    </script>
</body>
</html>
