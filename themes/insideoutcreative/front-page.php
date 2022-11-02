<?php get_header();

// start of intro
if(have_rows('intro_columns')): while(have_rows('intro_columns')): the_row();
echo '<section class="position-relative">';
echo '<div class="container-fluid">';
echo '<div class="row">';


$gallery = get_sub_field('gallery');
if( $gallery ): 
foreach( $gallery as $image ):
    echo '<div class="col-lg-4 col-md-6 pl-0 pr-0 col-intro" data-aos="fade-up">';
    echo '<div class="text-white text-center pt-2 pb-2 content" style="">';
    echo '<h3 class="heading mb-0">' . $image['title'] . '</h3>';
    echo '</div>';
    echo '<div class="position-relative pt-1 pl-1 pr-1 overflow-h">';
    echo wp_get_attachment_image($image['id'],'full','',['class'=>'w-100 img-intro img-hover','style'=>'height:250px;object-fit:cover;']);

    echo '</div>';
    echo '</div>';
endforeach; 
endif;




echo '</div>';
echo '</div>';
echo '</section>';
endwhile; endif;
// end of intro

/**
 * ==============================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================
 */


// start of tabs/links
if(have_rows('about_tabs')): while(have_rows('about_tabs')): the_row();


echo '<section class="position-relative overflow-h" style="padding-top:100px;">';

$bgImg = get_sub_field('background_image');

echo wp_get_attachment_image($bgImg['id'],'full','',['class'=>'position-absolute w-100 h-100','style'=>'top:0;left:0;object-fit:cover;']);


echo '<div class="container">';
echo '<div class="row justify-content-around position-relative pt-4 pb-4">';

if(have_rows('tabs')):
echo '<div class="col-md-3 d-flex flex-wrap align-items-center">';
echo '<div class="w-100">';
$contentCounter = 0;
while(have_rows('tabs')): the_row();
$contentCounter++;
$link_or_content = get_sub_field('link_or_content');
$link = get_sub_field('link');
if($link):
$link_url = $link['url'];
$link_title = $link['title'];
$link_target = $link['target'] ? $link['target'] : '_self';
$linkID = sanitize_title_with_dashes($link_title);
endif;

$title = get_sub_field('title');
$ID = sanitize_title_with_dashes($title);


if($contentCounter == 1){

    if($link_or_content == "Link"){
        echo '<a class="d-block text-center pt-3 pb-3 links-intro links-intro-active" style="" href="' . esc_url( $link_url ) . '" target="' . esc_attr( $link_target ) . '">' . esc_html( $link_title ) . '<span class="links-intro-plus-sign ml-3 bold">+</span></a>';
    } else {
        echo '<span class="d-block text-center pt-3 pb-3 links-intro links-intro-active" style="" id="link-' . $ID . '">' . $title . '<span class="links-intro-plus-sign ml-3 bold">+</span></span>';
    }

} else {

    if($link_or_content == "Link"){
        echo '<a class="d-block text-center pt-3 pb-3 links-intro" style="" href="' . esc_url( $link_url ) . '" target="' . esc_attr( $link_target ) . '">' . esc_html( $link_title ) . '<span class="links-intro-plus-sign ml-3 bold">+</span></a>';
    } else {
        echo '<span class="d-block text-center pt-3 pb-3 links-intro" style="" id="link-' . $ID . '">' . $title . '<span class="links-intro-plus-sign ml-3 bold">+</span></span>';
    }

}



endwhile;
echo '</div>';
echo '</div>';
endif;

echo '<div class="col-1">';
echo '<div class="h-100 bg-black m-auto" style="width:4px;"></div>';
echo '</div>';

if(have_rows('tabs')):
echo '<div class="col-md-6">';

echo '<div class="position-relative">';
$contentCounter = 0;
while(have_rows('tabs')): the_row();
$contentCounter++;
$title = get_sub_field('title');
$ID = sanitize_title_with_dashes($title);
$contentSlider = get_sub_field('content_or_slider');
$content = get_sub_field('content');

