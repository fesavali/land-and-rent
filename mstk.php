<?php if (count($errors) > 0) : ?>
<?php 
ini_set('display_errors',1);
error_reporting(E_ALL);?>
	<div class="error">
		<?php foreach ($errors as $error) : ?>
			<p><?php print_r($error); ?></p>
		<?php endforeach ?>
	</div>
<?php endif ?>	