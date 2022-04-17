
<?php
    include_once 'vendor/autoload.php';

    $Branding = new Branding;

    $Logo = new Logo;

    $GetBranding = $Branding->GetBranding();

    $GetLogo = $Logo->GetLogo();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $GetBranding->name; ?></title>
    <link rel="stylesheet" href="public/css/default.css?v=22">
    <link rel="stylesheet" href="public/css/landing.css?v=22">
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
            width: 30vw;
            background: #0095A4;
            padding: 0.5em;
        }

        .dropdown>.dropdown-items::before {
            content:' ';
            position: absolute;
            top: -4px;
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

                </div>
                    <ul class="nav-menussss">
                        <li class="nav-itemss">
                            <a href="#about" class="nav-linkss">about</a>
                        </li>
                        <li class="nav-itemss">
                            <a href="#host" class="nav-linkss">host</a>
                        </li>
                        <li class="nav-itemss">
                            <a href="#contact" class="nav-linkss">contact</a>
                        </li>
                        <li class="nav-itemss">
                            <a href="user/login" class="nav-linkss">login</a>
                        </li>
                        <li class="nav-itemss dropdown">
                            <a href="#" class="nav-linkss">Register</a>
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
                        <a href="#about"><i class="fa-solid fa-caret-down"></i></a>
                    </div>
                </div>
            </section>
        </main>
    </div>


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
</body>
</html>
