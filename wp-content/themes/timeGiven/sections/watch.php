<section class="section section--watch" id="watch">
    <div class="container">
        <div class="watch-wrap shadow-box">
            <div class="row">
                <div class="col-5" data-sal="slide-right" data-sal-duration="1000">
                    <?php $text = get_field('text_group'); ?>
                    <h3>
                        <?php echo $text['headline']; ?>
                        <small><?php echo $text['color']; ?></small>
                    </h3>
                    <?php $buy_button = get_field('buy_button'); ?>
                    <div class="buy-btn">
                        <a href="<?php echo $buy_button['link']; ?>" class="button button--blue"><?php echo $buy_button['text']; ?></a>
                    </div>
                </div>
                <div class="col-7" data-sal="slide-left" data-sal-duration="1000">
                    <div class="watch-image-wrap">
                        <img src="<?php echo get_field('product_image'); ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>