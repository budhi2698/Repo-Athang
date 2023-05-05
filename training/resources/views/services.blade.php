<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Athang Learning Institute/home</title>
        
        <!-------------------------------------------------URL-IMG----------------------------------------------------->
        <link rel="icon" type="image/jpg" href="logo_url.jpg" width="512" height="512" />
        <link rel="icon" type="image/jpg" href="logo_url.jpg" width="512" height="512" />
       
        <!-----------------------------------------------PUBLIC-CSS----------------------------------------------------->
        <link rel="stylesheet" href="style.css">
       
        <!------------------------------------------------FONTAWSOME-LINK------------------------------------------------>
        <link rel="stylesheet" href="font-awesome/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
        
        <!-----------------------------------------------BOOTRAPS-LINK------------------------------------------------->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <title>Service</title>
    </head>
    <body>
        <!---------------------------------------------------NAV-BAR----------------------------------------------------->
        <?php 
            include('nav.php') 
        ?>
        <!---------------------------------------------------SERVICES-SECTION-------------------------------------------->
        <section id=servics>
            <h2>Our Services</h2>
            <p>Athang plays a vital lead role in the ever changing ICT scenario in Bhutan. With our team of professional expertise 
                abreast and adept with the ICT trend, Athang offers its software development expertise in designing, developing and 
                re-engineering the ICT requirements of our clients. Over a decade, our software engineers have executed several 
                interesting projects starting from a simple website to many complex systems. And the recent achievement would be 
                the development and successful rollout of an Enterprise Resource Planning system.
            </p>
            <!-----------------------------------------------SERVICE-DETAILS-FLEX--------------------------------------->
            <div class="serviceprovider"> 
                <div class="cols">
                    <h1> Academic Programs</h1>
                    <div class="icons">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>
                    <p>Learning institutes typically offer various 
                        academic programs such as undergraduate and graduate degrees, 
                        certificates, diplomas, and other specialized courses in fields like Information Technology, engineering, ECCD, and more.</p>
                </div>
                <div class="cols">
                    <h1>Professional Development</h1>
                    <div class="icons">
                        <i class="fa-solid fa-user-tie"></i>
                    </div>
                    <p>Learning institutes also provide training and development opportunities for professionals who want to enhance their skills and knowledge
                         in specific areas like leadership, project management, data analysis, communication, and more.</p>
                </div>
                <div class="cols">
                    <h1>Research Facilities</h1>
                    <div class="icons">
                    <i class="fa-solid fa-globe"></i>
                    </div>
                    <p>Many learning institutes have research facilities 
                    such as laboratories, observatories, and libraries that support 
                    cutting-edge research in fields like software development, engineering, and etc.</p>
                </div>
            </div>
        </section>
     
        <!----------------------------------------------------COURSE-DETAILS-------------------------------------------->
        <section id="courses">                                  
            <h2>Courses</h2>
        </section>    
        <div class="servicecontainer">
            <div class="colum">
                 <h1>Web Development</h1>
                 <img src="webdev.jpg" alt="Web development" style="border-radius:10px">
                 <p>Athang Training Academy is pleased to announce the 2nd batch training on ICT and Online Freelancing Program for 20 slots for a duration of 6 months supported by</p>
            </div>
            <div class="colum">
                 <h1>Graphic Design</h1>
                 <img src="graphic.jpg" alt="Graphic design" style="border-radius:10px">
                 <p>Athang Training Academy is pleased to announce the 2nd batch training on ICT and Online Freelancing Program for 20 slots for a duration of 6 months supported by</p>
            </div>
            <div class="colum">
                 <h1>Networking</h1>
                 <img src="network.jpg" alt="Networking"; style="border-radius:10px">
                 <p>Athang Training Academy is pleased to announce the 2nd batch training on ICT and Online Freelancing Program for 20 slots for a duration of 6 months supported by</p>
            </div>
            <div class="colum">
                 <h1>Project Management</h1>
                 <img src="project.png" alt="Image 1" style="border-radius:10px">
                 <p>Athang Training Academy is pleased to announce the 2nd batch training on ICT and Online Freelancing Program for 20 slots for a duration of 6 months supported by</p>
            </div>
            <div class="colum">
                 <h1>ECCD</h1>
                 <img src="child.jpg" alt="Eccd" style="border-radius:10px">
                 <p>Athang Training Academy is pleased to announce the 2nd batch training on ICT and Online Freelancing Program for 20 slots for a duration of 6 months supported by</p>
            </div>
            <div class="colum">
                 <h1>General Training</h1>
                 <img src="gene.jpg" alt="Image 1" style="border-radius:10px">
                 <p>Athang Training Academy is pleased to announce the 2nd batch training on ICT and Online Freelancing Program for 20 slots for a duration of 6 months supported by</p>
            </div>
        </div>
        <!-------------------------------------------------LINK-REGISTER-PAGE-------------------------------------------->
        <div class="mycon">
                <div class="click">
                    <a href="register">Register here..</a>
                </div>    
                <div class="plan">
                    <a href="lesson"name="save">Lesson plan </a>
                </div>
        </div>

        <!------------------------------------------------- Lesson plan---------------------- -->
  
        <!---------------------------------------------------FOOTER-----------------------------------------------------> 
        <?php 
            include('footer.php')    
        ?>
    </body>
</html>