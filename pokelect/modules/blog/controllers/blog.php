<?php

class Blog extends MX_Controller {
    
    private function __construct 
    {
    	parent::__construct();

		if($this->config->item('site_open') === FALSE)
		{
    		if($this->session->userdata('ip_address') == '82.33.139.39')
			{
				$this->config->set_item('site_open', TRUE);
			} else {
				$this->config->set_item('site_open', FALSE);
				show_error('Site is currently down for scheduled maintence.');
			}
		return FALSE;
		}    
    }
}