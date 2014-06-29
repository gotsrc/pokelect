<?php

class User extends MX_Controller {
	
	function __construct()
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
	
	function login()
	{
		$data['main_content'] = 'login_form';
		$data['sub_title']		=	'Customer Login';
		$this->load->view('includes/template', $data);		
	}
	
   	function is_logged_in()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');
		if(!isset($is_logged_in) || $is_logged_in != true)
		{
			$data['main_content'] = 'error_auth_failure';
			$data['sub_title']		=	'Authorisation Failed';
            
			$this->load->view('includes/template', $data);
		}		
	}
	
	function cp()
    {
        if( $this->session->userdata('email_address') )
        {
            // load the model for this controller
            $this->load->model('user_model','User');
            // Get User Details from Database
            $user = $this->User->get_member_details();
            if( !$user )
            {
                // No user found
                return false;
            }
            else
            {
                // display our widget
                $this->load->view('user_widget', $user);
            }			
        }
        else
        {
            // There is no session so we return nothing
            return false;
        }
    }

	function validate_credentials()
	{		
		$this->load->model('user_model','User');
		$query = $this->User->validate();
		
		if($query) // if the user's credentials validated...
		{
			$data = array(
				'email_address' => $this->input->post('email_address'),
				'is_logged_in' => true
			);
			$this->session->set_userdata($data);
			redirect('site/members_area');
		}
		else // incorrect username or password
		{
			$this->login();
		}
	}	
	
	function register()
	{
		$data['main_content'] = 'register_form';
		$data['sub_title']		=	'Register Account';
		$this->load->view('includes/template', $data);
	}
	
	function create()
	{
		$this->load->library('form_validation');
		
		// field name, error message, validation rules
		$this->form_validation->set_rules('username','username','trim|required|htmlspecialchars|unique[users.username]');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email|max_length[150]|unique[users.email]');
		$this->form_validation->set_rules('first_name','First Name','trim|htmlspecialchars|required');
		$this->form_validation->set_rules('last_name','Last Name','trim|htmlspecialchars|required');
		$this->form_validation->set_rules('popid','POP ID','trim|htmlspecialchars|required|numeric');
		$this->form_validation->set_rules('password','Password','trim|required|min_length[5]|max_length[34]|htmlspecialchars');
		$this->form_validation->set_rules('password2','Password Confirmation','trim|required|matches[password]');
		
		
		if($this->form_validation->run() == FALSE)
		{
			$data['main_content']	=	'register_form';
			$data['sub_title']		=	'Register Account';
			$this->load->view('includes/template', $data);
		}
		
		else
		{			
			$this->load->model('user_model','User');
			
			if($query = $this->User->create_member())
			{
				$data['main_content'] = 'register_success';
				$data['sub_title']		=	'Registration Successful';
				$this->load->view('includes/template', $data);
			}
			else
			{
				$data['main_content']	=	'register_form';
				$data['sub_title']		=	'Register Account';
				$this->load->view('includes/template', $data);	
			}
		}
		
	}
	
	function logout()
	{
		$this->session->sess_destroy();
		
		$data['main_content'] = 'logged_out_success';
		$data['sub_title']		=	'Logged Out';
		$this->load->view('includes/template', $data);
	}
}
