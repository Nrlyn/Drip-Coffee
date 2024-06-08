<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drip Coffee Reviews Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../css/reviews.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/cos/all.css">
</head>
<body>

<?php
        $path = "../footer/";
        $nav = "../navpath/";
        $nav_rev = $nav."nav_rev.php";
        $footer = $path."footer_rev.php";
?>

 <?php include($nav_rev);?>

<section class="reviews" id="reviews">

<h1 class="heading"> customer's <span>review</span></h1>

<div class="box-container">
    <div class="box">
        <h2>Review</h2>
        <h3>"Best Coffee"</h3>
        <p>"Convenient Location"</p>
        <h4>Mark Lowie Artajo</h4>

        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
    </div>

    <div class="box">
        <h2>Review</h2>
        <h3>"Relaxing atmosphere"</h3>
        <p>"Good place to hangout and get your coffee fix. Plus, it offers a city view of Tagum city! Great for late night catch up with friends. Would Recommend their Cold Caramel Macchiato."</p>
        <h4>Chadix Alexi</h4>

        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
    </div>

    <div class="box">
        <h2>Review</h2>
        <h3>"Best iced coffee"</h3>
        <p>"Popular among Locals"</p>
        <h4>Llambert Monton</h4>

        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
    </div>
</div>

</section>

<div class="footer">
    <?php include($footer);?>
</div>

    <script src="../js/review.js"></script>
</body>
</html>

