<?=modules::run('user/cp');?>
        
			<div class="container well">
				<h3>List an Item</h3>
                <?=validation_errors('<p class="error">','</p>');?>
				<?=form_open('blog/admin/create_post');?>
				<fieldset class="product_form">
				<p>
					<?=form_label('Product Name: ','prod_name','id="prod_name" class="required"');?>
					<?=form_input('prod_name','','placeholder="Product Name", id="prod_name" class="required"');?>
				<p>
					<?=form_label('Description: ','prod_desc', 'id="prod_desc"');?>
					<?php
					$data_textarea = array(
						'name'	=>	'prod_desc',
						'id'	=>	'prod_desc',
						'placeholder'	=>	'Insert description here...',
						'rows'	=>	'10',
						'cols'	=>	'50'
					);?>
					<?=form_textarea($data_textarea);?>
				</p>

				<p>
					<?=form_label('Set: ','prod_set','id="prod_set"');?>
					<?=form_input('prod_set','','placeholder="Set Number", id="prod_set" class="required"');?>
				</p>

				<p>
					<?=form_label('Card Number: ','prod_set_no','id="prod_set_no"');?>
					<?=form_input('prod_set_no','','placeholder="1/125", id="prod_set_no" class="required"');?>
				</p>
				<p>
					<?=form_label('Cost &pound;: ','prod_cost','id="prod_cost"');?>
					<?=form_input('prod_cost','','placeholder="0.00", id="prod_cost"');?>
				</p>
				<p>
					<?=form_label('Image Path: ','prod_img_path','id="prod_img_path"');?>
					<?=form_input('prod_img_path','','placeholder="res/img/sets/no-card.png" id="prod_img_path"');?>
				</p>
				</fieldset>
				<?=form_submit('submit','Add Product'); ?>
				<?=form_close();?>
</div>