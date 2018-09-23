<div class="main-block"> <!-- main block -->
    <div class="container_1"> <!-- container max-width 1200px -->
        <a href="<?php echo home_url(); ?>">
            <?php
            if(get_field('g_homepage')):
                the_field('g_homepage_text');
            else:
                $image = get_field('g_homepage_icon');
                // var_dump($image);
                if( !empty($image) ): ?>
                    <img src="<?php echo $image['sizes']['logo-image']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php 
                endif; 
            endif;
            ?>
        </a>
        <div class="gallery flexible-container">
            <?php
            if(have_rows('g_single_photo_repeater')):
                while(have_rows('g_single_photo_repeater')): the_row();
                    get_sub_field('g_photo');
                    ?>
                    <div class="onephoto"> <!-- one photo with border and h -->
                        <?php $image = get_sub_field('g_photo'); ?>
                        <img class="myImg" src="<?php the_sub_field('g_photo'); ?>">
                        <span class="span-border"></span>
                        <h6><?php the_sub_field('g_photo_name'); ?></h6>
                        <div id="myModal" class="modal">
                            <span class="close">&times;</span>
                            <img class="modal-content" id="img01">
                            <div id="caption"></div>
                        </div>
                    </div>
                    <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</div>
