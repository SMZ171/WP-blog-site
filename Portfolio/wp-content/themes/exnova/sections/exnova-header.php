<?php 					
	$specia_hide_show_social= get_theme_mod('hide_show_social','1'); 
	$specia_hs_contact_infos= get_theme_mod('hide_show_contact_infos','1'); 
?>

<header id="header-section" class="header nav-specia" role="banner">
	<?php if ( ($specia_hide_show_social) || ($specia_hs_contact_infos) == '1') : ?>
	<div id="unique-header" class="header-top-info d-lg-block d-none wow fadeInDown">
		<div class="header-widget">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-12">
						<div id="header-top-left" class="text-lg-left text-center">
							<!-- Start Social Media Icons -->
							<?php 
								$specia_facebook_link		= get_theme_mod('facebook_link',''); 
								$specia_linkedin_link		= get_theme_mod('linkedin_link',''); 
								$specia_twitter_link		= get_theme_mod('twitter_link',''); 
								$specia_googleplus_link 	= get_theme_mod('googleplus_link',''); 
								$specia_instagram_link		= get_theme_mod('instagram_link',''); 				
							?>				
							<?php if($specia_hide_show_social == '1') { ?>
								<aside id="social_widget" class="widget widget_social_widget">
									<ul>
										<?php if($specia_facebook_link) { ?> 
											<li><a class="tool-bounce tool-bottom-left" href="<?php echo esc_url($specia_facebook_link); ?>" aria-label="fa-facebook"><i class="fa fa-facebook"></i></a></li>
										<?php } ?>
										
										<?php if($specia_linkedin_link) { ?> 
										<li><a class="tool-bounce tool-bottom-left" href="<?php echo esc_url($specia_linkedin_link); ?>" aria-label="fa-linkedin"><i class="fa fa-linkedin"></i></a></li>
										<?php } ?>
										
										<?php if($specia_twitter_link) { ?> 
										<li><a class="tool-bounce tool-bottom-left" href="<?php echo esc_url($specia_twitter_link); ?>" aria-label="fa-twitter"><i class="fa fa-twitter"></i></a></li>
										<?php } ?>
										
										<?php if($specia_googleplus_link) { ?> 
										<li><a class="tool-bounce tool-bottom-left" href="<?php echo esc_url($specia_googleplus_link); ?>" aria-label="fa-google-plus"><i class="fa fa-google-plus"></i></a></li>
										<?php } ?>
										
										<?php if($specia_instagram_link) { ?> 
										<li><a class="tool-bounce tool-bottom-left" href="<?php echo esc_url($specia_instagram_link); ?>" aria-label="fa-instagram"><i class="fa fa-instagram"></i></a></li>
										<?php } ?>
									</ul>
								</aside>
							<?php } ?>
		                	<!-- /End Social Media Icons-->
						</div>
					</div>
					<div class="col-lg-6 col-12">
						<div id="header-top-right" class="text-lg-right text-center">
							<?php 
								$specia_header_email= get_theme_mod('header_email'); 
								$specia_header_contact= get_theme_mod('header_contact_num'); 
							?>
							<?php if($specia_hs_contact_infos == '1') { ?>
								<!-- Start Contact Info -->
								<?php if($specia_header_email) { ?> 
									<div class="widget widget_info">
										<a href="mailto:<?php echo esc_html($specia_header_email); ?>">
											<i class="fa fa-envelope"></i>
											<span><?php echo esc_html($specia_header_email); ?></span>
										</a>
									</div>
								<?php } ?>
								
								<?php if($specia_header_contact) { ?> 
									<div class="widget widget_info">
										<a href="tel:<?php echo esc_html($specia_header_contact); ?>">
											<i class="fa fa-phone"></i>
											<span><?php echo esc_html($specia_header_contact); ?></span>
										</a>
									</div>
								<?php } ?>
								<!-- /End Contact Info -->
							<?php } ?>							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php endif; ?>