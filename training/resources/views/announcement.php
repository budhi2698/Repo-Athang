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

    </head>
    <body class="antialiased">
 
    <?php 
        include('nav.php') 
     ?>

    <div class="announcement">
        <h3>Annoucement/News</h3>
    </div>
    <div class="anncontainer">
        <div class="content bg-register">
            <h1>Diploma 2nd Batch Registration</h1>
            <img src="image1.jpg" alt="Image 1"> 
            <p>Athang Training Academy is pleased to announce the 2nd batch training on ICT and 
                Online Freelancing Program for 20 slots for a duration of 6 months supported by 
                The Human Resource and Skills Development Division (HRSDD),Department of Employment and 
                Human Resources (DoEHR), Registration ends by 23rd August 2021.
            </p>
        </div>
        <div class="content2 bg-blue">
            <h1>Diploma 2nd Batch Registration</h1>
            <img src="image2.jpg" alt="Image 2"> 
            <p>Our program offers hands-on training and industry-relevant courses.</p>
        </div>
        <div class="content3 bg-red">
            <h1>Diploma 2nd Batch Registration</h1>
            <img src="image2.jpg" alt="Image 3"> 
            <p>Our program offers hands-on training and industry-relevant courses.</p>
        </div>
        <div class="content4 bg-org">
            <h1>Diploma 2nd Batch Registration</h1> 
            <img src="image4.jpg" alt="Image 4">
            <p>Join us now and become part of a growing community of skilled professionals.</p>
        </div>
    </div>

    <?php 
        include('footer.php')
            
    ?>
</body>
</html>