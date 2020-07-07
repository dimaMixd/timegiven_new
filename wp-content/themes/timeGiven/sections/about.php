<section class="section section--about" id="about">
    <div class="container">
        <div class="shadow-box">
            <h2><?php echo get_field('headline_2'); ?></h2>
            <?php if( have_rows('text_blocks')): ?>
                <?php while ( have_rows('text_blocks') ) : the_row(); ?>
                    <?php $text_block = get_sub_field('text_block'); ?>
                    <article>
                        <h3><?php echo $text_block['heading']; ?></h3>
                        <div class="divider"></div>
                        <p><?php echo $text_block['text']; ?></p>
                    </article>
                <?php endwhile; ?>
            <?php endif; ?>
            <div class="text-center">
                <q>
                    <?php echo get_field('quote'); ?>
                </q>
            </div>
        </div>
    </div>
</section>