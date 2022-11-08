<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php 

if(get_field('header', 'options')) { the_field('header', 'options'); }

if(get_field('custom_css')) { 
?> 
<style>
<?php the_field('custom_css'); ?>
</style>
<?php 
}
wp_head(); 
?>
</head>
<body <?php body_class(); ?>>
<?php
if(get_field('body','options')) { the_field('body','options'); }
echo '<div class="blank-space"></div>';
echo '<header class="position-relative z-3 box-shadow w-100 pt-3 pb-3" style="background:#d7d7d7;top:0;left:0;">';

echo '<div class="nav">';
echo '<div class="container">';
echo '<div class="row">';

echo '<div class="col-lg-4 col-md-6 d-flex align-items-center">';

echo '<a id="navToggle" class="nav-toggle mr-3">';
echo '<div>';
echo '<div class="line-1 bg-accent"></div>';
echo '<div class="line-2 bg-accent"></div>';
echo '<div class="line-3 bg-accent"></div>';
echo '</div>';
echo '</a>';

echo get_template_part('partials/si');

echo '</div>';

echo '<div class="col-lg-4 col-md-6">';
echo '<a href="' . home_url() . '">';

$logo = get_field('logo','options'); 
if($logo){
echo wp_get_attachment_image($logo['id'],'full',"",['class'=>'h-auto position-absolute logo','style'=>'top:50%;left:50%;transform:translate(-50%,-20%);width:250px;']);
}

echo '</a>';
echo '</div>';

echo '<div class="col-lg-4 col-md-6">';
    wp_nav_menu(array(
        'menu' => 'Contact',
        'menu_class'=>'menu d-flex flex-wrap list-unstyled justify-content-md-center align-items-center mb-0'
    )); 
echo '</div>';


echo '<div id="navMenuOverlay" class="position-fixed z-2"></div>';
echo '<div class="col-lg-4 col-md-8 col-11 nav-items bg-white" id="navItems">';

echo '<div class="pt-5 pb-5">';
echo '<div class="close-menu">';
echo '<div>';
echo '<span id="navMenuClose" class="close h1">X</span>';
echo '</div>';
echo '</div>';
echo '<a href="' . home_url() . '">';

$logo = get_field('logo','options'); 
if($logo){
echo wp_get_attachment_image($logo['id'],'full',"",['class'=>'w-100 h-auto','style'=>'max-width:250px;']);
}

echo '</a>';
echo '</div>';
wp_nav_menu(array(
'menu' => 'primary',
'menu_class'=>'menu list-unstyled mb-0'
)); 
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';

echo '</header>';

echo '<section class="hero position-relative text-white text-center" style="padding:250px 0;">';
$globalPlaceholderImg = get_field('global_placeholder_image','options');
echo wp_get_attachment_image($globalPlaceholderImg['id'],'full','',['class'=>'w-100 h-100 bg-img position-absolute']);

echo '<div class="multiply overlay position-absolute h-100 bg-img" style="left:5%;width:90%;"></div>';

echo '<div class="container">';
echo '<div class="row">';
echo '<div class="col-12">';
echo '<h1 class="pt-3 pb-3 mb-0 bold">' . get_the_title() . '</h1>';

if ( have_posts() ) : while ( have_posts() ) : the_post();
the_content();
endwhile;
endif;

echo '</div>';
echo '</div>';
echo '</div>';

echo '</section>';
?>