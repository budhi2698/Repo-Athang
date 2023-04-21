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
            <img src="/public/images/image.png" alt="Logo">
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
        </nav><!--nav start-->
    </header>
    
    <section id="hero">
        <h1>Welcome to our Training Academy</h1>
        <p>We offer a wide range of courses to help you achieve your career goals.</p>
        <a href="#" class="cta">Enroll Now</a>
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