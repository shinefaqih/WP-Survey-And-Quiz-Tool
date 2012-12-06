<?php global $blog_id; ?>
<div class="wrap">

	<?php if ( isset($successMessage) ) {?>
		<div class='updated'><?php echo $successMessage; ?></div>
				
	<?php } ?>
	<div id="icon-tools" class="icon32"></div>
	<h2>
		WP Survey And Quiz Tool - Create Survey
	</h2>
		
	<?php require WPSQT_DIR.'pages/admin/misc/navbar.php'; ?>
	
	
	<?php if ( isset($errorArray) && !empty($errorArray) ) { ?>
	<div class="error">
		<ul class="error">
			<?php foreach($errorArray as $error ){ ?>
				<li><?php echo $error; ?></li>
			<?php } ?>
		</ul>
	</div>
	<?php } ?>
	<form method="POST" action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>" id="quiz_form">
		
		<input type="hidden" name="wpsqt_nonce" value="<?php echo WPSQT_NONCE_CURRENT; ?>" />
		<?php if (isset($_REQUEST['action'])) { ?>
			<input type="hidden" name="action" value="<?php echo esc_attr($_REQUEST['action']); ?>"  />
		<?php } ?>
			
		<?php $objForm->display(); ?>
		
		<p class="submit">
			<input class="button-primary" type="submit" name="Save" value="Save Survey" id="submitbutton" />
		</p>
		
	</form>
	
	<a name="template_tokens"></a>
	<h3>Replacement Token</h3>
		
	<?php echo $objTokens->getDescriptions(); ?>	
	
</div>	
<?php require_once WPSQT_DIR.'/pages/admin/shared/image.php'; ?>