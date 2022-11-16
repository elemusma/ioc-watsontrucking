<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/sections/home.css">
<!-- start of intro -->
<section class="intro" style="">
<div class="container-fluid">
<div class="row">

<?php 
$link1 = get_field('intro_title_1');
if( $link1 ): 
$link1_url = $link1['url'];
$link1_title = $link1['title'];
$link1_target = $link1['target'] ? $link1['target'] : '_self';
?>
<a href="<?php echo esc_url( $link1_url ); ?>" target="<?php echo esc_attr( $link1_target ); ?>" class="col-md-4 col-6 pl-0 pr-0 col-intro" data-aos="fade-up">
<div class="bg-accent-green text-white text-center pt-4 pb-3">
<h3 class="heading"><?php echo esc_html( $link1_title ); ?></h3>
</div>
<div class="position-relative pt-1 pl-1 pr-1 overflow-h">
<?php
$introImg1 = get_field('intro_image_1');
echo wp_get_attachment_image($introImg1['id'],'full','',['class'=>'w-100 img-intro img-hover']);
?>
</div>
</a>
<?php endif; ?>

<?php 
$link2 = get_field('intro_title_2');
if( $link2 ): 
$link2_url = $link2['url'];
$link2_title = $link2['title'];
$link2_target = $link2['target'] ? $link2['target'] : '_self';
?>
<a href="<?php echo esc_url( $link2_url ); ?>" target="<?php echo esc_attr( $link2_target ); ?>" class="col-md-4 col-6 pl-0 pr-0 col-intro" data-aos="fade-up" data-aos-delay="200">
<div class="bg-accent-blue text-white text-center pt-4 pb-3">
<h3 class="heading"><?php echo esc_html( $link2_title ); ?></h3>
</div>
<div class="position-relative pt-1 pl-1 pr-1 overflow-h">
<?php
$introImg2 = get_field('intro_image_2');
echo wp_get_attachment_image($introImg2['id'],'full','',['class'=>'w-100 img-intro img-hover']);
?>
</div>
</a>
<?php endif; ?>

<?php 
$link3 = get_field('intro_title_3');
if( $link3 ): 
$link3_url = $link3['url'];
$link3_title = $link3['title'];
$link3_target = $link3['target'] ? $link3['target'] : '_self';
?>
<a href="<?php echo esc_url( $link3_url ); ?>" target="<?php echo esc_attr( $link3_target ); ?>" class="col-md-4 col-6 pl-0 pr-0 col-intro" data-aos="fade-up" data-aos-delay="400">
<div class="bg-accent-green text-white text-center pt-4 pb-3">
<h3 class="heading"><?php echo esc_html( $link3_title ); ?></h3>
</div>
<div class="position-relative pt-1 pl-1 pr-1 overflow-h">
<?php
$introImg3 = get_field('intro_image_3');
echo wp_get_attachment_image($introImg3['id'],'full','',['class'=>'w-100 img-intro img-hover']);
?>
</div>
</a>
<?php endif; ?>



</div>
</div>
</section>
<!-- end of intro -->


