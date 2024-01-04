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
            <a href="/" class="{{ ($title === "home") ? 'active' : '' }}">Home</a>
            <a href="/about" class="{{ ($title === "about") ? 'active' : '' }}">About</a>
            <a href="/services" class="{{ ($title === "services") ? 'active' : '' }}">Services</a>
            <a href="/portfolio" class="{{ ($title === "portfolio") ? 'active' : '' }}">Portfolio</a>
            <a href="/contact" class="{{ ($title === "contact") ? 'active' : '' }}">Contact</a>
        </nav>

        <div class="bx bx-moon" id="darkMode-icon"></div>

        <div class="bx bx-menu" id="menu-icon"></div>
    </header>

        @yield('container')

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
