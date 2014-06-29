<?php

class User_model extends CI_Model {
        
	function validate()
	{
		$salt =		md5($this->config->item('encryption_key')); 
		
		$this->db->where('username', $this->input->post('username'));
		$this->db->where('password', sha1($this->input->post('password') . $salt));
		$query = $this->db->get('users');
		
		if($query->num_rows == 1)
		{
			return true;
		}
		
	}
	
	function create_member()
	{
		$salt = md5($this->config->item('encryption_key'));
		
		$new_member_insert_data = array(
                'username'      =>  $this->input->post('username'),
				'email_address'	=>	$this->input->post('email'),
		 		'password'		=>	sha1($this->input->post('password') . $salt),
		 		'first_name'	=>	$this->input->post('first_name'),
		 		'last_name'		=>	$this->input->post('last_name'),
			 	'popid'		=>	$this->input->post('popid'),
		 		'registered_on'	=>	date("Y-m-d H:i:s"),
		 		'ip_address'	=>	$this->input->ip_address(),
		 		'access'		=>	"0"
		 );
		
		$insert = $this->db->insert('users', $new_member_insert_data);
		return $insert;
	}
	
	function get_member_details($id=false)
	{
		if( !$id )
		{
			// Set Active Record where to the current session's username
			if( $this->session->userdata('email_address') )
			{
				$this->db->where('email_address', $this->session->userdata('email_address'));
			}
			else
			{
				// Return a non logged in person from accessing member profile dashboard
				return false;
			}
		}
		else
		{
			// get the user by id
			$this->db->where('id', $id);
		}
		// Find all records that match this query
		$query = $this->db->get('users');
		// In this case because we don't have a check set for unique username 
		// we will return the last user created with selected username.
		if($query->num_rows() > 0)
		{
			// Get the last row if there are more than one
			$row = $query->last_row();
			// Assign the row to our return array
			$data['id'] = $row->id;
			$data['first_name'] = $row->first_name;
			$data['last_name'] = $row->last_name;
			$data['access']		=	$row->access;
			// Return the user found
			return $data;
		}
		else 
		{
			// No results found
			return false;
		}
	}

}