<!-- start of our story -->
<section class="pt-5 pb-5 position-relative">
<?php 
$ourStoryBgImg = get_field('our_story_bg_img');
echo wp_get_attachment_image($ourStoryBgImg['id'],'full','',['class'=>'w-100 h-100 position-absolute bg-img']);
$ourStoryBottomImg = get_field('our_story_bottom_image');
echo wp_get_attachment_image($ourStoryBottomImg['id'],'full','',['class'=>'position-absolute','style'=>'bottom:0px;right:0;width:200px;height:auto;']);
?>
<div class="container">
<div class="row align-items-center">
<!-- start of side links -->
<div class="col-md-4 col-side-links pr-md-5">
<?php 
$sideLinksCounter = 0;
if(have_rows('side_links')): while(have_rows('side_links')): the_row(); 
$sideLinksCounter++;
?>
<div class="position-relative">
<?php 
$link = get_sub_field('link');
if( $link ): 
$link_url = $link['url'];
$link_title = $link['title'];
$link_target = $link['target'] ? $link['target'] : '_self';
?>
<a class="btn text-white position-relative w-100 mb-3 pt-3 pb-3 a-side-links" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" data-aos="fade-up" data-aos-delay="<?php echo $sideLinksCounter; ?>50">
<div class="position-absolute w-100 h-100 bg-accent-blue bg-img a-side-links-background" style=""></div>
<div class="position-relative handel">
<?php echo esc_html( $link_title ); ?>
</div>
</a>
<?php endif; ?>
</div>
<?php endwhile; else : endif; ?>
</div>
<!-- end of side links -->
<!-- start of content -->
<div class="col-md-8 pl-md-5" data-aos="fade-up" data-aos-delay="100">
<h3 class="h1 mb-4"><?php the_field('our_story_title'); ?></h3>
<h5 class="font-italic text-accent-green" style="font-family: serif;font-weight: 600;"><?php the_field('our_story_subtitle'); ?></h5>
<?php the_field('our_story_content'); ?>
<!-- <?php 
$ourStoryLink = get_field('our_story_button');
if( $ourStoryLink ): 
$ourStoryLink_url = $ourStoryLink['url'];
$ourStoryLink_title = $ourStoryLink['title'];
$ourStoryLink_target = $ourStoryLink['target'] ? $ourStoryLink['target'] : '_self';
?>
<a class="btn bg-black text-gray br-0 pl-5 pr-5 mt-5" href="<?php echo esc_url( $ourStoryLink_url ); ?>" target="<?php echo esc_attr( $ourStoryLink_target ); ?>"><?php echo esc_html( $ourStoryLink_title ); ?></a>
<?php endif; ?> -->
</div>
<!-- end of content -->
<!-- <div class="col-12 text-center pt-5">
<?php 
$ourStoryBottomDivider = get_field('our_story_bottom_divider');
echo wp_get_attachment_image($ourStoryBottomDivider['id'],'full','',['class'=>'w-100 h-auto']);
?>
</div> -->
</div>
<div class="row pt-4">
    <div class="col-md-6" data-aos="fade-up" id="what-we-do">
    <h3 class="h1 mb-4"><?php the_field('what_we_do_title'); ?></h3>
    <?php the_field('what_we_do_content'); ?>
    </div>
    <div class="col-md-6" data-aos="fade-up" data-aos-delay="200" id="why-were-unique">
    <h3 class="h1 mb-4"><?php the_field('why_were_unique_title'); ?></h3>
    <?php the_field('why_were_unique_content'); ?>
    </div>
</div>
</div>
</section>
<!-- end of our story -->


<!-- start of video -->
<section class="pt-5 pb-5 position-relative" id="video" style="pointer-events:none;">
<?php 
$videoBgImg = get_field('video_bg_img');
echo wp_get_attachment_image($videoBgImg['id'],'full','',['class'=>'w-100 h-100 position-absolute bg-img', 'style'=>'cursor:pointer;','id'=>'playVideoBgImg']);
?>
<div class="container">
<div class="row justify-content-center">
<div class="col-12 text-white text-center text-m-left">
<h5 class="text-accent" style="letter-spacing:.5em;" data-aos="zoom-in-right"><?php the_field('video_pretitle'); ?></h5>
<h3 class="h1" data-aos="zoom-in-right"><?php the_field('video_title'); ?></h3>

</div>
<div id="playVideoIcon" class="col-lg-1 col-md-2 col-4 pt-5 pb-5 mt-5 mb-5" style="cursor:pointer;">
<div class="pt-5 pb-5 mt-5 mb-5">
<?php 
$playIcon = get_field('video_play_icon');
echo wp_get_attachment_image($playIcon['id'],'full','',['class'=>'w-100 h-auto','style'=>'box-shadow: 0px 0px 50px #86c1a9;border-radius: 50%;','data-aos'=>'flip-left']);
?>
</div>
</div>
<div id="videoPopupOverlay" class="col-12 position-fixed w-100 h-100 bg-black" style="opacity:.5;"></div>
<div id="videoPopup" class="col-12 position-fixed p-md-5 p-3">
<div class="position-relative pb-4">
<div id="videoPopupClose" class="close">X</div>
</div>
<div class="pt-2">
<?php the_field('popup_content'); ?>
</div>
</div>
</div>
</div>
</section>
<!-- end of video -->

