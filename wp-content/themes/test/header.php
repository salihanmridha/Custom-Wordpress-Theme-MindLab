<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type"content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="description"content="<?php bloginfo('description'); ?>" />

<!-- externel sheet link -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css" />
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js-slide/jquery_003.js"></script>
<!-- externel sheet link end -->

<!-- title -->
<title><?php wp_title('&laquo;', true, 'right'); bloginfo('name'); ?></title>
<!-- title -->

<link rel="alternate"type="application/rss+xml"title="<?php bloginfo('name'); ?> RSS Feed"href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate"type="application/atom+xml"title="<?php bloginfo('name'); ?> Atom Feed"href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback"href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>
</head>

<body>

<?php wp_nav_menu( array( 'theme_location' => 'primary-menu', 'items_wrap' => '<ul id="dropMenu">%3$s</ul>' ) ); ?>
