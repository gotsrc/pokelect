<?php

class Store extends MX_Controller {
	
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$data['main_content']	=	'browse';
		$data['sub_title']		=	'Browse Store';
			
		$this->load->view('includes/template', $data);
	}

	function browse()
	{
		$data['main_content']	=	'browse';
		$data['sub_title']		=	'Browse Store';
		
		$this->load->view('includes/template', $data);
	}
	
	function basket()
	{
		$data['main_content']	=	'basket';
		$data['sub_title']		=	'Your Basket';
		
		$this->load->view('includes/template', $data);
	}
	
    function category()
    {
        $data['main_content']	=	'category';
		$data['sub_title']		=	'Categories';
		
		$this->load->view('includes/template', $data);
    }
    
	function checkout()
	{
		$data['main_content']	=	'checkout';
		$data['sub_title']		=	'Checkout';
		
		$this->load->view('includes/template', $data);
	}
}