<!-- start of applications -->
<section class="pt-5 position-relative overflow-h">
<div class="pt-5"></div>
<?php 
$applicationsBgDivider = get_field('applications_bg_img');
echo wp_get_attachment_image($applicationsBgDivider['id'],'full','',['class'=>'w-100 h-100 position-absolute bg-img']);
?>

<div class="container-fluid">
<div class="row">
<div class="col-md-2 order-md-2 order-2" data-aos="fade-up" data-aos-delay="200">
<ul class="list-unstyled ul-applications">
<?php if(have_rows('applications_title')): while(have_rows('applications_title')): the_row(); ?>
<li class="text-accent-green-1 handel"><?php the_sub_field('title'); ?></li>
<?php endwhile; else : endif; ?>
</ul>
</div>
<div class="col-md-10 order-md-2 order1">
<div class="row">
<div class="col-12">
<div class="row position-relative justify-content-end">
<?php if(have_rows('applications_top_row_links')): while(have_rows('applications_top_row_links')): the_row(); 
$animationGroup = get_sub_field('animation');
?>
<?php
$topRowPages = get_sub_field('internal_link');
if( $topRowPages ): ?>
<?php foreach( $topRowPages as $post ): 
// Setup this post for WP functions (variable must be named $post).
setup_postdata($post); ?>
<a href="<?php the_permalink(); ?>" data-aos="<?php echo $animationGroup['type']; ?>" data-aos-delay="<?php echo $animationGroup['delay']; ?>" class="col-lg-4 col-md-6 col-top-row-links text-white text-center d-flex justify-content-center overflow-h">
<div class="overlay-custom position-absolute w-100 h-100 z-1" style="pointer-events:none;"></div>
<?php the_post_thumbnail('full',array('class'=>'w-100 h-100 position-absolute bg-img')); ?>
<div class="position-relative z-1 w-100">
<h3 class="mb-0 heading text-uppercase h5 handel"><?php the_title(); ?></h3>
</div>
</a>
<?php endforeach; ?>
<?php 
// Reset the global post object so that the rest of the page works correctly.
wp_reset_postdata(); ?>
<?php endif; ?>


<?php endwhile; else : endif; ?>
</div>
</div>
</div>
<div class="row">
<div class="col-md-5" data-aos="fade-up" data-aos-delay="400">
<h3 class="h1 mb-4"><?php the_field('applications_main_title'); ?></h3>
<?php the_field('applications_main_content'); ?>
<?php 
$applicationsLink = get_field('applications_link');
if( $applicationsLink ): 
$applicationsLink_url = $applicationsLink['url'];
$applicationsLink_title = $applicationsLink['title'];
$applicationsLink_target = $applicationsLink['target'] ? $applicationsLink['target'] : '_self';
?>
<a class="btn text-white pt-3 pb-3 pl-5 pr-5 bg-black btn-main" href="<?php echo esc_url( $applicationsLink_url ); ?>" target="<?php echo esc_attr( $applicationsLink_target ); ?>">
<div class="position-relative">
<?php echo esc_html( $applicationsLink_title ); ?>
</div>
</a>
<?php endif; ?>
</div>
<div class="col-md-7">
<div class="row position-relative justify-content-start">
<?php if(have_rows('applications_bottom_row_links')): while(have_rows('applications_bottom_row_links')): the_row(); 
$animationGroup = get_sub_field('animation');
?>
<?php
$topRowPages = get_sub_field('internal_link');
if( $topRowPages ): ?>
<?php foreach( $topRowPages as $post ): 
// Setup this post for WP functions (variable must be named $post).
setup_postdata($post); ?>
<a href="<?php the_permalink(); ?>" data-aos="<?php echo $animationGroup['type']; ?>" data-aos-delay="<?php echo $animationGroup['delay']; ?>" class="col-md-6 col-bottom-row-links text-white text-center d-flex justify-content-center overflow-h">
<div class="overlay-custom position-absolute w-100 h-100 z-1" style="pointer-events:none;"></div>
<?php the_post_thumbnail('full',array('class'=>'w-100 h-100 position-absolute bg-img')); ?>
<div class="position-relative z-1 w-100">
<h3 class="mb-0 heading text-uppercase h5 handel"><?php the_title(); ?></h3>
</div>
</a>
<?php endforeach; ?>
<?php 
// Reset the global post object so that the rest of the page works correctly.
wp_reset_postdata(); ?>
<?php endif; ?>


