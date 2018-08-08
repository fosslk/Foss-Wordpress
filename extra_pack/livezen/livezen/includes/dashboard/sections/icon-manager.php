<?php wp_enqueue_script('kswr-uploadfile-script'); ?>
<div class="kswr-iconmanager-container">
	<div class="kswr-iconmanager-leftar">
		<?php Kaswara_Icon_Manager::get_font_icons_printer(Kaswara_Icon_Manager::get_font_icons()); ?>
	</div>
	
	<div class="kswr-iconmanager-rightar">
		<div class="kswr-right-back-item" style="/*background: #25282c;*/">
			<div class="kswr-right-back-item-title"><?php echo esc_html__('Upload Font Icons','kaswara'); ?>
				<div class="thatgreen kswr-back-intit-button" id="kswr-icon-uploadbtn"><?php echo esc_html__('Upload Icons','kaswara'); ?></div>
			</div>
			<div class="kswr-right-back-item-bottom">
				<div class="kswr-iconmanager-dropar" id="kswr-icon-dropfilehere">
					<div class="kswr-iconmanager-drophere"><i class="km-icon-upload5"></i></div>
				</div>
				<input type="text" id="kswr-iconmanager-uploadname"  style="background: #23282d !important;text-align: center;" class="kswr-custom-settings-input" placeholder="<?php echo esc_html__('Enter icons set name','kaswara'); ?>">
			</div>
		</div>
		<div class="kswr-custom-settings-item kswr-custom-settings-item2">		
			<div class="kswr-custom-tips-title"><?php echo esc_html__('What is Icon Manager?','kaswara'); ?></div>				
			<div class="kswr-custom-tips-help">		
				<?php echo esc_html__('Icon Manager tool will allow you to upload new set of icons that you can use in VC shortcodes. Kaswara already comes with a large set of icons so be sure that the icons you will upload are not already on the set.','kaswara'); ?> <br/><?php echo esc_html__('Note: A large set of icons can cause your page speed to be slow.','kaswara'); ?>
			</div>
		</div>
		<div class="kswr-custom-settings-item kswr-custom-settings-item2">		
			<div class="kswr-custom-tips-title"><?php echo esc_html__('How it Works ?','kaswara'); ?></div>				
			<div class="kswr-custom-tips-help">		
				<?php echo esc_html__('Create a set of icons in the ','kaswara'); ?><a href="https://icomoon.io/app/#/select" target="_blank">icomoon</a><?php echo esc_html__(' website. Click generate fonts then download the zip file. Drop the zip file above and enter the icon set unique name from your choice (makse sure no spaces on the name).','kaswara'); ?> 
			</div>
		</div>


	</div>

</div>