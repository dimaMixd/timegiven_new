<section class="section section--testimonials" id="testimonials">
    <div class="container">
        <!-- Slider main container -->
        <div class="swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <?php if( have_rows('testimonials') ): ?>
                <?php $counter = 1; ?>
                    <?php while ( have_rows('testimonials') ) : the_row(); ?>
                        <?php $item = get_sub_field('item'); ?>
                        <div class="swiper-slide">
                            <div class="swiper-content">
                                <h3>
                                    <?php echo $item['feedback']; ?>
                                </h3>
                                <div class="divider"></div>
                                <p class="name"><?php echo $item['author']; ?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif;?>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</section>