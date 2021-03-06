<?php
    require_once('functions-public.php');

    $id            = filter_input(INPUT_GET, 'post-id', FILTER_SANITIZE_SPECIAL_CHARS);
    $cat_id        = get_category_by_post_id($mysql_conn, $id);
    $category_name = get_category_name($mysql_conn, $cat_id);
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>IrishJoy.com - <?php echo "#";
            echo "$category_name" ?> - Inspiration Is Everywhere</title>
    <?php show_meta_tags(); ?>
    <link rel="stylesheet" type="text/css" href="css/public-style.css"/>
    <link rel="icon" href="<?php echo MAIN_URL; ?>images/favicon.png" type="image/x-icon">
</head>
<body>
<div class="head">
    <div style="margin: 0 auto; position: relative; width:40%; padding-top: 30px;">
        <a href="<?php echo MAIN_URL; ?>">
            <img src="<?php echo MAIN_URL; ?>images/head_logo.jpg">
        </a>
    </div>
</div>
<div class="container">
    <div class="content">
        <?php
            show_single_image($mysql_conn);
        ?>
        <div class="after_full_image">
            <div style="margin-top:18px; margin-left:15px;">
                <!--to be checked later the hashtag links. maybe we remove them -->
                <span class="single-image-category">Category: <?php echo $category_name ?></span>
            </div>
        </div>
    </div>
    <div class="ad_box">
        <a href="#">
            <img src="images/ads.png">
        </a>
    </div>
    <div class="ad_bottom">
        <div style="margin-top:15px;"><a href"http://www.intolaravel.com/">Our Partners</a></div>
    </div>
    <div class="before_menu">
        <!-- Social Media Buttons goes here -->
    </div>
    <div class="menu_bar">
        <?php show_main_menu($mysql_conn) ?>
    </div>
</div>
<div class="footer">
    <div class="copyright">
        <a target="_blank" href="http://github.com/ArditMustafaraj/IrishJoy">github.com/ArditMustafaraj/IrishJoy</a>
    </div>
</div>
</body>
</html>