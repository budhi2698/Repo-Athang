<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="style.css">

    </head>
    <body class="antialiased">
    <header>
        <nav><!--nav start-->
        <img src="logo.jpg">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="announce">Announcement</a></li>
                <li>
                    <a href="#">Courses</a>
                    <ul class="dropdown">
                    <li><a href="register">Registration</a></li>
                    </ul>
                </li>
                <li><a href="blog">Blog</a></li>
                <li><a href="contact">Contact Us</a></li>
            </ul>
        </nav>
    </header><!--nav end-->

    <section id="courses">
        <h2>Our Courses</h2>
        <ul>
            <li>Web Development</li>
            <li>Graphic Design</li>
            <li>Networking</li>
            <li>Project Management</li>
            <li>ECCD</li>
        </ul>
    </section>

    <footer><!--footer start-->
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3>About Us</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse commodo, sapien non semper facilisis, leo arcu aliquam velit, a vestibulum magna tellus in justo. </p>
                </div>
                <div class="col-md-6">
                    <h3>Contact Us</h3>
                    <ul>
                    <li><i class="fa fa-map-marker"></i> Bhutan,Thimphu,Babena</li>
                    <li><i class="fa fa-phone"></i> (123) 456-7890</li>
                    <li><i class="fa fa-envelope"></i> athang@gmail.com</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="bottom-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                     <p>
                        <hr>
                        &copy; 2023 Athang Training Academy. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer><!--footer end-->
</body>
</html>

</body>
</html>