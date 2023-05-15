<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Athang Learning</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->


    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link href="main.css" rel="stylesheet">
</head>
    <body class="antialiased">
       <!-----------------------------------------------------NAV-BAR-------------------------------------------------->
        <?php 
            include('nav.php') 
        ?>
        <br>
        <!--------------------------------------------------ANNOUNCEMENT-CONTENT--------------------------------------->
        <div class="anncontainer">
            <div class="colm" id="bg-register">
               <?php include('content/annouce/dilopma.html'); ?>
            </div>
            <div class="colm" id="bg-org">
               <?php include('content/annouce/devops.html'); ?>
            </div>
            <div class="colm" id="bg-blue">
               <?php include('content/annouce/javafull.html'); ?>
            </div>
            <div class="colm" id="bg-red">
               <?php include('content/annouce/eccd.html'); ?>
            </div>
        </div>
        <div class="calender">
        <iframe src="https://calendar.google.com/calendar/embed?src=classroom110755123382231526553%40group.calendar.google.com&ctz=UTC"
             style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
         </div>
        <!------------------------------------------------------FOOTER----------------------------------------------->
        <?php 
            include('footer.php')   
        ?>
    </body>
</html> 


