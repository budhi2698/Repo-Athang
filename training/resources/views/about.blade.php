<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Athang Learning Institute/home</title>

        <!---------------------------------------------------IMG=URL---------------------------------------------------->
        <link rel="icon" type="image/jpg" href="logo_url.jpg" width="512" height="512" />
        <link rel="icon" type="image/jpg" href="logo_url.jpg" width="512" height="512" />

        <!---------------------------------------------------FONTS------------------------------------------------------>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-----------------------------------------------PUBLIC-CSS----------------------------------------------------->
        <link rel="stylesheet" href="style.css">

        <!---------------------------------------------FONTAWSOME-LINK-------------------------------------------------->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

        <!-----------------------------------------------BOOTRAPS-LINK------------------------------------------------->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
          integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
        </script>
    </head>
    <body class="antialiased">
        <!------------------------------------------------------NAV-BAR------------------------------------------------->
       <?php include ("nav.php")?>
        <br>
       <!--------------------------------------------------------TEAM--------------------------------------------------->
     <?php include ("content/about/about.html")?>
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
                                heads Training Academy and Athang Adventures, Director of Athang Pvt Ltd"
                            </i></p>
                            <h4 style="text-align:center">choki@athang.com</h4>
                        </div>
                        <div class="team-social">
                      
                            <a href="https://athang.com/public/w" class="social-fb"> <i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.linkedin.com/in/tshering-choki-a6b47741/" class="social-li"> <i class="fab fa-linkedin-in"></i></a>
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
                          
                            <a href="https://athang.com/public/w" class="social-fb"> <i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.linkedin.com/in/sonam-chophel-560303b0/?originalSubdomain=bt" class="social-li"> <i class="fab fa-linkedin-in"></i></a>  
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
                            <h3>Animation Manager</h3>
                            <p style="text-align:center"><i>"3D Animator, 2D Animator, Photographer, Artist and Designer..."</i></p>
                            <h4 style="text-align:center">choning@athang.com</h4>
                        </div>
                        <div class="team-social">
                           
                            <a href="#" class="social-fb"> <i class="fab fa-facebook-f"></i></a>
                            <a href=" https://www.linkedin.com/in/choning-lhamo-552004182/?originalSubdomain=bt" class="social-li"> <i class="fab fa-linkedin-in"></i></a>  
                           
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
                            <a href="#" class="social-fb"> <i class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-----------------------------------------------------ROUND-ANIMATION------------------------------------------>
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
        <!------------------------------------------------------FOOTER------------------------------------------------->
        <?php 
            include('footer.php')     
        ?>
    </body>
</html>