<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cool Responsive Portfolio Website Design</title>

    <!-- swiper css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <!-- box icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- custom css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- header design -->
    <header class="header">
        <a href="#" class="logo">Portfolio.</a>

        <nav class="navbar">
            <a href="/" class="active">Home</a>
            <a href="#about">About</a>
            <a href="#services">Services</a>
            <a href="#portfolio">Portfolio</a>
            <a href="#contact">Contact</a>
        </nav>

        <div class="bx bx-moon" id="darkMode-icon"></div>

        <div class="bx bx-menu" id="menu-icon"></div>
    </header>

    <!-- services section design -->
    <section class="services" id="services">
        <h2 class="heading">My <span>Services</span></h2>

        <div class="services-container">
            <div class="services-box">
                <i class='bx bx-code-alt'></i>
                <h3>Web Development</h3>
                <p>saya telah menguasai html, css, js, dan beberapa framework seperti flask dan laravel. dan juga saya punya beberapa projek yang siap untuk di tampilkan
                    anda bisa melihatnya di github saya.
                </p>
                <a href="#" class="btn">Read More</a>
            </div>
            <div class="services-box">
                <i class='bx bxs-paint'></i>
                <h3>Design web</h3>
                <p>untuk design, saya menguasai figma dan adobe ilustrator, anda bisa melihat projek saya di github saya.</p>
                <a href="#" class="btn">Read More</a>
            </div>
            <div class="services-box">
                <i class='bx bx-bar-chart-alt'></i>
                <h3>Digital Marketing</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Excepturi itaque similique, architecto
                    eaque ut quas delectus pariatur nesciunt in eligendi mollitia dicta.</p>
                <a href="#" class="btn">Read More</a>
            </div>
        </div>
    </section>

    <!-- portfolio section design -->
    <section class="portfolio" id="portfolio">
        <h2 class="heading">Latest <span>Project</span></h2>

        <div class="portfolio-container">
            <div class="portfolio-box">
                <img src="images/portfolio1.jpg" alt="">

                <div class="portfolio-layer">
                    <h4>Web Design</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, ipsam est.</p>
                    <a href="#"><i class='bx bx-link-external'></i></a>
                </div>
            </div>
            <div class="portfolio-box">
                <img src="images/portfolio2.jpg" alt="">

                <div class="portfolio-layer">
                    <h4>Web Design</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, ipsam est.</p>
                    <a href="#"><i class='bx bx-link-external'></i></a>
                </div>
            </div>
            <div class="portfolio-box">
                <img src="images/portfolio3.jpg" alt="">

                <div class="portfolio-layer">
                    <h4>Web Design</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, ipsam est.</p>
                    <a href="#"><i class='bx bx-link-external'></i></a>
                </div>
            </div>
            <div class="portfolio-box">
                <img src="images/portfolio4.jpg" alt="">

                <div class="portfolio-layer">
                    <h4>Web Design</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, ipsam est.</p>
                    <a href="#"><i class='bx bx-link-external'></i></a>
                </div>
            </div>
            <div class="portfolio-box">
                <img src="images/portfolio5.jpg" alt="">

                <div class="portfolio-layer">
                    <h4>Web Design</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, ipsam est.</p>
                    <a href="#"><i class='bx bx-link-external'></i></a>
                </div>
            </div>
            <div class="portfolio-box">
                <img src="images/portfolio6.jpg" alt="">

                <div class="portfolio-layer">
                    <h4>Web Design</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, ipsam est.</p>
                    <a href="#"><i class='bx bx-link-external'></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- testimonial design -->
    <div class="testimonial-container">
        <h2 class="heading">Valuable <span>Testimonial</span></h2>

        <div class="testimonial-wrapper">
            <div class="testimonial-box mySwiper">
                <div class="testimonial-content swiper-wrapper">
                    <div class="testimonial-slide swiper-slide">
                        <img src="images/testimonial1.jpg" alt="">
                        <h3>Jackson Levi</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem dignissimos aliquid
                            iure delectus corrupti impedit, beatae aperiam ad iusto nostrum possimus cum pariatur harum
                            assumenda suscipit a, qui, tempora maxime nulla facere quo ipsum tempore. Atque libero
                            provident ad aut officia pariatur voluptate quaerat delectus nesciunt, sequi eligendi
                            aperiam fugit unde nihil, iste similique illum. Dignissimos enim officia consequuntur
                            dolores.</p>
                    </div>
                    <div class="testimonial-slide swiper-slide">
                        <img src="images/testimonial2.jpg" alt="">
                        <h3>Flora Ocean</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem dignissimos aliquid
                            iure delectus corrupti impedit, beatae aperiam ad iusto nostrum possimus cum pariatur harum
                            assumenda suscipit a, qui, tempora maxime nulla facere quo ipsum tempore. Atque libero
                            provident ad aut officia pariatur voluptate quaerat delectus nesciunt, sequi eligendi
                            aperiam fugit unde nihil, iste similique illum. Dignissimos enim officia consequuntur
                            dolores.</p>
                    </div>
                    <div class="testimonial-slide swiper-slide">
                        <img src="images/testimonial3.jpg" alt="">
                        <h3>Julian Grayson</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem dignissimos aliquid
                            iure delectus corrupti impedit, beatae aperiam ad iusto nostrum possimus cum pariatur harum
                            assumenda suscipit a, qui, tempora maxime nulla facere quo ipsum tempore. Atque libero
                            provident ad aut officia pariatur voluptate quaerat delectus nesciunt, sequi eligendi
                            aperiam fugit unde nihil, iste similique illum. Dignissimos enim officia consequuntur
                            dolores.</p>
                    </div>
                </div>

                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>

    <!-- contact section design -->
    <section class="contact" id="contact">
        <h2 class="heading">Contact <span>Me!</span></h2>

        <form action="#">
            <div class="input-box">
                <input type="text" placeholder="Full Name">
                <input type="email" placeholder="Email Address">
            </div>
            <div class="input-box">
                <input type="number" placeholder="Mobile Number">
                <input type="text" placeholder="Email Subject">
            </div>
            <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
            <input type="submit" value="Send Message" class="btn">
        </form>
    </section>

    <!-- footer design -->
    <footer class="footer">
        <div class="footer-text">
            <p>Copyright &copy; 2023 | All Rights Reserved.</p>
        </div>

        <div class="footer-iconTop">
            <a href="#home"><i class='bx bx-up-arrow-alt'></i></a>
        </div>
    </footer>


    <!-- scroll reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- swiper js -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- custom js -->
    <script src="js/script.js"></script>
</body>

</html>
