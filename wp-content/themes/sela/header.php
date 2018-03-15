<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <main id="main">
 *
 * @package Sela
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"> 
    <link rel="shortcut icon" href="http://image.sanlicun.cn/favicon.png">
    <meta name="referrer" content="unsafe-url">
    <meta name="referrer" content="always">
	 <?php 
	$description = '';
	$keywords = '';

	if (is_home() || is_page()) {
	   // 将以下引号中的内容改成你的主页description
		$description = "国外网站大全收录了国外著名的网站、国外购物、国外留学、优秀的国外网站，包括国外视频、国外购物、国外交友、国外新闻等多种类型，打造最专业的国外网址大全。国外视频网站,国外新闻网站,国外大学。";

			   // 将以下引号中的内容改成你的主页keywords
			   $keywords = "国外网站,国外网址,国外购物网站,国外视频网站,国外新闻网站,国外设计网站,外贸网站,国外网站大全,国外大学,世界各国网址大全";
	}
	elseif (is_single()) {
	   $description1 = get_post_meta($post->ID, "description", true);
	   $description2 = str_replace("\n","",mb_strimwidth(strip_tags($post->post_content), 0, 200, "…", 'utf-8'));

	   // 填写自定义字段description时显示自定义字段的内容，否则使用文章内容前200字作为描述
	   $description = $description1 ? $description1 : $description2;
	   
	   // 填写自定义字段keywords时显示自定义字段的内容，否则使用文章tags作为关键词
	   $keywords = get_post_meta($post->ID, "keywords", true);
	   if($keywords == '') {
		  $tags = wp_get_post_tags($post->ID);    
		  foreach ($tags as $tag ) {        
			 $keywords = $keywords . $tag->name . ", ";    
		  }
		  $keywords = rtrim($keywords, ', ');
	   }
	}
	elseif (is_category()) {
	   // 分类的description可以到后台 - 文章 -分类目录，修改分类的描述
	   $description = category_description();
	   $keywords = single_cat_title('', false);
	}
	elseif (is_tag()){
	   // 标签的description可以到后台 - 文章 - 标签，修改标签的描述
	   $description = tag_description();
	   $keywords = single_tag_title('', false);
	}
	$description = trim(strip_tags($description));
	$keywords = trim(strip_tags($keywords));
	?>
	<meta name="description" content="<?php echo $description; ?>" />
	<meta name="keywords" content="<?php echo $keywords; ?>" />
	
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php echo get_option('seo360') ?>
<?php echo get_option('seobd') ?>
<div id="page" class="hfeed site">
    <header id="masthead" class="site-header" role="banner">
        <a class="skip-link screen-reader-text" href="#content"
           title="<?php esc_attr_e('Skip to content', 'sela'); ?>"><?php _e('Skip to content', 'sela'); ?></a>

        <div class="site-branding">
            <?php sela_the_site_logo(); ?>
            <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
                                      title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>"
                                      rel="home"><?php bloginfo('name'); ?></a></h1>
            <?php
            $description = get_bloginfo('description', 'display');
            if ($description || is_customize_preview()) : ?>
                <h2 class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></h2>
            <?php
            endif; ?>
        </div><!-- .site-branding -->

        <nav id="site-navigation" class="main-navigation" role="navigation">
            <button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php _e('Menu', 'sela'); ?></button>
            <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
        </nav><!-- #site-navigation -->
    </header><!-- #masthead -->

    <div id="content" class="site-content">
