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
    <h1 style="font-family:cambay; text-align:center;">Services we Offer</h1>
  
        <div class="containers">
            <div class="card">
                <img src="solution.jpg">
                    <div class="contenido">
                        <h4>Software solution</h4>
                         <p>1. Project and Management </p>
                         <p style="margin-left:29px">2. Testing and Quality assurance </p>
                         <p>3. Maintenance and support </p>
                        
                    </div>
            </div>

            <div class="card">
                <img src="aup.jpg">
                    <div class="contenido">
                       <h4>3-D Animation</h4>
                        <p>1. 2-D Animation Services</p>
                        <p>2. 3D module Animation </p>
                        <p style="margin-left:30px">3. Adobe photoshop and video</p>
                      
                    </div>
            </div>

            <div class="card">
                <img src="dip.jpg">
                    <div class="contenido">
                        <h4>Technologies services</h4>
                        
                        <p style="margin-right:19px">1. ERP monal system</p>
                        <p>2. Partnership of MOLHR</p>
                        <p style="margin-left:20px">3. Diploma in Info technology</p>
                        
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
<!---------------------------------announcement ------>
    <div class="annout">
    <img  src="honk.webp" alt="" style=" height: 200px;
      width: 230px;">Latest Announcement
    </div>
    <br>
<p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <span style="font-weight:bold;">Call for register for DevOps</span> &nbsp;&nbsp;&nbsp;&nbsp;
    <a href="#">Read more </a><i class='fas fa-arrow-right'></i></p>
<br>

<!-------------------mini pic -------------------->
<div class="wrapper">
 
    <div class="cart">
        <img src="logojob.jpg">
            <div class="info">
                <h1>Vacancy </h1>
                <p>For Diploma trainer</p>
                <a href="#" class="btn">Read More</a>
           </div>
    </div>

    <div class="cart">
        <img src="eccd.png">
            <div class="info">
                <h1>Register</h1>
                <p> For Eccd</p>
                <a href="#" class="btn">Read More</a>
           </div>
    </div>

 
    <div class="cart">
        <img src="diploma.jpg">
            <div class="info">
                <h1>Register</h1>
                <p>For Diploma trainer(second batch)</p>
                <a href="#" class="btn">Read More</a>
           </div>
    </div>

</div>

<!-- ------------------------------------------------------pic partnership----------------------------- -->
<br>
<br>
<br>
<br>
    <div class="ship">
        <div class="pic">
            <img src="red.png" style="height:150px;
            width:140px">
        </div>

        <div class="pic">
            <img src="jaablogo.png"style="height:150px;
            width:140px">
        </div>
        
        <div class="pic">
            <img src="download.png"style="height:150px;
            width:140px">
        </div>
    </div>
<br>
<br>
<br>
<br>
<?php 
            include('footer.php')    
        ?>
</body>
</html>


