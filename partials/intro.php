<header id="HOME" class="header" style="background-image: url(<?php echo get_field('ic_background_image')['sizes']['large']; ?>);"><!-- main block -->
    <div class="overlay"> <!-- header overlay -->
        <div class="container"> <!-- container max-width 1200px -->
            <div class="meniu"> <!-- navigation -->
                <div class="main-nav flex-container">
                    <a href="#HOME" class="logo"><?php 
                        if(get_field('in_logo_type')):
                            the_field('in_logo_text');
                        else:
                            $image = get_field('in_logo_image');
                            // dump($image);
                            if( !empty($image) ): ?>
                                <img src="<?php echo $image['sizes']['logo-image']; ?>" alt="<?php echo $image['alt']; ?>" />
                                <?php
                            endif;
                        endif;
                        ?>
                    </a>
                    <nav class="main-nav flex-container">
                        <div class="burger">
                            <?php
                            if(get_field('in_responsive_menu')):
                            the_field('in_responsive_menu_text');
                        else:
                            $image = get_field('in_responsive_menu_icon');
                            // dump($image);
                            if( !empty($image) ): ?>
                                <img src="<?php echo $image['sizes']['logo-image']; ?>" alt="<?php echo $image['alt']; ?>" />
                                <?php
                            endif;
                        endif;
                        ?>
                        </div>
                        <?php 
                        $args = ["menu_class" => "nav flex-container", 
                            "container" => false,
                            "theme_location" => 'primary-navigation'
                        ];
                        wp_nav_menu($args);
                        ?>
                    </nav>
                </div> 
            </div> <!-- navigation closed -->
            <div class="intro"> <!-- introduction -->
                <div class="flex-container">
                    <h1><?php the_field('ic_heading_one'); ?></h1>
                    <h2><?php the_field('ic_heading_two'); ?></h2>
                    <div class="lightbox">
                        <a href="<?php $link = get_field('ic_button_link'); ?><?php echo $link['url'] ?>" <?php echo $link['target']; ?>><span class="a-span"><?php the_field('ic_button_text'); ?></span></a>
                    </div>
                </div>
            </div> 
        </div>
    </div> 
</header>  <!-- main block closed -->
