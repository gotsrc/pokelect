<div class="well">
<h2>Customer Login</h2>
				<?=form_open('user/validate_credentials');?>
				<?=validation_errors('<p class="error">','</p>');?>
					<p><?=form_input('email_address','','placeholder="you@domain.com" id="email_address", class="form-control required"');?></p>
					<p><?=form_password('password','','id="password", class="form-control required"');?></p>
					<p><?=form_submit('submit','Login','class="btn btn-primary"');?></p>
				<?=form_close();?>				

				<h2>Register With Us</h2>
				<p>By registering an account with our store checking out can be made simpler and faster. You will also be able to track your
					orders which you have placed and have the ability to add additional shipping addresses to your account.</p>
					
				<p><?=anchor('user/register','Register Now!','class="btn btn-success"');?></p>
</div>