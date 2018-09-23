<section class="extra-contacts"> <!-- main block -->
    <div class="container"> <!-- container max-width 1200px -->
        <div class="social-networks flex-container"> <!-- social networks info -->
            <?php
            if(have_rows('snm_social_network_navigation_repeater')):
                while(have_rows('snm_social_network_navigation_repeater')): 
                    the_row();
                    $link = get_sub_field('social_network_link');
                    if($link['target']=="_blank"){
                        $link['target']='target="_blank"';
                    }else{
                        $link['target']='';
                    }
                    ?>
                    <div class="transparent-frames flex-container">
                        <div class="frames flex-container">
                            <a href="<?php echo $link['url'] ?>" <?php echo $link['target']; ?>><img src="<?php the_sub_field('social_network_icon'); ?>"></a>
                        </div>
                    </div>
                    <?php
                endwhile;
            endif;
            ?>
        </div>
        <div class="author flex-container"> <!-- credits -->
            <h4><?php the_field('snmac_copyright'); ?></h4>
            <h4><?php 
            if(get_field('snmac_imprint')):
                the_field('snmac_imprint_text');
            else:
                $image = get_field('snmac_imprint_image');
                if( !empty($image) ): ?>
                    <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php
                endif;
            endif;
            ?></h4>
        </div>
    </div>
</section> <!-- main block closed -->