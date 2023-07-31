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


<!--===TESTIMONIALS SECTION-------------------------------------------------------------------------------------------->

        <section class="testimonials-sec" id="testimonials">
                    <div class="testimonials-sec-title">
                            <span></span>
                                <h2>what our clients say</h2>
                    </div>

                    <div class="testimonials-sec-container">
                        <div class="testimonials-sec-box">
                            <div class="box-top">
                                <div class="profile">
                                    <div class="profile-img">
                                        <img src="Images\Putin.jpg" alt="">
                                    </div>
                                            <div class="usr-name">
                                                <strong>karl magne</strong>
                                                    <span>@karlmagne</span>
                                            </div>
                                </div>
                                    <div class="reviews"></div>
                                        <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                                <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star-half'></i>
                                </div>

                            <div class="testimonials-sec-comments">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur debitis dignissimos eius eos ipsa odit omnis quidem rem veniam.
                                    Aliquid architecto consectetur dignissimos esse illum iure, odio qui rerum vel?</p>
                            </div>



                        </div>

                        <div class="testimonials-sec-box">
                            <div class="box-top">
                                <div class="profile">
                                    <div class="profile-img">
                                        <img src="Images\Picture_Person_3.jpg" alt="">
                                    </div>
                                    <div class="usr-name">
                                        <strong>karl magne</strong>
                                        <span>@karlmagne</span>
                                    </div>
                                </div>
                                <div class="reviews"></div>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star-half'></i>
                            </div>

                            <div class="testimonials-sec-comments">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur debitis dignissimos eius eos ipsa odit omnis quidem rem veniam.
                                    Aliquid architecto consectetur dignissimos esse illum iure, odio qui rerum vel?</p>
                            </div>
                        </div>

                        <div class="testimonials-sec-box">
                            <div class="box-top">
                                <div class="profile">
                                    <div class="profile-img">
                                        <img src="Images\Picture_person_2.jpg" alt="">
                                    </div>
                                    <div class="usr-name">
                                        <strong>karl magne</strong>
                                        <span>@karlmagne</span>
                                    </div>
                                </div>
                                <div class="reviews"></div>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star-half'></i>
                            </div>

                            <div class="testimonials-sec-comments">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur debitis dignissimos eius eos ipsa odit omnis quidem rem veniam.
                                    Aliquid architecto consectetur dignissimos esse illum iure, odio qui rerum vel?</p>
                            </div>
                        </div>

                        <div class="testimonials-sec-box">
                            <div class="box-top">
                                <div class="profile">
                                    <div class="profile-img">
                                        <img src="Images\Picture_person.jpg" alt="">
                                    </div>
                                    <div class="usr-name">
                                        <strong>karl magne</strong>
                                        <span>@karlmagne</span>
                                    </div>
                                </div>
                                <div class="reviews"></div>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star-half'></i>
                            </div>

                            <div class="testimonials-sec-comments">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur debitis dignissimos eius eos ipsa odit omnis quidem rem veniam.
                                    Aliquid architecto consectetur dignissimos esse illum iure, odio qui rerum vel?</p>
                            </div>
                        </div>
        </section>

