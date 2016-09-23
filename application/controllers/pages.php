<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function view ($page='home')
	{
		$this->load->helper('url');

		if(! file_exists('application/views/pages/'.$page.'.php') ){
			show_404();
		}
		$this->load->view('includes/header');
		$this->load->view('pages/'.$page);
		$this->load->view('includes/bottom_bar');
		$this->load->view('includes/footer');
	}
	
}