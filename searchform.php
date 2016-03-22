<form method="get" class="searchform themeform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div>
		<input type="text" class="search" name="s" onblur="if(this.value=='')this.value='<?php _e('To search type and hit enter','blogrow'); ?>';" onfocus="if(this.value=='<?php _e('To search type and hit enter','blogrow'); ?>')this.value='';" value="<?php _e('To search type and hit enter','blogrow'); ?>" />
	</div>
</form>