<?php get_header();

// start of intro
if(have_rows('intro_columns')): while(have_rows('intro_columns')): the_row();
echo '<section class="position-relative a">';
echo '<div class="container-fluid">';

if(have_rows('columns_gallery')): 
    echo '<div class="row">';
    $columnsGalleryCounter=0;
    while(have_rows('columns_gallery')): the_row();
    $columnsGalleryCounter++;

echo '<div class="col-lg-4 col-md-6 pl-0 pr-0 col-intro" data-aos="fade-up">';
echo '<div class="text-white text-center pt-2 pb-2 content" style="">';
echo '<h3 class="heading mb-0">' . get_sub_field('title') . '</h3>';
echo '</div>';
$gallery = get_sub_field('gallery');
if( $gallery ): 
    echo '<div class="intro-carousel owl-carousel owl-theme">';
    $galleryCounter=0;
    foreach( $gallery as $image ):
        $galleryCounter++;
        echo '<div class="position-relative pt-1 pl-1 pr-1 overflow-h">';
        echo '<a href="' . wp_get_attachment_image_url($image['id'], 'full') . '" data-lightbox="image-set-' . $columnsGalleryCounter . '">';
        echo wp_get_attachment_image($image['id'],'full','',['class'=>'w-100 img-intro img-hover','style'=>'height:250px;object-fit:cover;']);
        echo '</a>';
        echo '</div>';
    endforeach; 
    echo '</div>';
endif;
echo '</div>';




endwhile; 
echo '</div>';
endif;

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
        echo '<div class="position-relative">';
        echo wp_get_attachment_image($image['id'], 'full','',['class'=>'w-100 img-gallery','style'=>'height:800px;object-fit:cover;'] );
        echo '<div class="position-absolute w-100 text-center z-1" style="bottom:0;left:0;"><span class="h1 text-white text-shadow d-inline-block">' . $image['alt'] . '</span></div>';
        echo '</div>';
        
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

echo '<div class="col-12">';
echo '<div class="row h-100">';

if(have_rows('titles')):
echo '<div class="col-lg-3 col-md-5">';
echo '<div class="h-100 d-flex">';
echo '<ul class="list-unstyled">';
$counterList = 0;
while(have_rows('titles')): the_row();
$counterList++;
if($counterList == 1){
    echo '<li class="text-accent" style="font-size:150%;white-space:nowrap;">' . get_sub_field('title') . '</li>';    
} else {
    echo '<li class="text-accent mt-5" style="font-size:150%;white-space:nowrap;">' . get_sub_field('title') . '</li>';
}
endwhile;
echo '</ul>';
echo '</div>';
echo '</div>';
endif;

echo '<div class="col-lg-9 col-md-6">';
if(get_sub_field('content')):
    echo '<div class="col-md-9 pb-4">';
    echo '<div class="h-100 d-flex">';
    echo '<div>';
    echo get_sub_field('content');
    echo '</div>';
    echo '</div>';
    echo '</div>';
endif;

$gallery = get_sub_field('gallery_top');
if( $gallery ): 
echo '<div class="d-flex">';
foreach( $gallery as $image ):
    echo '<div class="position-relative d-inline-block img-hover overflow-h">';
    echo '<a href="' . wp_get_attachment_image_url($image['id'], 'full') . '" data-lightbox="services-gallery">';
    echo wp_get_attachment_image($image['id'], 'full','',['class'=>'col-services-gallery-img col-lg col-md-4','style'=>'height:300px;object-fit:cover;object-position:top;'] );
    echo '</a>';
    echo '<span class="position-absolute heading text-white text-center text-shadow h4 w-100 text-uppercase bold" style="bottom:20px;left:0%;transform:translate(0,0);">' . $image['caption'] . '</span>';
    echo '</div>';
endforeach; 
echo '</div>';

endif;

    echo '</div>';

echo '</div>';
echo '</div>';

