<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of store_model
 *
 * @author Heather
 */
class Store_model extends CI_Model {
	
	
	/**
	 * Creation, update and deletion of categories.
	 */
	function create_category()
	{
		$new_cat_insert_data = array(
			'name'			=>	$this->input->post('cat_name'),
			'description'	=>	$this->input->post('cat_desc'),
			'type'			=>	$this->input->post('cat_type'),
			'image'			=>	$this->input->post('cat_img')
		);
		
		$insert = $this->db->insert('product_category', $new_cat_insert_data);
		return $insert;
	}
	
	function get_category_details($cat_id=false)
	{
		/* Get the details from category */
	}
	
	function delete_category($cat_id=false)
	{
		/* Delete the Category */
	}
	
	function update_category($cat_id=false)
	{
		/* Edit the category */
	}
	
	/*
	 * Creation, update and deletion of Products
	 */
	function add_product()
	{
		$new_prod_insert_data = array(
			'product_name'			=>	$this->input->post('prod_name'),
			'product_description'	=>	$this->input->post('prod_desc'),
			'product_set'	=>	$this->input->post('prod_set'),
			'product_set_number'			=>	$this->input->post('prod_set_no'),
			'product_cost'			=>	$this->input->post('prod_cost'),
			'product_image'		=>	$this->input->post('prod_img_path'),
            'date_added'        =>  date('Y-m-d H:i:s')
		);
		
		$insert = $this->db->insert('products', $new_prod_insert_data);
		return $insert;
	}
	
	function get_product_details($prod_id=false)
	{
		/* Get product details */
	}
	
	function delete_product($prod_id=false)
	{
		/* Delete the product */
	}
	
	function update_product($prod_id=false)
	{
		/* Edit the product */
	}
	
	/*
	 * -----------------------------------------------------------------
	 * ORDERS
	 * -----------------------------------------------------------------
	 * Creation, update and deletion of orders
	 */
	
	function create_order()
	{
		/* Create the order */
	}
	
	function get_order_details($ord_id=false)
	{
		/* List order details */
	}
	
	function delete_order($ord_id=false)
	{
		/* Delete the Order */
	}
	
	function update_order($ord_id=false)
	{
		/* Update the order */
	}
	
	function set_order_status($ord_id=false)
	{
		/* Set the status of the order */
	}
}
