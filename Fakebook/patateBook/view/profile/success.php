<?php $user = $context->user ?>
<div class="row">
	<div class="col-xs-12 current_user_profile">
		<?php $user_class = 'thumbnail'?>
		<?php include $nameApp.'/view/shared/_user.php'; ?>
		<?php $user_class = NULL?>
	</div>
	<div class="col-xs-12 wall">
		<?php include $nameApp.'/view/shared/_wall.php'; ?>		
	</div>
</div>