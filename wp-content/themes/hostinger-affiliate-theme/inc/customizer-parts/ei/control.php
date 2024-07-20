<?php

final class Orbital_Export_Import_Control extends WP_Customize_Control
{

	protected function render_content()
	{
		?>
		<span class="customize-control-title">
			<?php _e('Export', 'hostinger-affiliate-theme'); ?>
		</span>
		<span class="description customize-control-description">
			<?php _e('Click the button below to export the customization settings for this theme.', 'hostinger-affiliate-theme'); ?>
		</span>
		<input type="button" class="button" name="orbital-ei-export-button" value="<?php esc_attr_e('Export', 'hostinger-affiliate-theme'); ?>" />

		<hr class="orbital-ei-hr" />

		<span class="customize-control-title">
			<?php _e('Import', 'hostinger-affiliate-theme'); ?>
		</span>
		<span class="description customize-control-description">
			<?php _e('Upload a file to import customization settings for this theme.', 'hostinger-affiliate-theme'); ?>
		</span>
		<div class="orbital-ei-import-controls">
			<input type="file" name="orbital-ei-import-file" class="orbital-ei-import-file" />
			<label class="orbital-ei-import-images">
				<input type="checkbox" name="orbital-ei-import-images" value="1" /> <?php _e('Download and import image files?', 'hostinger-affiliate-theme'); ?>
			</label>
			<?php wp_nonce_field('orbital-ei-importing', 'orbital-ei-import'); ?>
		</div>
		<div class="orbital-ei-uploading"><?php _e('Uploading...', 'hostinger-affiliate-theme'); ?></div>
		<input type="button" class="button" name="orbital-ei-import-button" value="<?php esc_attr_e('Import', 'hostinger-affiliate-theme'); ?>" />
		<?php
	}
}