<section id="slider">
    <div class="container">
        <div class="row">
            <div class="left-slider col-md-3">
                <?php get_template_part( 'template-parts/banner/sidebar-banner'); ?>
            </div>
            <div class="slider col-md-9">
                <?php 
                    echo do_shortcode("[metaslider id=27]"); 
                ?>
            </div>
        </div>
    </div>
</section>
<!-- End slider section -->