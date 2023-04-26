<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

       <!-- FontsAwosome link -->
        <link rel="stylesheet" href="font-awesome/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
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
        <?php 
            include('nav.php') 
        ?>

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
               
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
       </div>
    </div>
       <br>   
       <br> 
    <!---------------------------------------------------CARD-------------------------------------------------------->
    <h1 style="font-family:fantasy; text-align:center;">Services we Offer</h1><br>
  
        <div class="containers">
            <div class="card">
                <img src="ap.jpg">
                    <div class="contenido">
                        <h4>Software solution</h4>
                         <p>1.project and Management<br>
                         2.Testing and Quality assurance<br>
                         3.Maintenance and support
                         </p>
                    </div>
            </div>

            <div class="card">
                <img src="erp.jpg">
                    <div class="contenido">
                       <h4>3-D Animation</h4>
                        <p>1.2-D Training services<br>
                        2.3D module<br>
                        3.Photoshop and adobe premier
                        </p>
                    </div>
            </div>

            <div class="card">
                <img src="js.jpg">
                    <div class="contenido">
                        <h4>Technologies services</h4>
                        <p>1.Diploma in Info technology<br>
                        2.ERP system<br>
                        3.Partnership of molhr
                        </p>
                    </div>
            </div>
        </div>
    <br>

<!---------------------------------details ---------------->
    <div class="box">
        <h2 class="bols">Since 2005</h2>
        <p style="text-align:center; color:#fff;padding:30px;">Based in Thimphu, 
        Bhutan with aim of changing demand of customers in field of ICT</p>
    </div>
    <br>
    <br>



<?php 
            include('footer.php')    
        ?>
</body>
</html>


