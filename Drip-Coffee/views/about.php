<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drip Coffee About Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../css/about.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/cos/all.css">
</head>
<body>

<?php
        $path = "../footer/";
        $nav = "../navpath/";
        $nav_about = $nav."nav_about.php";
        $footer = $path."footer_about.php";
?>

<?php include($nav_about);?>

<section class="about" id="about">

<h1 class="heading"><span>about</span> us </h1>

<div class="row">
    
    <div class="image">
        <img src="../images/about.jpg" alt="">
    </div>

    <div class="content">
        <h3>Why is our coffee shop ideal?</h3>
        <p>It is a coffee shop that is a vibrant gathering place where the aroma of expertly brewed coffee beans mingles with the hum of conversation, creativity, and community. It's a haven where strangers become friends over a shared love of rich flavors and warm atmosphere, and where every sip tells a story of passion and joy.</p>
    </div>
</div>

</section>

<div class="footer">
    <?php
        include($footer);
    ?>
</div>

<script src="../js/about.js"></script>

</body>
</html>

