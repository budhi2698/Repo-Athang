<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Athang Learning Institute/home</title>
        
        <!-------------------------------------------------URL-IMG------------------------------------------------------->
        <link rel="icon" type="image/jpg" href="logo_url.jpg" width="512" height="512" />
        <link rel="icon" type="image/jpg" href="logo_url.jpg" width="512" height="512" />

        <!---------------------------------------------FONTAWSOME-LINK--------------------------------------------------->
        <link rel="stylesheet" href="font-awesome/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

        <!-------------------------------------------------FONTS-------------------------------------------------------->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-----------------------------------------------PUBLIC-CSS----------------------------------------------------->
        <link rel="stylesheet" href="style.css">

        <!-----------------------------------------------BOOTRAPS-LINK------------------------------------------------->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
          integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
        </script>
    </head>
    <body class="antialiased">
       <!-----------------------------------------------------NAV-BAR-------------------------------------------------->
        <?php 
            include('nav.php') 
        ?>
        <!--------------------------------------------------ANNOUNCEMENT-HEADER---------------------------------------->
        <div class="announcement">
            <h3>Annoucement/News</h3>
        </div>
        <!--------------------------------------------------ANNOUNCEMENT-CONTENT--------------------------------------->
        <div class="anncontainer">
            <div class="colm" id="bg-register">
                <h1>Diploma 2nd Batch Registration</h1>
                <img src="devop.png" alt="devops" style="border-radius:10px">
                <p>Athang Training Academy is pleased to announce the 2nd batch training on ICT and 
                    Online Freelancing Program for 20 slots for a duration of 6 months supported by 
                    The Human Resource and Skills Development Division (HRSDD),Department of Employment and 
                    Human Resources (DoEHR), Registration ends by 23rd August 2021.</p>
            </div>
            <div class="colm" id="bg-blue">
                <h1>Graphic Design</h1>
                <img src="fullsta.png" alt="javafulstack" style="border-radius:10px">
                <p>Athang Training Academy is pleased to announce the 2nd batch training on ICT and 
                    Online Freelancing Program for 20 slots for a duration of 6 months supported by 
                    The Human Resource and Skills Development Division (HRSDD),Department of Employment and 
                    Human Resources (DoEHR), Registration ends by 23rd August 2021.</p>
            </div>
            <div class="colm" id="bg-red">
                <h1>Networking</h1>
                <img src="network.jpg" alt="Networking"; style="border-radius:10px">
                <p>Athang Training Academy is pleased to announce the 2nd batch training on ICT and 
                    Online Freelancing Program for 20 slots for a duration of 6 months supported by 
                    The Human Resource and Skills Development Division (HRSDD),Department of Employment and 
                    Human Resources (DoEHR), Registration ends by 23rd August 2021.</p>
            </div>
            <div class="colm" id="bg-org">
                <h1>Project Management</h1>
                <img src="project.png" alt="Image 1" style="border-radius:10px">
                <p>Athang Training Academy is pleased to announce the 2nd batch training on ICT and 
                    Online Freelancing Program for 20 slots for a duration of 6 months supported by 
                    The Human Resource and Skills Development Division (HRSDD),Department of Employment and 
                    Human Resources (DoEHR), Registration ends by 23rd August 2021.</p>
            </div>
        </div>
        <!------------------------------------------------------FOOTER----------------------------------------------->
        <?php 
            include('footer.php')   
        ?>
    </body>
</html> 


<!-- 
<div class="content1" id="bg-register">
            <h1>Diploma 2nd Batch Registration</h1>
            <img src="devop.png" alt="devops"> 
            <p>Athang Training Academy is pleased to announce the 2nd batch training on ICT and 
                Online Freelancing Program for 20 slots for a duration of 6 months supported by 
                The Human Resource and Skills Development Division (HRSDD),Department of Employment and 
                Human Resources (DoEHR), Registration ends by 23rd August 2021.
            </p>
        </div>
        <div class="content1" id="bg-blue">
            <h1>Diploma 2nd Batch Registration</h1>
            <img src="fullsta.png" alt="javafulstack"> 
            <p>Athang Training Academy is pleased to announce the 2nd batch training on ICT and 
                Online Freelancing Program for 20 slots for a duration of 6 months supported by 
                The Human Resource and Skills Development Division (HRSDD),Department of Employment and 
                Human Resources (DoEHR), Registration ends by 23rd August 2021.
            </p>
        </div>
        <div class="content1" id="bg-red">
            <h1>Diploma 2nd Batch Registration</h1>
            <img src="early.jpg" alt="child care"> 
            <p>Athang Training Academy is pleased to announce the 2nd batch training on ICT and 
                Online Freelancing Program for 20 slots for a duration of 6 months supported by 
                The Human Resource and Skills Development Division (HRSDD),Department of Employment and 
                Human Resources (DoEHR), Registration ends by 23rd August 2021.
            </p>
        </div>
        <div class="content1" id="bg-org">
            <h1>Diploma 2nd Batch Registration</h1>
            <img src="early.jpg" alt="child care"> 
            <p>Athang Training Academy is pleased to announce the 2nd batch training on ICT and 
                Online Freelancing Program for 20 slots for a duration of 6 months supported by 
                The Human Resource and Skills Development Division (HRSDD),Department of Employment and 
                Human Resources (DoEHR), Registration ends by 23rd August 2021.
            </p>
        </div> -->