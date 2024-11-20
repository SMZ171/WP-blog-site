<?php if ( class_exists( 'Specia_Companion_Setup' ) ) : ?>
    <?php 
        $exnova_hide_show_client = get_theme_mod('hide_show_client', 'on'); 
        if ($exnova_hide_show_client == 'on') :
            $count_client = wp_count_posts('specia_client')->publish;
            $args = array( 'post_type' => 'specia_client', 'posts_per_page' => $count_client );  	
            $client = new WP_Query( $args ); 
            
            if ( $client->have_posts() ) : // Check if there are any posts
    ?>
    <section id="unique-client" class="client-one client-exnova">
        <div class="background-overlay">
            <div class="container">
                <div class="padding-bottom-60">
                    <div class="row client-version-one">
                        <?php while ( $client->have_posts() ) : $client->the_post(); ?>
                            <?php
                                $client_icon_class = sanitize_text_field( get_post_meta( get_the_ID(), 'client_icon_class', true ));
                            ?>
                            <div class="col">
                                <div class="client item margin-top-20 wow flipInX">
                                    <div class="client-image">
                                        <div class="client-box">
                                            <div class="client-icon"></div>
                                            <div class="client-title"><?php the_title(); ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<div class="clearfix"></div>
    <?php
	endif; 
	wp_reset_postdata(); 
	endif;
endif; ?>
