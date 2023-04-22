<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="style.css">

    </head>
    <body class="antialiased">
        <?php 
            include('nav.php')
            
        ?>

    <section id="hero">
        <h1>Welcome to our Training Academy</h1>
        <p>We offer a wide range of courses to help you achieve your career goals.</p>
        <a href="#" class="cta">Enroll Now</a>
    </section>

        <?php 
            include('footer.php')
            
        ?>
</body>
</html>