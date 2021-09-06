<?php require_once  "core/base.php" ?>

<script src="<?php echo "$url";?>assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="<?php echo "$url";?>assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo "$url";?>assets/vendor/wow/wow.js"></script>
<script src="<?php echo "$url";?>assets/vendor/way_point/jquery.waypoints.js"></script>
<script src="<?php echo "$url";?>assets/vendor/Counter-Up-master/jquery.counterup.min.js"></script>
<script src="<?php echo "$url";?>assets/js/app.js"></script>
<script src="<?php echo "$url";?>assets/js/mobileSiderbar.js"></script>
<script src="<?php echo "$url";?>assets/js/setting.js"></script>
<script src="<?php echo "$url";?>assets/js/portfolio_data.js"></script>
<script src="<?php echo "$url";?>assets/js/blog_data.js"></script>

<script>
    let currentPage = location.href;
    let portfolioPage = "<?php echo "$url"; ?>portfolio.php";
    let blogPage = "<?php echo "$url"; ?>blog.php";
    let aboutPage = "<?php echo "$url"; ?>about.php";

    console.log(currentPage);
    console.log(portfolioPage);
    //header မှာ active ထည့်တာ
    $(".icon-box>a").each(function () {
        let links = $(this).attr("href");
        // console.log(links);
        if(links ==  currentPage){
            // console.log($(this).parent());
           $(this).parent().addClass("active");
        }
    })
    //sidebar မှာ active ထည့်တာ
    $(".nav-link").each(function () {
        let links = $(this).attr("href");
        if(links ==  currentPage){
            $(this).addClass("active");
        }
    });

    //setting disable button
    if(currentPage == portfolioPage||currentPage==blogPage){
        $(".change_bg").addClass("disabled");
        $(".star").css('background-image', 'none');
        console.log(this);
    }
    //about page butterfly setting
    if(currentPage == aboutPage){
        $(".star").addClass("butterfly");
    }

    // $(".setIcon").each(function () {
    //
    // })
</script>
</body>
</html>
