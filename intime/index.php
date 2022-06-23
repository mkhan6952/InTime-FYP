<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file cdn link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <!-- header section starts  -->

    <header class="header">

        <a href="#" class="logo"></i> InTime </a>

        <form action="" class="search-form">
            <input type="search" name="" placeholder="Search Here..." id="searchBox">
            <label for="searchBox" class="fas fa-search"></label>
        </form>

        <div class="icons">
            <div class="fas fa-search" id="search-btn"></div>
            <div class="fas fa-moon" id="theme-btn"></div>
            <div class="fas fa-user" id="login-btn"></div>
            <div class="fas fa-bars" id="menu-btn"></div>
        </div>

        <nav class="navbar">
            
            <a href="#services">About Us</a>
            <a href="#pricing">packages</a>
            <a href="#review">review</a>
            <!-- <a href="#contact">contact</a> -->
        </nav>

        <form action="" class="login-form">
            <a href="Requester/RequesterLogin.php" class="btn">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             Login
            </a>
            <a href="userRegistration.php" class="btn">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Register
            </a>

        </form>

    </header>

    <!-- header section ends -->

    <!-- home/hero section starts  -->

    <section class="home" id="home">

        <div class="image" data-aos="fade-down">
            <img src="images/home-img.svg" alt="">
        </div>

        <div class="content" data-aos="fade-up">
            <h3>Get Travel Insurance</h3>
            <p>We know that buying tarvel insurance is a pretty boring affair.And that's why we've made it as fast and as easy as possible for you get it covered</p>
            <a href="./UserRegistration.php" class="btn">Get Started</a>
        </div>

    </section>

    <!-- home section ends -->

    <!-- About section starts  -->

    <section class="home" id="services">

        <div class="image" data-aos="fade-down" style="text-align: center;">
            <img src="images/ourApp2.png" alt="" width="220px" height="410px">
        </div>

        <div class="content" data-aos="fade-up">
            <h3>About Us</h3>
            <p style="text-align:justify">Our goal is to provide travel insurance that only covers the times when the consumer is actually travelling.It will be time-bound insurance, with purchasers being able to purchase hourly coverage.There will be minimal payments affordable for
                our middle and lower class as well.It will make it easier for our middle class to have access to better health facilities in case of accidents.</p>
            <a href="https://apps.microsoft.com/store/apps" class="btn">Download Our App</a>
        </div>

    </section>

    <!-- About section ends -->





    <!-- pricing section starts  -->

    <section class="pricing" id="pricing">

        <h1 class="heading"> our <span>packages</span> </h1>

        <div class="box-container">

            <div class="box" data-aos="zoom-in-up">
                <h3> basic plan </h3>
                <div class="price">
                    <span>Rs</span>
                    <span class="amount">7</span>
                    <span>/hour</span>
                </div>
                <ul>
                    <li>Hourly Basis</li>
                    <li>Time Bound</li>
                    <li>safty guide</li>
                    <li>Affordable</li>
                    <li>Customer Support</li>
                </ul>
                <a href="./Requester/RequesterLogin.php" class="btn">choose plan</a>
            </div>

            <div class="box" data-aos="zoom-in-up">
                <h3> standard plan </h3>
                <div class="price">
                    <span>rs</span>
                    <span class="amount">50</span>
                    <span>/day</span>
                </div>
                <ul>
                    <li>1 days</li>
                    <li>Specific Time</li>
                    <li>safty guide</li>
                    <li>Affordable</li>
                    <li>Customer Support</li>
                </ul>
                <a href="./Requester/RequesterLogin.php" class="btn">choose plan</a>
            </div>

            <div class="box" data-aos="zoom-in-up">
                <h3> premium plan </h3>
                <div class="price">
                    <span>rs</span>
                    <span class="amount">200</span>
                    <span>/week</span>
                </div>
                <ul>
                    <li>7 days</li>
                    <li>Specific time</li>
                    <li>safty guide</li>
                    <li>Affordable</li>
                    <li>Customer Support</li>
                </ul>
                <a href="./Requester/RequesterLogin.php" class="btn">choose plan</a>
            </div>

        </div>

    </section>

    <!-- pricing section ends -->

    <!-- review section starts  -->

    <section class="review" id="review">

        <h1 class="heading"> Our <span>Team</span> </h1>

        <div class="swiper-container review-slider" data-aos="zoom-in">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <img src="images/omaid.jpg" alt="">
                    <h3>Omaid Iqbal</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur sunt eligendi est, dicta maiores amet nihil perferendis, incidunt maxime aspernatur exercitationem laboriosam odio dolores magnam ratione atque, quasi odit. Hic!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <img src="images/ik2.jpg" alt="">
                    <h3>Imran Khan</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur sunt eligendi est, dicta maiores amet nihil perferendis, incidunt maxime aspernatur exercitationem laboriosam odio dolores magnam ratione atque, quasi odit. Hic!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <img src="images/ik1.jpg" alt="">
                    <h3>Hamad Raza</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur sunt eligendi est, dicta maiores amet nihil perferendis, incidunt maxime aspernatur exercitationem laboriosam odio dolores magnam ratione atque, quasi odit. Hic!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <img src="images/haary.jpg" alt="">
                    <h3>Maher Harira</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur sunt eligendi est, dicta maiores amet nihil perferendis, incidunt maxime aspernatur exercitationem laboriosam odio dolores magnam ratione atque, quasi odit. Hic!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

            </div>

            <div class="swiper-pagination"></div>

        </div>

    </section>

    <!-- review section ends -->


    <!-- footer section starts  -->

    <section class="footer">

        <div class="box-container">

            <div class="box" data-aos="fade-up">
                <h3>our packages</h3>
                <a href="#"> <i class="fas fa-chevron-right"></i> Hourly </a>
                <a href="#"> <i class="fas fa-chevron-right"></i> Daily </a>
                <a href="#"> <i class="fas fa-chevron-right"></i> Weekly</a>
            </div>

            <div class="box" data-aos="fade-up">
                <h3>quick links</h3>
                <a href="#"> <i class="fas fa-chevron-right"></i> About Us </a>
                <a href="#"> <i class="fas fa-chevron-right"></i> Packages </a>
                <a href="#"> <i class="fas fa-chevron-right"></i> review </a>
                <a href="#"> <i class="fas fa-chevron-right"></i> contact </a>
            </div>

            <div class="box" data-aos="fade-up">
                <h3>contact info</h3>
                <a href="Tel:123456789"> <i class="fas fa-phone"></i> +0544-557248 </a>
                <a href="Tel:123456789"> <i class="fas fa-phone"></i> +0544-554535 </a>
                <a href="#"> <i class="fas fa-paper-plane"></i></i> Intime-insurance@gmail.com </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> Pakistan, Rawalpindi - Arid </a>
            </div>

            <div class="box" data-aos="fade-up">
                <h3>follow us</h3>
                <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
                <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
                <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            </div>

        </div>

        <div class="credit"> <span>InTime(Travel Insurance)</span> | all rights reserved&copy;2022|
            <a style="font-weight: bolder;color: var(--orange);" href="Admin/login.php">Admin Login</a> </div>

    </section>

    <!-- footer section ends -->























    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

    <script>
        AOS.init({
            duration: 800,
            delay: 400
        });
    </script>

</body>

</html>