<section id="ABOUT" class="about"> <!-- main block -->
    <div class="container"> <!-- container max-width 1200px -->
        <div class="about-heading"> <!-- short about description -->
            <h3><?php the_field('ac_heading'); ?></h3>
            <p><?php the_field('ac_about_text'); ?></p>
        </div>
        <div id="ABOUT2" class="columns flex-container"> <!-- about details -->
            <?php
            if(have_rows('ac_one_service_repeater')):
                while(have_rows('ac_one_service_repeater')): the_row();
                    ?>
                    <div class="column flex-container">
                        <div class="icon"><img src="<?php the_sub_field('ac_service_icon'); ?>"></div>
                        <h4 class="name"><?php the_sub_field('ac_service_name'); ?></h4>
                        <p><?php the_sub_field('ac_service_description') ?></p> 
                    </div>
                    <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section> <!-- main block closed -->
<div class="container"> <!-- container max-width 1200px -->
    <div class="break"></div>
</div>