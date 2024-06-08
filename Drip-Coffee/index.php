<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drip Coffee</title>
    <!-- link sa fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- link sa css -->
    <link rel="stylesheet" href="./css/style.css">
</head>

<!-- para pang-include sa ubang php file namo -->
<?php
    $path = "./widgets/";
    $logo = $path."logo.php";
    $nav = $path."nav.php";
    $home = $path."homehero.php";
    $icon= $path."icons.php";
    $featured = $path."featured_prod.php";
    $home_about = $path."home_about.php";
    $footer = "./footer/footer.php";
?>

<body>
    <header class="header">
        <div class="logo">
            <?php include($logo);?>
        </div>

        <div class="nav">
            <?php include($nav);?>
        </div>

        <div class="icon">
            <?php include($icon);?>
        </div>
        
    </header>

        <div class="homehero">
            <?php include($home);?>
        </div>

        <div class="about">
            <?php include($home_about);?>
        </div>

        <div class="products">
            <?php include($featured);?>
        </div>
    
    <div class="footer">
        <?php include($footer);?>
    </div>

    <script src="./js/main.js"></script>
    
</body>
</html>