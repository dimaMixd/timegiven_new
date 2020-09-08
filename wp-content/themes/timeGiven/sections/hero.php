<div class="loader" id="loader">
    <img src="<?php echo get_template_directory_uri().'/images/logo-white.svg' ?>" width="150" class="logo-white" alt="">
    <div class="bar bar-1"></div>
    <div class="bar bar-2"></div>
    <div class="bar bar-3"></div>
    <div class="bar bar-4"></div>
</div>
<section class="section section--hero" id="hero" style="background-image: url(<?php echo get_field('background_image'); ?>);">
    <div class="container">
        <?php include 'nav.php'; ?>
        <div class="hero-content">
            <?php $hero_block = get_field('hero_block'); ?>
            <h1>
                <?php echo $hero_block['hero_title']; ?>
            </h1>
            <?php echo $hero_block['hero_subtitle']; ?>
            <?php $button = $hero_block['button']; ?>
            <a href="<?php echo $button['link']; ?>" class="button button--orange"><?php echo $button['text']; ?></a>
        </div>
    </div>
</section>