<?php

class WS_Flexible_Content_Helper{


	public static function fc_background_text( $background_type, $heading, $text_alignment, $section_text_color_string, $subheading, $link_url, $link_text ){ ?>
		<?php if( $heading ): ?>
			<div class="fc-background-heading <?php if( $background_type !== 'multi-column' ): echo $text_alignment; endif; ?>">
				<h2 class="<?php echo $text_alignment; ?>" <?php echo $section_text_color_string; ?>><?php echo $heading; ?></h2>
			</div>
		<?php endif; ?>
		<?php if( $heading ): ?>
			<div class="fc-background-subheading <?php echo $text_alignment; ?>">
				<h3 class="<?php echo $text_alignment; ?>" <?php echo $section_text_color_string; ?>><?php echo $subheading; ?></h3>
			</div>
		<?php endif; ?>
		<?php if( $link_url ): ?>
			<div class="fc-background-link fc-button <?php echo $text_alignment; ?>">
				<a href="<?php echo $link_url; ?>" <?php echo $section_text_color_string; ?>><?php echo $link_text; ?></a>
			</div>
		<?php endif; ?>
	<?php } 


	public static function fc_background_image( $background_type, $background_image, $section_height, $background_image_masking ){ ?>
		<?php if( $background_image && $section_height !== 'natural' ): ?>
			<div class="block-background <?php echo $background_image_masking; ?>" style="background-image: url('<?php echo $background_image; ?>');">
			</div>
			<?php elseif( $background_image && $section_height === 'natural' ): ?>
				<div class="fc-background-natural-image-container <?php echo $background_image_masking; ?>">
					<img src="<?php echo $background_image; ?>">
				</div>
			<?php endif; ?>		
		<?php }
	}

	
	?>