<?php require_once  "core/base.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="icon" href="<?php echo "$url";?>assets/img/logo2.svg"  type="image/icon type"><!--href="images/logo2.png",href="https://img.icons8.com/emoji/48/000000/glowing-star.png"-->

    <!-- Primary Meta Tags -->
    <title>MyPortfolio</title>
    <meta name="title" content="MyPortfolio">
    <meta name="description" content="">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://wwm.mmsit.store">
    <meta property="og:title" content="MyPortfolio">
    <meta property="og:description" content="">
    <meta property="og:image" content="<?php echo "$url";?>assets/img/portfolio.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://wwm.mmsit.store">
    <meta property="twitter:title" content="MyPortfolio">
    <meta property="twitter:description" content="">
    <meta property="twitter:image" content="<?php echo "$url";?>assets/img/portfolio.jpg">


    <link rel="stylesheet" href="<?php echo "$url";?>assets/vendor/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo "$url";?>assets/vendor/@fontawesome/fontawesome-free/css/all.css">
    <link rel="stylesheet" href="<?php echo "$url";?>assets/vendor/animate.css/animate.min.css">
    <link rel="stylesheet" href="<?php echo "$url";?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo "$url";?>assets/css/about_style.css">
    <link rel="stylesheet" href="<?php echo "$url";?>assets/css/portfolio_style.css">
    <link rel="stylesheet" href="<?php echo "$url";?>assets/css/contact_style.css">
    <link rel="stylesheet" href="<?php echo "$url";?>assets/css/blog_style.css">
    <link rel="stylesheet" href="<?php echo "$url";?>assets/css/header.css">
    <link rel="stylesheet" href="<?php echo "$url";?>assets/css/moileSidebar.css">
    <link rel="stylesheet" href="<?php echo "$url";?>assets/css/setting.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!--     <script src="--><?php //echo "$url";?><!--assets/js/Chart.min.js"></script>-->


<body id="backColor">
    <?php include "template/setting.php"?>
    <!-- HEADER -->
    <header class="header">
        <ul class="icon-menu d-none d-lg-block">
            <li class="icon-box">
                <i class="fa fa-home"></i>
                <a href="<?php echo "$url";?>home.php">
                    <h2>Home</h2>
                </a>
            </li>
            <li class="icon-box">
                <i class="fa fa-user"></i>
                <a href="<?php echo "$url";?>about.php">
                    <h2>About</h2>
                </a>
            </li>
            <li class="icon-box">
                <i class="fa fa-briefcase"></i>
                <a href="<?php echo "$url";?>portfolio.php">
                    <h2>Portfolio</h2>
                </a>
            </li>
            <li class="icon-box">
                <i class="fa fa-envelope-open"></i>
                <a href="<?php echo "$url";?>contact.php">
                    <h2>Contact</h2>
                </a>
            </li>
            <li class="icon-box">
                <i class="fa fa-comments"></i>
                <a href="<?php echo "$url";?>blog.php">
                    <h2>Blog</h2>
                </a>
            </li>
        </ul>
    </header>
    <!--END HEADER -->
    <?php include "template/sidebar.php"; ?>
