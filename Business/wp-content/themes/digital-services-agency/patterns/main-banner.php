<?php

/**
 * Title: Header Media
 * Slug: digital-services-agency/main-banner
 */

?>

<!-- wp:cover {"url":"<?php echo get_parent_theme_file_uri( '/assets/images/slider-image.jpg' ); ?>","id":11,"dimRatio":60,"overlayColor":"black","isUserOverlayColor":true,"focalPoint":{"x":0.51,"y":0.5},"minHeight":650,"className":"alignfull slider"} -->
<div class="wp-block-cover alignfull slider" style="min-height:650px"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-60 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-11" alt="" src="<?php echo get_parent_theme_file_uri( '/assets/images/slider-image.jpg' ); ?>" style="object-position:51% 50%" data-object-fit="cover" data-object-position="51% 50%"/><div class="wp-block-cover__inner-container"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"45px"}},"textColor":"white"} -->
<h2 class="wp-block-heading has-text-align-left has-white-color has-text-color" style="font-size:45px;font-style:normal;font-weight:700"><strong><?php esc_html_e('We','digital-services-agency'); ?></strong>'<?php esc_html_e('re Experienced Marketing','digital-services-agency'); ?><br><?php esc_html_e('Agency','digital-services-agency'); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","textColor":"white"} -->
<p class="has-text-align-left has-white-color has-text-color"><?php esc_html_e('Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.','digital-services-agency'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left","flexWrap":"nowrap","orientation":"horizontal"},"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-buttons" style="margin-top:0;margin-bottom:0"><!-- wp:button {"backgroundColor":"primary","textColor":"white","style":{"border":{"radius":"0px"}},"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-white-color has-primary-background-color has-text-color has-background wp-element-button" style="border-radius:0px"><?php esc_html_e('READ MORE','digital-services-agency'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover -->