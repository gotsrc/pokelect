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
class Blog_model extends CI_Model {
	
	
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
		
		$insert = $this->db->insert('post_category', $new_cat_insert_data);
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
	function add_post()
	{
		$new_post_insert_data = array(
			'post_title'			=>	$this->input->post('post_title'),
			'post_description'	=>	$this->input->post('post_description'),
            'post_author'       =>  $this->session->userdata('id'),
            'post_time_posted'        =>  date('Y-m-d H:i:s'),
            'post_category_id'      =>  $this->input->post('post_category_id'),
            'post_slug'         =>  $this->input->post('post_slug')
		);
		
		$insert = $this->db->insert('posts', $new_post_insert_data);
		return $insert;
	}
	
	function get_post_details($p_id=false)
	{
		/* Get post details */
	}
	
	function delete_post($post_id=false)
	{
		/* Delete the post */
	}
	
	function update_post($post_id=false)
	{
		/* Edit the post */
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
