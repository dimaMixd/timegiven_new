<section class="section section--process" id="workflow">
    <div class="container">
        <div class="row justify-content-center">
            <?php if( have_rows('process') ): ?>
                <?php $counter = 0; ?>
                <?php while ( have_rows('process') ) : the_row(); ?>
                    <div class="col-md-3" data-sal="slide-up" data-sal-easing="ease-out" data-sal-duration="1000" data-sal-delay="<?php echo ($counter*300); ?>">
                        <?php $step = get_sub_field('step'); ?>
                        <div class="svg-wrap">
                            <img src="<?php echo $step['icon_image']; ?>" alt="watch1">
                        </div>
                        <div class="process-description">
                            <?php echo $step['description']; ?>
                        </div>
                    </div>
                    <?php $counter++; ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>