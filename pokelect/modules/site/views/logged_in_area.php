    <div class="breadcrumb">
        <a href="<?=site_url();?>">Home</a> / <a href="<?=site_url();?>site/profile">User</a> / <strong><?=$first_name;?>'s Profile</strong>
        </div>
                
    <?=modules::run('user/cp');?>
	<div class="well">
        <h2>Welcome Back, <?=$first_name;?>!</h2>
        <p>This section represents the area that only logged in members can access.</p>
    </div>