<?php 
/**
 * Template Name: Front Page Template
 *
 */
get_header(); ?>

<section id="content">
    <div class="container">
        <div class="row">
            <div class="box-product">
                <h3 class="title">
                    <hr>
                    <span>Sản phẩm mới</span>
                </h3>
                <div class="main-box-product">
                    <div class="row">
                    <?php
                        $args = array(

                                'post_type'         => 'product',
                                'paged'             => get_query_var( 'paged' ),
                                'order'             => 'DESC',
                                'posts_per_page'    => 8,

                            );

                        $wp_query = new WP_Query($args);
                    ?>

                    <?php if ( $wp_query->have_posts() ) while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?> 
                        <div class="list-product col-md-3 col-sm-6 col-xs-6">
                            <div class="thumb">
                                <?php if(has_post_thumbnail()) {?>
                                    <a href="<?php the_permalink();?>">
                                        <?php the_post_thumbnail('product-thumb-box');?>
                                    </a>
                                <?php }; ?>
                            </div>
                            <h3><?php the_title(); ?></h3>

                            <span class="price">
                                <?php echo $product->get_price_html(); ?>
                            </span>
                        </div>                        
                    <?php endwhile; // end of the loop. ?> 
                    </div>
                </div>
            </div>

            <div class="box-product">
                <h3 class="title">
                    <hr>
                    <span>Năng Lượng Mặt Trời</span>
                </h3>
                <div class="main-box-product">
                    <div class="row">
                        <div class="list-product col-md-3 col-sm-6 col-xs-6">
                            <div class="thumb">
                                <a href="#"><img src="<?php bloginfo('template_url')?>/img/thumb-product.png" alt=""></a>
                            </div>
                            <h3>Đèn cổng mini năng lượng mặt trời Solar</h3>
                            <span class="price">
                                <del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>165.00</span></del>                                    
                                <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>150.00</span></ins>
                            </span>
                        </div>
                        <div class="list-product col-md-3 col-sm-6 col-xs-6">
                            <div class="thumb">
                                <a href="#"><img src="<?php bloginfo('template_url')?>/img/thumb-product.png" alt=""></a>
                            </div>
                            <h3>Đèn cổng mini năng lượng mặt trời Solar</h3>
                            <span class="price">
                                <del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>165.00</span></del>                                    
                                <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>150.00</span></ins>
                            </span>
                        </div>
                        <div class="list-product col-md-3 col-sm-6 col-xs-6">
                            <div class="thumb">
                                <a href="#"><img src="<?php bloginfo('template_url')?>/img/thumb-product.png" alt=""></a>
                            </div>
                            <h3>Đèn cổng mini năng lượng mặt trời Solar</h3>
                            <span class="price">
                                <del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>165.00</span></del>                                    
                                <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>150.00</span></ins>
                            </span>
                        </div>
                        <div class="list-product col-md-3 col-sm-6 col-xs-6">
                            <div class="thumb">
                                <a href="#"><img src="<?php bloginfo('template_url')?>/img/thumb-product.png" alt=""></a>
                            </div>
                            <h3>Đèn cổng mini năng lượng mặt trời Solar</h3>
                            <span class="price">
                                <del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>165.00</span></del>                                    
                                <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>150.00</span></ins>
                            </span>
                        </div>
                        <div class="list-product col-md-3 col-sm-6 col-xs-6">
                            <div class="thumb">
                                <a href="#"><img src="<?php bloginfo('template_url')?>/img/thumb-product.png" alt=""></a>
                            </div>
                            <h3>Đèn cổng mini năng lượng mặt trời Solar</h3>
                            <span class="price">
                                <del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>165.00</span></del>                                    
                                <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>150.00</span></ins>
                            </span>
                        </div>
                        <div class="list-product col-md-3 col-sm-6 col-xs-6">
                            <div class="thumb">
                                <a href="#"><img src="<?php bloginfo('template_url')?>/img/thumb-product.png" alt=""></a>
                            </div>
                            <h3>Đèn cổng mini năng lượng mặt trời Solar</h3>
                            <span class="price">
                                <del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>165.00</span></del>                                    
                                <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>150.00</span></ins>
                            </span>
                        </div>
                        <div class="list-product col-md-3 col-sm-6 col-xs-6">
                            <div class="thumb">
                                <a href="#"><img src="<?php bloginfo('template_url')?>/img/thumb-product.png" alt=""></a>
                            </div>
                            <h3>Đèn cổng mini năng lượng mặt trời Solar</h3>
                            <span class="price">
                                <del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>165.00</span></del>                                    
                                <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>150.00</span></ins>
                            </span>
                        </div>
                        <div class="list-product col-md-3 col-sm-6 col-xs-6">
                            <div class="thumb">
                                <a href="#"><img src="<?php bloginfo('template_url')?>/img/thumb-product.png" alt=""></a>
                            </div>
                            <h3>Đèn cổng mini năng lượng mặt trời Solar</h3>
                            <span class="price">
                                <del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>165.00</span></del>                                    
                                <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>150.00</span></ins>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End section content -->

<?php get_footer(); ?>
