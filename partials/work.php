<section id="WORK" class="work"> <!-- main block -->
    <div class="container"> <!-- container max-width 1200px -->
        <div class="photos flex-container"> <!-- works -->
            <div class="one-photo">
                <?php 
                $image = get_field('w_first_photo');
                if( !empty($image) ): ?>
                    <img src="<?php echo $image['sizes']['works']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php 
                endif;
                ?>
                <div class="small-overlay"></div>
            </div>
            <div class="one-photo">
                <?php 
                $image = get_field('w_second_photo');
                if( !empty($image) ): ?>
                    <img src="<?php echo $image['sizes']['works']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php 
                endif;
                ?>
                <div class="search-block-overlay">
                    <div class="search-block-text-area">
                        <h4><?php the_field('w_gallery_name'); ?></h4>
                        <h5><?php the_field('w_gallery_description'); ?></h5>
                    </div>
                </div>
            </div>
            <div class="one-photo">
                <?php 
                $image = get_field('w_third_photo');
                if( !empty($image) ): ?>
                    <img src="<?php echo $image['sizes']['works']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php 
                endif;
                ?>            
                <div class="small-overlay"></div>
            </div>
            <div class="one-photo">
                <?php 
                $image = get_field('w_forth_photo');
                if( !empty($image) ): ?>
                    <img src="<?php echo $image['sizes']['works']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php 
                endif;
                ?>
                <div class="small-overlay"></div>
            </div>
        </div>
        <div class="view-more flex-container">
            <div class="lightbox">
                <a href="<?php $link = get_field('w_view_gallery_button_link'); ?><?php echo $link['url'] ?>" <?php echo $link['target']; ?>"><span class="b-span"><?php the_field('w_view_gallery_button_text'); ?><span class="icon-arrow-right"></span></span></a>
            </div>
        </div>
    </div>
    <div class="container"> <!-- container max-width 1200px -->
        <div class="break"></div>
    </div>
</section> <!-- main block closed -->