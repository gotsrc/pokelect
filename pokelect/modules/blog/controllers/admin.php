<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of admin
 *
 * @author developer
 */
class Admin extends MX_Controller {
	
	function __construct()
	{
		parent::__construct();
		modules::run('user/is_logged_in');
		
/*		$access = $this->session->userdata('access');
		
		if(!$access == '1' || $access != '1')
		{
			show_error('Access Denied.');
		} else {
			return TRUE;
		}*/
	}
	/* Product CRUD */
	function create_post()
	{
		$this->load->library('form_validation');
		// field name, error message, validation rules
		$this->form_validation->set_rules('post_title','Post Title','trim|required|htmlspecialchars|unique[pccms_posts.post_title]');
		$this->form_validation->set_rules('post_description','Post Description','trim|required|htmlspecialchars');
		
		
		if($this->form_validation->run() == FALSE)
		{
			$data['main_content']	=	'post_create';
			$data['sub_title']		=	'Add Post';
			$this->load->view('includes/template', $data);
		}
		
		else
		{			
			$this->load->model('blog_model','Blog');
			
			if($query = $this->Blog->add_post())
			{
				$data['main_content'] = 'post_add_success';
				$data['sub_title']		=	'Post Success';
				$this->load->view('includes/template', $data);
			}
			else
			{
				$data['main_content']	=	'post_create';
				$data['sub_title']		=	'Add Post';
				$this->load->view('includes/template', $data);	
			}
		}
	}
	
	function update_post()
	{
		$data['main_content']	=	'post_update';
		$data['sub_title']		=	'Edit Posts';
		
		$this->load->view('includes/template', $data);
	}
	
	function delete_post()
	{
		$data['main_content']	=	'post_delete';
		$data['sub_title']		=	'Delete Post(s)';
		
		$this->load->view('includes/template', $data);
	}
	
	function read_post()
	{
		$data['main_content']	=	'post_list';
		$data['sub_title']		=	'List Posts';
		
		$this->load->view('includes/template', $data);
	}
}