<?php endwhile; else : endif; ?>
</div>
</div>
</div>

</div>
</div>
<!-- <div class="row">
<div class="col-12 text-center">
<?php 
$applicationsBottomDivider = get_field('applications_bottom_divider');
echo wp_get_attachment_image($applicationsBottomDivider['id'],'full','',['class'=>'w-100 h-auto']);
?>
</div>
</div> -->
</div>
<div class="pt-5"></div>
</section>
<!-- end of applications -->

<!-- start of full width row -->
<section class="pt-5 pb-5 position-relative">
<?php 
$fullWidthRowBgImg = get_field('full_width_row_bg_img');
echo wp_get_attachment_image($fullWidthRowBgImg['id'],'full','',['class'=>'w-100 h-100 position-absolute bg-img']);
$fullWidthRowBgImgCol1 = get_field('full_width_row_bg_img_col_1');
echo wp_get_attachment_image($fullWidthRowBgImgCol1['id'],'full','',['class'=>'w-100 h-100 position-absolute bg-img img-full-width-row-bg','id'=>'imgFullWidthRowCol1']);
$fullWidthRowBgImgCol2 = get_field('full_width_row_bg_img_col_2');
echo wp_get_attachment_image($fullWidthRowBgImgCol2['id'],'full','',['class'=>'w-100 h-100 position-absolute bg-img img-full-width-row-bg','id'=>'imgFullWidthRowCol2']);
$fullWidthRowBgImgCol3 = get_field('full_width_row_bg_img_col_3');
echo wp_get_attachment_image($fullWidthRowBgImgCol3['id'],'full','',['class'=>'w-100 h-100 position-absolute bg-img img-full-width-row-bg','id'=>'imgFullWidthRowCol3']);
?>
<div class="container-fluid">
<div class="row">
<?php 
$counterFullWidthRow=0;
if(have_rows('full_width_row_columns')): while(have_rows('full_width_row_columns')): 
$counterFullWidthRow++;
the_row(); ?>
<div class="col-lg-4 col-md-6 text-white text-center pl-0 pr-0 col-full-width-row" style="padding-top:200px;padding-bottom:200px;" id="fullWidthRowCol<?php echo $counterFullWidthRow; ?>">
<div class="position-absolute col-full-width-row-border"></div>
<div class="position-absolute col-full-width-row-background"></div>
<div class="position-relative w-100 pt-3 pb-3">
<div class="position-absolute w-100 h-100" style="background:#b9764c;mix-blend-mode:multiply;opacity:.51;top:0;left:0;"></div>
<div class="position-relative">
<h6 class="mb-0"><?php the_sub_field('pretitle'); ?></h6>
<h3 class="mb-0"><?php the_sub_field('title'); ?></h3>
</div>
</div>
</div>
<?php endwhile; else : endif; ?>
</div>
</div>
</section>
<!-- end of full width row -->

<!-- start of improve -->
<section class="pt-5 pb-5 position-relative">
<?php 
$improveBgDivider = get_field('improve_bg_img');
echo wp_get_attachment_image($improveBgDivider['id'],'full','',['class'=>'w-100 h-100 position-absolute bg-img']);
?>
<!-- <div class="container">
<div class="row">
<div class="col-12 text-center pb-5">
<?php 
$improveTopDivider = get_field('improve_top_divider');
echo wp_get_attachment_image($improveTopDivider['id'],'full','',['class'=>'w-100 h-auto']);
?>
</div>
</div>
</div> -->
<div class="container-fluid overflow-h">
<div class="row align-items-center">
<div class="col-lg-4 col-md-9">
<div class="row position-relative justify-content-start">
<?php if(have_rows('improve_top_row_links')): while(have_rows('improve_top_row_links')): the_row(); 
$animationGroup = get_sub_field('animation');
?>
<?php
$improveRowPages = get_sub_field('internal_link');
if( $improveRowPages ): ?>
<?php foreach( $improveRowPages as $post ):
// Setup this post for WP functions (variable must be named $post).
setup_postdata($post); ?>
<a href="<?php the_permalink(); ?>" data-aos="<?php echo $animationGroup['type']; ?>" data-aos-delay="<?php echo $animationGroup['delay']; ?>" class="col-md-12 col-improve-top-row-links text-white text-center d-flex justify-content-center overflow-h">
<div class="overlay-custom position-absolute w-100 h-100 z-1" style="pointer-events:none;"></div>
<?php the_post_thumbnail('full',array('class'=>'w-100 h-100 position-absolute bg-img')); ?>
<div class="position-relative z-1 w-100">
<h3 class="mb-0 heading text-uppercase h5 handel"><?php the_title(); ?></h3>
</div>
</a>
<?php endforeach; ?>
<?php 
// Reset the global post object so that the rest of the page works correctly.
wp_reset_postdata(); ?>
<?php endif; ?>


