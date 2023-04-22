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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <!-- <script src="script.js"></script> -->

    </head>
    <body>
    <header><!--nav start-->
        <nav> 
            <img src="logo.jpg" alt="Logo">
            <ul>  
                <li><a href="/">Home</a></li>
                <li><a href="announce">Announcement</a></li>
                <li>
                    <a href="/services">services</a>
                    <ul class="dropdown">
                    <li><a href="register">Registration</a></li>
                    </ul>
                </li>
                <li><a href="blog">Blog</a></li>
                <li><a href="contact">Contact Us</a></li>
            </ul>
           
        </nav>
    </header>
    <!--nav end-->

    <!----------------------------------------------image carousel-------------------------------------------------------->
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="1000">
      <img src="ap.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="erp.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="js.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    
<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>

    <footer>
        <!--footer start-->
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
    </footer>
    <!--footer end-->
</body>
</html>


