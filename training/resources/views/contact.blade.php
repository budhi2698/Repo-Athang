<!DOCTYPE html>
<html lang>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Contact</title>
        <!-- url img -->
        <link rel="icon" type="logo_nav.png" href="logo_nav.png">
        <link rel="icon" type="logo_nav.png" href="logo_nav.png">
        <!-- end -->

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
          
        </head>
    <body class="antialiased">
        <?php 
            include('nav.php')
            
        ?>

<div class="contact-wrap">
            <ul class="contact-in">
                <h1>Contact info</h1>
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                    <p>Babena,Thimphu: Bhutan</p>
                </li>

                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                    <p>+ 01 234 567 89</p>
                </li>

                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                    <p><a href="https://athang.com/public/w/contactus">info@athang.com</a></p>
                </li>
            </ul>
      
        <!--Grid column-->
        <div class="map">
            <iframe class="googlemap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56638.991505234!2d89.5576864486328!3d27.471221600000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e1958b0fdbbf2f%3A0x6ad2ba8a60502b3e!2sAthang%20Learning%20Institute!5e0!3m2!1sen!2sbt!4v1682591538853!5m2!1sen!2sbt" width="600" height="450" style="border:0;" allowfullscreen="" 
                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
     <?php 
         include('footer.php')
    ?>
</body>
</html>
