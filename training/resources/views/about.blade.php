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
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
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

      

<!--------------------------------------------TEAM--------------------------------------------------->
<section class="about_section" id="About">
        <div class="about_img">
            <img src="ceo.jpg" alt="">
        </div>
        <div class="about_details">
            <h1>About Me</h1>
            <p>Founder & Chief Executive Officer
            "We would like to become our customers friendly advisor on ICT matters, 
            so that we can propose suitable ICT-enabled solutions incorporating best practices and reliable technical skills."<br>
            Membership in Professional Societies:<br>
            1. Executive member of IT Association of Bhutan<br>
            2. Member of Bhutan Chambers of Commerce & Industries<br>
            3. Member of SAARC Chambers of Commerce & Industries<br>
            4. Member of SAARC CCI Young Entrepreneurs Forum<br>
            5. Executive member JICA Alumni Association of Bhutan<br>
            6. Executive member of Punakha High School Alumni
            Education and Certification<br>
            1. Systems Engineering, University of Colombo, SriLanka (2002)<br>
            2. System Analysis and Designs, Okinawa International Center, Japan (2003)<br>
            3. Network Security Specialization, Pune, India (2004)<br>
            Email : karma@athang.com
            Phone : +975 17110989</p>
            <div class="team-social">
            <a href="https://athang.com/public/w" class="social-tw"> <i class="fab fa-twitter"></i></a>
            <a href="https://athang.com/public/w" class="social-fb"> <i class="fab fa-facebook-f"  style="margin-left:20px"></i></a>
            <a href="https://athang.com/public/w" class="social-li"> <i class="fab fa-linkedin-in"  style="margin-left:20px"></i></a>
        </div>
        </div>
    </section>

    <div class="abt">
        <div class="section-title">
            <h1>Our Team Page</h1>
        </div>
    <div class="row">
<div class="column">
    <div class="team">
        <div class="team-img">
            <img src="tshering.jpg" alt="Team Image">
        </div>
        <div class="team-content">
            <h2>Tshering choki</h2>
            <h3>Director</h3>
            <p><i>Expert in Community-based Sustainable Tourism and Ecotourism, 
                heads Training Academy and Athang Adventures, Director of Athang Pvt Ltd"</i></p>
            <h4 style="text-align:center">choki@athang.com</h4>
        </div>
        <div class="team-social">
        <a href="https://athang.com/public/w" class="social-tw"> <i class="fab fa-twitter"></i></a>
            <a href="https://athang.com/public/w" class="social-fb"> <i class="fab fa-facebook-f"></i></a>
            <a href="https://athang.com/public/w" class="social-li"> <i class="fab fa-linkedin-in"></i></a>
        </div>
    </div>
</div>

<div class="column">
    <div class="team">
        <div class="team-img">
            <img src="sonam.png" alt="Team Image">
        </div>
        <div class="team-content">
            <h2>Sonam Chophel</h2>
            <h3>Chief Technology Officer</h3>
            <p style="text-align:center"><i>Software Analyst, Software Designer, 
                Programmer, Database Administrator, Data Analyst"</i></p>
            <h4 style="text-align:center">chophel@athang.com</h4>
        </div>
        <div class="team-social">
            <a href="https://athang.com/public/w" class="social-tw"> <i class="fab fa-twitter"></i></a>
            <a href="https://athang.com/public/w" class="social-fb"> <i class="fab fa-facebook-f"></i></a>
            <a href="https://athang.com/public/w" class="social-li"> <i class="fab fa-linkedin-in"></i></a>
            
        </div>
    </div>
</div>

<div class="column">
    <div class="team">
        <div class="team-img">
            <img src="cho.jpg" alt="Team Image">
        </div>
        <div class="team-content">
            <h2>Choning Lhamo</h2>
            <h3>AAnimation Manager</h3>
            <p style="text-align:center"><i>"3D Animator, 2D Animator, Photographer, Artist and Designer..."</i></p>
            <h4 style="text-align:center">choning@athang.com</h4>
        </div>
        <div class="team-social">
            <a href="#" class="social-tw"> <i class="fab fa-twitter"></i></a>
            <a href="#" class="social-fb"> <i class="fab fa-facebook-f"></i></a>
           
        </div>
    </div>
</div>

<div class="column">
    <div class="team">
        <div class="team-img">
            <img src="tenzin.png" alt="Team Image">
        </div>
        <div class="team-content">
            <h2>Tenzin Dorji</h2>
            <h3>ADM</h3>
            <p style="text-align:center"><i>Accountant, Hardware Engineer, Network Administrator...</i></p>
            <h4 style="text-align:center">tenzin@athang.com</h4>
        </div>
        <div class="team-social">
            <a href="#" class="social-tw"> <i class="fab fa-twitter"></i></a>
            <a href="#" class="social-fb"> <i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social-li"> <i class="fab fa-linkedin-in"></i></a>
            
        </div>
    </div>
</div>

</div>

</div>
<!-----------------------------------------------------round animation--------------------------------------------------------------->
<div class="circle">
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
</div>
<!---------------------------------------------FOOTER-------------------------------------------->

    <?php 
        include('footer.php')     
    ?>

</body>
</html>