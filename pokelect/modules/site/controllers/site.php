<?php

class Site extends MX_Controller {
	
	function __construct()
	{
		parent::__construct();

		if($this->config->item('site_open') === FALSE)
		{
                    /* HOME IP Address: 2.29.248.99
                     * Heather's IP Address: 82.33.139.39
                     */
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

	function index()
	{
        modules::run('user/is_logged_in');
        
		$this->load->model('user/user_model','User');
        
        if($this->session->userdata('is_logged_in')) {
            $data['main_content']   =   'home';
            $data['sub_title']      =   'Home';
            
            $this->load->view('includes/template', $data);
        } else { 
            $data['main_content']   =   'home-guest';
            $data['sub_title']      =   'Home';
            
            $this->load->view('includes/template', $data);
        }
	}
	
	function about()
	{
		$data['main_content']	=	'about';
		$data['sub_title']		=	'About Us';
			
		$this->load->view('includes/template', $data);
	}
	
	function contact()
	{
		$data['main_content']	=	'contact_us';
		$data['sub_title']		=	'Contact Us';
		
		$this->load->view('includes/template', $data);
	}
	
	function suppliers()
	{
		$data['main_content']	=	'suppliers';
		$data['sub_title']		=	'Suppliers';
		
		$this->load->view('includes/template', $data);		
	}
	
	function faq()
	{
		$data['main_content']	=	'faq';
		$data['sub_title']		=	'Frequently Asked Questions';
		
		$this->load->view('includes/template', $data);		
	}
	
	function shipping()
	{
		$data['main_content']	=	'shipping';
		$data['sub_title']		=	'Shipping';
		
		$this->load->view('includes/template', $data);		
	}
	
	function members_area()
	{
		modules::run('user/is_logged_in');
		
		$this->load->model('user/user_model','User');
		$user = $this->User->get_member_details($this->uri->segment(3));

		if( !$user )
		{
			return false;
		} 
			else
		{
			$user['main_content']	=	'logged_in_area';
			$user['sub_title']		=	'Dashboard';
			$this->load->view('includes/template', $user);
		}
	}
	
	function orders()
	{
		modules::run('user/is_logged_in');
		
		$this->load->model('user/user_model','User');
		$user = $this->User->get_member_details($this->uri->segment(3));
		
		if( !$user )
		{
			return false;
		} 
			else 
		{
			$user['main_content']	=	'orders_list';
			$user['sub_title']		=	'Listing All Orders';
			$this->load->view('includes/template', $user);
		}
	}
	
	function profile()
	{
		$this->load->model('user/user_model','User');
		$user = $this->User->get_member_details($this->uri->segment(3));
		
		if( !$user )
		{
			$data['main_content']	=	'member_profile';
			$data['sub_title']		=	'Access Denied';
			$data['notice']			=	'You need to view a profile ID.';
			$this->load->view('includes/template', $data);
		} 
			else 
		{
			$user['main_content']	=	'member_profile';
			$user['sub_title']		=	'Profile';
			
			$this->load->view('includes/template', $user);
		}
	}
}
