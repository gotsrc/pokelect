
                <b style="font-weight: bold;"><?=$first_name.' '.$last_name;?></b> &raquo;
				<?=anchor('site/members_area','Dashboard');?> |
				<?=anchor('site/profile/'.$id, 'Profile');?> | 
				<?=anchor('site/orders/'.$id, 'Orders');?> |
				<?=anchor('user/logout','Logout');?>