<?php endwhile; else : endif; ?>
</div>
</div>
<div class="col-lg-1"></div>
<div class="col-lg-5 col-md-6 pt-lg-0 pt-5" data-aos="fade-up" data-aos-delay="200">
<div class="row">


<div class="col-md-12">
<h3 class="h1 mb-4"><?php the_field('improve_main_title'); ?></h3>
<h3 class="mb-4 bold"><em><?php the_field('improve_subtitle'); ?></em></h3>
<?php the_field('applications_main_content'); ?>
<?php 
$applicationsLink = get_field('applications_link');
if( $applicationsLink ): 
$applicationsLink_url = $applicationsLink['url'];
$applicationsLink_title = $applicationsLink['title'];
$applicationsLink_target = $applicationsLink['target'] ? $applicationsLink['target'] : '_self';
?>
<a class="btn text-white pt-3 pb-3 pl-5 pr-5 bg-black btn-main" href="<?php echo esc_url( $applicationsLink_url ); ?>" target="<?php echo esc_attr( $applicationsLink_target ); ?>">
<div class="position-relative">
<?php echo esc_html( $applicationsLink_title ); ?>
</div>
</a>
<?php endif; ?>
</div>


</div>

</div>


<div class="col-lg-2 col-md-6 pt-lg-0 pt-5" data-aos="fade-up" data-aos-delay="400">
<ul class="list-unstyled ul-improve text-right">
<?php if(have_rows('improve_title')): while(have_rows('improve_title')): the_row(); ?>
<li class="text-accent-green-1 handel"><?php the_sub_field('title'); ?></li>
<?php endwhile; else : endif; ?>
</ul>
</div>


</div>

</div>

<div class="container" id="process">
<div class="row">
<div class="col-12 text-center">
<h3 class="h1"><?php the_field('partners_title'); ?></h3>
</div>
</div>
</div>

</section>
<!-- end of improve -->

<!-- start of process -->
<section class="pb-5">
<div class="partners-gallery owl-carousel owl-theme">

<?php 
$partnerPhotos = get_field('partners_gallery');
$counterPartner = 0;
if( $partnerPhotos ): 
foreach( $partnerPhotos as $partnerPhoto ): 
$counterPartner++;
?>
<div class="col col-portfolio mt-3 mb-3 overflow-h p-0">
<div class="position-relative overflow-h" data-aos="fade-up" data-aos-delay="<?php echo $counterPartner; ?>00">
<a href="<?php echo wp_get_attachment_image_url($partnerPhoto['id'], 'full'); ?>" data-lightbox="image-set">
<?php echo wp_get_attachment_image($partnerPhoto['id'], 'full','',['class'=>'img-partners img-hover','style'=>'height:350px;object-fit:cover;'] ); ?>
<div class="position-absolute pt-4 w-100 text-center" style="bottom:0;left:0;">
<?php echo wp_get_attachment_image(222,'full','',['class'=>'w-100 h-100 position-absolute','style'=>'bottom:0;left:0;object-fit:cover;object-position:bottom;']) ?>
<div class="position-relative pb-1">
<h4 class="text-white mb-0 text-shadow" style="transform: translate(0, -30px);font-size:3rem;line-height:0.5;"><em><?php echo $counterPartner; ?></em></h4>
<h6 class="text-black pt-2 bold"><?php echo $partnerPhoto['alt']; ?></h6>
</div>
</div>
</a>
</div>
</div>
<?php endforeach; endif; ?>