// $gallery = get_sub_field('gallery_top');
// if( $gallery ): 
//     echo '<div class="col-lg-4 d-flex flex-wrap justify-content-around text-right d-lg-block col-services-gallery pt-lg-0 pt-5">';
//         foreach( $gallery as $image ):

//         echo '<div class="position-relative d-inline-block col-services-gallery-content img-hover overflow-h">';
//         echo '<a href="' . wp_get_attachment_image_url($image['id'], 'full') . '" data-lightbox="services-gallery">';
//         echo wp_get_attachment_image($image['id'], 'full','',['class'=>'col-services-gallery-img','style'=>'height:250px;width:300px;object-fit:cover;'] );
//         echo '</a>';
//         echo '<span class="position-absolute heading text-white text-center text-shadow h2 w-100 text-uppercase bold" style="bottom:20px;left:0%;transform:translate(0,0);">' . $image['caption'] . '</span>';
//         echo '</div>';

//         endforeach; 
//     echo '</div>';
// endif;

echo '<div class="col-12 text-center" style="">';
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
echo '<section class="pt-5 pb-5 position-relative overflow-h full-width-row w-100" id="">';
echo '<div id="what-makes-us-different" class="position-absolute" style="top:0px;"></div>';

$gallery = get_sub_field('gallery');
if( $gallery ): 
    $galleryCounter = 0;
    foreach( $gallery as $image ):
        $galleryCounter++;

        if($galleryCounter == 1){
            echo wp_get_attachment_image($image['id'],'full','',['class'=>'w-100 h-100 position-absolute bg-img d-md-block d-none','style'=>'object-fit:cover;','id'=>'imgFullWidthRowCol0']);
        } else {
            echo wp_get_attachment_image($image['id'],'full','',['class'=>'w-100 h-100 position-absolute bg-img d-md-block d-none img-full-width-row-bg','id'=>'imgFullWidthRowCol' . ($galleryCounter-1) . '','style'=>'object-fit:cover;opacity:0;']);
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
            echo wp_get_attachment_image($image['id'],'full','',['class'=>'d-md-none d-block position-absolute w-100 h-100','style'=>'top:0;left:0;object-fit:cover;']);
            echo '<div class="position-absolute col-full-width-row-border"></div>';
            echo '<div class="position-absolute col-full-width-row-background"></div>';
            echo '<div class="position-relative w-100 pt-3 pb-3">';
            echo '<div class="position-absolute w-100 h-100" style="background:#53301a;opacity:.51;top:0;left:0;"></div>';
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

// start of fleet service
if(have_rows('gallery_fleet_service')): while(have_rows('gallery_fleet_service')): the_row();
echo '<section class="position-relative overflow-h full-width-row w-100" style="padding:100px 0;">';

$bgImg = get_sub_field('background_image');

echo wp_get_attachment_image($bgImg['id'],'full','',['class'=>'position-absolute w-100 h-100','style'=>'top:0;left:0;object-fit:cover;']);

echo '<div class="container-fluid">';
echo '<div class="row">';

echo '<div class="col-12 text-center" style="">';
echo get_sub_field('content');
echo '</div>';

echo '<div class="col-12 text-center" style="">';
echo wp_get_attachment_image(80,'full','',['class'=>'w-75 h-auto position-relative m-auto','style'=>'']);
echo '</div>';


if(have_rows('categories')): 
    $categoriesCounter = 0;
    while(have_rows('categories')): the_row();
    $categoriesCounter++;
    
    if($galleryCounter == 1){
        echo '<div class="col-lg-4 overflow-h p-0">';
        // echo '</div>';
    } else {
        echo '<div class="col-lg-4 overflow-h pr-0 pl-lg-3 pl-0">';
    }
    
    echo '<div class="position-relative img-hover overflow-h">';
    
    $gallery = get_sub_field('gallery');
    if( $gallery ):
        $galleryCounter = 0;
        echo '<div class="fleet-service-carousel owl-carousel owl-theme">';
            foreach( $gallery as $image ):
                $galleryCounter++;

                echo '<div class="overflow-h">';
                echo '<a href="' . wp_get_attachment_image_url($image['id'], 'full') . '" data-lightbox="fleet-service-gallery-' . $categoriesCounter . '">';
                echo wp_get_attachment_image($image['id'], 'full','',['class'=>'w-100 img-portfolio','style'=>'height:450px;object-fit:cover;'] );
                echo '</a>';
                echo '</div>';
                
                
            endforeach;
            echo '</div>';
        endif;

    echo '<div class="position-absolute bg-accent text-white text-center w-100 pt-3 pb-3 z-1" style="bottom:0;left:0;">';
    echo '<span><strong>' . get_sub_field('title') . '</strong></span>';
    echo '</div>';
    
    echo '</div>';
    echo '</div>';
endwhile; 

endif;


echo '</div>';
echo '</div>';



echo '</section>';
endwhile; endif;
// end of fleet service

 /**
 * ==============================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================
 */

 // start of testimonials
echo '<section class="pt-5 pb-5 testimonials bg-black text-white position-relative z-1" style="" id="">';
echo '<div id="testimonials" class="position-absolute" style="top:-120px;"></div>';
echo '<div class="container">';
echo '<div class="row">';
echo '<div class="col-12 text-center">';

$testimonialsGroup = get_field('testimonials_content');
$tTitle = $testimonialsGroup['title'];
$tContent = $testimonialsGroup['content'];

echo '<h3 class="">' . $tTitle . '</h3>';

if($tContent) {
echo $tContent;
}
echo '</div>';
echo '<div class="testimonials-carousel owl-carousel owl-theme">';

$counterTestimonial = 0;
if(have_rows('testimonials')): while(have_rows('testimonials')): the_row(); 
$counterTestimonial++;

echo '<div class="col-testimonial mt-2 mb-2 pl-md-0 pr-md-0 pl-5 pr-4" data-aos="fade-up">';

echo '<img src="https://insideoutcreative.io/wp-content/uploads/2022/11/Quotes.png" style="width:25px;height:25px;object-fit:contain;" class="bg-img position-absolute img-quotes" alt="">';
echo '<div class="position-relative pl-5">';

echo '<small class="gray-text-1">';
echo '<p>' . get_sub_field('content') . '</p>';
echo '</small>';

echo '<div class="row align-items-center">';
$testimonialsImage = get_sub_field('headshot'); 
if($testimonialsImage){
echo '<div class="col-lg-3 col-5">';
echo wp_get_attachment_image($testimonialsImage['id'],'full','',['class'=>'img-testimonial h-auto w-100']); 
echo '</div>';
}

echo '<div class="col-lg-9 col-7">';
echo '<small>';
echo '<span class="h6"><strong>' . get_sub_field('name') . '</strong></span><br><span class="d-block">' . get_sub_field('job_title') . '</span>';

echo '</small>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
endwhile; else : endif;
echo '</div>';

echo '</div>';
echo '</div>';
echo '</section>';
// end of testimonials

 /**
 * ==============================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================
 */

//  start of contact
if(have_rows('contact_section')): while(have_rows('contact_section')): the_row();
echo '<div class="position-relative" style="padding:100px 0 25px;" id="contact">';

echo '<div class="pt-5 pb-5 mb-5" style="background:#4d4d4d;">';
echo '<div class="container">';
echo '<div class="row">';
echo '<div class="col-12 text-center text-white">';

echo get_sub_field('contact_text_top');

echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';

echo '<div class="container" style="">';
echo '<div class="row justify-content-center">';
echo '<div class="col-md-9" style="padding-bottom:100px;" data-aos="fade-up" data-aos-delay="200">';
echo '<div class="position-relative p-5 text-center" style="background:#bfb7a5;box-shadow: inset 0px 0px 10px rgba(0,0,0,.25);">';
echo get_sub_field('contact_form_content');
echo '</div>';
echo '</div>';

echo '</div>';

echo '</div>';


echo '</div>';
endwhile; endif;
//  end of contact

 /**
 * ==============================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================
 */

get_footer(); ?>