<?php 

class Blog extends MX_Controller {

		private function __construct() 
		{
				parent::__construct();
				modules::run('user/is_logged_in');

				$access = $this->session->userdata('access');

				if(!$access == '1' || $access != '1')
				{
						show_error('Access Denied.');
				} else { 
						return TRUE;
				}
		}

		private function create() 
		{
			$this->load->library('form_validation');
			
			$this->form_validation->set_rules('post_title','Post Title','trim|required|htmlspecialchars|unique[pokelect_posts.post_title]');
			$this->form_validation->set_rules('post_description','Post Description','trim|required|htmlspecialchars');

			if($this->form_validation->run() == FALSE)
			{
					$data['main_content']	=	'post_create';
					$data['sub_title']		=	'Create a new blog post';
					$this->load->view('includes/template', $data);
			} else {
					$this->load->model('blog_model','Blog');

					if($query = $this->Blog->create_new_post())
					{
						$data['main_content']	=	'post_create_success';
						$data['sub_title']		=	'Post created successfully.';
						$this->load->view('includes/template', $data);
					} else {
							$data['main_cotnent']	=	'post_create';
							$data['sub_title']		=	'Create a new blog post';
							$this->load->view('includes/template', $data);
					}
			}
		}
}
