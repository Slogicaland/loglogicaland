<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logicaland</title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
</head>
<body>
   <header>
    <div class="header-container">
        <a href="<?php echo esc_url(home_url('/')); ?>" id="logo">
            <img src="http://localhost:10003/wp-content/uploads/2023/09/logo_60-1.png" alt="Your Logo" width="300" height="50">
        </a>
        <nav>
            <a href="<?php echo esc_url(home_url('/')); ?>">ホーム</a>
            <a href="<?php echo esc_url(home_url('/about')); ?>">会社情報</a>
            <a href="<?php echo get_permalink(get_option('access_page_id')); ?>">アクセス</a>

            <a href="<?php echo esc_url(home_url('/contact')); ?>">お問い合わせ</a>
            <a href="<?php echo esc_url(home_url('/blog')); ?>">ブログ</a>
                <a href="<?php echo esc_url(home_url('/blog')); ?>">会社情報</a>

        </nav>
    </div>
</header>
    <div class="sidebar-container">
     <?php get_sidebar(); ?>
    </div>
</body>
</html>



