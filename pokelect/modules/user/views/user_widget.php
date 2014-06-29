	<section class="band member_area">
		<div class="container">
			<?=$this->load->view('includes/user_profile_menu');?>
		
			<?php
			/* Load up the admin menus! with given access*/
			if($access == '1')
			{
				$this->load->view('includes/super_admin_menu');	
			} else {
				if($access == '2')
				{
					echo '<p style="border: 1px solid red; color: #fff; background-color: #c74d4d; padding: 10px 15px; text-align: center; font-weight: bold; text-transform: uppercase; border-radius: 5px; ">the bar below will disappear if the user has not got the
				permission to view it. (So will this bar)</p>';
					$this->load->view('includes/admin_menu');
				} else {
					if($access == '0')
					{ 
						return FALSE;
					}
				}
			}
			?>
		</div>
	</section>