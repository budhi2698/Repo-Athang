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

    <section id="courses">
        <h2>Our Courses</h2>
        <ul>
            <li>Web Development</li>
            <li>Graphic Design</li>
            <li>Networking</li>
            <li>Project Management</li>
            <li>ECCD</li>
        </ul>
    </section>

    <?php 
        include('footer.php')
            
    ?>
</body>
</html>