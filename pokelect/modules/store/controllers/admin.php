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
	/* Category CRUD */
	function create_category()
	{
		$data['main_content']	=	'category_create';
		$data['sub_title']		=	'Add Category';
		
		$this->load->view('includes/template', $data);
	}
	
	function update_category()
	{
		$data['main_content']	=	'category_update';
		$data['sub_title']		=	'Update Category';
		
		$this->load->view('includes/template', $data);
	}
	
	function delete_category()
	{
		$data['main_content']	=	'category_delete';
		$data['sub_title']		=	'Delete Category';
		
		$this->load->view('includes/template', $data);
	}
	
	function read_category()
	{
		$data['main_content']	=	'category_list';
		$data['sub_title']		=	'Category List';
		
		$this->load->view('includes/template', $data);
	}
	
	/* Product CRUD */
	function create_product()
	{
		$this->load->library('form_validation');
		// field name, error message, validation rules
		$this->form_validation->set_rules('prod_name','Product Name','trim|required|htmlspecialchars|unique[products.product_name]');
		$this->form_validation->set_rules('prod_desc','Product Description','trim|required|htmlspecialchars');
		$this->form_validation->set_rules('prod_set','Set','trim|htmlspecialchars|required');
		$this->form_validation->set_rules('prod_set_no','Set Number','trim|htmlspecialchars|required');
		$this->form_validation->set_rules('prod_cost','Cost','trim|htmlspecialchars|numerical');
		$this->form_validation->set_rules('prod_img_path','Product Image','trim|htmlspecialchars');
		
		
		if($this->form_validation->run() == FALSE)
		{
			$data['main_content']	=	'product_create';
			$data['sub_title']		=	'List an Item';
			$this->load->view('includes/template', $data);
		}
		
		else
		{			
			$this->load->model('store_model','Store');
			
			if($query = $this->Store->add_product())
			{
				$data['main_content'] = 'product_add_success';
				$data['sub_title']		=	'Product Listed';
				$this->load->view('includes/template', $data);
			}
			else
			{
				$data['main_content']	=	'product_create';
				$data['sub_title']		=	'List an Item';
				$this->load->view('includes/template', $data);	
			}
		}
	}
	
	function update_product()
	{
		$data['main_content']	=	'product_update';
		$data['sub_title']		=	'Update Product';
		
		$this->load->view('includes/template', $data);
	}
	
	function delete_product()
	{
		$data['main_content']	=	'product_delete';
		$data['sub_title']		=	'Delete Category';
		
		$this->load->view('includes/template', $data);
	}
	
	function read_product()
	{
		$data['main_content']	=	'product_list';
		$data['sub_title']		=	'List Products';
		
		$this->load->view('includes/template', $data);
	}
	
	/* Orders CRUD */
	function create_order()
	{
		$data['main_content']	=	'order_create';
		$data['sub_title']		=	'Create Order';
		
		$this->load->view('includes/template', $data);		
	}
	
	function update_order()
	{
		$data['main_content']	=	'order_update';
		$data['sub_title']		=	'Update Order';
		
		$this->load->view('includes/template', $data);
	}
	
	function delete_order()
	{
		$data['main_content']	=	'order_update';
		$data['sub_title']		=	'Update Order';
		
		$this->load->view('includes/template', $data);	
	}
	
	function read_order()
	{
		$data['main_content']	=	'order_list';
		$data['sub_title']		=	'All Orders';
		
		$this->load->view('includes/template', $data);
	}
}
