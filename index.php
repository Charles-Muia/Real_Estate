<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

<!--===CSS------------------------------------------------------------------------------------------------------------->
    <link rel="stylesheet" href="style.css">

<!--===FAVICON--------------------------------------------------------------------------------------------------------->
    <link rel="icon" href="Images/Logo_3.png">

<!--===CDN ICONS------------------------------------------------------------------------------------------------------->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

<!--===GOOGLE FONTS---------------------------------------------------------------------------------------------------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">

    <title>Home | A place To Live</title>
</head>
<body>

<!--===HEADER SECTION-------------------------------------------------------------------------------------------------->

        <header>
            <a href="#" class="header-logo"><img src="Images/Logo_3.png" alt=""></a>
                <ul class="header-nav">
                    <li><a href="#">home</a></li>
                    <li><a href="#">about us</a></li>
                    <li><a href="#">buy</a></li>
                    <li><a href="#">sell</a></li>
                    <li><a href="#">rent</a></li>
                    <li><a href="#">contact us</a></li>
                </ul>

                    <div class="header-btn">
                        <a href="#" class="header-btn-1">blog</a>
                        <a href="#" class="header-btn-2">faqs</a>
                        <div class="bx bx-menu" id="menu-icon"></div>
                    </div>
        </header>

<!--===HERO SECTION---------------------------------------------------------------------------------------------------->

        <section class="hero-section">
                <div class="hero-text">
                    <h1>we all need a place to call home, east or west.</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab cupiditate iste laborum molestiae?</p>

                            <div class="hero-search">
                                <form action="">
                                    <input type="search" placeholder=" search here .... " class="search-input">
                                    <input type="submit" value="search">
                                </form>
                            </div>
                </div>

            <div class="hero-img"><img src="Images/House_1.jpg" alt=""></div>
        </section>

<!--===FEATURE SECTION------------------------------------------------------------------------------------------------->

        <section class="feat-sec">
            <div class="feat-sec-left">
                <h2>feature</h2></div>
                    <div class="feat-sec-content">
                        <div class="feat-sec-img">
                            <img src="Images/Agency.png" alt="">
                        </div>
                        <div class="feat-sec-img">
                            <img src="Images/Agency.png" alt="">
                        </div>
                        <div class="feat-sec-img">
                            <img src="Images/Agency.png" alt="">
                        </div>
                        <div class="feat-sec-img">
                            <img src="Images/Agency.png" alt="">
                        </div>
                        <div class="feat-sec-img">
                            <img src="Images/Agency.png" alt="">
                        </div>
                    </div>
        </section>

<!--===JS(FEATURE-SECTION)--------------------------------------------------------------------------------------------->

        <script type="text/javascript">
            const header = document.querySelector("header");
            window.addEventListener("scroll", function (){
                header.classList.toggle("sticky", window.scrollY > 80)
            });
        </script>
</body>
</html>
