<!-- Sidebar nav -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sidebarNavigation d-lg-none">
    <div class="container-fluid d-flex justify-content-between justify-content-md-end align-items-center">
        <a class="navbar-brand d-sm-block d-md-none order-0 order-lg-0 ml-lg-0 mr-2 ml-auto text-warning fw-bold brand-title text-uppercase" href="index.html">Home</a>
        <a class="navbar-toggler align-self-start mt-1" type="button">
            <!-- <i class="fa fa-times"></i> -->
            <i class="fa fa-bars"></i>
            <!-- <span class="navbar-toggler-icon"></span> -->
        </a>
        <div class="collapse navbar-collapse d-flex flex-column flex-lg-row flex-xl-row justify-content-lg-end p-3 p-lg-0 mt-lg-0 mobileMenu" id="navbarSupportedContent">
            <ul class="navbar-nav align-self-stretch">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?php echo "$url";?>home.php">
                        <i class="fa fa-home me-1"></i>
                        Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo "$url";?>about.php">
                        <i class="fa fa-user me-1"></i>
                        About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo "$url";?>portfolio.php">
                        <i class="fa fa-briefcase me-1"></i>
                        Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo "$url";?>contact.php">
                        <i class="fa fa-envelope-open me-1"></i>
                        Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo "$url";?>blog.php">
                        <i class="fa fa-comment me-1"></i>
                        Blog</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="overlay d-lg-none"></div>
<!-- Sidebar end nav -->