<section class="section section--footer" id="footer" style="background-image:url(<?php echo get_field('footer_background', 'option'); ?>);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row footer-logos text-center">
                    <?php if( have_rows('logos', 'option') ): ?>
                        <?php while( have_rows('logos', 'option') ): the_row(); ?>
                            <img src="<?php the_sub_field('logo'); ?>" alt="logo">
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="row address">
                    <div class="offset-md-3 col-md-6">
                        <div class="row">
                            <div class="offset-md-1 col-md-3">
                                <?php echo get_field('company_name', 'option'); ?>
                            </div>
                            <div class="col-md-8">
                                <?php echo get_field('address', 'option'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php wp_footer(); ?>
</body>
</html>