<!--===FAQ SECTION----------------------------------------------------------------------------------------------------->

        <section class="faqs-sec">
                <div class="accordion">
                    <div class="image-box">
                        <img src="Images/Q&A.jpg" alt="">
                    </div>
                        <div class="accordion-text">
                            <div class="accordion-title">faqs</div>

                            <ul class="faqs-text">
                                <li>
                                <div class="faqs-questions-arrow">
                                    <span class="questions">Lorem ipsum dolor sit amet, consectetur adipisicing elit?</span>
                                        <i class='bx bx-chevron-down arrow'></i>
                                </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A architecto eaque incidunt iusto officia officiis repellat reprehenderit?
                                            Alias enim, eum maiores natus neque sequi tempora! At deleniti modi recusandae ullam.</p>
                                    <span class="accordion-line"></span>
                                </li>

                                <li>
                                    <div class="faqs-questions-arrow">
                                        <span class="questions">Lorem ipsum dolor sit amet, consectetur adipisicing elit?</span>
                                        <i class='bx bx-chevron-down arrow'></i>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A architecto eaque incidunt iusto officia officiis repellat reprehenderit?
                                        Alias enim, eum maiores natus neque sequi tempora! At deleniti modi recusandae ullam.</p>
                                    <span class="accordion-line"></span>
                                </li>

                                <li>
                                    <div class="faqs-questions-arrow">
                                        <span class="questions">Lorem ipsum dolor sit amet, consectetur adipisicing elit?</span>
                                        <i class='bx bx-chevron-down arrow'></i>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A architecto eaque incidunt iusto officia officiis repellat reprehenderit?
                                        Alias enim, eum maiores natus neque sequi tempora! At deleniti modi recusandae ullam.</p>
                                    <span class="accordion-line"></span>
                                </li>

                                <li>
                                    <div class="faqs-questions-arrow">
                                        <span class="questions">Lorem ipsum dolor sit amet, consectetur adipisicing elit?</span>
                                        <i class='bx bx-chevron-down arrow'></i>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A architecto eaque incidunt iusto officia officiis repellat reprehenderit?
                                        Alias enim, eum maiores natus neque sequi tempora! At deleniti modi recusandae ullam.</p>
                                    <span class="accordion-line"></span>
                                </li>

                                <li>
                                    <div class="faqs-questions-arrow">
                                        <span class="questions">Lorem ipsum dolor sit amet, consectetur adipisicing elit?</span>
                                        <i class='bx bx-chevron-down arrow'></i>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A architecto eaque incidunt iusto officia officiis repellat reprehenderit?
                                        Alias enim, eum maiores natus neque sequi tempora! At deleniti modi recusandae ullam.</p>
                                    <span class="accordion-line"></span>
                                </li>
                            </ul>
                        </div>
                </div>
        </section>


<!--===SUBSCRIBE SECTION----------------------------------------------------------------------------------------------->

        <section class="sub-sec">
            <div class="sub-sec-content">
                <h2>we are your preferred real estate agents</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Animi, architecto ea explicabo inventore placeat porro sequi veritatis. Ipsa nihil, qui?</p>
                            <a href="#" class="btn">get in-touch with us</a>
            </div>
        </section>

<!--===CONTACT SECTION------------------------------------------------------------------------------------------------->

        <section class="contact-sec">
            <div class="container">
                <div class="contact-infor">
                    <div>
                        <h2>contact infor</h2>
                            <ul class="info">
                                <li>
                                    <span><img src="Images/24_Hours.png" alt=""></span>
                                    <span>35761 limuru road <br>
                                    +254 Nairobi, KE <br>
                                    00100 </span>
                                </li>
                                <li>
                                    <span><img src="Images/24_Hours.png" alt=""></span>
                                    <span>+254 722 000 000</span>
                                </li>
                                <li>
                                    <span><img src="Images/24_Hours.png" alt=""></span>
                                    <span>aplacehome@gmail.com</span>
                                </li>
                            </ul>
                    </div>
                                    <ul class="sci">
                                            <li><a href=""><img src="Images/fb.png" alt="" class="fb"></a></li>
                                            <li><a href=""><img src="Images/tw.png" alt=""></a></li>
                                            <li><a href=""><img src="Images/li.png" alt=""></a></li>
                                            <li><a href=""><img src="Images/fb.png" alt=""></a></li>
                                            <li><a href=""><img src="Images/fb.png" alt=""></a></li>
                                    </ul>

                </div>
                            <div class="contact-form">
                                <h2>get in touch</h2>
                                <div class="form-box">
                                    <div class="input-box w50">
                                        <input type="text" name="" required>
                                            <span>first name</span>
                                    </div>
                                    <div class="input-box w50">
                                        <input type="text" name="" required>
                                        <span>last name</span>
                                    </div>
                                    <div class="input-box w50">
                                        <input type="text" name="" required>
                                        <span>email address</span>
                                    </div>
                                    <div class="input-box w50">
                                        <input type="text" name="" required>
                                        <span>mobile number</span>
                                    </div>
                                    <div class="input-box w100">
                                        <textarea name="" required></textarea>
                                        <span>type your message here</span>
                                    </div>
                                    <div class="input-box w100">
                                        <input type="submit" value="send" class="btn-1">
                                    </div>
                                </div>
                            </div>
            </div>
        </section>

