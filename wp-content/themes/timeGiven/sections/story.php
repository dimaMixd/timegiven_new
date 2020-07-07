<section class="section section--story" id="story">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h2><?php echo get_field('title'); ?></h2>
                <span class="divider"></span>
                <p class="story-description"><?php echo get_field('text') ?></p>
                <?php $button = get_field('read_more_button'); ?>
                <a href="<?php echo $button['button_link']; ?>" class="button button--orange"><?php echo $button['button_text']; ?></a>
            </div>
            <div class="col-md-7">
                <div class="video-block" id="video">
                    <div class="video-container">
                        <div class="play-button">
                            <div class="inner">
                                <svg width="12px" height="18px">
                                    <path fill-rule="evenodd"  fill="rgb(255, 172, 86)" d="M-0.000,-0.006 L12.009,9.000 L-0.000,18.007 L-0.000,-0.006 Z"/>
                                </svg>
                            </div>
                        </div>
                        <video poster="<?php echo get_field('video_poster'); ?>">
                            <?php $video = get_field('video_file'); ?>
                            <?php if( $video['video_mp4'] ): ?>
                                <source src="<?php echo $video['video_mp4']; ?>" type="video/mp4">
                            <?php endif; ?>
                            <?php if( $video['video_webm'] ): ?>
                                <source src="<?php echo $video['video_webm']; ?>" type="video/webm">
                            <?php endif; ?>
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="logo-icon">
        <img src="<?php echo get_template_directory_uri().'/images/logo-icon.png' ?>" alt="">
    </div>
</section>