if($contentCounter == 1){
    echo '<div class="position-absolute w-100 h-100 tab-content-active" style="top:0;left:0;opacity:0;pointer-events:none;transition:all .25s ease-in-out;" id="content-' . $ID . '">';

    if($contentSlider == 'Content'){
        echo $content;
    } elseif($contentSlider == 'Slider') {
        if(have_rows('slider')): 
        echo '<div class="slider-carousel owl-carousel owl-theme">';
            while(have_rows('slider')): the_row();
            echo '<div>';
            echo get_sub_field('content');
            echo '</div>';
            endwhile;
        echo '</div>';
        endif;
    }
    echo '</div>';

} else {

    echo '<div class="position-absolute w-100 h-100" style="top:0;left:0;opacity:0;pointer-events:none;transition:all .25s ease-in-out;" id="content-' . $ID . '">';
    if($contentSlider == 'Content'){
        echo $content;
    } elseif($contentSlider == 'Slider') {
        if(have_rows('slider')): 
        echo '<div class="slider-carousel owl-carousel owl-theme">';
            while(have_rows('slider')): the_row();
            echo '<div>';
            echo get_sub_field('content');
            echo '</div>';
            endwhile;
        echo '</div>';
        endif;
    }
    echo '</div>';
}



endwhile;
echo '</div>';
echo '</div>';
endif;

echo '<div class="col-12 text-center" style="padding-top:150px;">';
echo wp_get_attachment_image(80,'full','',['class'=>'w-75 h-auto position-relative m-auto','style'=>'']);
echo '</div>';

echo '</div>';
echo '</div>';


echo '</section>';
endwhile; endif;
// end of tabs/links

/**
 * ==============================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================
 */

// start of gallery
if(have_rows('gallery_group')): while(have_rows('gallery_group')): the_row();
echo '<section class="position-relative overflow-h" style="">';

$gallery = get_sub_field('gallery');
if( $gallery ): 
    echo '<div class="gallery-carousel owl-carousel owl-theme">';
    foreach( $gallery as $image ):
        
        echo wp_get_attachment_image($image['id'], 'full','',['class'=>'w-100 img-gallery','style'=>'height:700px;object-fit:cover;'] );
        
    endforeach; 
    echo '</div>';
endif;


echo '</section>';
endwhile; endif;
// end of gallery

/**
 * ==============================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================
 */

// start of services
if(have_rows('services_with_grid')): while(have_rows('services_with_grid')): the_row();
echo '<section class="pt-5 pb-5 position-relative" id="services">';

$bgImg = get_sub_field('background_image');
echo wp_get_attachment_image($bgImg['id'],'full','',['class'=>'position-absolute w-100 h-100','style'=>'top:0;left:0;']);

echo '<div class="container-fluid">';
echo '<div class="row">';

echo '<div class="col-12 text-center" style="">';
echo wp_get_attachment_image(80,'full','',['class'=>'w-75 h-auto position-relative m-auto','style'=>'']);
echo '</div>';

echo '<div class="col-lg-8">';
echo '<div class="row h-100">';

if(have_rows('titles')):
echo '<div class="col-lg-4 col-md-5">';
echo '<div class="h-100 d-flex align-items-center">';
echo '<ul class="list-unstyled">';
$counterList = 0;
while(have_rows('titles')): the_row();
$counterList++;
if($counterList == 1){
    echo '<li class="text-accent" style="font-size:150%;">' . get_sub_field('title') . '</li>';    
} else {
    echo '<li class="text-accent mt-5" style="font-size:150%;">' . get_sub_field('title') . '</li>';
}
endwhile;
echo '</ul>';
echo '</div>';
echo '</div>';
endif;

if(get_sub_field('content')):
    echo '<div class="col-lg-8 col-md-6">';
    echo '<div class="h-100 d-flex align-items-end">';
    echo '<div>';
    echo get_sub_field('content');
    echo '</div>';
    echo '</div>';
    echo '</div>';
endif;

echo '</div>';
echo '</div>';

