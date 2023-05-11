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
        <link href="css/style.css" rel="stylesheet">
        <!-------------------------------------------------FONTS-------------------------------------------------------->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        
        <!-----------------------------------------------PUBLIC-CSS----------------------------------------------------->
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="main.css">
       
        <!-----------------------------------------------BOOTRAPS-LINK------------------------------------------------->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </head>
    <body class="antialiased">
        <!--------------------------------------------------NAV-BAR-----------------------------------------------------> 
        <?php 
            include('nav.php') 
        ?>
        <!-------------------------------------------------VANCANCY-DETAILS--------------------------------------------->
        <u><h2 style="text-align:center; margin-top:40px; font-family:cambay">Vacancy</h2></u>
        <hr>
        <div class="vac">
            <div>
                <img src="aup.jpg" alt="Image 1">   
            </div>
            <div>
                <p>All candidate must bring the required documents:</p>
                <ol type="i">
                    <li>CID and Half Photo</li>
                    <li>Medical  certificate</li>
                    <li>Transcript of Class XII and X</li>
                    <li>CV</li>
                </ol>
                <p>On 3rd may,candidate are requested to come in Gho and KIra and we will 
                    conduct interview. If you have any query, please contact 17462928/ 17991973 
                    or email to <a href="https://athang.com/public/w"> info@athang.com</a>
                </p>
            </div>
        </div>
        <!----------------------------------------------------------FOOTER---------------------------------------------->  
        <?php 
             include('footer.php')     
        ?>
    </body>
</html>