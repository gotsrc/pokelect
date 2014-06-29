                <div class="breadcrumb">
                    <a href="<?=site_url();?>">Home</a> /
                    <strong>Register with Pokélect</strong>
                </div>
                
                <div class="well">		
                    <?=validation_errors('<div class="sixteen columns"><p class="error">','</p></div>');?>
                    <h3>Personal Information</h3>
				        <?=form_open('user/create');?>
				        <fieldset class="register_form">
				            <p>
					           <?=form_label('First Name: ','first_name', 'id="first_name"');?> 
					           <?=form_input('first_name','','placeholder="First Name", id="first_name" class="form-control required"');?>
				            </p>    
				
				            <p>
					           <?=form_label('Last Name: ','last_name','id="last_name"');?>
					           <?=form_input('last_name','','placeholder="Last Name", id="last_name" class="form-control required"');?>
				            </p>
				
				            <p>					
					           <?=form_label('E-mail: ','email','id="email"');?>
					           <?=form_input('email','','placeholder="you@domain.com", id="email" class="form-control required"');?>
				            </p>
				            <p>
					           <?=form_label('POP ID: ','popid','id="popid" class="pull-left"');?>
					           <?=form_input('popid','','placeholder="100000", id="popid" class="form-control"');?>
				            </p>
				        </fieldset>
				
				<h3>Account Information</h3>
				    <fieldset class="register_form">
                        <p>
                            <?=form_label('Desired Username:','username','id=username', 'placeholder="Username"');?>
                            <?=form_input('username','','placeholder="Username", id="username" class="form-control required"');?>
                        </p>
				        <p>
                            <?=form_label('Password: ','password','id="password", placeholder="Password"');?>
                            <?=form_password('password','','placeholder="Password", id="password" class="form-control required"');?>
                        </p>
				        <p>
                            <?=form_label('Confirm Password: ','password2','id="password2", placeholder="Confirm Password"');?>
				            <?=form_password('password2','','placeholder="Confirm Password" id="password2" class="form-control required"');?>
                        </p>
				    </fieldset>
                    
				<?=form_submit('submit','Register my account','class="btn btn-success"'); ?>
				<?=form_close();?>
</div>