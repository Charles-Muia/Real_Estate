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
                    <li><a href="#about">about us</a></li>
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

<!--===PROPERTY SECTION------------------------------------------------------------------------------------------------>

        <section class="prop-sec">
            <div class="prop-sec-left">
                <h2>available homes</h2>
            </div>
                <div class="prop-sec-content">
                    <div class="row">
                        <img src="Images/House_2.jpg" alt="">
                            <h5>meru kinoru stadium</h5>
                                <p>opposite kenya power, kinoru</p>
                                    <div class="prop-sec-list">
                                        <a href="#" class="prop-list"><i class='bx bxs-bed'></i> 3 bed</a>
                                        <a href="#" class="prop-list"><i class='bx bxs-bath' ></i> 2 bath</a>
                                        <a href="#" class="prop-list"><i class='bx bxs-bed'></i> 3 sqft</a>
                                    </div>
                    </div>

                    <div class="row">
                        <img src="Images/House_2.jpg" alt="">
                        <h5>meru kinoru stadium</h5>
                        <p>opposite kenya power, kinoru</p>
                        <div class="prop-sec-list">
                            <a href="#" class="prop-list"><i class='bx bxs-bed'></i> 3 bed</a>
                            <a href="#" class="prop-list"><i class='bx bxs-bath' ></i> 2 bath</a>
                            <a href="#" class="prop-list"><i class='bx bxs-bed'></i> 3 bed</a>
                        </div>
                    </div>

                    <div class="row">
                        <img src="Images/House_2.jpg" alt="">
                        <h5>meru kinoru stadium</h5>
                        <p>opposite kenya power, kinoru</p>
                        <div class="prop-sec-list">
                            <a href="#" class="prop-list"><i class='bx bxs-bed'></i> 3 bed</a>
                            <a href="#" class="prop-list"><i class='bx bxs-bath'></i> 2 bath</a>
                            <a href="#" class="prop-list"><i class='bx bxs-bed'></i>3 bed</a>
                        </div>
                    </div>
                </div>
                        <div class="middle-btn">
                            <a href="#" class="btn">view all properties</a>
                        </div>
        </section>

<!--===ABOUT SECTION--------------------------------------------------------------------------------------------------->

        <section class="about-sec" id="about">
            <div class="about-sec-img">
                <img src="Images/Logo_3.png" alt=""></div>
                <div class="about-sec-text">
                    <h2>we help you find a place to call home.</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Animi autem beatae delectus fugit itaque laboriosam modi provident, sit veritatis voluptate!
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Animi autem beatae delectus fugit itaque laboriosam modi provident, sit veritatis voluptate!</p>
                            <a href="#" class="btn">get in touch</a>
                </div>
        </section>


<!--===SUBSCRIBE SECTION----------------------------------------------------------------------------------------------->

        <section class="testimonials-sec" id="testimonials">
                    <div class="testimonials-sec-title">
                            <span></span>
                                <h2>what our clients say</h2>
                    </div>

                    <div class="testimonials-sec-container">
                        <div class="testimonials-sec-box"></div>

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
