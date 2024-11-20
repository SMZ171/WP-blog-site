<?php 
	$exnova_hs_cta				= get_theme_mod('hide_show_call_actions','on');
	$exnova_call_action_background_setting		= get_theme_mod('exnova_call_action_background_setting'); 
	if($exnova_hs_cta == 'on') :
?>
<section id="cta-unique" class="call-to-action-exnova three-block wow fadeInDown" style="background: url('<?php echo esc_url($exnova_call_action_background_setting); ?>') no-repeat  50% 50%/ cover #00b4ff;">
		<div class="container-fluid">			
			<div class="row text-center" >
				<?php 
					for($call =1; $call<6; $call++) 
					{
						if( get_theme_mod('call_action_page'.$call)) 
						{
							$call_query = new WP_query('page_id='.get_theme_mod('call_action_page'.$call,true));
							while( $call_query->have_posts() ) 
							{ 
								$call_query->the_post();
								$image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));
								$img_arr[] = $image;
								$id_arr[] = $post->ID;
							}    
						}
					}
				?>
				<?php if(!empty($id_arr))
				{ ?>
				<?php 
					$i=1;
					foreach($id_arr as $id)
					{ 
						$title	= get_the_title( $id ); 
						$post	= get_post($id); 
						
						$content = $post->post_content;
						$content = apply_filters('the_content', $content);
						$content = str_replace(']]>', ']]>', $content);
				?> 
				<div class="col">
					<div class="call-action-box" >
							<div class="inner" >
								<div class="call-action-icon-box" >	
										
										<?php if( get_post_meta(get_the_ID(),'icons', true ) ): ?>
										<div class="call-action-icon specia-icon-wrap specia-icon-effect-1 specia-icon-effect-1a">
											 <i class="specia-icon fa <?php echo get_post_meta( get_the_ID(),'icons', true); ?>"></i>
										</div>
										<?php
											endif;
									?>								
								</div>
								<div class="call-action-title" style="pointer-events:none"><a href="<?php echo esc_url( get_post_meta( get_the_ID(),'call_action_links', true) ); ?>" target="<?php if(get_post_meta( get_the_ID(),'call_action_links_target', true)){echo "_blank";} ?>"> <?php echo $title; ?> </a></div>
							</div>
					</div>
				</div>	
				<?php $i++; 
				}  ?>
			</div>
			<?php } wp_reset_postdata(); ?>
		</div>
	</section>
<div class="clearfix"></div>
<?php endif; ?>
