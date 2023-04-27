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
            <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
            integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    </head>
    <body class="antialiased">

        <?php 
            include('nav.php')
            
        ?>

    <br>

       <div class="boxc">
       <img src="athangb.jpg" class="athang" >
      

            <p style="margin-left:70px;background-color: #444;color:white;border-radius:25px;padding:45px">Athang is a pioneering software development and training 
                academy firm greatly driven by the <br>information technology.
                Athang strives for the excellence in offering our services, 
                be it a training <br>programme or developing your website or 
                producing an animation work that our audience <br>would love to 
                watch or restoring your internet breakdown and many more.<br><br>
                As a company, Athang believes in the team work and democratic 
                working culture to bring the<br> best of  every employees at 
                personal as well as professional level. 
                As credential, Athang has<br> been with  international organizations in 
                IT/software Services, professional training, and<br> 3D animations.<br><br>
                Athang strives for the excellence in offering our services, 
                be it a training programme or <br>developing your website or 
                producing an animation work that our audience<br> would love to 
                watch or restoring your internet breakdown and many more.<br>
            </p>
        </div>
<br>


<!--------------------------------------------TEAM--------------------------------------------------->
<section class="about_section" id="About">
        <div class="about_img">
            <img src="ceo.jpg" alt="">
        </div>
        <div class="about_details">
            <h1>About Me</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae ipsam voluptas perspiciatis voluptatum magnam fugit deleniti, dolorem rerum excepturi quasi! <br><br>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore consectetur quidem animi at debitis.</p>
            <div class="btns">
                <a href="#" class="btn btn1">HIRE ME</a>
                <a href="#" class="btn btn2">DOWNLOAD CV</a>
            </div>
        </div>
    </section>





<!-----------------------------------------------------round animation--------------------------------------------------------------->
<div class="squarre">
            <span></span>
            <span></span>
            <span></span>
            <div class="contents">
                <h3 style="text-align:center">VISION:</h3>
                <p>To contribute in lifting the services level for the professional trainings,animations and the growth of private sector of Bhutan by 
                providing high quality and innovative enabled 
                solutions and services.</p>
            </div>
        </div>  

        <div class="squarres">
            <span></span>
            <span></span>
            <span></span>
            <div class="contentss">
                <h3 style="text-align:center">MISSION:</h3>
                <p>To contribute in lifting the services level for the professional trainings,animations and the growth of private sector of Bhutan by 
                providing high quality and innovative enabled 
                solutions and services.</p>
            </div>
        </div>  











<!---------------------------------------------FOOTER-------------------------------------------->

    <?php 
        include('footer.php')     
    ?>

</body>
</html>