</div>
<div class="container">
<div class="row">
<div class="col-12">

</div>
</div>
</div>
</section>
<!-- end of process -->

<!-- start of testimonials -->
<section class="pt-5 pb-5" style="background:#1d4559;" id="testimonials">
<div class="container">
<div class="row">
<div class="col-12 text-center pb-4">
<h3 class="text-white"><?php the_field('testimonials_title'); ?></h3>
</div>

<div class="testimonial-carousel owl-carousel owl-theme">
<!-- start of repeater -->
<?php $counterTestimonials = 0; if(have_rows('testimonials')): while(have_rows('testimonials')): the_row(); $counterTestimonials++; ?>
<div class="col col-reviews" data-aos="fade-up" data-aos-delay="<?php echo $counterTestimonials; ?>00">

<div class="row">
<div class="col-1">
<span class="h1 text-gray" style="font-family: cursive;">"</span>
</div>
<div class="col-11">
<div class="position-relative text-gray">
<small><?php the_sub_field('content'); ?></small>
<div class="row align-items-center">
<div class="col-3">
<?php $headshot = get_sub_field('headshot'); echo wp_get_attachment_image($headshot['id'],'full','',['class'=>'bg-img img-testimonial']); ?>
</div>
<div class="col-9">
<span class="name text-uppercase text-white"><?php the_sub_field('name'); ?></span><br>
<span class="industry text-white"><small><?php the_sub_field('title'); ?></small></span>
</div>
</div>
</div>

</div>
</div>

</div>
<?php endwhile; else : endif; ?>
<!-- end of repeater -->
</div>

</div>
</div>
</section>
<!-- end of testimonials -->

<!-- start of contact -->
<section class="pt-5" id="contact">
<div class="container">
<div class="row">
<div class="col-12 text-center pt-5 pb-5">
<h3 class="h1"><?php the_field('contact_title'); ?></h3>
</div>
</div>
</div>

<div class="bg-gray-dark pt-4 pb-4">
<div class="container">
<div class="row">
<div class="col-12 text-center text-white">
<?php if( have_rows('contact_cta') ): ?>
<?php while( have_rows('contact_cta') ): the_row();
// Get sub field values.
$leftText = get_sub_field('left_text');
$select = get_sub_field('phone_or_link');
$link = get_sub_field('link');
?>
<span class="">
<span class="thin h3 mr-3"><?php echo $leftText; ?></span>
<div class="desktop-hidden"><br></div>
<?php if($select == "Phone"){ ?> 
<a href="tel:+1<?php the_field('phone','options'); ?>" class="h1 text-white" style="letter-spacing:.35em;font-size:2rem;"><?php the_field('phone','options'); ?></a>    
<?php } elseif($select == "Link") { 
if( $link ): 
$link_url = $link['url'];
$link_title = $link['title'];
$link_target = $link['target'] ? $link['target'] : '_self';
?>
<a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" style="letter-spacing:.35em;font-size:2rem;"><?php echo esc_html( $link_title ); ?></a>
<?php endif;  
} ?>
</span>
<?php endwhile; ?>
<?php endif; ?>


</div>
</div>
</div>
</div>

<!-- start of contact form -->
<div class="position-relative" id="appointment-request">
<div class="position-absolute bg-white-soft w-100 h-75" style="top:50%;left:0;transform:translate(0,-50%);"></div>

<div class="container pt-5 pb-5 mt-5 mb-5">
<div class="row justify-content-center">
<div class="col-md-9" data-aos="fade-up" data-aos-delay="200">
<div class="position-relative p-5 text-center" style="background:rgba(181,171,150,.45);box-shadow: inset 0px 0px 10px rgba(0,0,0,.25);">
<?php the_field('form_section'); ?>
</div>
</div>
</div>
</div>

</div>
<!-- end of contact form -->

<!-- <div class="container pt-5 pb-4">
<div class="row">
<div class="col-12">
<?php
$contactDivider = get_field('contact_bottom_divider');
echo wp_get_attachment_image($contactDivider['id'],'full','',['class'=>'w-100 h-auto']);
?>
</div>
</div>
</div> -->

</section>
<!-- end of contact -->

<?php get_footer(); ?>