$gallery = get_sub_field('gallery_top');
if( $gallery ): 
    echo '<div class="col-lg-4 d-flex flex-wrap justify-content-around text-right d-lg-block col-services-gallery">';
        foreach( $gallery as $image ):

        echo '<div class="position-relative d-inline-block col-services-gallery-content img-hover overflow-h">';
        echo '<a href="' . wp_get_attachment_image_url($image['id'], 'full') . '" data-lightbox="services-gallery">';
        echo wp_get_attachment_image($image['id'], 'full','',['class'=>'col-services-gallery-img','style'=>'height:250px;width:300px;object-fit:cover;'] );
        echo '</a>';
        echo '<span class="position-absolute heading text-white text-center text-shadow h4 w-100" style="bottom:20px;left:0%;transform:translate(0,0);">' . $image['title'] . '</span>';
        echo '</div>';

        endforeach; 
    echo '</div>';
endif;

echo '<div class="col-12 text-center" style="padding-top:150px;">';
echo wp_get_attachment_image(143,'full','',['class'=>'w-75 h-auto position-relative m-auto','style'=>'']);
echo '</div>';



echo '</div>';
echo '</div>';
echo '</section>';
endwhile; endif;
// end of services

/**
 * ==============================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================
 */

// start of full width row
if(have_rows('gallery_with_hover_effect')): while(have_rows('gallery_with_hover_effect')): the_row();
echo '<section class="pt-5 pb-5 position-relative overflow-h full-width-row w-100">';

$gallery = get_sub_field('gallery');
if( $gallery ): 
    $galleryCounter = 0;
    foreach( $gallery as $image ):
        $galleryCounter++;

        if($galleryCounter == 1){
            echo wp_get_attachment_image($image['id'],'full','',['class'=>'w-100 h-100 position-absolute bg-img','style'=>'object-fit:cover;','id'=>'imgFullWidthRowCol0']);
        } else {
            echo wp_get_attachment_image($image['id'],'full','',['class'=>'w-100 h-100 position-absolute bg-img img-full-width-row-bg','id'=>'imgFullWidthRowCol' . ($galleryCounter-1) . '','style'=>'object-fit:cover;opacity:0;']);
        }

    endforeach;
endif;

echo '<div class="position-absolute w-100 h-100" style="top:0;left:0;mix-blend-mode:multiply;background:#8a8888;"></div>';

echo '<div class="container-fluid">';
echo '<div class="row">';

if( $gallery ): 
    $galleryCounterCol = 0;
    foreach( $gallery as $image ):
        $galleryCounterCol++;
        if($galleryCounterCol > 1):
            echo '<div class="col-lg-4 col-md-6 text-white text-center pl-0 pr-0 col-full-width-row" style="padding-top:250px;padding-bottom:250px;" id="fullWidthRowCol' . ($galleryCounterCol-1) . '">';
            echo '<div class="position-absolute col-full-width-row-border"></div>';
            echo '<div class="position-absolute col-full-width-row-background"></div>';
            echo '<div class="position-relative w-100 pt-3 pb-3">';
            echo '<div class="position-absolute w-100 h-100" style="background:#b9764c;mix-blend-mode:multiply;opacity:.51;top:0;left:0;"></div>';
            echo '<div class="position-relative">';
            echo '<span class="mb-0 small" style="color:red;">' . $image['caption'] . '</span>';
            echo '<h2 class="mb-0 h3">' . $image['title'] . '</h2>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        endif;
    endforeach;
endif;
echo '</div>';
echo '</div>';
echo '</section>';
endwhile; endif;
// end of full width row

/**
 * ==============================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================
 */



// how to use new image hover effect
echo '<div class="col-6 col-intro-gallery col mb-1 p-1 overflow-h">';
echo '<div class="position-relative img-hover w-100">';
echo '<a href="' . wp_get_attachment_image_url($image['id'], 'full') . '" data-lightbox="image-set">';
echo wp_get_attachment_image($image['id'], 'full','',['class'=>'w-100 image-intro-gallery','style'=>'object-fit:cover;']);
echo '</a>';
echo '</div>';
echo '</div>';

// popup trigger
echo '<span class="btn bg-white text-accent apply-now open-modal" id="apply-now" style="">Apply Now</span>';

// popup content
echo '<div class="modal-content apply-now position-fixed w-100 h-100 z-3">';
echo '<div class="bg-overlay"></div>';
echo '<div class="bg-content">';
echo '<div class="bg-content-inner">';
echo '<div class="close" id="">X</div>';
echo '<div>';
echo get_field('popup_content');
echo '</div>';
echo '</div>';

echo '</div>';
echo '</div>';

get_footer(); ?>