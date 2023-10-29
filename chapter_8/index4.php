<!DOCTYPE html>
<html>
<head>
    
    <!-- Name shown on browser tab -->
    <title>Query IV</title>
    
    <!-- Used for Search Engine Optimization -->
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    
    <!-- Set View Scale 1:1 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Stylesheets -->
    <link href="css/destyle.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    
    <!-- Favorite Icon -->
    <link rel="icon" href="favicon/favicon.png" type="image/png" sizes="16x16">
         
</head>
<body>
    
<div id="container">

    <div id="a">

        <?php
            include("includes/logo.php");
        ?>

    </div>

    <div id="b" class="rmiddle">

        <?php
            include("includes/header.php");
        ?>

    </div>

    <div id="c" class="rmiddle">

        <?php
            include("includes/navigation.php");
        ?>

    </div>

    <div id="d">

        <p>This query is a phonebook that lists every employee of the company together with their name, phone number, and department.</p>
        <?php
            include("queries/Query4.php");
        ?>

    </div>

    <div id="e" class="rmiddle">
            
            <?php
                include("includes/footer.php");
            ?>
            
    </div>

</div>

</body>
</html>


<!-- Full Page Video Background HTML Snippet 

<video autoplay loop id="video-background" muted plays-inline>
    <source src="/video/.mp4">
</video>    

-->

<!-- Carousel/Slideshow HTML Snippet

<div class="container">
    <div class="wrapper">
        <img src="https://i.pinimg.com/originals/2b/de/de/2bdede0647e3cdf75b44ea33723201d9.jpg">
        <img src="https://images6.alphacoders.com/462/thumb-1920-462371.jpg">
        <img src="https://images5.alphacoders.com/343/thumb-1920-343645.jpg">
        <img src="https://cdn.wallpapersafari.com/24/98/dwMtqD.jpg">
    </div>
</div>

-->
