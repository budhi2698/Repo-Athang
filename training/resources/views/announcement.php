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