<!--===FOOTER SECTION-------------------------------------------------------------------------------------------------->
    <footer>
        <section class="footer-sec">
            <div class="footer-sec-content">
                <img src="Images/Logo_3.png" alt="">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium deserunt dolor?</p>
                    <div class="footer-sec-icons">
                        <a href=""><i class='bx bxl-facebook'></i></a>
                        <a href=""><i class='bx bxl-twitter' ></i></a>
                        <a href=""><i class='bx bxl-youtube' ></i></a>
                        <a href=""><i class='bx bxl-instagram'></i></a>
                        <a href=""><i class='bx bxl-linkedin'></i></a>
                    </div>
            </div>

            <div class="footer-sec-content">
                <h4>quick links</h4>
                    <li><a href="">home</a></li>
                    <li><a href="">about</a></li>
                    <li><a href="">buy</a></li>
                    <li><a href="">sell</a></li>
                    <li><a href="">rent</a></li>
                    <li><a href="">FAQ's</a></li>
                    <li><a href="">contact</a></li>
            </div>

            <div class="footer-sec-content">
                <h4>projects</h4>
                    <li><a href="">houses</a></li>
                    <li><a href="">flats</a></li>
                    <li><a href="">rooms</a></li>
                    <li><a href="">apartments</a></li>
            </div>

            <div class="footer-sec-content">
                <h4>projects</h4>
                    <li><a href="">houses</a></li>
                    <li><a href="">flats</a></li>
                    <li><a href="">rooms</a></li>
                    <li><a href="">apartments</a></li>
            </div>

            <div class="footer-sec-content">
                <h4>projects</h4>
                    <li><a href="">houses</a></li>
                    <li><a href="">flats</a></li>
                    <li><a href="">rooms</a></li>
                    <li><a href="">apartments</a></li>
            </div>
        </section>
        <div class="copyright-text">
            <p> &#169 Copyright 2023 . Charles Muia - Passionate ICT & Digital Professional. <br> All rights reserved. </p>
        </div>
    </footer>


<!--===JS(FEATURE-SECTION)--------------------------------------------------------------------------------------------->

        <script type="text/javascript">
            const header = document.querySelector("header");
            window.addEventListener("scroll", function (){
                header.classList.toggle("sticky", window.scrollY > 80)
            });
        </script>

<!--===JS(ACCORDION-SECTION)------------------------------------------------------------------------------------------->

        <script>
            let li = document.querySelectorAll(".faqs-text li");
            for (var i = 0; i < li.length; i++) {
                li[i].addEventListener("click", (e)=> {
                    let clickedLi;
                    if (e.target.classList.contains("faqs-questions-arrow")) {
                        clickedLi = e.target.parentElement;
                    } else {
                        clickedLi = e.target.parentElement.parentElement;
                    }
                    clickedLi.classList.toggle("showAnswer");

                });
            }

        </script>

<!--===JS(TOGGLE-MENU-SECTION)----------------------------------------------------------------------------------------->

        <script>
            let menu = document.querySelector('#menu-icon');
            let navbar = document.querySelector('.header-nav');

            menu.onclick = () => {
                menu.classList.toggle('bx-x');
                navbar.classList.toggle('open')
            };

            window.onscroll = () => {
                menu.classList.remove('bx-x');
                navbar.classList.remove('open')
            };

        </script>

</body>
</html>
