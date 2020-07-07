<nav class="desktop-menu">
    <div class="row align-items-center">
        <div class="col-md-3">
            <img src="<?php echo get_template_directory_uri().'/images/logo.svg'; ?>" width="120" alt="">
        </div>
        <div class="col-md-9">
            <ul class="top-menu flex-list">
                <?php if( have_rows('top_menu') ): ?>
                    <?php while ( have_rows('top_menu') ) : the_row(); ?>
                        <?php $link = get_sub_field('top_link'); ?>
                        <li>
                            <a href="<?php echo $link['link_3']; ?>" class="<?php echo ( $link['is_bold'] ) ? 'bold' : '' ; ?>"><?php echo $link['link_text']; ?></a>
                        </li>
                    <?php endwhile; ?>
                <?php endif; ?>
                <li>
                    <?php $email = get_field('header_email'); ?>
                    <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?> <img src="<?php echo get_template_directory_uri().'/images/email.svg'; ?>" width="15" alt=""></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <ul class="bottom-menu flex-list">
                <?php if( have_rows('bottom_menu') ): ?>
                    <?php while ( have_rows('bottom_menu') ) : the_row(); ?>
                        <?php $link = get_sub_field('links'); ?>
                        <li>
                            <a href="#" data-href="<?php echo $link['link_destination']; ?>"><?php echo $link['link_text']; ?></a>
                        </li>
                    <?php endwhile; ?>
                <?php endif; ?>
            </ul>
        </div>
        <div class="col-md-4">
            <ul class="flex-list shop-buttons">
                <?php $buttons = get_field('bottom_buttons') ?>
                <li>
                    <a href="<?php echo $buttons['buy_menu_button']['link']; ?>" class="button button--blue"><?php echo $buttons['buy_menu_button']['text']; ?></a>
                </li>
                <li>
                    <a href="<?php echo $buttons['cart_button_url']; ?>" class="button button--orange">
                        <img src="<?php echo get_template_directory_uri().'/images/cart.svg'; ?>" width="15" alt="">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<nav class="mobile-menu">
    <div class="black-fade"></div>
    <div class="row">
        <div class="col-4">
            <img src="<?php echo get_template_directory_uri().'/images/logo.svg'; ?>" width="100%" alt="">
        </div>
        <div class="offset-6 col-2">
            <div class="burger-icon" id="burger-icon">
                <span class="top-bar"></span>
                <span class="middle-bar"></span>
                <span class="bottom-bar"></span>
            </div>
        </div>
    </div>
    <div class="menu-box">
        <ul class="">
            <?php if( have_rows('top_menu') ): ?>
                <?php while ( have_rows('top_menu') ) : the_row(); ?>
                    <?php $link = get_sub_field('top_link'); ?>
                    <li>
                        <a href="<?php echo $link['link_3']; ?>" class="<?php echo ( $link['is_bold'] ) ? 'bold' : '' ; ?>"><?php echo $link['link_text']; ?></a>
                    </li>
                <?php endwhile; ?>
            <?php endif; ?>
        </ul>
        <div class="divider"></div>
        <ul class="anchor-links">
            <?php if( have_rows('bottom_menu') ): ?>
                <?php while ( have_rows('bottom_menu') ) : the_row(); ?>
                    <?php $link = get_sub_field('links'); ?>
                    <li>
                        <a href="#" data-href="<?php echo $link['link_destination']; ?>"><?php echo $link['link_text']; ?></a>
                    </li>
                <?php endwhile; ?>
            <?php endif; ?>
        </ul>
    </div>
</nav>