<footer>

<section>
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-3 col-md-6 col-8 text-center pb-5">
<a href="<?php echo home_url(); ?>">
<?php $logo = get_field('logo','options'); $logoFooter = get_field('logo_footer','options'); 
if($logoFooter){
echo wp_get_attachment_image($logoFooter['id'],'full',"",['class'=>'w-100 h-auto']); 
} elseif($logo) {
echo wp_get_attachment_image($logo['id'],'full',"",['class'=>'w-100 h-auto']);
}
?>
</a>
</div>
</div>
</div>
</section>

<section class="pt-5 pb-5" style="background:#636363;">
<div class="container">
<div class="row justify-content-center">

<div class="col-12 text-center bold text-black">
    <div class="">
        <?php the_field('website_message','options'); ?>
        <?php echo get_template_part('partials/si'); ?>
</div>
</div>
</div>
</div>
</section>
<div class="text-center pt-3 pb-3 pl-5 pr-5" style="background:#e1e1e1;">
    <div class="d-flex justify-content-center align-items-center">
        <a href="https://insideoutcreative.io/" target="_blank" rel="noopener noreferrer" style="" class="">
        <img src="https://insideoutcreative.io/wp-content/uploads/2022/06/created-by-inside-out-creative-black.png" style="width:125px;" class="h-auto ml-2" alt="">
        </a>
    </div>
</div>
</footer>
<?php if(get_field('footer', 'options')) { the_field('footer', 'options'); } ?>
<?php wp_footer(); ?>
</body>
</html>