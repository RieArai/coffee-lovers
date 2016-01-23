<!doctype html>
<html lang="ja">
<head>

<meta charset="UTF-8">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="viewport" content="width=device-width">
<!-- <meta http-equiv="Refresh" content="180"> -->

<!-- <title>coffee</title> -->
<title><?php bloginfo('name'); ?><?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico">

<?php wp_head(); ?>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/common/base.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/script.js"></script>

</head>

<!-- <body id="index"> -->
<body <?php body_class(); ?>>

	<div id="loading"><img src="<?php bloginfo('template_url'); ?>/images/common/loading.gif" alt="loading"><br>loading</div>
	<div id="fade"></div>

	<div id="all">
		<header>
			<div class="wrap">
				<h1><a href="<?php bloginfo('url'); ?>" class="blog_title"><img src="<?php bloginfo('template_url'); ?>/images/common/ttl.png" height="40" width="243" alt=""></a></h1>
				<div class="search"><p><?php get_search_form(); ?></p></div>
				<p>このサイトはコーヒー同好会のための投稿サイトです</p>
			</div>
		</header>
		<?php wp_nav_menu( array('menu_id' => 'nav' )); ?>