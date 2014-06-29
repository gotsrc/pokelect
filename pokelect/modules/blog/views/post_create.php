<?=modules::run('user/cp');?>
        
			<div class="container well">
				<h3>Add Some News</h3>
                <?=validation_errors('<p class="error">','</p>');?>
				<?=form_open('blog/admin/create_post');?>
				<fieldset class="post_form">
				<p>
					<?=form_label('Post Title: ','post_title','id="post_title" class="required"');?>
					<?=form_input('post_title','','placeholder="Product Name", id="post_title" class="required"');?>
				<p>
					<?=form_label('Description: ','post_description', 'id="post_description"');?>
					<?php
					$data_textarea = array(
						'name'	=>	'post_description',
						'id'	=>	'post_description',
						'placeholder'	=>	'Insert description here...',
						'rows'	=>	'10',
						'cols'	=>	'30'
					);?>
					<?=form_textarea($data_textarea);?>
				</p>
                <p>
                    <?=form_label('Categories: ','post_category_id','id="post_category_id" class="required"');?>
                    <?=form_input('post_category_id','','placeholder="Category ID\'s" id="post_category_id" class="required"');?>
                </p>
                <p>
                    <?=form_label('Post Slug: ','post_slug','id="post_slug" class="required"');?>
                    <?=form_input('post_slug','','placeholder="some-link-like-this" id="post_slug"');?>
                </p>
				</fieldset>
				<?=form_submit('submit','Add News'); ?>
				<?=form_close();?>
</div>
