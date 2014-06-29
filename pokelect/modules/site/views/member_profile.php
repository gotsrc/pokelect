<?=modules::run('user/cp');?>
<div class="well">
    <?php if( isset($notice) ):?>
	<p><?=$notice;?></p>
	<?php else: ?>
	<h2><?=$first_name;?>'s Profile</h2>
	<p>AWESOME PROFILE!!!!</p>
	<?php endif; ?>
</div>
