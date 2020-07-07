<section class="section section--questions" id="faq">
    <div class="container">
        <?php if( have_rows('questions') ): ?>
            <?php $counter = 1; ?>
            <?php while ( have_rows('questions') ) : the_row(); ?>
                    <?php $block = get_sub_field('block'); ?>
                    <div class="row">
                        <div class="col-md-6 <?php echo ($counter%2 == 0) ? 'order-1': ''; ?>">
                            <div class="photo-wrap <?php echo ($counter%2 == 0) ? 'right': ''; ?>" data-sal>
                                <img src="<?php echo $block['picture']; ?>" alt="">
                            </div>
                        </div>
                        <div class="col-md-6 <?php echo ($counter%2 == 0) ? 'order-0': ''; ?>">
                            <div class="questions-description">
                                <h3><?php echo $block['question_heading'] ?></h3>
                                <div class="divider"></div>
                                <p><?php echo $block['question_answer'] ?></p>
                                <?php if( $block['has_button'] ): ?>
                                    <?php $button = $block['button']; ?>
                                    <a href="<?php echo $button['button_link']; ?>" class="button button--<?php echo $button['button_color']; ?>"><?php echo $button['button_text'] ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php $counter++; ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>